@extends('plantilla')

@section('titulo', 'Productos')

@section('content')
<div class="row">
        
        <div class="col teayudamos2 font-weigth-bold  text-center">
                <h2 class="display-4 text-muted mb-0 p-3" >PRODUCTOS</h2>
        </div>
</div>

<div class="container card mb-5 ">

    <!-- POMADA ARNICA-->
    <div class="row mt-3 align-items-start" id="pomada_arnica">
        <h5 class="card-title text-center">Pomada de Árnica, Romero y Eucalipto</h5>
        <h6 class="card-subtitle text-center text-muted mb-2">Clasificacion: Pomadas</h6>
             <!-- Elemento 1 Cads-->
			<div class="col-md-4">
                <!-- Imagen 1 -->
                <div class="row productos mb-3">
                    <div class="col img-fluid p-0 hover">
                        <img class="card-img-top shadow-lg rounded img-fluid" src="img/P6060597.jpg" alt=""> 
                        <div class="capa p-0">
                            <h3>Pomada de Árnica, Romero y Eucalipto
                                <br>
                                <hr> 
                                    <a href="#img1" class="bi bi-search"> ver</a>
                                <hr>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Descripcion media-->
            <div class="col-md-5">
				<div class="card">
					<div class="card-header">
                      
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a href="#seccion1" class="nav-link active" data-bs-toggle="tab">Ficha Técnica</a>				        
                            </li>
                            <li class="nav-item"> 
                                <a href="#seccion2" class="nav-link" data-bs-toggle="tab">Valoraciones</a>
                            </li>
                            <li class="nav-item"> 
                                <a href="#seccion3" class="nav-link" data-bs-toggle="tab">Aviso Legal</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="seccion1">
                                    <br>
                                    <p class="h4 text-muted">
                                    Descripcion:
                                    </p>
                                    <hr>
                                    <p class="card-text text-justify h3 text-center">
                                    Base de cera de abeja, aceites esenciales
                                    y plantas medicinales.
                                    <br>
                                    <br>
                                    Auxilar en el tratamiento de dolores, inflamacion y ayuda a mejorar
                                    la piel reseca.
                                    </p>
                                    <br>
                                    <br>
                                    <br>
                                    <hr>
                                    <p class="h4 text-muted">
                                     Presentacion: 150 gr
                                    </p>
                                
                                <a href="/contacto" class="btn btn-outline-primary ">Informes</a>
                                </div>

                                <div class="tab-pane" id="seccion2">
                                <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Debitis deserunt excepturi deleniti adipisci, cupiditate quae.</p>
                                </div>     
                            

                            
                                <div class="tab-pane" id="seccion3">
                                <br>
                                <hr>
                                <p class="card-text text-justify h4">
                                Los productos <strong>DOS LUNAS</strong> son 100% artesanales, 
                                estan elaborados con materias primas naturales, 
                                su uso continuo proporciona un beneficio significativo a tu salud.
                                <br>
                                <br>
                                Si nota alguna reaccion alérgica acudir inmediatamente cons su médico de confianza
                                <br>
                                <hr>
                                No se dejen los productos al alcance de los niños
                                </p>
                                </div>     

                        
                        </div>

                    </div>
				</div>
			</div>


                <!-- Imagenes secundarias -->
				<div class="col">
                    <div class="row productos2">
					    <div class="col-12 col-md-12 img-fluid p-0 hover">
                        <a href="#img2">
                            <img class="card-img-top" src="img/P6060257 copia.jpg" alt=""> 
                            </a>
                        </div>
                    </div>
                    <div class="row productos2 mt-3 mb-3">
					    <div class="col-12 col-md-12 img-fluid p-0 hover">
                            <a href="#img3">
                            <img class="card-img-top" src="img/P6060124 1080X700.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>  

            <div class="modal" id="img1">
                    <a class="cerrar" href="">X</a>
                <div class="imagenmodal">
                    <a href="#img3">&#60;</a>
                    <a href="#img2"><img src="img/P6060597.jpg"></a>
                    <a href="#img2">></a>
                </div>
                    
            </div>

            <div class="modal" id="img2">
                    <a class="cerrar" href="">X</a>
                <div class="imagenmodal">
                    <a href="#img1">&#60;</a>
                    <a href="#img3"><img src="img/P6060257 copia.jpg"></a>
                    <a href="#img3">></a>
                </div>
                    
            </div>

            <div class="modal" id="img3">
                    <a class="cerrar" href="">X</a>
                <div class="imagenmodal">
                    <a href="#img2">&#60;</a>
                    <a href="#img1"><img src="img/P6060124 1080X700.jpg"></a>
                    <a href="#img1">></a>
                </div>
                    
            </div>

    </div>
    <hr>
    <!--COSTALITO TERAPEUTICO -->
    <div class="row mt-3 align-items-start" id="costalito_terapeutico">
        <h5 class="card-title text-center">Costalito Terapéutico</h5>
        <h6 class="card-subtitle text-center text-muted mb-2">Clasificacion: Tratamiento Alternativo</h6>
             <!-- Elemento 1 Cads-->
			<div class="col-md-4">
                <!-- Imagen 1 -->
                <div class="row productos mb-3">
                    <div class="col img-fluid p-0 hover">
                        <img class="card-img-top shadow-lg rounded img-fluid" src="img/costalito-1.jpeg" alt=""> 
                        <div class="capa p-0">
                            <h3>Costalito Terapéutico
                                <br>
                                <hr> 
                                    <a href="#img4" class="bi bi-search"> ver</a>
                                <hr>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Descripcion media-->
            <div class="col-md-5">
				<div class="card">
					<div class="card-header">
                      
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a href="#seccion4" class="nav-link active" data-bs-toggle="tab">Ficha Técnica</a>				        
                            </li>
                            <li class="nav-item"> 
                                <a href="#seccion5" class="nav-link" data-bs-toggle="tab">Valoraciones</a>
                            </li>
                            <li class="nav-item"> 
                                <a href="#seccion6" class="nav-link" data-bs-toggle="tab">Aviso Legal</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="seccion4">
                                    <br>
                                    <p class="h4 text-muted">
                                    Descripcion:
                                    </p>
                                    <hr>
                                    <p class="card-text text-justify h3 text-center">
                                    Auxiliar en el tratmiento de dolores musculares
                                    cólicos, dolor de articulaciones.
                                    Entre otros malestares.
                                    <br>
                                    <br>
                                    Está relleno de arroz, 
                                    flores y plantas secas de manzanilla, 
                                    lavanda o romero, aceite esencial de romero o lavanda, 
                                    funciona calentando lo en el microondas y se usa directamente 
                                    en la zona del cuerpo donde se presenta dolor o inflamación.
                                    </p>
                                    <br>
                                    <br>
                                    <br>
                                    <hr>
                                    <p class="h4 text-muted">
                                     Presentacion: 50 gr
                                    </p>
                                
                                <a href="/contacto" class="btn btn-outline-primary ">Informes</a>
                                </div>

                                <div class="tab-pane" id="seccion5">
                                <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Debitis deserunt excepturi deleniti adipisci, cupiditate quae.</p>
                                </div>     
                            

                            
                                <div class="tab-pane" id="seccion6">
                                <br>
                                <hr>
                                <p class="card-text text-justify h4">
                                Los productos <strong>DOS LUNAS</strong> son 100% artesanales, 
                                estan elaborados con materias primas naturales, 
                                su uso continuo proporciona un beneficio significativo a tu salud.
                                <br>
                                <br>
                                Si nota alguna reaccion alérgica acudir inmediatamente cons su médico de confianza
                                <br>
                                <hr>
                                No se dejen los productos al alcance de los niños
                                </p>
                                </div>     

                        
                        </div>

                    </div>
				</div>
			</div>


                <!-- Imagenes secundarias -->
				<div class="col">
                    <div class="row productos2">
					    <div class="col-12 col-md-12 img-fluid p-0 hover">
                        <a href="#img5">
                            <img class="card-img-top" src="img/costalito-2.jpeg" alt=""> 
                            </a>
                        </div>
                    </div>
                    <div class="row productos2 mt-3 mb-3">
					    <div class="col-12 col-md-12 img-fluid p-0 hover">
                            <a href="#img6">
                            <img class="card-img-top" src="img/costalito-3.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                </div>  

            <div class="modal" id="img4">
                    <a class="cerrar" href="">X</a>
                <div class="imagenmodal">
                    <a href="#img6">&#60;</a>
                    <a href="#img4"><img src="img/costalito-1.jpeg"></a>
                    <a href="#img5">></a>
                </div>
                    
            </div>

            <div class="modal" id="img5">
                    <a class="cerrar" href="">X</a>
                <div class="imagenmodal">
                    <a href="#img4">&#60;</a>
                    <a href="#img5"><img src="img/costalito-2.jpeg"></a>
                    <a href="#img6">></a>
                </div>
                    
            </div>

            <div class="modal" id="img6">
                    <a class="cerrar" href="">X</a>
                <div class="imagenmodal">
                    <a href="#img5">&#60;</a>
                    <a href="#img6"><img src="img/costalito-3.jpeg"></a>
                    <a href="#img4">></a>
                </div>
                    
            </div>

    </div>
    <hr>
     <!--SALES DE MAR -->
     <div class="row mt-3 align-items-start"  id="seccion-imagen-3">
        <h5 class="card-title text-center">Sales de Mar</h5>
        <h6 class="card-subtitle text-center text-muted mb-2">Clasificacion: Tratamiento Alternativo</h6>
             <!-- Elemento 1 Cads-->
			<div class="col-md-4">
                <!-- Imagen 1 -->
                <div class="row productos mb-3">
                    <div class="col img-fluid p-0 hover">
                        <img class="card-img-top shadow-lg rounded img-fluid" src="img/sales-1.jpeg" alt=""> 
                        <div class="capa p-0">
                            <h3>Sales de Mar
                                <br>
                                <hr> 
                                    <a href="#img7" class="bi bi-search"> ver</a>
                                <hr>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Descripcion media-->
            <div class="col-md-5">
				<div class="card">
					<div class="card-header">
                      
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a href="#seccion7" class="nav-link active" data-bs-toggle="tab">Ficha Técnica</a>				        
                            </li>
                            <li class="nav-item"> 
                                <a href="#seccion8" class="nav-link" data-bs-toggle="tab">Valoraciones</a>
                            </li>
                            <li class="nav-item"> 
                                <a href="#seccion9" class="nav-link" data-bs-toggle="tab">Aviso Legal</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="seccion7">
                                    <br>
                                    <p class="h4 text-muted">
                                    Descripcion:
                                    </p>
                                    <hr>
                                    <p class="card-text text-justify h3 text-center">
                                    Contiene sal de mar orgánica y aceites esenciales.
                                    Ayuda a relajar el cuerpo y favorece la circulacion
                                    de los pies.
                                    <br>
                                    <br>
                                    Con aceites esenciales de romero, menta o lavanda, 
                                    flores y plantas secas, se usan disolviendo una cucharada de sal 
                                    por cada 3 litros de agua, su usa para exfoliar, desinflamar y relajar 
                                    los pies, piernas y dar baños completos de tina.
                                    </p>
                                    <br>
                                    <br>
                                    <br>
                                    <hr>
                                    <p class="h4 text-muted">
                                     Presentacion: 300 gr
                                    </p>
                                
                                <a href="/contacto" class="btn btn-outline-primary ">Informes</a>
                                </div>

                                <div class="tab-pane" id="seccion8">
                                <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Debitis deserunt excepturi deleniti adipisci, cupiditate quae.</p>
                                </div>     
                            

                            
                                <div class="tab-pane" id="seccion9">
                                <br>
                                <hr>
                                <p class="card-text text-justify h4">
                                Los productos <strong>DOS LUNAS</strong> son 100% artesanales, 
                                estan elaborados con materias primas naturales, 
                                su uso continuo proporciona un beneficio significativo a tu salud.
                                <br>
                                <br>
                                Si nota alguna reaccion alérgica acudir inmediatamente cons su médico de confianza
                                <br>
                                <hr>
                                No se dejen los productos al alcance de los niños
                                </p>
                                </div>     

                        
                        </div>

                    </div>
				</div>
			</div>


                <!-- Imagenes secundarias -->
				<div class="col">
                    <div class="row productos2">
					    <div class="col-12 col-md-12 img-fluid p-0 hover">
                        <a href="#img8">
                            <img class="card-img-top" src="img/sales-2.jpeg" alt=""> 
                            </a>
                        </div>
                    </div>
                    <div class="row productos2 mt-3 mb-3">
					    <div class="col-12 col-md-12 img-fluid p-0 hover">
                            <a href="#img9">
                            <img class="card-img-top" src="img/sales-3.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                </div>  

            <div class="modal" id="img7">
                    <a class="cerrar" href="#seccion-imagen-3">X</a>
                <div class="imagenmodal">
                    <a href="#img9">&#60;</a>
                    <a href="#img7"><img src="img/sales-1.jpeg"></a>
                    <a href="#img8">></a>
                </div>
                    
            </div>

            <div class="modal" id="img8">
                    <a class="cerrar" href="#seccion-imagen-3">X</a>
                <div class="imagenmodal">
                    <a href="#img7">&#60;</a>
                    <a href="#img8"><img src="img/sales-2.jpeg"></a>
                    <a href="#img9">></a>
                </div>
                    
            </div>

            <div class="modal" id="img9">
                    <a class="cerrar" href="#seccion-imagen-3">X</a>
                <div class="imagenmodal">
                    <a href="#img8">&#60;</a>
                    <a href="#img9"><img src="img/sales-3.jpeg"></a>
                    <a href="#img7">></a>
                </div>
                    
            </div>

    </div>
    <!-- Paginacion -->
    <nav aria-label="Paginación de la página">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled" aria-disabled="true" tabindex="-1"><a href="#" class="page-link">Anterior</a></li>
            
            <li class="page-item active"><span class="page-link" aria-current="page">1</span></li>
			<li class="page-item"><a href="/productos2" class="page-link">2</a></li>
			<li class="page-item"><a href="/productos3" class="page-link">3</a></li>
			
            <li class="page-item"><a href="/productos2" class="page-link">Siguiente</a></li>
        </ul>
    </nav>
</div>
@endsection