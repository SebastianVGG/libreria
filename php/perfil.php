<?php
include("config.php");
session_start();
if (!isset($_SESSION['correo'])) {
  header('Location: login.php');
} else {
  if (isset($_POST['btn_editar']))
      if (isset($_POST['nombre_form']) && isset($_POST['apellidos_form']) && isset($_POST['correo_form']) && isset($_POST['pass_form'])) {

        $nombre = $_POST['nombre_form'];
        $apellidos = $_POST['apellidos_form'];
        $correo = $_POST['correo_form'];
        $password = $_POST['pass_form'];
        $sql = "UPDATE usuarios SET  nombre= '$nombre',apellidos= '$apellidos',correo = '$correo', pass = '$password' WHERE id = " . intval($_SESSION['id_']);
        if (mysqli_query($link, $sql)) {
          $_SESSION['nombre'] = $nombre;
          $_SESSION['apellidos'] = $apellidos;
          $_SESSION['correo'] = $correo;
          $_SESSION['pass'] = $password;
          $html = '';
          $html .= '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se actualizo correctamente. </strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        } else {
          $html = '';
          $html .= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error en el servidor. </strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
      } else {
        $html = '';
        $html .= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Valores invalidos. </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      
    }
    

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="../css/perfil.css" />
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Document</title>
  </head>

  <body>
    <!-- nav -->
    <div>
      <nav class="navbar sticky-top navbar-dark bg-primary justify-content-between px-5">
        <a href="../index.php"><img class="animate__animated animate__backInRight animate__slow" src="../images/icons/LogoBGO.png" /></a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-light mx-2" type="submit">Search</button>
        </form>
      </nav>
    </div>
    <div>
      <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-primary px-5">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto navbar-nav-scroll">
            <li class="nav-item dropdown itemMar">
              <a class="nav-link dropdown-toggle-split text-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Libros
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="categoria.php?categoria=novedades">Novedades</a></li>
                <li><a class="dropdown-item" href="categoria.php?categoria=novedades_ebook">Novedades Ebooks</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown itemMar">
              <a class="nav-link dropdown-toggle-split text-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Adolescentes
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="categoria.php?categoria=terror">Terror</a></li>
                <li><a class="dropdown-item" href="categoria.php?categoria=ciencia_ficcion">Ciencia ficción</a></li>
                <li><a class="dropdown-item" href="categoria.php?categoria=romance">Romance</a></li>
                <li><a class="dropdown-item" href="categoria.php?categoria=fantasia">Fantasía</a></li>
                <li><a class="dropdown-item" href="categoria.php?categoria=clasico">Clásicos</a></li>
                <li><a class="dropdown-item" href="categoria.php?categoria=accion">Acción</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown itemMar">
              <a class="nav-link dropdown-toggle-split text-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ebooks
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="categoria.php?categoria=novedades_ebook">Novedades</a></li>
                <li><a class="dropdown-item" href="categoria.php?categoria=ebook_terror">Terror</a></li>
                <li><a class="dropdown-item" href="categoria.php?categoria=ebook_ciencia_ficcion">Ciencia ficción</a></li>
                <li><a class="dropdown-item" href="categoria.php?categoria=ebook_romance">Romance</a></li>
                <li><a class="dropdown-item" href="categoria.php?categoria=ebook_fantasia">Fantasía</a></li>
                <li><a class="dropdown-item" href="categoria.php?categoria=ebook_clasico">Clásicos</a></li>
                <li><a class="dropdown-item" href="categoria.php?categoria=ebook_accion">Acción</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown itemMar">
              <a class="nav-link dropdown-toggle-split text-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Otros
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="categoria.php?categoria=no_ficcion">No ficción</a></li>
                <li><a class="dropdown-item" href="categoria.php?categoria=novelas_cuentos">Novelas y Cuentos</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="d-inline">
          <ul class="navbar-nav navbar-nav-scroll d-flex-inline" style="text-align:right">
            <li class="nav-item itemMar border border-2 border-white">
              <a class="nav-link text-light text-center" href="carrito.php" id="navbarScrollingDropdown" role="button" aria-expanded="false">
                <img src="../images/icons/IconCarrito.png" class="MiniIcon">
                Carrito
              </a>
            </li>
            <br>
            <li class="nav-item itemMar border border-2 border-white">
              <a class="nav-link text-light text-center" href="login.php" id="navbarScrollingDropdown" role="button" aria-expanded="false">
                <img src="../images/icons/IconPerfil.png" class="MiniIcon">
                Mi cuenta
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <header class="sticky-top" id="header_">

      <?php
      if (isset($html)) {
        echo $html;
      }
      ?>

    </header>


    <div id="container_principal" class="container">

      <div class="row row_principal">
      <?php 
              if($_SESSION['tipo'] == 'administrador')
                echo '<h3 class="text-center mt-1">ADMINISTRADOR</h3>'; 
            ?>
        <div class="col">
        <section>
          <div class="card mt-5">

            <?php 
              if($_SESSION['url'] != 'none'){
                $url = $_SESSION['url'];
                echo '<img src='."$url".' class="card-img-top mt-2">';
              }
              else
              echo '<img src="https://www.softzone.es/app/uploads-softzone.es/2018/04/guest.png" class="card-img-top mt-2">';
            ?>

            <div class="card-body">
              <h5 class="card-title text-center"><?= $_SESSION['nombre'] ?> <?= $_SESSION['apellidos'] ?></h5>
              <p class="card-text text-center">Correo: <?= $_SESSION['correo'] ?></p>
              <div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar perfil</button></div>
            </div>
          </div>
        </section></div>
        <div class="col col_btn"><section><a href="session/logout.php"><button class="btn btn-info btn_logout" type="submit"> Cerrar Sesión </button></a></section></div>
        <div class="col col_btn"><section><div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">Agregar Libros</button></div></section></div>
        <div class="col col_btn"><section><div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#update">Editar Libros</button></div></section></div>
        <div class="col col_btn"><section><div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#delete">Eliminar libros</button></div></section></div>
      </div>
      
    </div>

              <!-- Editar Perfil -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar cuenta</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="post" class="form_perfil" novalidate>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Nombre</label>
                <input type="text" name="nombre_form" value="<?= $_SESSION['nombre'] ?>" class="form-control" id="nombre_id" required>
                <div class="invalid-feedback">Escribe un nombre.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Apellidos</label>
                <input type="text" name="apellidos_form" value="<?= $_SESSION['apellidos'] ?>" class="form-control" id="apellidos_id" required>
                <div class="invalid-feedback">Escribe tus apellidos.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Correo</label>
                <input type="email" name="correo_form" value="<?= $_SESSION['correo'] ?>" class="form-control" id="correo_id" required>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Password</label>
                <input type="password" name="pass_form" class="form-control" id="pass_id" required>
              </div>
              <div>
              <button name="btn_editar" type="submit" class="btn btn-primary">Guardar</button>
              <button type="button"  class="btn btn-secondary btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>

            </form>
          </div>
          <div class="modal-footer">


          </div>
        </div>
      </div>
    </div>
              <!-- Agregar Libros -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="add" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="add">Agregar Libros</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="post" class="form_perfil" novalidate>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Titulo</label>
                <input type="text" name="add_titulo" class="form-control" id="nombre_id" required>
                <div class="invalid-feedback">Escribe un nombre.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">ISBN</label>
                <input type="text" name="add_isbn" class="form-control" id="nombre_id" required>
                <div class="invalid-feedback">Escribe un nombre.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Idioma</label>
                <input type="text" name="add_idioma" class="form-control" id="nombre_id" required>
                <div class="invalid-feedback">Escribe un nombre.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Páginas</label>
                <input type="text" name="add_paginas" class="form-control" id="nombre_id" required>
                <div class="invalid-feedback">Escribe un nombre.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Fecha</label>
                <input type="text" name="add_fecha" class="form-control" id="apellidos_id" required>
                <div class="invalid-feedback">Escribe tus apellidos.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Descripción</label>
                <input type="text" name="add_descripcion" class="form-control" id="apellidos_id" required>
                <div class="invalid-feedback">Escribe tus apellidos.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Formato</label>
                <input type="text" name="add_formato" class="form-control" id="apellidos_id" required>
                <div class="invalid-feedback">Escribe tus apellidos.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Correo</label>
                <input type="email" name="correo_form" class="form-control" id="correo_id" required>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Password</label>
                <input type="password" name="pass_form" class="form-control" id="pass_id" required>
              </div>
              <div>
              <button name="btn_editar" type="submit" class="btn btn-primary">Guardar</button>
              <button type="button"  class="btn btn-secondary btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>

            </form>
          </div>
          <div class="modal-footer">


          </div>
        </div>
      </div>
    </div>
              <!-- Editar Libros -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="update" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="update">Editar cuenta</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="post" class="form_perfil" novalidate>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Nombre</label>
                <input type="text" name="nombre_form" value="<?= $_SESSION['nombre'] ?>" class="form-control" id="nombre_id" required>
                <div class="invalid-feedback">Escribe un nombre.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Apellidos</label>
                <input type="text" name="apellidos_form" value="<?= $_SESSION['apellidos'] ?>" class="form-control" id="apellidos_id" required>
                <div class="invalid-feedback">Escribe tus apellidos.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Correo</label>
                <input type="email" name="correo_form" value="<?= $_SESSION['correo'] ?>" class="form-control" id="correo_id" required>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Password</label>
                <input type="password" name="pass_form" class="form-control" id="pass_id" required>
              </div>
              <div>
              <button name="btn_editar" type="submit" class="btn btn-primary">Guardar</button>
              <button type="button"  class="btn btn-secondary btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>

            </form>
          </div>
          <div class="modal-footer">


          </div>
        </div>
      </div>
    </div>
              <!-- Eliminar Libros -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="delete">Editar cuenta</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="post" class="form_perfil" novalidate>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Nombre</label>
                <input type="text" name="nombre_form" value="<?= $_SESSION['nombre'] ?>" class="form-control" id="nombre_id" required>
                <div class="invalid-feedback">Escribe un nombre.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Apellidos</label>
                <input type="text" name="apellidos_form" value="<?= $_SESSION['apellidos'] ?>" class="form-control" id="apellidos_id" required>
                <div class="invalid-feedback">Escribe tus apellidos.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Correo</label>
                <input type="email" name="correo_form" value="<?= $_SESSION['correo'] ?>" class="form-control" id="correo_id" required>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Password</label>
                <input type="password" name="pass_form" class="form-control" id="pass_id" required>
              </div>
              <div>
              <button name="btn_editar" type="submit" class="btn btn-primary">Guardar</button>
              <button type="button"  class="btn btn-secondary btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>

            </form>
          </div>
          <div class="modal-footer">


          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <footer>
      <div class="container-fluid">
        <div class="row d-flex justify-content-center text-center pt-3 networks">
          <!-- fb -->
          <a href="#" class="bg-facebook"><img data-aos="flip-left" src="../images/icons/facebook.svg" /></a>
          <!-- tw -->
          <a href="#" class="bg-twitter mx-3"><img data-aos="flip-left" src="../images/icons/twitter.svg" /></a>
          <!-- Dbb -->
          <a href="#" class="bg-dribble">
            <img data-aos="flip-left" src="../images/icons/dribbble.svg" />
          </a>
        </div>
        <div class="
              d-flex flex-row
                justify-content-center
                text-center
                pt-2
                text-white
                links_
              ">
          <a href="../index.php" class="link-light"><span>Inicio</span></a>
          <a href="../acerca.html" class="link-light px-4"><span>Acerca de</span></a>
          <a href="../contactanos.html" class="link-light"><span>Contáctanos</span></a>
        </div>
        <div class="row text-center pt-2 text-white">
          <p>Aviso de privacidad | Términos y condiciones</p>
          <p>
            Los precios publicados en esta tienda están sujetos a cambios sin
            previo aviso y solo son aplicables para ventas en línea.
          </p>
          <p>Algunos títulos están sujetos a disponibilidad.</p>
          <p>Todos los Derechos Reservados</p>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/perfil.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  </body>

  </html>

<?php } ?>