
  </div>
  
          <section id="quienes_somos" class="container py-5 py-lg-6">
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h3 class="card-title mb-4 text-center">Registro de Usuario</h3>
            <form action="procesar_registro.php" method="POST" id="registroForm">
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre completo</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <div class="mb-3">
                <label for="confirmar" class="form-label">Confirmar contraseña</label>
                <input type="password" class="form-control" id="confirmar" name="confirm_password" required>
              </div>

              <!-- Botones -->
              <div class="d-grid gap-2 d-md-flex justify-content-md-between">
                <button type="submit" class="btn btn-primary">Registrarse</button>
                <button type="reset" class="btn btn-secondary">Limpiar</button>
                <a href="principal" class="btn btn-danger">Cancelar</a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    </section> 
    