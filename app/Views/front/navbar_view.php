<nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
            <div class="container">
               
                <img src="assets/img/logo.png" alt="Logo" class="img-fluid" style="max-height: 40px;">
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#contenidoMenu"
                    aria-controls="contenidoMenu"
                    aria-expanded="false"
                    aria-label="Mostrar/Ocultar Navegacion"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="contenidoMenu">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a href="principal" class="nav-link">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a href="quienes_somos" class="nav-link">Quienes Somos</a>
                        </li>
                        <li class="nav-item">
                            <a href="registrarse" class="nav-link">Acerca De</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a 
                                href="#registro" 
                                class="nav-link dropdown-toggle"
                                id="submenuProductos"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Registrarse
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="submenuProductos">
                                <li><a href="#registro" class="dropdown-item">Usuario</a></li>
                                <li><a href="#registro" class="dropdown-item">Empresa</a></li>
                            </ul>
                        </li>
<li class="nav-item">
  <a href="#login" class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
</li>
                    </ul>
                    <form class="d-flex">
                        <input 
                            type="search"
                            class="form-control"
                            aria-label="Buscar"
                            placeholder="Buscar"
                        >
                        <button class="btn btn-primary ms-2">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
