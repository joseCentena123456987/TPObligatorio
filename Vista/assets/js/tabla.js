var table = '';

document.addEventListener('DOMContentLoaded', function () {
    var tabledata = [];
    table = new Tabulator("#example-table", {
        height: "50%", // set height of table (in CSS or here), this enables the Virtual DOM and improves render speed dramatically (can be any valid css height value)
        data: tabledata, //assign data to table
        layout: "fitDataFill", //fit columns to width of table (optional)
        responsiveLayout: "collapse",
        autoResize: true,
        columns: [ //Define Table Columns
            {formatter:"responsiveCollapse", width:20, minWidth:10, hozAlign:"center", resizable:false, headerSort:false},
            { title: "Posición", field: "posicion", hozAlign:"center", width:180, responsive: 0 },
            { title: "Rango", field: "rango", hozAlign:"center", width:180, responsive: 1 },
            { title: "Nombre", field: "nombre", hozAlign:"center", width:180, responsive: 0 },
            { title: "País", field: "pais", hozAlign:"center", width:180, responsive: 1 },
            { title: "Puntos", field: "puntos", hozAlign:"center", width:180, responsive: 0 } 
        ],
        pagination: "local",
        paginationSize: 5,
        paginationSizeSelector: [5, 10, 100, true],
        movableColumns: true,
        paginationButtonCount: 3,
        downloadConfig: {
            columnHeaders: true, //do not include column headers in downloaded table
            columnGroups: false, //do not include column groups in column headers for downloaded table
            rowGroups: false, //do not include row groups in downloaded table
            columnCalcs: false, //do not include column calcs in downloaded table
            dataTree: true, //do not include data tree in downloaded table
        },
        locale: 'es-ar',
        langs: {
            "es-ar": {
                "columns": {
                    "nombre": "Nombre",
                    "posicion": "Posición",
                    "rango": "Rango",
                    "pais": "País",
                    "puntos": "Puntos" //replace the title of column name with the value "Name"
                },
                "data": {
                    "loading": "Cargando datos", //data loader text
                    "error": "Error", //data error text
                },
                "groups": { //copy for the auto generated item count in group header
                    "item": "item", //the singular  for item
                    "items": "items", //the plural for items
                },
                "pagination": {
                    "page_size": "", //label for the page size select element
                    "page_title": "", //tooltip text for the numeric page button, appears in front of the page number (eg. "Show Page" will result in a tool tip of "Show Page 1" on the page 1 button)
                    "first": "<<", //text for the first page button
                    "first_title": "<<", //tooltip text for the first page button
                    "last": ">>",
                    "last_title": ">>", //tooltip text for the last page button
                    "prev": "<",
                    "prev_title": "<",
                    "next": ">",
                    "next_title": ">",
                    "all": "Todos",
                    "counter": {
                        "showing": "Viendo",
                        "of": "de",
                        "rows": "",
                        "pages": "páginas",
                    }
                }
            }
        },
    });

    //trigger download of data.csv file
    document.getElementById("download-csv").addEventListener("click", function () {
        table.download("csv", "data.csv");
    });


    //trigger download of data.xlsx file
    document.getElementById("download-xlsx").addEventListener("click", function () {
        table.download("xlsx", "data.xlsx", { sheetName: "Reporte" });
    });

    //trigger download of data.pdf file
    document.getElementById("download-pdf").addEventListener("click", function () {
        table.download("pdf", "data.pdf", {
            orientation: "portrait", //set page orientation to portrait
            title: "Reporte", //add title to report
        });
    });

    table.on("rowClick", function(e, row){
        cargarOtroGanador(row.getData());
    });

})

function cargar_tabla(datos_tabla) {
    table.setData(datos_tabla);
}