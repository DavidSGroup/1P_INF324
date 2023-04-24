<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/pregunta5/assets/css/bootstrap.min.css">
  <title>Autenticacion</title>
</head>

<body>
  <form action="registra.php" method="POST">
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">

                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  <p class="text-white-50 mb-5">Por favor ingrese su pasword y contraseña!</p>

                  <div class="form-outline form-white mb-4">
                    <input type="text" id="usuario" name="usuario" class="form-control form-control-lg" />
                    <label class="form-label" for="texto">Usuario</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" id="typePasswordX" name="pass" class="form-control form-control-lg" />
                    <label class="form-label" for="typePasswordX">Password</label>
                  </div>


                  <button class="btn btn-outline-light btn-lg px-5" type="submit">Ingresar</button>



                </div>



              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </form>

</body>

</html>