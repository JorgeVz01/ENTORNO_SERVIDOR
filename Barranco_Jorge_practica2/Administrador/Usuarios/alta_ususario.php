<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Usuario</title>
    <!-- Enlace al archivo CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Alta de Usuario</h5>
              <form action="./Proceso/procesar_alta_usuario.php" method="POST">
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
            </div>
        </div>
    </div>

    <!-- Scripts JS u otras inclusiones aquí -->

    <!-- Enlace al archivo JS de Bootstrap (opcional si lo necesitas) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
