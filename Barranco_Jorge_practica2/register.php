<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login/Register</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-5">
        <h1>Acceso Clientes</h1>
          <!-- Registration Form -->
          <div class="card mt-3">
            <div class="card-header">Register</div>
            <div class="card-body">
              <?php
                // Verificar si se ha pasado un parámetro GET indicando que el correo está repetido
                if (isset($_GET["error"]) && $_GET["error"] === "repeated_email") {
                    // Mostrar mensaje de error dentro del card
                    echo '<div class="alert alert-danger" role="alert">
                              El correo electrónico ya está registrado. Por favor, utiliza otro.
                          </div>';
                }
              ?>
              <form action="./Usuarios/registerUsuarios.php" method="POST">
                <div class="mb-3">
                  <label for="registerName" class="form-label">Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="registerName"
                    name="nombre"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="registerEmail" class="form-label"
                    >Email address</label
                  >
                  <input
                    type="email"
                    class="form-control"
                    id="registerEmail"
                    name="correo"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="registerPassword" class="form-label"
                    >Password</label
                  >
                  <input
                    type="password"
                    class="form-control"
                    id="registerPassword"
                    name="contrasena"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="registerType" class="form-label">Tipo de usuario</label>
                  <select class="form-select" id="registerType" name="tipoUsuario">
                      <option value="Comprador">Comprador</option>
                      <option value="Vendedor">Vendedor</option>
                  </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          <a href="index.html" class=" m-2 btn btn-secondary btn-lg btn-block"
            >Volver a inicio
          </a>

        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
