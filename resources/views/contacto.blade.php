@extends('plantilla')

@section('titulo', 'Contacto')

@section('content')
    <div class="row">
        
            <div class="col teayudamos  font-weigth-bold  text-center">
                    <h2 class="display-4 text-muted mb-0 p-3" >CONTACTO</h2>
            </div>
        </div>

    
    <div class="row fondo-acordeon text-left justify-content-center p-3">
        <div class="col-md-5">
            <h3 class="h1 text-white">Envianos un Mensaje</h3>
       
            <hr class="mt-3">
                    <ul class="navbar-nav me-auto mb-2 h6">
                        <li class="nav-item">
                            <p class="bi bi-envelope text-white"> informes@doslunas.com</p>
                        </li>
                        <li class="nav-item ">
                            <p class="bi bi-telephone text-white"> (222) 107 2566</p>
                        </li>
                        <li class="nav-item ">
                            <p class="bi bi-whatsapp text-white"> (222) 107 2566</p>
                        </li>
                        <li class="nav-item ">
                            <p class="bi bi-clock text-white"> Lunes - Viernes 9:00 - 18:00, Sabados 9:00 - 14:00
                            </p>
                        </li>
                         <li class="nav-item ">
                                <p class="bi bi-instagram text-white"> /2.lunaass</p>
                        </li>
                    </ul>
                </div>
    <!-- Formulario de contacto-->
        <div class="col-md-5">
            <form method="POST" action="{{route('contacto')}}">    
             @csrf
                <div>
                    <label for="Nombre" class="form-label text-white">Nombre</label>
                    <input
                    name="nombre" 
                    type="text" 
                    class="form-control" 
                    id="nombre" 
                    aria-describedby="ayuda-correo" 
                    value="{{old('nombre')}}"
                    >
                </div>
                {!! $errors->first('nombre', '<small class="text-danger">:message </small> <br>') !!}

                <div class="mb-3">
                    <label for="correo" class="form-label text-white">Correo Electronico</label>
                    <input
                    name="email" 
                    type="email" 
                    class="form-control" 
                    id="correo" 
                    aria-describedby="ayuda-correo" 
                    value="{{old('email')}}"
                    >
                    {!! $errors->first('email', '<small class="text-danger">:message </small> <br>') !!}
                    <div id="ayuda-correo" class="form-text text-muted">
                        Te enviaremos un mensaje de confirmacion
                    </div>
                </div>
       
                
                <div class="mb-3">
                    <label for="Mensaje" 
                    class="form-label text-white">Mensaje</label>
                    <textarea 
                    class="form-control" 
                    name="mensaje" 
                    id="mensaje" 
                    placeholder="Deja tu mensaje"
                    >{{old('mensaje')}}</textarea>
                </div>
                {!! $errors->first('mensaje', '<small class="text-danger">:message </small> <br>') !!}
                <button type="submit" class="bi bi-send-plus btn btn-primary"> Enviar</button>
            </form>
        </div>

        <!--Ubicacion MAPA-->
        <div class="col-md-12 p-3">
		    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.5915252648133!2d-98.24449428510013!3d18.99363888713524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x201d01cf8351b670!2zMTjCsDU5JzM3LjEiTiA5OMKwMTQnMzIuMyJX!5e0!3m2!1ses!2smx!4v1641878022894!5m2!1ses!2smx" 
            class="rounded mt-1"
            width=100%
            height=350px 
            aria-hidden="false" 
            tabindex="0" 
            allowfullscreen="" 
            loading="lazy"
            id="mapa"
            >
        </iframe>
		</div>
    </div>
@endsection