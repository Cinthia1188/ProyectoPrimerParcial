<!DOCTYPE html>
<html>
<br>
<br>
<br>
<br>
<br>
<br>


<head>
  <title>Login</title>
  <style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
  }

  .login-box {
    width: 300px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  }

  .login-box h2 {
    text-align: center;
    color: #6a1b9a;
    /* Color lila */
  }

  .login-box input[type="text"],
  .login-box input[type="password"],
  .login-box input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
  }

  .login-box input[type="submit"] {
    background-color: #9c27b0;
    /* Color lila oscuro */
    color: #fff;
    border: none;
    cursor: pointer;
  }

  .login-box input[type="submit"]:hover {
    background-color: #ab47bc;
    /* Cambio de tono al pasar el cursor */
  }

  .user-image {
    width: 100px;
    height: 100px;
    margin: 0 auto;
    display: block;
    border-radius: 50%;
  }

  .btn {
    display: inline-block;
    background-color: #7d2181;
    color: #fff;
    padding: 10px 30px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s ease;
  }
  </style>
</head>

<body>

  <?php
// Aquí podrías agregar código para procesar el inicio de sesión si se envió el formulario
// Por ejemplo, verificar las credenciales y redirigir al usuario si son correctas
// o mostrar un mensaje de error si no lo son
?>

  <div class="login-box">
    <h2>Login</h2>
    <!-- Imagen de usuario -->
    <center><img src="../img/logo.jpg" alt="" width="100" height="100"></center>
    <br>
    <br>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header text-center">
              <center>
                <h4>Iniciar Sesión</h4>
              </center>
            </div>
            <div class="card-body">
              <form action="validar_login.php" method="POST">
                <div class="mb-3">
                  <label for="nombreusuario" class="form-label">Nombre de Usuario</label>
                  <input type="text" class="form-control" id="nombreusuario" name="nombreusuario" required>
                </div>
                <div class="mb-3">
                  <label for="pas" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="pas" name="pas" required>
                </div>
                <center><button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button></center>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>

</html>