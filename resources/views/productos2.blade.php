@extends('plantilla')

@section('titulo', 'Productos')

@section('content')
<div class="row">
        
        <div class="col teayudamos3 font-weigth-bold  text-center">
                <h2 class="display-4 text-muted mb-0 p-3" >PRODUCTOS</h2>
        </div>
</div>

<div class="container card mb-5 ">

    <!-- JABON EXFOLIANTE-->
    <div class="row mt-3 align-items-start">
        <h5 class="card-title text-center">Jabón Exfoliante</h5>
        <h6 class="card-subtitle text-center text-muted mb-2">Clasificacion: Jabones</h6>
             <!-- Elemento 1 Cads-->
			<div class="col-md-4">
                <!-- Imagen 1 -->
                <div class="row productos mb-3">
                    <div class="col img-fluid p-0 hover">
                        <img class="card-img-top shadow-lg rounded img-fluid" src="img/exfol2.jpg" alt=""> 
                        <div class="capa p-0">
                            <h3>Jabón Exfoliante
                                <br>
                                <hr> 
                                    <a href="#img21" class="bi bi-search"> ver</a>
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
                                    Contiene aceites y carbón activo.
                                    <br>
                                    <br>
                                    Disminuye la grasa y acné del rostro, tambien se puede usar para 
                                    eliminar asperezas y células muertas del cuerpo.
                                    </p>
                                    <br>
                                    <br>
                                    <br>
                                    <hr>
                                    <p class="h4 text-muted">
                                     Presentacion: individual
                                    </p>
                                
                                <a href="/contacto" class="btn btn-outline-primary ">Informes</a>
                                </div>

                                <div class="tab-pane" id="seccion2">
                                <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Debitis deserunt excepturi deleniti adipisci, cupiditate.</p>
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
                        <a href="#img22">
                            <img class="card-img-top" src="img/exfol1.png" alt=""> 
                            </a>
                        </div>
                    </div>
                    <div class="row productos2 mt-3 mb-3">
					    <div class="col-12 col-md-12 img-fluid p-0 hover">
                            <a href="#img23">
                            <img class="card-img-top" src="img/exfol3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>  

            <div class="modal" id="img21">
                    <a class="cerrar" href="">X</a>
                <div class="imagenmodal">
                    <a href="#img23">&#60;</a>
                    <a href="#img21"><img src="img/exfol2.jpg"></a>
                    <a href="#img22">></a>
                </div>
                    
            </div>

            <div class="modal" id="img22">
                    <a class="cerrar" href="">X</a>
                <div class="imagenmodal">
                    <a href="#img21">&#60;</a>
                    <a href="#img22"><img src="img/exfol1.jpg"></a>
                    <a href="#img23">></a>
                </div>
                    
            </div>

            <div class="modal" id="img23">
                    <a class="cerrar" href="">X</a>
                <div class="imagenmodal">
                    <a href="#img22">&#60;</a>
                    <a href="#img23"><img src="img/exfol3.jpg"></a>
                    <a href="#img21">></a>
                </div>
                    
            </div>

    </div>
    <hr>
    <!--JABONES RELAJANTES -->
    <div class="row mt-3 align-items-start">
        <h5 class="card-title text-center">Jabones Relajantes</h5>
        <h6 class="card-subtitle text-center text-muted mb-2">Clasificacion: Jabones</h6>
             <!-- Elemento 1 Cads-->
			<div class="col-md-4">
                <!-- Imagen 1 -->
                <div class="row productos mb-3">
                    <div class="col img-fluid p-0 hover">
                        <img class="card-img-top shadow-lg rounded img-fluid" src="img/P6060445.jpg" alt=""> 
                        <div class="capa p-0">
                            <h3>Jabones Relajantes
                                <br>
                                <hr> 
                                    <a href="#img34" class="bi bi-search"> ver</a>
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
                                    Relajantes e
                                    hidratantes.
                                    <br>
                                    <br>
                                    A base de gliserina, aceites esenciales y 
                                    combinación de plantas medicinales según el caso, 
                                    tienen un efecto hidratante y relajante.
                                    </p>
                                    <br>
                                    <br>
                                    <br>
                                    <hr>
                                    <p class="h4 text-muted">
                                     Presentacion: individual
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
                        <a href="#img35">
                            <img class="card-img-top" src="img/P6060448.jpg" alt=""> 
                            </a>
                        </div>
                    </div>
                    <div class="row productos2 mt-3 mb-3">
					    <div class="col-12 col-md-12 img-fluid p-0 hover">
                            <a href="#img36">
                            <img class="card-img-top" src="img/P6060425 copia.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>  

            <div class="modal" id="img34">
                    <a class="cerrar" href="">X</a>
                <div class="imagenmodal">
                    <a href="#img36">&#60;</a>
                    <a href="#img34"><img src="img/P6060445.jpg"></a>
                    <a href="#img35">></a>
                </div>
                    
            </div>

            <div class="modal" id="img35">
                    <a class="cerrar" href="">X</a>
                <div class="imagenmodal">
                    <a href="#img34">&#60;</a>
                    <a href="#img35"><img src="img/P6060448.jpg"></a>
                    <a href="#img36">></a>
                </div>
                    
            </div>

            <div class="modal" id="img36">
                    <a class="cerrar" href="">X</a>
                <div class="imagenmodal">
                    <a href="#img35">&#60;</a>
                    <a href="#img36"><img src="img/P6060425 copia.jpg"></a>
                    <a href="#img34">></a>
                </div>
                    
            </div>

    </div>
    <hr>
     <!--SHAMPO DE ROMERO -->
     <div class="row mt-3 align-items-start"  id="seccion-imagen-3">
        <h5 class="card-title text-center">Shampo de Romero</h5>
        <h6 class="card-subtitle text-center text-muted mb-2">Clasificacion: Shampoo Solido</h6>
             <!-- Elemento 1 Cads-->
			<div class="col-md-4">
                <!-- Imagen 1 -->
                <div class="row productos mb-3">
                    <div class="col img-fluid p-0 hover">
                        <img class="card-img-top shadow-lg rounded img-fluid" src="img/IMG-20220127-WA0002.jpg" alt=""> 
                        <div class="capa p-0">
                            <h3>Shampo de Romero
                                <br>
                                <hr> 
                                    <a href="#img47" class="bi bi-search"> ver</a>
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
                                    <p class="card-text text-justify h3">
                                    Limpia e
                                    <br>
                                    <br>
                                    Hidrata.
                                    </p>
                                    <br>
                                    <br>
                                    <br>
                                    <hr>
                                    <p class="h4 text-muted">
                                     Presentacion: individual
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
                        <a href="#img48">
                            <img class="card-img-top" src="img/IMG-20220127-WA0001.jpg" alt=""> 
                            </a>
                        </div>
                    </div>
                    <div class="row productos2 mt-3 mb-3">
					    <div class="col-12 col-md-12 img-fluid p-0 hover">
                            <a href="#img49">
                            <img class="card-img-top" src="img/IMG-20220127-WA0003.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>  

            <div class="modal" id="img47">
                    <a class="cerrar" href="#seccion-imagen-3">X</a>
                <div class="imagenmodal">
                    <a href="#img49">&#60;</a>
                    <a href="#img47"><img src="img/IMG-20220127-WA0002.jpg"></a>
                    <a href="#img48">></a>
                </div>
                    
            </div>

            <div class="modal" id="img48">
                    <a class="cerrar" href="#seccion-imagen-3">X</a>
                <div class="imagenmodal">
                    <a href="#img47">&#60;</a>
                    <a href="#img48"><img src="img/IMG-20220127-WA0001.jpg"></a>
                    <a href="#img49">></a>
                </div>
                    
            </div>

            <div class="modal" id="img49">
                    <a class="cerrar" href="#seccion-imagen-3">X</a>
                <div class="imagenmodal">
                    <a href="#img48">&#60;</a>
                    <a href="#img49"><img src="img/IMG-20220127-WA0003.jpg"></a>
                    <a href="#img47">></a>
                </div>
                    
            </div>

    </div>
    <!-- Paginacion 2 -->
    <nav aria-label="Paginación de la página">
        <ul class="pagination justify-content-center">
            <li class="page-item" aria-disabled="true" tabindex="-1"><a href="/productos" class="page-link">Anterior</a></li>
             
            <li class="page-item"><a href="/productos" class="page-link">1</a></li>
			<li class="page-item active"><span class="page-link" aria-current="page">2</span></li>
			<li class="page-item"><a href="/productos3" class="page-link">3</a></li>
			
            <li class="page-item"><a href="/productos3" class="page-link">Siguiente</a></li>
        </ul>
    </nav>
</div>
@endsection