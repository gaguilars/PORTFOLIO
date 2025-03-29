 <!-- Barra de Navegacion -->
 <nav class="navbar navbar-expand-lg navbar-dark fondo-acordeon fixed-top">
		<div class="container-fluid">
			<a href="/" class="navbar-brand">
                <img src="img/store2-slider-badge.png" width="38px" height="38px" alt="">
                Dos Lunas
            </a>

			<!-- Boton para el menu movil -->
			<button 
				class="navbar-toggler"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#menu"
				aria-controls="menu"
				aria-expanded="false"
				aria-label="Mostrar / Ocultar Menu"
			>
				<span class="navbar-toggler-icon"></span>
			</button>

  			<!-- Menu de navegacion -->
			<div class="collapse navbar-collapse" id="menu">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="/" class="nav-link
                    {{ActivarMenu('inicio')}}">Inicio</a></li>
                 
					<!-- Dropdown -->
					<li class="nav-item dropdown">
						<a 
							href="#" 
							class="nav-link dropdown-toggle
                            {{ActivarMenu('productos')}}"
							role="button"
							data-bs-toggle="dropdown"
							aria-expanded="false"
							id="dropdown-menu"
						>
							Productos
						</a>
						<ul class="dropdown-menu" aria-labelledby="dropdown-menu">
                            <li><a href="/productos" class="dropdown-item">Todos los Productos</a></li>
							<li><a href="/productos2/#seccion-imagen-3" class="dropdown-item">Shampo de Romero</a></li>
							<li><a href="/productos2" class="dropdown-item">Jabones Exfoliantes</a></li>
							<li><a href="/productos/#pomada_arnica" class="dropdown-item">Pomadas Arnica, Romero y Eucalipto</a></li>
                            <li><a href="/productos/#seccion-imagen-3" class="dropdown-item">Sales de Mar </a></li>
						</ul>
					</li>

					<li class="nav-item"><a href="/blog" class="nav-link 
                    {{ActivarMenu('blog')}}">Blog</a></li>
					<li class="nav-item"><a href="/contacto" class="nav-link
                    {{ActivarMenu('contacto')}}">Contacto</a></li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/2.lunaass/" target="_blank" class="nav-link">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://wa.me/2226977339" class="nav-link" target="_blank">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </li>

				</ul>

				<!-- Boton buscar -- 
				<form action="" class="d-flex">
                    <i class="bi bi-search text-white h3 me-3"></i>
					<input type="search" class="form-control me-2" placeholder="Buscar" aria-label="Buscar">
					<button class="btn btn-outline-light" type="button">Buscar</button>
				</form>-->
			</div>
		</div>
	</nav>
