<?php

// Control
include_once "../../../configuracion.php";

// Encabezado
include_once "../../Estructura/encabezado.php";

?>


 
    <!-- ======= Header ======= -->
    <header data-bs-theme="dark">
	    <!-- Navbar -->
	    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
	      <div class="container-fluid">
			    <a class="navbar-brand" href="#">POOMSAES DE TAEKWONDO</a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarCollapse">
				    <ul class="navbar-nav me-auto mb-2 mb-md-0">
					    <li class="nav-item">
						    <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page">Enable</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Ejercicio</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../../TP/Ejercicio7/index.php">Ejercicio7</a></li>
                  <li><a class="dropdown-item" href="#">Ejercicio8</a></li>
                  <li><a class="dropdown-item" href="#">Ejercicio9</a></li>
                </ul>
              </li>
            </ul>
        </div>
      </nav><!-- Fin Navbar -->
    </header> <!-- Fin Header -->

  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <a data-bs-toggle="modal" data-bs-target="#modalPrueba2" href="#">
            <img src="../../assets/img/tae/prueba2.png" alt="..." class="bd-placeholder-img" width="100%" height="130%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
          </a>
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Example headline.</h1>
              <p>Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <a data-bs-toggle="modal" data-bs-target="#modalPrueba51" href="#">
            <img src="../../assets/img/tae/prueba51.png" alt="..." class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
          </a>
            <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img src="../../assets/img/tae/prueba7.png" alt="..." class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>One more for good measure.</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img src="../../assets/img/tae/maxresdefault.png" alt="..." class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>One more for good measure.</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <!-- modal prueba -->

    <div class="modal fade" id="modalPrueba2" tabindex="-1" aria-labelledby="modalPrueba2" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <img src="../../assets/img/tae/prueba2.png" alt="">
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalPrueba51" tabindex="-1" aria-labelledby="modalPrueba51" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

        <main class="container d-flex align-items-center justify-content-center">
          <div class="row">
            <div class="col-12 col-lg-9">

                <div class="row">
                    <div class=" col-12 col-lg-8 p-2">
                        <article class="card h-100 bg-success text-white">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <img src="../../assets/img/tae/04.png" alt="" class="border border-secondary border-3 rounded-circle">
                                    <div class="ps-3">
                                        <h6 class="m-0 h6">Tomas Alex</h6>
                                        <p class="m-0 h6">Taekwondo</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="h6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis rem odio laborum 
                                       ipsum adipisci animi facilis quo, iure voluptate. Debitis reiciendis mollitia 
                                       saepe voluptatibus voluptatum velit voluptates delectus sequi neque.
                                    </p>
                                    <p class="fs-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis rem odio laborum 
                                       ipsum adipisci animi facilis quo, iure voluptate. Debitis reiciendis mollitia 
                                       saepe voluptatibus voluptatum velit voluptates delectus sequi neque.
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class=" col-12 col-lg-4 p-2">
                        <article class="card h-100 bg-primary text-white">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <img src="../../assets/img/tae/02.png" alt="" class="border border-secondary border-3 rounded-circle">
                                    <div class="ps-3">
                                        <h6 class="m-0 h6">Florencia Flor</h6>
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
                    <div class=" col-12 col-lg-4 p-2">
                        <article class="card h-100 bg-secondary">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <img src="../../assets/img/tae/03.png" alt="" class="border border-secondary border-3 rounded-circle">
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
                                <div class="d-flex mb-3">
                                    <img src="../../assets/img/tae/01.png" alt="" class="border border-secondary border-3 rounded-circle">
                                    <div class="ps-3">
                                        <h6 class="m-0 h6">Diego Diez</h6>
                                        <p class="m-0 h6">Taekwondo</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="h6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis rem odio laborum 
                                       ipsum adipisci animi facilis quo, iure voluptate. Debitis reiciendis mollitia 
                                       saepe voluptatibus voluptatum velit voluptates delectus sequi neque.
                                    </p>
                                    <p class="fs-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis rem odio laborum 
                                       ipsum adipisci animi facilis quo, iure voluptate. Debitis reiciendis mollitia 
                                       saepe voluptatibus voluptatum velit voluptates delectus sequi neque.
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3 p-2">
                <article class="card h-100 bg-secondary">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <img src="../../assets/img/tae/04.png" alt="" class="border border-secondary border-3 rounded-circle">
                                    <div class="ps-3">
                                        <h6 class="m-0 h6">Tomas Alex</h6>
                                        <p class="m-0 h6">Taekwondo</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="h6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis rem odio laborum 
                                       ipsum adipisci animi facilis quo, iure voluptate. Debitis reiciendis mollitia 
                                       saepe voluptatibus voluptatum velit voluptates delectus sequi neque.
                                    </p>
                                    <p class="fs-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis rem odio laborum 
                                       ipsum adipisci animi facilis quo, iure voluptate. Debitis reiciendis mollitia 
                                       saepe voluptatibus voluptatum velit voluptates delectus sequi neque.
                                    </p>
                                </div>
                            </div>
                </article>
            </div>
          </div>
        </main>
        
        </div>
      </div>
    </div>


    <!-- Mensajes de marketing y reportajes se envuelve en la página en otro contenedor para centrar todo el contenido. -->
  
    <div class="container marketing">

      <!-- Se Crea tres columnas de texto debajo del carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img src="../../assets/img/tae/tipospumse2.png" alt=""class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
          <h2 class="fw-normal">¿QUÉ SON LOS POOMSAES DE TAEKWONDO?</h2>
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../../assets/img/tae/prueba8.png" alt=""class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
          <h2 class="fw-normal">PRACTICAS</h2>
          <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../../assets/img/tae/maxresdefa.png" alt=""class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
          <h2 class="fw-normal">TORNEOS</h2>
          <p>And lastly this, the third column of representative placeholder content. This time, we've moved on to the second column.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->    

      <hr class="featurette-divider">

    </div><!-- /.container -->
  </main>

  <div class="container">
    <div class="col-sm-12">
      <h1 class="center-align titulo"> Esto es BOOTSTRAP</h1>
      <div class="carousel center-align">
        <div class="carusel-item">
          <h2 class="">Masculino</h2>
          <hr class="featurette-divider">
          <p>Mayor de 18</p>
        </div>
      </div>
    </div>
  </div>




  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider ml-lg-5 ml-md-5 mt-5 py-lg-5">

                    <div class="row">

                        <div class="col-md-4">
                            <div class="imgContainer ml-lg-n5 mt-lg-0 mt-md-0 ml-md-n5 mt-n5">
                                <div class="image">
                                    <img src="../../assets/img/tae/prueba23.png"/>
                                </div>
                                <div class="image">
                                    <img src="../../assets/img/tae/maxresdefault.png"/>
                                </div>
                                <div class="image">
                                    <img src="../../assets/img/tae/prueba51.png"/>
                                </div>
                                <div class="image">
                                    <img src="../../assets/img/tae/maxresdefa.png"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <!-- slider -->
                            <div id="myCarousel" class="carousel slide carousel-fade pr-lg-5 py-lg-0 py-4" data-bs-ride="carousel">

                                <div class="carousel-indicators indicators">
                                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active"></button>
                                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                </div>

                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                        <div class="content">
                                        
                                            <h1>Example headline. One</h1>
                                            <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, consequuntur.
                                               Dicta maxime labore, ipsa dolores ratione animi! Ratione sint voluptas minima 
                                               deleniti unde, deserunt debitis distinctio perspiciatis ducimus! Rerum, nesciunt.
                                               Lorem ipsum dolor sit amet consectetur adipisicing elit. At aspernatur sit deleniti quae 
                                               voluptatibus quidem harum temporibus! Deleniti eum voluptate sit vel consectetur voluptates
                                               libero molestiae, nulla placeat praesentium est!
                                            </div>
                                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                                        
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="content">
                                        
                                            <h1>Another example headline.</h1>
                                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                                        
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="content">
                                        
                                            <h1>One more for good measure.</h1>
                                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                                        
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="content">
                                        
                                            <h1>One more for good measure.</h1>
                                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                                        
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- slider -->
                        </div>
                           
                    </div>

                </div>
            </div>
        </div>
    </div>