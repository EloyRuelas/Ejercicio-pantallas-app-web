<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <title>Registro Alumnos</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand text-white">Escuela</a>
            <button class="navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav mr-auto">
                    <!--<li class="navbar-item active">
                        <a href="#" class="nav-link">Inicio</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="#" class="nav-link">Posts</a>
                    </li>-->
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="desplegable" href="#">
                            Alumnos
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="registroAlumnos.blade.php">Registar</a>
                            <a class="dropdown-item" href="tablaAlumnos.blade.php">Ver Tabla</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="desplegable" href="#">
                            Maestros
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item">Registar</a>
                            <a class="dropdown-item">Ver Tabla</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="desplegable" href="#">
                            Materias
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item">Registar</a>
                            <a class="dropdown-item">Ver Tabla</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="desplegable" href="#">
                            Grupos
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item">Registar</a>
                            <a class="dropdown-item">Ver Tabla</a>
                        </div>
                    </li>
                </ul>
                <a href="welcome.blade.php" class="nav-link  ">Salir</a>
            </div>
        </nav>
    </div>
    <div class="container  align-items-center login-container">
    <form>
            <div class="form-group mt-4">
                <label for="exampleInputEmail1">Direccion de correo electronico</label>
                <br>
                <input type="email" class="form-control-md " id="exampleInputEmail1" aria-describedby="emailHelp">
                <br>
                <small id="emailHelp" class="form-text-md text-muted">Nunca compartiremos tu correo con nadie mas.</small>
              </div>
      
              <div class="form-group">
                  <label for="inputName">Nombre</label>
                  <br>
                  <input type="text" class="form-control-md" id="inputName" aria-describedby="NameHelp">
              </div>

              <div class="form-group">
                <label for="inputApellidos">Apellidos</label>
                <br>
                <input type="text" class="form-control-md" id="inputApellidos" aria-describedby="ApellidosHelp">
            </div>
              <div class="form-group">
                <label for="inputSemestre">Semestre</label>
                <br>
                <input type="text" class="form-control-md" id="inputSemestre" aria-describedby="ApellidosHelp">
            </div>

              <button type="submit" class="btn btn-primary" onclick="menu.blade.php">Enviar</button>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>