<?php
include("config.php");
session_start();
if (!isset($_SESSION['correo'])) {
  header('Location: login.php');
} else {
  // EDITAR PERFIL PHP
  if (isset($_POST['btn_editar']))
    if (isset($_POST['nombre_form']) && isset($_POST['apellidos_form']) && isset($_POST['correo_form']) && isset($_POST['pass_form'])) {
      if($_SESSION['pass'] == $_POST['pass_form']){
        $nombre = $_POST['nombre_form'];
        $apellidos = $_POST['apellidos_form'];
        $correo = $_POST['correo_form'];
        $password = $_POST['pass_form'];
  
        $sql = "UPDATE usuarios SET  nombre= '$nombre',apellidos= '$apellidos',correo = '$correo' WHERE id = " . intval($_SESSION['id_']);
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
      }else{
        $html = '';
        $html .= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Contraseña incorrecta. </strong>
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

  // AGREGAR LIBROS PHP
  if (isset($_POST['btn_add']))
    if (isset($_POST['add_titulo']) && isset($_POST['add_isbn']) && isset($_POST['add_idioma']) && isset($_POST['add_paginas']) && isset($_POST['add_fecha']) && isset($_POST['add_descripcion']) && isset($_POST['select_formato']) && isset($_POST['add_img']) && isset($_POST['add_precio']) && isset($_POST['select_autor']) && isset($_POST['select_categoria'])) {
      $titulo = $isbn = $idioma = $paginas = $fecha = '';
      $descripcion = $formato = $img = $precio = $autor = $categoria = '';
      $titulo = $_POST['add_titulo'];
      $isbn = $_POST['add_isbn'];
      $idioma = $_POST['add_idioma'];
      $paginas = $_POST['add_paginas'];
      $fecha = $_POST['add_fecha'];
      $descripcion = $_POST['add_descripcion'];
      $formato = $_POST['select_formato'];
      $img = $_POST['add_img'];
      $precio = $_POST['add_precio'];
      $autor = $_POST['select_autor'];
      $categoria = $_POST['select_categoria'];
      $sql = "INSERT INTO libro (id_autor,id_categoria, titulo, isbn, idioma, paginas, fecha, descripcion, formato, img, precio) VALUES ($autor,$categoria, '$titulo', '$isbn', '$idioma', '$paginas', '$fecha', '$descripcion', '$formato', '$img', $precio)";
      if (mysqli_query($link, $sql)) {
        $html = '';
        $html .= '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se registro el libro correctamente. </strong>
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

  // ELIMINAR LIBROS PHP
  if (isset($_POST['btn_delete'])) {
    $id_delete = $_POST['btn_delete'];
    $sql = "DELETE FROM libro WHERE id=" . intval($id_delete);
    if (mysqli_query($link, $sql)) {
      $html = '';
      $html .= '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Se eliminó el libro correctamente. </strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    } else {
      $html = '';
      $html .= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error en el servidor. </strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
  }
  // ACTUALIZAR LIBROS PHP
  if (isset($_POST['btn_upd_save']))
    if (isset($_POST['upd_titulo']) && isset($_POST['upd_isbn']) && isset($_POST['upd_idioma']) && isset($_POST['upd_paginas']) && isset($_POST['upd_fecha']) && isset($_POST['upd_descripcion']) && isset($_POST['select_formato_upd']) && isset($_POST['upd_img']) && isset($_POST['upd_precio']) && isset($_POST['select_autor_upd']) && isset($_POST['select_categoria_upd'])) {
      $titulo = $isbn = $idioma = $paginas = $fecha = '';
      $descripcion = $formato = $img = $precio = $autor = $categoria = '';
      $titulo = $_POST['upd_titulo'];
      $isbn = $_POST['upd_isbn'];
      $idioma = $_POST['upd_idioma'];
      $paginas = $_POST['upd_paginas'];
      $fecha = $_POST['upd_fecha'];
      $descripcion = $_POST['upd_descripcion'];
      $formato = $_POST['select_formato_upd'];
      $img = $_POST['upd_img'];
      $precio = $_POST['upd_precio'];
      $autor = $_POST['select_autor_upd'];
      $categoria = $_POST['select_categoria_upd'];
      $sql = "UPDATE libro SET  id_autor=".intval($autor).", id_categoria= ".intval($categoria).", titulo = '$titulo', isbn = '$isbn', idioma = '$idioma', paginas = '$paginas', fecha = '$fecha', descripcion = '$descripcion', formato = '$formato', img = '$img', precio = ".floatval($precio)." WHERE id = " . intval($_POST['btn_upd_save']);
      if (mysqli_query($link, $sql)) {
        
        $html = '';
        $html .= '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se actualizo el libro correctamente. </strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        $_POST['btn_select_update'] = null;
      } else {
        $html = '';
        $html .= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>'.$autor.' '.$categoria.' '.$_POST['btn_upd_save'].'Error en el servidor. '.mysqli_error($link).' </strong>
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
              <a class="nav-link text-light text-center" href="perfil.php" id="navbarScrollingDropdown" role="button" aria-expanded="false">
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
        if ($_SESSION['tipo'] == 'administrador')
          echo '<h3 class="text-center mt-1">ADMINISTRADOR</h3>';
        ?>
        <div class="col">
          <section>
            <div class="card mt-5">

              <?php
              if ($_SESSION['url'] != 'none') {
                $url = $_SESSION['url'];
                echo '<img src=' . "$url" . ' class="card-img-top mt-2">';
              } else
                echo '<img src="https://www.softzone.es/app/uploads-softzone.es/2018/04/guest.png" class="card-img-top mt-2">';
              ?>

              <div class="card-body">
                <h5 class="card-title text-center"><?= $_SESSION['nombre'] ?> <?= $_SESSION['apellidos'] ?></h5>
                <p class="card-text text-center">Correo: <?= $_SESSION['correo'] ?></p>
                <div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar perfil</button></div>
              </div>
            </div>
          </section>
        </div>
        <div class="col">
          <div class="row row_btn_cerrar">
            <section>
              <div><a href="session/logout.php"><button class="btn btn-info btn_logout" type="submit"> Cerrar Sesión </button></a></div>
            </section>
          </div>
          <?php if($_SESSION['tipo'] == 'administrador'){ ?>
          <div class="row row_btn_add">
            <section>
              <div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">Agregar Libros</button></div>
            </section>
          </div>
          <div class="row row_btn_upd">
            <section>
              <div><button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#update">Eliminar y editar Libros</button></div>
            </section>
          </div>
       <?php } ?>
        </div>
      </div>

    </div>

    <!-- Editar Perfil -->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <div class="invalid-feedback">Escribe un correo electronico.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Password</label>
                <input type="password" name="pass_form" class="form-control" id="pass_id" required>
                <div class="invalid-feedback">Escribe tu contraseña.</div>
              </div>
              <div>
                <button name="btn_editar" type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-secondary btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>

            </form>
          </div>
          <div class="modal-footer">


          </div>
        </div>
      </div>
    </div>
    <!-- Agregar Libros -->
    <div class="modal fade modal_add" id="add" tabindex="-1" aria-labelledby="add" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
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
                <div class="invalid-feedback">Escribe el titulo del libro.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">ISBN</label>
                <input type="text" name="add_isbn" class="form-control" id="nombre_id" required>
                <div class="invalid-feedback">Escribe el ISBN del libro.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Idioma</label>
                <input type="text" name="add_idioma" class="form-control" id="nombre_id" required>
                <div class="invalid-feedback">Escribe el idioma del libro.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Páginas</label>
                <input type="text" name="add_paginas" class="form-control" id="nombre_id" required>
                <div class="invalid-feedback">Número de páginas del libro.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Fecha</label>
                <input type="text" name="add_fecha" class="form-control" id="apellidos_id" required>
                <div class="invalid-feedback">Fecha del libro.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Descripción</label>
                <input type="text" name="add_descripcion" class="form-control" id="apellidos_id" required>
                <div class="invalid-feedback">Escribe la descripción del libro.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">URL</label>
                <input type="text" name="add_img" class="form-control" id="apellidos_id" required>
                <div class="invalid-feedback">Coloca el URL de la imagen del libro.</div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label form-label">Precio</label>
                <input type="text" name="add_precio" class="form-control" id="apellidos_id" required>
                <div class="invalid-feedback">Coloca el precio del libro.</div>
              </div>
              <div class="mb-3">
                <select name="select_formato" class="form-select" id="select_" required>
                  <option disabled selected value="">
                    Formato
                  </option>
                  <option value="fisico">Fisico</option>
                  <option value="ebook">Ebook</option>
                </select>
                <div class="invalid-feedback">Elige Formato.</div>
              </div>
              <div class="mb-3">
                <select name="select_autor" class="form-select" id="select_" required>
                  <option disabled selected value="">
                    Autor
                  </option>
                  <?php
                  $sql = "SELECT * FROM autor";
                  $query = $link->query($sql);
                  $html_autor = '';
                  if ($query->num_rows > 0)
                    while ($row = $query->fetch_assoc()) {
                      $last_id = $row['id'];
                      $nomber = $row['nombre'];
                      $apellidos = $row['apellidos'];
                      $html_autor .= '<option value="' . $last_id . '">' . $nomber . ' ' . $apellidos . '</option>';
                    }
                  echo $html_autor;
                  ?>

                </select>
                <div class="invalid-feedback">Elige Autor.</div>
              </div>
              <div class="mb-3">
                <select name="select_categoria" class="form-select" id="select_" required>
                  <option disabled selected value="">
                    Categoria
                  </option>
                  <?php
                  $sql = "SELECT * FROM categoria";
                  $query = $link->query($sql);
                  $html_categoria = '';
                  if ($query->num_rows > 0)
                    while ($row = $query->fetch_assoc()) {
                      $last_id = $row['id_primary_categoria'];
                      $nomber = $row['nombre'];
                      $html_categoria .= '<option value="' . $last_id . '">' . $nomber . '</option>';
                    }
                  echo $html_categoria;
                  ?>
                </select>
                <div class="invalid-feedback">Elige Categoria.</div>
              </div>
              <div>
                <button name="btn_add" type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-secondary btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>

            </form>
          </div>
          <div class="modal-footer">


          </div>
        </div>
      </div>
    </div>
    <!-- ELIMINAR y editar Libros -->
    <div class="modal fade" id="update" tabindex="-1" aria-labelledby="update" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable dialog_update">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="update">Editar o eliminar libros</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Accion(eliminar)</th>
                    <th scope="col">Accion(Editar)</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM libro";
                  $query = $link->query($sql);
                  if ($query->num_rows > 0)
                    while ($row = $query->fetch_assoc()) :
                      $last_id = $row['id'];
                      $titulo = $row['titulo'];
                      $isbn = $row['isbn'];
                      $get_id_autor = $row['id_autor'];
                      $get_autor = $link->query("SELECT * FROM autor WHERE id = $get_id_autor");
                      $autor = $get_autor->fetch_all(MYSQLI_ASSOC);
                  ?>
                    <tr>
                      <td><?= $last_id ?></td>
                      <td><?= $titulo ?></td>
                      <td><?= $isbn ?></td>
                      <td><?= $autor[0]['nombre'] ?></td>
                      <td><button type="submit" name="btn_delete" class="btn btn-danger" value="<?= $last_id ?>">Eliminar</button></td>
                      <td><button type="submit" name="btn_select_update" class="btn btn-success " value="<?= $last_id ?> ">Editar</button></td>
                    </tr>
                  <?php endwhile ?>
                </tbody>
              </table>

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- EDITAR Libros -->
    <?php
    if (isset($_POST['btn_select_update'])) {
      $row = $titulo = $isbn = $idioma = $paginas = $fecha = '';
      $descripcion = $formato = $img = $precio = $autor = '';
      $id_select_update = $_POST['btn_select_update'];
      $sql = "SELECT * FROM libro WHERE id=" . intval($id_select_update);
      $query = $link->query($sql);
      if ($query->num_rows > 0) {
        $row = $query->fetch_assoc();
        $titulo = $row['titulo'];
        $isbn = $row['isbn'];
        $idioma = $row['idioma'];
        $paginas = $row['paginas'];
        $fecha = $row['fecha'];
        $descripcion = $row['descripcion'];
        $formato = $row['formato'];
        $img = $row['img'];
        $precio = $row['precio'];

        $get_id_autor = $row['id_autor'];
        $get_autor = $link->query("SELECT * FROM autor WHERE id = $get_id_autor");
        $autor = $get_autor->fetch_all(MYSQLI_ASSOC);

        $get_id_categoria = $row['id_categoria'];
        $get_categoria = $link->query("SELECT * FROM categoria WHERE id_primary_categoria = $get_id_categoria");
        $categoria = $get_categoria->fetch_all(MYSQLI_ASSOC);
      } else {
        $html = '';
        $html .= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error en el servidor. </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
      }

    ?>
      <section class="sct_upd mb-4">
        <form action="" method="post" class="form_perfil form_upd mt-3" novalidate>
          <div class="mb-3 form-floating">

            <input type="text" name="upd_titulo" value="<?= $titulo ?>" placeholder="Titulo" class="form-control" id="nombre_id" required>
            <label for="recipient-name" class="col-form-label form-label">Titulo</label>
            <div class="invalid-feedback">Escribe el titulo del libro.</div>
          </div>
          <div class="mb-3 form-floating">

            <input type="text" value="<?= $isbn ?>" placeholder="ISBN" name="upd_isbn" class="form-control" id="nombre_id" required>
            <label for="recipient-name" class="col-form-label form-label">ISBN</label>
            <div class="invalid-feedback">>Escribe el ISBN del libro.</div>
          </div>
          <div class="mb-3 form-floating">

            <input type="text" value="<?= $idioma ?>" placeholder="Idioma" name="upd_idioma" class="form-control" id="nombre_id" required>
            <label for="recipient-name" class="col-form-label form-label">Idioma</label>
            <div class="invalid-feedback">Escribe el idioma del libro.</div>
          </div>
          <div class="mb-3 form-floating">

            <input type="text" value="<?= $paginas ?>" placeholder="Páginas" name="upd_paginas" class="form-control" id="nombre_id" required>
            <label for="recipient-name" class="col-form-label form-label">Páginas</label>
            <div class="invalid-feedback">Número de páginas del libro.</div>
          </div>
          <div class="mb-3 form-floating">

            <input type="text" value="<?= $fecha ?>" placeholder="Fecha" name="upd_fecha" class="form-control" id="apellidos_id" required>
            <label for="recipient-name" class="col-form-label form-label">Fecha</label>
            <div class="invalid-feedback">Fecha del libro.</div>
          </div>
          <div class="mb-3 form-floating">

            <textarea value="<?= $descripcion ?>" placeholder="Descripción" name="upd_descripcion" class="form-control" required><?= $descripcion ?></textarea>
            <label for="recipient-name" class="col-form-label form-label">Descripción</label>
            <div class="invalid-feedback">Escribe la descripción del libro.</div>
          </div>
          <div class="mb-3 form-floating">

            <input type="text" value="<?= $img ?>" placeholder="URL" name="upd_img" class="form-control" id="apellidos_id" required>
            <label for="recipient-name" class="col-form-label form-label">URL</label>
            <div class="invalid-feedback">Coloca el URL de la imagen del libro.</div>
          </div>
          <div class="mb-3 form-floating">

            <input type="text" value="<?= $precio ?>" placeholder="Precio" name="upd_precio" class="form-control" id="apellidos_id" required>
            <label for="recipient-name" class="col-form-label form-label">Precio</label>
            <div class="invalid-feedback">Coloca el precio del libro.</div>
          </div>
          <div class="mb-3">
            <select name="select_formato_upd" class="form-select" id="select_" required>
              <option selected value="<?= $formato ?>"><?= $formato ?>
              </option>
              <option value="fisico">Fisico</option>
              <option value="ebook">Ebook</option>
            </select>
            <div class="invalid-feedback">Elige Formato.</div>
          </div>
          <div class="mb-3">
            <select name="select_autor_upd" class="form-select" id="select_" required>
              <option selected value="<?= $autor[0]['id'] ?>"><?= $autor[0]['nombre'] ?>
              </option>
              <?php
              $sql = "SELECT * FROM autor";
              $query = $link->query($sql);
              $html_autor = '';
              if ($query->num_rows > 0)
                while ($row = $query->fetch_assoc()) {
                  $last_id = $row['id'];
                  $nomber = $row['nombre'];
                  $apellidos = $row['apellidos'];
                  $html_autor .= '<option value="' . $last_id . '">' . $nomber . ' ' . $apellidos . '</option>';
                }
              echo $html_autor;
              ?>

            </select>
            <div class="invalid-feedback">Elige Autor.</div>
          </div>
          <div class="mb-3">
            <select name="select_categoria_upd" class="form-select" id="select_" required>
              <option selected value="<?= $categoria[0]['id_primary_categoria'] ?>">
                <?= $categoria[0]['nombre'] ?>
              </option>
              <?php
              $sql = "SELECT * FROM categoria";
              $query = $link->query($sql);
              $html_categoria = '';
              if ($query->num_rows > 0)
                while ($row = $query->fetch_assoc()) {
                  $last_id = $row['id_primary_categoria'];
                  $nomber = $row['nombre'];
                  $html_categoria .= '<option value="' . $last_id . '">' . $nomber . '</option>';
                }
              echo $html_categoria;
              ?>
            </select>
            <div class="invalid-feedback">Elige Categoria.</div>
          </div>
          <div>
            <button name="btn_upd_save" type="submit" value="<?= $id_select_update?>" class="btn btn-primary mb-2">Guardar</button>
          </div>
        </form>
      </section>
    <?php } ?>
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