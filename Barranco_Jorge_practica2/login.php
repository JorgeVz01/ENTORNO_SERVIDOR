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
  <style>
      body {
        background-image: url("./img/fondo1.jpg");
        background-size: cover; /* Ajusta el tamaño de la imagen para cubrir todo el fondo */
      }
    </style>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-5">
        <h1>Acceso Clientes</h1>

          <!-- Login Form -->
          <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
              <?php
              // Verificar si se ha pasado un parámetro GET indicando que la contraseña es incorrecta
              if (isset($_GET["error"]) && $_GET["error"] === "incorrect_password") {
                  // Mostrar mensaje de error dentro del card
                  echo '<div class="alert alert-danger" role="alert">
                            Contraseña incorrecta. Por favor, inténtalo de nuevo.
                        </div>';
              }
              ?>
              <form action="./Usuarios/loginUsuarios.php" method="POST">
                <div class="mb-3">
                  <label for="loginEmail" class="form-label"
                    >Email address</label
                  >
                  <input
                    type="email"
                    class="form-control"
                    id="loginEmail"
                    name="correo"
                    aria-describedby="emailHelp"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="loginPassword" class="form-label">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="loginPassword"
                    name="contrasena"
                    required
                  />
                </div>

                <div class="col-md-6">
                  
                  <p>¿No tienes una cuenta aún?</p>
                  <a href="register.php" >
                     Registrate aquí.
                  </a>
                </div>
                <button type="submit" class=" mt-3 btn btn-primary">Login</button>
                <p class="mt-2">Será redirigido automaticamente a compras/ventas en su caso</p>
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
