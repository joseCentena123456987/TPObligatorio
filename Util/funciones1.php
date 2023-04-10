<?php 

function data_submitted() {
    $_AAux= array();
    if (!empty($_POST))  {
        if (count($_POST)){
            foreach ($_POST as $indice => $valor) {
                if ($valor=="")
                    $_AAux[$indice] = 'null';
                    else  
                    $_AAux[$indice] =  $valor;
            }
        
        }

        //$_AAux =$_POST;
       // array_push($_AAux,$_POST);
    }
    if(!empty($_GET)) {
        if (count($_GET)){
            foreach ($_GET as $indice => $valor) {
                if ($valor=="")
                    $_AAux[$indice] = 'null';
                    else  
                    $_AAux[$indice] =  $valor;
            }
               // $_AAux =$_GET;
              //  array_push($_AAux,$_GET);
            }
        }
       /* if (count($_AAux)){
            foreach ($_AAux as $indice => $valor) {
                if ($valor=="")
                    $_AAux[$indice] = 'null' ;
            }
        }*/
        return $_AAux;
        
}

function verEstructura($e){
    echo "<pre>";
    print_r($e);
    echo "</pre>"; 
}

spl_autoload_register(function($class_name){
    //echo "class ".$class_name ;
    $directorys = array(
         $GLOBALS['ROOT'].'Modelo/',
         $GLOBALS['ROOT'].'Modelo/conector/',
         $GLOBALS['ROOT'].'Control/',
        //$_SESSION['ROOT'].'Modelo/',
        //$_SESSION['ROOT'].'Modelo/conector/',
        //$_SESSION['ROOT'].'Control/',
        //$GLOBALS['ROOT'].'util/class/',
    );
    //print_object($directorys) ;
    foreach($directorys as $directory){
        if(file_exists($directory.$class_name . '.php')){
            // echo "se incluyo".$directory.$class_name . '.php';
            require_once($directory.$class_name . '.php');
            return;
        }
    }
})

?>
