<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>BOOTSTRAP</title>
  
  <!-- Archivos CSS del proveedor -->
  <!-- Librerias CSS -->
  <link rel="stylesheet" href="../../assets/sass/custom.css">

  <!-- Archivo JS -->
  <script src="../../assets/js/datos.js"></script>
  <script src="../../assets/js/tabla.js"></script>
  <script src="../../assets/js/index.js"></script>

  
  <!-- =======================================================
  * Nombre de la plantilla:
  * URL de la plantilla: 
  ======================================================== -->

</head>

<body>

    <!-- ======= Header ======= -->
    <header data-bs-theme="dark">
	    <!-- Navbar -->
	    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	        <div class="container-fluid">
			    <a class="navbar-brand" href="#">POOMSAES DE TAEKWONDO</a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
			    </button>
            </div>
        </nav><!-- Fin Navbar -->
    </header> <!-- Fin Header -->

    <main class="container">
        <!-- INICIO ENCABEZADO -->
        <div class="row text-center">
            <div class="col-lg-12 m-4">
                <h1 class="display-3">Poomsae Reconocido Individual Elite</h1>
            </div>
        </div>
        <!-- FIN ENCABEZADO -->
        
        <!-- Inicio de carousel -->
        <div class="container">
        <div class="row">
            <div class="col-ms-12">
                <div class="slider ml-lg-5 ml-md-5 mt-5 py-lg-5">

                    <div class="row">

                        <div class="col-md-4">
                            <div class="imgContainer ml-lg-n5 mt-lg-0 mt-md-0 ml-md-n5 mt-n5">
                                <div class="image">
                                    <img src="../../assets/img/tae/infantil-A.png" />
                                </div>
                                <div class="image">
                                    <img src="../../assets/img/tae/infantil-B.png" />
                                </div>
                                <div class="image">
                                    <img src="../../assets/img/tae/cadete.png" />
                                </div>
                                <div class="image">
                                    <img src="../../assets/img/tae/juveniles.png" />
                                </div>
                                <div class="image">
                                    <img src="../../assets/img/tae/ADULTO-1.png" />
                                </div>
                                <div class="image">
                                    <img src="../../assets/img/tae/ADULTO-2.png" />
                                </div>
                                <div class="image">
                                    <img src="../../assets/img/tae/SENIOR-1.png" />
                                </div>
                                <div class="image">
                                    <img src="../../assets/img/tae/SENIOR-2.png" />
                                </div>
                                <div class="image">
                                    <img src="../../assets/img/tae/MASTER-1.png" />
                                </div>
                                <div class="image">
                                    <img src="../../assets/img/tae/MASTER-2.png" />
                                </div>
                                <div class="image">
                                    <img src="../../assets/img/tae/GOYANG.png" />
                                </div>
                                <div class="image">
                                    <img src="../../assets/img/tae/DELEGACION.png" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <!-- slider -->

                            <div id="myCarousel" class="carousel slide carousel-fade pr-lg-5 py-lg-0 py-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="content">
                                            <div class="date">
                                                10 ABRIL 2023
                                            </div>
                                            <div class="title">
                                                TAEKWONDO POOMSAE ADULTO A
                                            </div>
                                            <div class="desc">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Error itaque, libero dignissimos nihil aliquam
                                                eveniet tenetur cupiditate consectetur quod modi
                                                repellendus veniam, repellat iusto fugiat temporibus
                                                officia facere nulla nam.
                                            </div>
                                            <div class="d-flex justify-content-center justify-content-lg-start">
                                                <a onclick="cargar(1)" class="btn readMoreBtn" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                    aria-expanded="false" aria-controls="collapseExample"> Infantiles_A
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="content">
                                            <div class="date">
                                                10 ABRIL 2023
                                            </div>
                                            <div class="title">
                                                TAEKWONDO POOMSAE ADULTO B
                                            </div>
                                            <div class="desc">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Error itaque, libero dignissimos nihil aliquam
                                                eveniet tenetur cupiditate consectetur quod modi
                                                repellendus veniam, repellat iusto fugiat temporibus
                                                officia facere nulla nam.
                                            </div>
                                            <div class="d-flex justify-content-center justify-content-lg-start">
                                                <a onclick="cargar(2)" class="btn readMoreBtn" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                    aria-expanded="false" aria-controls="collapseExample"> Infantiles_B
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="content">
                                            <div class="date">
                                                10 ABRIL 2023
                                            </div>
                                            <div class="title">
                                                TAEKWONDO POOMSAE CADATE
                                            </div>
                                            <div class="desc">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Error itaque, libero dignissimos nihil aliquam
                                                eveniet tenetur cupiditate consectetur quod modi
                                                repellendus veniam, repellat iusto fugiat temporibus
                                                officia facere nulla nam.
                                            </div>
                                            <div class="d-flex justify-content-center justify-content-lg-start">
                                                <a onclick="cargar(3)" class="btn readMoreBtn" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                    aria-expanded="false" aria-controls="collapseExample"> Cadetes
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="content">
                                            <div class="date">
                                                10 ABRIL 2023
                                            </div>
                                            <div class="title">
                                                TAEKWONDO POOMSAE JUVENILES
                                            </div>
                                            <div class="desc">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Error itaque, libero dignissimos nihil aliquam
                                                eveniet tenetur cupiditate consectetur quod modi
                                                repellendus veniam, repellat iusto fugiat temporibus
                                                officia facere nulla nam.
                                            </div>
                                            <div class="d-flex justify-content-center justify-content-lg-start">
                                                <a onclick="cargar(4)" class="btn readMoreBtn" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                    aria-expanded="false" aria-controls="collapseExample"> Juveniles
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="content">
                                            <div class="date">
                                                10 ABRIL 2023
                                            </div>
                                            <div class="title">
                                                TAEKWONDO POOMSAE ADULTO 1
                                            </div>
                                            <div class="desc">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Error itaque, libero dignissimos nihil aliquam
                                                eveniet tenetur cupiditate consectetur quod modi
                                                repellendus veniam, repellat iusto fugiat temporibus
                                                officia facere nulla nam.
                                            </div>
                                            <div class="d-flex justify-content-center justify-content-lg-start">
                                                <a onclick="cargar(5)" class="btn readMoreBtn" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                    aria-expanded="false" aria-controls="collapseExample"> Adultos 1
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="content">
                                            <div class="date">
                                                10 ABRIL 2023
                                            </div>
                                            <div class="title">
                                                TAEKWONDO POOMSAE ADULTO 2
                                            </div>
                                            <div class="desc">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Error itaque, libero dignissimos nihil aliquam
                                                eveniet tenetur cupiditate consectetur quod modi
                                                repellendus veniam, repellat iusto fugiat temporibus
                                                officia facere nulla nam.
                                            </div>
                                            <div class="d-flex justify-content-center justify-content-lg-start">
                                                <a onclick="cargar(6)" class="btn readMoreBtn" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                    aria-expanded="false" aria-controls="collapseExample"> Adultos 2
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="content">
                                            <div class="date">
                                                10 ABRIL 2023
                                            </div>
                                            <div class="title">
                                                TAEKWONDO POOMSAE SENIOR 1
                                            </div>
                                            <div class="desc">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Error itaque, libero dignissimos nihil aliquam
                                                eveniet tenetur cupiditate consectetur quod modi
                                                repellendus veniam, repellat iusto fugiat temporibus
                                                officia facere nulla nam.
                                            </div>
                                            <div class="d-flex justify-content-center justify-content-lg-start">
                                                <a onclick="cargar(7)" class="btn readMoreBtn" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                    aria-expanded="false" aria-controls="collapseExample"> Senior 1
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="content">
                                            <div class="date">
                                                10 ABRIL 2023
                                            </div>
                                            <div class="title">
                                                TAEKWONDO POOMSAE SENIOR 2
                                            </div>
                                            <div class="desc">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Error itaque, libero dignissimos nihil aliquam
                                                eveniet tenetur cupiditate consectetur quod modi
                                                repellendus veniam, repellat iusto fugiat temporibus
                                                officia facere nulla nam.
                                            </div>
                                            <div class="d-flex justify-content-center justify-content-lg-start">
                                                <a onclick="cargar(8)" class="btn readMoreBtn" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                    aria-expanded="false" aria-controls="collapseExample"> Senior 2
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="content">
                                            <div class="date">
                                                10 ABRIL 2023
                                            </div>
                                            <div class="title">
                                                TAEKWONDO POOMSAE MASTER 1
                                            </div>
                                            <div class="desc">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Error itaque, libero dignissimos nihil aliquam
                                                eveniet tenetur cupiditate consectetur quod modi
                                                repellendus veniam, repellat iusto fugiat temporibus
                                                officia facere nulla nam.
                                            </div>
                                            <div class="d-flex justify-content-center justify-content-lg-start">
                                                <a onclick="cargar(9)" class="btn readMoreBtn" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                    aria-expanded="false" aria-controls="collapseExample"> Master 1
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="content">
                                            <div class="date">
                                                10 ABRIL 2023
                                            </div>
                                            <div class="title">
                                                TAEKWONDO POOMSAE MASTER 2
                                            </div>
                                            <div class="desc">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Error itaque, libero dignissimos nihil aliquam
                                                eveniet tenetur cupiditate consectetur quod modi
                                                repellendus veniam, repellat iusto fugiat temporibus
                                                officia facere nulla nam.
                                            </div>
                                            <div class="d-flex justify-content-center justify-content-lg-start">
                                                <a onclick="cargar(10)" class="btn readMoreBtn" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                    aria-expanded="false" aria-controls="collapseExample"> Master 2
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="content">
                                            <div class="date">
                                                10 ABRIL 2023
                                            </div>
                                            <div class="title">
                                                TAEKWONDO POOMSAE GONYANG
                                            </div>
                                            <div class="desc">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Error itaque, libero dignissimos nihil aliquam
                                                eveniet tenetur cupiditate consectetur quod modi
                                                repellendus veniam, repellat iusto fugiat temporibus
                                                officia facere nulla nam.
                                            </div>
                                            <div class="d-flex justify-content-center justify-content-lg-start">
                                                <a onclick="cargar(11)" class="btn readMoreBtn" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                    aria-expanded="false" aria-controls="collapseExample"> Goyang 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="content">
                                            <div class="date">
                                                10 ABRIL 2023
                                            </div>
                                            <div class="title">
                                                TAEKWONDO POOMSAE DELEGACIONES
                                            </div>
                                            <div class="desc">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Error itaque, libero dignissimos nihil aliquam
                                                eveniet tenetur cupiditate consectetur quod modi
                                                repellendus veniam, repellat iusto fugiat temporibus
                                                officia facere nulla nam.
                                            </div>
                                            <div class="d-flex justify-content-center justify-content-lg-start">
                                                <a onclick="cargar(12)" class="btn readMoreBtn" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                    aria-expanded="false" aria-controls="collapseExample"> Delegaciones
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- indicators -->
                                <ol class="carousel-indicators indicators">
                                    <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                                    <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                                    <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                                    <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
                                    <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="4"></li>
                                    <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="5"></li>
                                    <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="6"></li>
                                    <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="7"></li>
                                    <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="8"></li>
                                    <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="9"></li>
                                    <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="10"></li>
                                    <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="11"></li>
                                </ol>
                                <!-- indicators -->

                            </div>

                            <!-- slider -->
                        </div>

                    </div>

                </div>
            </div>
        </div>
        </div>
        <!-- Fin de carousel -->

       
        <!-- Inicio de Card -->
      <div class="container-fluid d-flex align-items-center justify-content-center">

       <div class="row justify-content-center mt-3 collapse" id="collapseExample">
            <div class="col-12 col-lg-9">

                <div class="row">
                    <div class=" col-12 col-lg-8 p-2">
                        <article class="card h-100 bg-success text-white">
                            <div class="card-body" id="imgCuadradoDos">
                                <div class="d-flex mb-3">
                                    <img class="img-fluid" src="../../assets/img/tae/infantil-A.png" alt="">
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class=" col-12 col-lg-4 p-2">
                        <article class="card h-100 bg-primary text-white">
                            <div class="card-body mb-3" id="cuadradoUno">
                                <h1 class="text-center"></h1>
                                <h5 class="text-center"></h5>    
                                <div>
                                    <p class="h-6"></p>
                                    <p class="fs-6"></p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class=" col-12 col-lg-4 p-2">
                        <article class="card h-100 bg-secondary">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <img src="../../assets/img/tae/01.png" alt="" class="border border-secondary border-3 rounded-circle">
                                    <div class="ps-3">
                                        <h6 class="m-0 h6">Fernando Fer</h6>
                                        <p class="m-0 h6">Taekwondo</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="fs-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis rem odio laborum 
                                       ipsum adipisci animi facilis quo, iure voluptate. Debitis reiciendis mollitia 
                                       saepe voluptatibus voluptatum velit voluptates delectus sequi neque.
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class=" col-12 col-lg-8 p-2">
                        <article class="card h-100 bg-dark text-white">
                            <div class="card-body">
                               
                             
                            </div>
                        </article>
                    </div>
                 
                   
                </div>
            </div>

            <div class="col-12 col-lg-3 p-2">
                <article class="card h-100 bg-secondary">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <img src="../../assets/img/tae/01.png" alt="" class="border border-secondary border-3 rounded-circle">
                            <div class="ps-3">
                                <h6 class="m-0 h6">Diego Diez</h6>
                                <p class="m-0 h6">Taekwondo</p>
                            </div>
                        </div>
                        <div id="descripcionGanador"></div>
                    </div>
                </article>
            </div>
          </div>

      </div>
        <!-- Fin de Card -->


        <div class="row">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Categorías</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Cinturones</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Torneos</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contacto</a></li>
            </ul>
            <p class="text-center text-muted">© 2023 TaeKwonDo, Inc</p>
        </footer>
        </div>

    </main>

    
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="../../assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
   
    <script src="../../assets/js/script.js"></script>

</body>

</html>


