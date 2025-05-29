
      <section id="login" class="container py-5 py-lg-6">
        <h2 class="text-center">LOGIN</h2>
        <p class="text-center">
           
        </p>
   
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h3 class="text-center mb-4">Iniciar Sesión</h3>
            <form action="procesar_login.php" method="POST" id="loginForm">
              <div class="mb-3">
                <label for="usuario" class="form-label">Usuario o correo</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>

              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Ingresar</button>
                <button type="reset" class="btn btn-secondary">Limpiar</button>
              </div>

              <div class="text-center mt-3">
                <a href="registrarse">¿No tienes cuenta? Regístrate</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
