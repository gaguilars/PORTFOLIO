@extends('plantilla')

@section('titulo','Dos Lunas')

@section('content')
<div class="container-fluid">
   
        <!-- Principal-->
                        <!--Ubicacion del aside al inicio por la clase (aling-items-start)-->
        <div class="row align-items-start">
            <!--Main-->
            <div class="main col">
                <!-- Carrusel-->
                <div class="carousel slide carousel-fade" id="micarrusel" data-bs-ride="carousel">
                    <!-- Añadir elementos al Carousel-->
                    <div class="carousel-inner rounded">
                        <!-- Elemento 1 Carrusel-->
                        <div class="carousel-item active" data-bs-interval="25000">
                            <div class="carousel-caption">
                                <h5 class="text-white display-1">CUIDA TU SALUD</h5>
                                <hr class="mt-3">
                                <p class="display-5">DE MANERA NATURAL</p>
                                <a href="/blog" class="btn btn-primary btn-lg">Conoce mas</a>
                            </div>
                            <img class="img-fluid mt-3" src="img/store2.jpg"  alt="">
                        </div>
                        <!-- Elemento 2 Carrusel-->
                        <div class="carousel-item" data-bs-interval="3000">
                            <div class="carousel-caption">
                                <h5 class="text-white display-3">Elaborados con plantas medicinales</h5>
                                <p class="display-4">e ingredientes 100% agroecológicos</p>
                            </div>
                            <img class="img-fluid mt-3" src="img/P6060306,1080X700.jpg" width="1350" height="600" alt="">
                        </div>
                        <!-- Elemento 3 Carrusel-->
                        <div class="carousel-item" data-bs-interval="3000">
                            <div class="carousel-caption">
                                <h5 class="text-white display-3">Elaborados con plantas medicinales</h5>
                                <p class="display-4">e ingredientes 100% agroecológicos</p>
                            </div>
                            <img class="img-fluid mt-3" src="img/P6060366copia.jpg" width="1350" height="600" alt="">
                            
                        </div>
                         <!-- Elemento 4 Carrusel-->
                         <div class="carousel-item" data-bs-interval="25000">
                            <div class="carousel-caption">
                                <h5 class="text-white display-3">Elaborados con plantas medicinales</h5>
                                <p class="display-4">e ingredientes 100% agroecológicos</p>
                            </div>
                            <img class="img-fluid mt-3" src="img/P6060124copia.jpg" width="1350" height="600" alt="">
                            
                        </div>
                    </div>
                    <!-- Controles Boton Previo-->
                    <button class="carousel-control-prev" 
                    type="button" 
                    data-bs-target="#micarrusel"
                    data-bs-slide="prev"
                    >
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <!-- Controles Boton Siguiente-->
                    <button class="carousel-control-next" 
                    type="button" 
                    data-bs-target="#micarrusel"
                    data-bs-slide="next"
                    >
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <!-- Indicadores-->
                    <div class="carousel-indicators">
                        <button type="button" 
                        class="active" 
                        data-bs-target="#micarrusel"
                        data-bs-slide-to="0"
                        aria-label="slide 1"
                        ></button>
                        <div class="carousel-indicators"></div>
                        <button type="button" 
                        class="" 
                        data-bs-target="#micarrusel"
                        data-bs-slide-to="1"
                        aria-label="slide 2"
                        ></button>
                        <div class="carousel-indicators"></div>
                        <button type="button" 
                        class="" 
                        data-bs-target="#micarrusel"
                        data-bs-slide-to="2"
                        aria-label="slide 3"
                        ></button>
                        <div class="carousel-indicators"></div>
                        <button type="button" 
                        class="" 
                        data-bs-target="#micarrusel"
                        data-bs-slide-to="3"
                        aria-label="slide 4"
                        ></button>
                    </div>
                </div>
            </div>
        </div>

        <!--Texto Inicial-->
        <div class="row">
            <p class="text-center display-4 mt-5 mb-5 ">
                <i class="bi bi-moon-stars-fill"></i>
                <i class="bi bi-moon"></i>
                <br>
                Los productos <strong>DOS LUNAS </strong>son 100% artesanales, estan elaborados
                con materias primas naturales, su uso continuo proporciona 
                un beneficio significativo a tu salud
                <br>
                <i class="bi bi-moon-stars"></i>
                <i class="bi bi-moon-fill"></i>
            </p>
        </div>

            <!--Aside-->
        <div class="row justify-content-evenly">
            <div class="aside col-12 col-lg-6">
                <div class="accordion accordion-flush fondo-acordeon" id="temario">
                    <h2 class="text-center h1 text-white">Beneficios</h2>
                    <!--Elemento # 1-->
                    <div class="accordion-item text-center">
                        <h2 class="accordion-header" id="encabezado-1">
          
                            <button
                                class="accordion-button bg-secondary p-2 text-white "
                                style="--bs-bg-opacity: .5;"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#elemento-1"
                                aria-expanded="true"
                                aria-controls="elemento-1"
                            >
                                Champú solido 🌱
                            </button>
                            
                        </h2>
                        <div
                            id="elemento-1"
                            class="accordion-collapse collapse"
                            aria-labelledby="encabezado-1"
                            data-bs-parent="#temario"
                        >
                            <div class="accordion-body text-white">

                                <div class="alert mt-3 alert-primary bg-secondary p-2 text-white" 
                                style="--bs-bg-opacity: .5;"
                                role="alert"
                                >
                                    <strong>De coco</strong>
                                    <br>
                                    Cabello ondulado, chino y rizado    🌱
                                    <br>
                                    Estimula el crecimiento del cabello🍀
                                    <br>
                                    Define los rizos/chinos🍀
                                    <br>
                                    <strong>De coco con guayaba en polvo</strong> 
                                    <br>
                                    Para cabello ondulado, chino y rizado🌱                                    
                                    <br>
                                    Previene y quita caspa🍀
                                    <br>
                                    Proporciona volumen🍀
                                    <br>
                                    Define los rizos/chinos🍀
                                    <br>
                                    Estimula el crecimiento del cabello🍀
                                    <br>
                                    <br>
                                    <button class="btn btn-primary">
                                        <a href="/blog" class="text-white">conoce mas...</a>
                                    </button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!--Elemento # 2-->
                    <div class="accordion-item text-center">
                            <h2 class="accordion-header" id="encabezado-2">
                                <button
                                    class="accordion-button bg-secondary p-2 text-white"
                                    style="--bs-bg-opacity: .5;"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#elemento-2"
                                    aria-expanded="true"
                                    aria-controls="elemento-2"
                                >
                                Jabones exfoliantes🍀
                                </button>
                            </h2>
                            <div
                                id="elemento-2"
                                class="accordion-collapse collapse"
                                aria-labelledby="encabezado-2"
                                data-bs-parent="#temario"
                            >
                                <div class="accordion-body">
                                    <div class="alert mt-3 alert-primary bg-secondary p-2 text-white" 
                                    style="--bs-bg-opacity: .5;"
                                    role="alert"
                                    >
                                        <strong> Carbón activado</strong> 
                                        <br>
                                        Quita y previene puntos negros y acné 🍀
                                        <br>
                                        Limpieza y exfoliación de la piel🍀
                                        <br>
                                        Para cara y cuerpo🍀
                                        <br>
                                        <br>
                                        <button class="btn btn-primary">
                                        <a href="/blog" class="text-white">conoce mas...</a></button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!--Elemento # 3-->
                    <div class="accordion-item text-center">
                        <h2 class="accordion-header" id="encabezado-3">
                            <button
                                class="accordion-button bg-secondary p-2 text-white"
                                style="--bs-bg-opacity: .5;"
                                data-bs-toggle="collapse"
                                data-bs-target="#elemento-3"
                                aria-expanded="true"
                                aria-controls="elemento-3"
                            >
                            Pomada árnica, romero y eucalipto 🌱
                            </button>
                        </h2>
                        <div
                            id="elemento-3"
                            class="accordion-collapse collapse"
                            aria-labelledby="encabezado-3"
                            data-bs-parent="#temario"
                        >
                            <div class="accordion-body">
                                <div class="alert mt-3 alert-primary bg-secondary p-2 text-white" 
                                style="--bs-bg-opacity: .5;"
                                role="alert"
                                >
                                    <strong> Estimula</strong> 
                                    <br>
                                    La Circulación 🍀
                                    <br>
                                    Actúa como desinflamante🍀
                                    <br>
                                    Quita dolores y moretones🍀
                                    <br>
                                    Regenera la piel🍀
                                    <br>
                                    <br>
                                    <button class="btn btn-primary">
                                    <a href="/blog" class="text-white">conoce mas...</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                
                    </div>
                    <!--Elemento # 4-->
                    <div class="accordion-item text-center">
                            <h2 class="accordion-header" id="encabezado-4">
                                <button
                                    class="accordion-button bg-secondary p-2 text-white"
                                    style="--bs-bg-opacity: .5;"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#elemento-4"
                                    aria-expanded="true"
                                    aria-controls="elemento-4"
                                >
                                Jabones Relajantes🍀
                                </button>
                            </h2>
                            <div
                                id="elemento-4"
                                class="accordion-collapse collapse"
                                aria-labelledby="encabezado-4"
                                data-bs-parent="#temario"
                            >
                                <div class="accordion-body">
                                    <div class="alert mt-3 alert-primary bg-secondary p-2 text-white" 
                                style="--bs-bg-opacity: .5;"
                                role="alert"
                                >
                                        <strong>Hidrata</strong> 
                                        <br>
                                        Y relajan la piel🌱
                                        <br>
                                        Con aceites esenciales y aceite de almendras🌱
                                        <br>
                                        <br>
                                        <button class="btn btn-primary">
                                        <a href="/blog" class="text-white">conoce mas...</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
   
          <!-- Cards -->
        <div class="row mt-15">
			<div class="col">
				<div class="card border-0 bg-transparent">
					<div class="card-body">
						<h2 class="text-center display-4 h1">Nuestras Estrellas</h2>
					</div>
				</div>
			</div>

			<!-- Clases que podemos utilizar
			.card 					Establecemos que trabajaremos con una tarjeta (card)
				.card-body 			Establecemos cual sera el contenedor del contenido
					.card-title 	Establecemos el un texto como titulo de la card
					.card-subtitle 	Establecemos un subtitulo para la card
					.card-text 		Establecemos el texto de la card.
					.card-link  	Establecemos un enlace como boton en la card
				.card-img-top 		Establecemos una imagen para la card en la parte superior
				.card-img-bottom 	Establecemos una imagen para la card en la parte inferior
			-->
		</div>

        <!--  Animations
                        Fade animations:

                        fade
                        fade-up
                        fade-down
                        fade-left
                        fade-right
                        fade-up-right
                        fade-up-left
                        fade-down-right
                        fade-down-left
                        Flip animations:

                        flip-up
                        flip-down
                        flip-left
                        flip-right
                        Slide animations:

                        slide-up
                        slide-down
                        slide-left
                        slide-right
                        Zoom animations:

                        zoom-in
                        zoom-in-up
                        zoom-in-down
                        zoom-in-left
                        zoom-in-right
                        zoom-out
                        zoom-out-up
                        zoom-out-down
                        zoom-out-left
                        zoom-out-right
                        Anchor placements:
                        top-bottom
                        top-center
                        top-top
                        center-bottom
                        center-center
                        center-top
                        bottom-bottom
                        bottom-center
                        bottom-top
                        Easing functions:
                        linear
                        ease
                        ease-in
                        ease-out
                        ease-in-out
                        ease-in-back
                        ease-out-back
                        ease-in-out-back
                        ease-in-sine
                        ease-out-sine
                        ease-in-out-sine
                        ease-in-quad
                        ease-out-quad
                        ease-in-out-quad
                        ease-in-cubic
                        ease-out-cubic
                        ease-in-out-cubic
                        ease-in-quart
                        ease-out-quart
                        ease-in-out-quart
    -->

		<div class="row mt-3">
            <!-- Elemento 1 Cads-->
			<div class="col-sm-12 col-md-6">
                <!-- data-aos animacion-->
				<div 
                data-aos="fade-down" data-aos-easing="linear" data-aos-duration="450" 
                class="card">

					<div class="card-body text-center">
                        <h5 class="card-title">Desodorante en Crema <br>
                        <span class="badge rounded-pill bg-primary h3"> Conoce la nueva presentacion SPORT</span></h5>
   
						<p class="card-text">Hipoalergénico, no contiene alcohol y no irrita.
                        <br>Para uso familiar.</p>
						<a href="/productos3/#desodorante" class="btn btn-outline-primary">Informacion</a>
					</div>
                    <img class="card-img-top" src="img/pomada2.jpeg" alt=""> 
                </div>
			</div>

            <!-- Elemento 2 Cads-->
			<div class="col-sm-12 col-md-6">
                <!-- data-aos animacion-->
				<div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="450" 
                class="card">
					<div class="card-body text-center">
						<h5 class="card-title">Pomada de Árnica, Romero y Eucalipto</h5>
						<h6 class="card-subtitle text-muted mb-2">Presentacion 50gr</h6>
						<p class="card-text">Base de cera de abeja, 
                            aceites esenciales y plantas medicinales.
                            Auxilar en el tratamiento de dolores, inflamacion 
                            y ayuda a mejorar la piel reseca.</p>
						<a href="/productos3/#pomada" class="btn btn-outline-primary">Informacion</a>
					</div>
					<img class="card-img-bottom" src="img/P6060290copia.jpg" alt="">
				</div>
			</div>
		</div>

        <br><br><br><br>
        <div class="row mt-15">
			<div class="col">
				<div class="card border-0 text-center bg-transparent">
					<div class="card-body">
						 <button class="btn btn-primary" ><a class="h2 text-white" href="/productos">MAS PRODUCTOS</a></button>
					</div>
				</div>
		</div>
        <br><br><br><br>

         <!-- ¿Necesitas ayuda? PARALLAX-->
         <div class="row">
            <div class="col teayudamos  font-weigth-bold  text-center">
                
                <div data-aos="zoom-in-up" data-aos-duration="2000">
                    <h2 class="display-4 text-white" >¿NECESITAS AYUDA?</h2>
                </div>
             
                <P class="text-primary h2">
                    Envianos un mensaje, para conocer tus necesidades ¡
                    <br> 
                    Personalizamos los productos de tu preferencia</P>
                <a href="/contacto" class="btn btn-primary">Me interesa</a>
            </div>
        </div>

<!-- Nuestros Clientes-->
<div class="row justify-content-center text-center mb-5">
    <div>
        <p class="h1 mt-5 mb-5">Nos Respaldan</p>
    </div>
    <!-- Elemento #1-->
    <div class="col-md-3 order-1 justify-content-center">
      <!--  <p class="d-none d-lg-block">Col 1 (3 Columnas)</p>
        <p class="d-none d-md-block d-lg-none">Col 1 (4 Columnas)</p>
        <p class="d-block d-md-none">Col1 (12 Columnas)</p> -->
        <img class="rounded-circle"  src="img/casa2.jpg" alt=""> 
        <p class="h3"></p>
    </div>
    <!-- Elemento #2-->
        <div class="col-md-3 justify-content-center order-3">
        <!--<p class="d-none d-lg-block">Col 2 (3 Columnas)</p>
        <p class="d-none d-md-block d-lg-none">Col 2 (4 Columnas)</p>
        <p class="d-block d-md-none">Col 2 (12 Columnas)</p>-->
        <img class="rounded-circle"  src="img/superchava3.jpg" alt="">
        <p></p>
    </div>
    <!-- Elemento #3-->
    <div class="col-md-3 justify-content-center order-2">
       <!-- <p class="d-none d-lg-block">Col 3 (3 Columnas)</p>
        <p class="d-none d-md-block d-lg-none">Col 3 (4 Columnas)</p>
        <p class="d-block d-md-none">Col 3 (12 Columnas)</p>-->
        <img class="rounded-circle"  src="img/rutas.png" alt="">
        <p></p>
    </div>
</div>

    <!--Slider de Imagenes Automatico-->
    <div class="row contenedor-slider r-0">
            <div class="col text-center">
                <div id="slider"> 
                </div>
            </div>
    </div>
@endsection