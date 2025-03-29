<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Guillermo Aguilar Sanchez">
	<meta name="description" content="Productos Artesanales Dos Lunas">
	<meta name="keywords" content="productos artesanales, materias primas naturales, jabon exfoliante, sales de mar, tintura de cannabis, arnica y romero">
    <!--Sitio pendiente-->
	<meta name="sitedomain" content="www..com">
	<meta name="organization" content="Productos Artesanales Dos Lunas SA de CV">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable=no>
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="15days">
	<meta name="googlebot" content="index, follow">

    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/aos.css" >
    <link rel="stylesheet" href="css/misestilos.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/productos.css">
    <link rel="icon" href="img/store2-slider-badge.png">
</head>

<body style="padding-top:60px;">
   
@include('partials/nav')    
@yield('content')

        <!-- Footer -->
        <footer class="row">
            <!--Columna 1 Footer-->
                    <div class="col-sm-12 col-md-6 col-lg-3 text-white text-center">DOS LUNAS
                        <hr class="mt-3">
                        <br>
                        <br>
                        <a href="#" class="navbar-brand">
                            <img src="img/store2-slider-badge.png" width="150px" height="150px" alt=""> 
                        </a>
                  
                    </div>
            <!--columna 2 Footer-->
                    <div class="col-sm-12 col-md-6 col-lg-3 text-white text-center">De interes
                        <hr class="mt-3">
                        <ul class="navbar-nav me-auto mb-2 h6">
                            <li class="nav-item text-left">
                                <a href="/blog/#pomada" class="nav-link text-white bi bi-card-list">
                                Pomada Desinflamatoria
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="/blog/#costalito" class="nav-link text-white bi bi-card-list">
                                Costalito Terapéutico
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="/blog/#desodorante" class="nav-link text-white bi bi-card-list">
                                Desodorante en Crema
                                </a>
                            </li>                  
                            <li class="nav-item ">
                                <a href="/productos/#pomada_arnica" class="bi bi-caret-right nav-link text-white">
                                    Pomada: romero con árnica
                                </a>
                            </li>   
                            <li class="nav-item ">
                                <a href="/productos/#costalito_terapeutico" class="nav-link text-white bi bi-caret-right">
                                    Costalitos terapéuticos
                                </a>
                            </li>  
                            <li class="nav-item ">
                                <a href="/productos2/#seccion-imagen-3" class="nav-link text-white bi bi-caret-right">
                                Shampo de Romero 
                                </a>
                            </li>  
                        </ul>
                    </div>
            <!-- Columna 3 Footer-->
                  <div class="col-sm-12 col-md-6 col-lg-3 text-white text-center">Redes
                    <hr class="mt-3">
                    <ul class="navbar-nav me-auto mb-2 h1">
                        <li class="nav-item ">
                            <a href="#" class="nav-link h1" target="_blank">
                                <i class="bi bi-facebook" data-aos="zoom-in-up"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.instagram.com/2.lunaass/" target="_blank" class="nav-link">
                                <i class="bi bi-instagram" data-aos="zoom-in-up" data-aos-duration="450"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://wa.me/2226977339" target="_blank" class="nav-link h1">
                                <i class="bi bi-whatsapp" data-aos="zoom-in-up"></i>
                            </a>
                        </li>
                    </ul>
                  </div>
            <!-- Columna 4 Footer-->
                <div class="col-sm-12 col-md-6 col-lg-3 text-white text-center">Contacto
                    <hr class="mt-3">
                    <ul class="navbar-nav me-auto mb-2 h6">
                        <li class="nav-item ">
                            <p class="bi bi-envelope nav-link text-white"> informes@doslunasnatural.com</p>
                        </li>
                        <li class="nav-item ">
                            <p class="bi bi-whatsapp nav-link text-white"> (222) 697 7339</p>
                        </li>

                        <li class="nav-item ">
                            <p class="bi bi-telephone nav-link text-white"> (222) 697 7339</p>
                        </li>
                        <li class="nav-item ">
                            <p class="bi bi-clock nav-link text-white"> Lun-Vie 9:00-18:00, Sabados 9:00-14:00</p>
                        </li>           
                    </ul>
                </div>
            </footer>

            <div>
                <div class="col">
                    <div class="row">
                        <h6 class="text-muted text-center">elaborado por grupo la web<i class="bi bi-plus"></i> </h6>
                    </div>
                </div>
            </div>

    <script src="js/bootstrap.bundle.min.js"></script>  
    <script src="js/aos.js"></script>
	<script>
			AOS.init({
				easing: 'ease-out-back',
				duration: 2500
			});
	</script>
</body>
</html>