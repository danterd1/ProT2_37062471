


<main class="container" id="principal" style="margin-top: 80px;">


        
        <!-- CARRUSEL -->
        <div class="row">
            <div class="col">
                <div id="slideshow" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/c1.jpg" class="w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/c2.jpg" class="w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/c3.jpg" class="w-100" alt="">
                        </div>
                    </div>
                    <button
                        class="carousel-control-prev" 
                        type="button"
                        data-bs-target="#slideshow"
                        data-bs-slide="prev"
                    >
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button
                        class="carousel-control-next" 
                        type="button"
                        data-bs-target="#slideshow"
                        data-bs-slide="next"
                    >
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#slideshow" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#slideshow" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#slideshow" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- GALERIA -->
        <div class="row py-5">
            <div class="col">
                <div class="border-bottom">
                    <h1 class="text-center">Galería</h1>
                </div>
            </div>
        </div>
        <div class="row">

        <div class="col-sm-6 col-lg-3 mb-4">
  <div class="card">
    <img class="card-img-top" src="assets/img/p1.png" alt="Imagen del producto">
    <div class="card-body bg-light">
      <h3 class="card-title">PC COMPLETA</h3>
      <p class="card-text">PC Armada AMD Ryzen 3 5300G 8GB 480GB</p>
      <a href="#" class="btn btn-sm btn-primary">Comprar</a>
      <!-- Botón que abre el modal -->
      <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#modalDetalles1">
        Detalles
      </button>
    </div>
  </div>
</div>

<!-- Modal con los detalles del producto -->
<div class="modal fade" id="modalDetalles1" tabindex="-1" aria-labelledby="modalDetallesLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDetallesLabel1">Detalle del Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <img src="assets/img/p1.png" class="img-fluid mb-3" alt="Producto">
        <p><strong>Nombre:</strong> OPCION4</p>
        <p><strong>Precio:</strong> $25.000</p>
        <p><strong>Descripción:</strong> Componentes
ProcesadorAMD Ryzen 3 5300G 4.2 Ghz AM4
MotherboardA520 / B450 AM4
GraficaIntegrada
Memoria Ram8GB DDR4
Disco SSDSSD 480GB SATA III
GabineteKit - 500W Gen.</p>
        <p><strong>Stock:</strong> Disponible</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a href="#" class="btn btn-primary">Comprar ahora</a>
      </div>
    </div>
  </div>
</div>

         <!-- Tarjeta del producto -->
<div class="col-sm-6 col-lg-3 mb-4">
  <div class="card">
    <img class="card-img-top" src="assets/img/p2.png" alt="Imagen del producto">
    <div class="card-body">
      <h3 class="card-title">PC Gamer AMD Ryzen 7</h3>
      <p class="card-text">PC Armada AMD Ryzen 7 5700G 16GB 480GB</p>
      <a href="#" class="btn btn-sm btn-primary">Comprar</a>
      <!-- Botón que abre el modal -->
      <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#modalDetalles2">
        Detalles
      </button>
    </div>
  </div>
</div>

<!-- Modal con los detalles del producto -->
<div class="modal fade" id="modalDetalles2" tabindex="-1" aria-labelledby="modalDetallesLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDetallesLabel2">Detalle del Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <img src="assets/img/p2.png" class="img-fluid mb-3" alt="Producto">
        <p><strong>Nombre:</strong> OPCION4</p>
        <p><strong>Precio:</strong> $25.000</p>
        <p><strong>Descripción:</strong> Componentes
ProcesadorAMD Ryzen 7 5700G 4.6 Ghz AM4
MotherboardA520 / B450 AM4
GraficaIntegrada
Memoria Ram8GB DDR4 x 2
Disco SSDSSD 480GB SATA III
GabineteGamer
Fuente500 W</p>
        <p><strong>Stock:</strong> Disponible</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a href="#" class="btn btn-primary">Comprar ahora</a>
      </div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-lg-3 mb-4">
  <div class="card">
    <img class="card-img-top" src="assets/img/p3.png" alt="Imagen del producto">
    <div class="card-body">
      <h3 class="card-title">Notebook Asus"</h3>
      <p class="card-text">Notebook Asus X515EA 15.6" Intel I3 1115G4 8GB Ram 256</p>
      <a href="#" class="btn btn-sm btn-primary">Comprar</a>
      <!-- Botón que abre el modal -->
      <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#modalDetalles3">
        Detalles
      </button>
    </div>
  </div>
</div>

<!-- Modal con los detalles del producto -->
<div class="modal fade" id="modalDetalles3" tabindex="-1" aria-labelledby="modalDetallesLabel3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDetallesLabel3">Detalle del Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <img src="assets/img/p3.png" class="img-fluid mb-3" alt="Producto">
        <p><strong>Nombre:</strong> OPCION4</p>
        <p><strong>Precio:</strong> $25.000</p>
        <p><strong>Descripción:</strong> Componentes
ProcesadorAMD Ryzen 3 5300G 4.2 Ghz AM4
MotherboardA520 / B450 AM4
GraficaIntegrada
Memoria Ram8GB DDR4
Disco SSDSSD 480GB SATA III
GabineteKit - 500W Gen.</p>
        <p><strong>Stock:</strong> Disponible</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a href="#" class="btn btn-primary">Comprar ahora</a>
      </div>
    </div>
  </div>
</div>


         <!-- Tarjeta del producto -->
<div class="col-sm-6 col-lg-3 mb-4">
  <div class="card">
    <img class="card-img-top" src="assets/img/p4.png" alt="Imagen del producto">
    <div class="card-body">
      <h3 class="card-title">AMD Ryzen 7 8700F</h3>
      <p class="card-text">Micro AMD Ryzen 7 8700F 5 Ghz AM5</p>
      <a href="#" class="btn btn-sm btn-primary">Comprar</a>
      <!-- Botón que abre el modal -->
      <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#modalDetalles4">
        Detalles
      </button>
    </div>
  </div>
</div>

<!-- Modal con los detalles del producto -->
<div class="modal fade" id="modalDetalles4" tabindex="-1" aria-labelledby="modalDetallesLabel4" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDetallesLabel1">Detalle del Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <img src="assets/img/p4.png" class="img-fluid mb-3" alt="Producto">
        <p><strong>Nombre:</strong> OPCION4</p>
        <p><strong>Precio:</strong> $25.000</p>
        <p><strong>Descripción:</strong> General
ModeloAMD Ryzen 7 8700F
FamiliaAMD Ryzen 7
Nucleos8
Hilos16
Frecuencia4.1 GHz (Base) / 5 GHz (Turbo)
Proceso de Fabricacion5 nm
Grafica IntegradaNo tiene gráfica integrada
SocketAM5</p>
        <p><strong>Stock:</strong> Disponible</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a href="#" class="btn btn-primary">Comprar ahora</a>
      </div>
    </div>
  </div>
</div>
            </div>
        </div>
    </main>

