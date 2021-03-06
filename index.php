<?php
include("php/config.php");

$today = date('N');
$limit = 9;
switch ($today) {
  case 1:
    $dia = "Domingo";
    $dia_titulo = "romance";
    $sql = "SELECT * FROM libro where id_categoria = 3 limit 0, $limit";
    break;

  case 2:
  $dia = "Lunes";
  $dia_titulo = "ciencia y ficción";
  $sql = "SELECT * FROM libro where id_categoria = 2 limit 0, $limit";
    break;

  case 3:
    $dia = "Martes";
    $dia_titulo = "fantasia";
    $sql = "SELECT * FROM libro where id_categoria = 4 limit 0, $limit";
    break;

  case 4:
    $dia = "Miercoles";
    $dia_titulo = "terror";
    $sql = "SELECT * FROM libro where id_categoria = 1 limit 0, $limit";
    break;

  case 5:
    $dia = "Jueves";
    $dia_titulo = "clasicos";
    $sql = "SELECT * FROM libro where id_categoria = 5 limit 0, $limit";
    break;

  case 6:
    $dia = "Viernes";
    $dia_titulo = "acción";
    $sql = "SELECT * FROM libro where id_categoria = 6 limit 0, $limit";
    break;

  case 7:
    $dia = "Sabado";
    $dia_titulo = "novelas y cuentos";
    $sql = "SELECT * FROM libro where id_categoria = 8 limit 0, $limit";
    break;
}
$query = $link->query($sql);
$row = $query->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--load all styles -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <title>Inicio</title>
</head>

<body>
  <!-- nav -->
  <div>
    <nav class="navbar sticky-top navbar-dark bg-primary justify-content-between px-5">
      <a href="index.php"><img class="animate__animated animate__backInRight animate__slow" src="images/icons/LogoBGO.png" /></a>
      <form class="d-flex" action="php/busqueda.php" method="POST" novalidate>
        <input id="busNow" name="busNow" class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-light mx-2" type="submit">Buscar</button>
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
              <li><a class="dropdown-item" href="php/categoria.php?categoria=novedades">Novedades</a></li>
              <li><a class="dropdown-item" href="php/categoria.php?categoria=novedades_ebook">Novedades Ebooks</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown itemMar">
            <a class="nav-link dropdown-toggle-split text-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Adolescentes
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="php/categoria.php?categoria=terror">Terror</a></li>
              <li><a class="dropdown-item" href="php/categoria.php?categoria=ciencia_ficcion">Ciencia ficción</a></li>
              <li><a class="dropdown-item" href="php/categoria.php?categoria=romance">Romance</a></li>
              <li><a class="dropdown-item" href="php/categoria.php?categoria=fantasia">Fantasía</a></li>
              <li><a class="dropdown-item" href="php/categoria.php?categoria=clasico">Clásicos</a></li>
              <li><a class="dropdown-item" href="php/categoria.php?categoria=accion">Acción</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown itemMar">
            <a class="nav-link dropdown-toggle-split text-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ebooks
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="php/categoria.php?categoria=novedades_ebook">Novedades</a></li>
              <li><a class="dropdown-item" href="php/categoria.php?categoria=ebook_terror">Terror</a></li>
              <li><a class="dropdown-item" href="php/categoria.php?categoria=ebook_ciencia_ficcion">Ciencia ficción</a></li>
              <li><a class="dropdown-item" href="php/categoria.php?categoria=ebook_romance">Romance</a></li>
              <li><a class="dropdown-item" href="php/categoria.php?categoria=ebook_fantasia">Fantasía</a></li>
              <li><a class="dropdown-item" href="php/categoria.php?categoria=ebook_clasico">Clásicos</a></li>
              <li><a class="dropdown-item" href="php/categoria.php?categoria=ebook_accion">Acción</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown itemMar">
            <a class="nav-link dropdown-toggle-split text-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Otros
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="php/categoria.php?categoria=no_ficcion">No ficción</a></li>
              <li><a class="dropdown-item" href="php/categoria.php?categoria=novelas_cuentos">Novelas y Cuentos</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="d-inline">
        <ul class="navbar-nav navbar-nav-scroll d-flex-inline" style="text-align:right">
          <li class="nav-item itemMar border border-2 border-white">
            <a class="nav-link text-light text-center" href="php/carrito.php" id="navbarScrollingDropdown" role="button" aria-expanded="false">
              <img src="images/icons/IconCarrito.png" class="MiniIcon">
              Carrito
            </a>
          </li>
          <br>
          <li class="nav-item itemMar border border-2 border-white">
            <a class="nav-link text-light text-center"  href="php/perfil.php" id="navbarScrollingDropdown" role="button" aria-expanded="false">
              <img src="images/icons/IconPerfil.png" class="MiniIcon">
              Mi cuenta
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="container-fluid">
    <!-- Carrusel principl-->
    <div class="row mt-2 ancestor1">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="index.php">
              <img src="images/banner1.jpg" class="d-block w-100" alt="..." /></a>
          </div>
          <div class="carousel-item">
            <a href="php/categoria.php?categoria=terror">
              <img src="images/banner2.jpg" class="d-block w-100" alt="..." /></a>
          </div>
          <div class="carousel-item">
            <a href="php/categoria.php?categoria=ciencia_ficcion">
              <img src="images/banner3.jpg" class="d-block w-100" alt="..." /></a>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- Contenido principal -->
    <h2 class="text-center mt-5">
      Autores y Libros recomendados por nosotros!
    </h2>
    <div class="row mb-5 row_r">
      <!-- Autor 1 -->
      <div class="d-flex flex-row">
        <div data-aos="fade-up-right" class="flex-column mt-5 left_">
          <a href="./php/vista_libro.php?id=17"><img src="https://images-na.ssl-images-amazon.com/images/I/51j6xxd+WDL._SX327_BO1,204,203,200_.jpg" class="m-1" alt="..." /></a>
          <div class="left_t pt-3">
            <a href="./php/vista_libro.php?id=17"><h5 data-aos="fade-up" class="text-start">EL HOBBIT</h5></a>
            <p data-aos="fade-up" data-aos-delay="300" data-aos="fade-up" class="text-center text-wrap pt-3">
            Smaug parecía profundamente dormido cuandoBilbo espió una vez más desde la entrada. ¡Pero fingía!¡Estaba vigilando la entrada del túnel!...Sacado de su cómodo agujero-hobbit por Gandalf y una banda de enanos, Bilbo se encuentra de pronto en medio de una conspiración que pretende apoderarse del tesoro de Smaug el Magnífico, un enorme y muy peligroso dragón...
            </p>
          </div>
        </div>
      </div>
      <!-- Autor 2 -->
      <div class="d-flex flex-row right_row">
        <div data-aos="fade-up-right" class="flex-column mt-5 right_">
          <a href=""><img src="https://upload.wikimedia.org/wikipedia/commons/6/66/J._R._R._Tolkien%2C_1940s.jpg" class="m-1" alt="..." /></a>
          <div class="right_t pt-3">
          <a href=""><h5 data-aos="fade-up" class="text-start">J. R. R. Tolkien</h5></a>
            <p data-aos="fade-up" data-aos-delay="300" data-aos="fade-up" class="text-center text-wrap pt-3">
            J. R. R. Tolkien o JRRT, fue un escritor, poeta, filólogo, lingüista y profesor universitario británico, conocido principalmente por ser el autor de las novelas clásicas de fantasía heroica El hobbit, El Silmarillion y El Señor de los Anillos.
            </p>
          </div>
        </div>
      </div>
      <!-- Autor 3 -->
      <div class="d-flex flex-row">
        <div data-aos="fade-up-right" class="flex-column mt-5 left_">
          <a href="./php/vista_libro.php?id=53"><img src="https://images-na.ssl-images-amazon.com/images/I/51t0Ddn4sOL._SX331_BO1,204,203,200_.jpg" class="m-1" alt="..." /></a>
          <div class="left_t pt-3">
            <a href="./php/vista_libro.php?id=53"><h5 data-aos="fade-up" class="text-start">DON QUIJOTE DE LA MANCHA</h5></a>
            <p data-aos="fade-up" data-aos-delay="300" data-aos="fade-up" class="text-center text-wrap pt-3">
            En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no hace mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, rocín flaco y galgo corredor. En el año en que se celebra el cuarto centenario de la publicación de la Segunda parte de El Quijote, presentamos esta obra en edición, con la versión a cargo de Alberto Blecua.
            </p>
          </div>
        </div>
      </div>

      <!-- Autor 4 -->
      <div class="d-flex flex-row mb-5 right_row">
        <div data-aos="fade-up-right" class="flex-column mt-5 right_">
          <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Stephen_King%2C_Comicon.png" class="m-1" alt="..." />
          <div class="right_t pt-3">
            <h5 data-aos="fade-up" class="text-start">Stephen King</h5>
            <p data-aos="fade-up" data-aos-delay="300" data-aos="fade-up" class="text-center text-wrap pt-3">
            Escritor estadounidense de novelas de terror, ficción sobrenatural, misterio, ciencia ficción y literatura fantástica. Sus libros han vendido más de 350 millones de copias​ y en su mayoría han sido adaptados al cine y a la televisión. Ha publicado 61 novelas (siete de ellas, bajo el seudónimo Richard Bachman) y siete libros de no ficción. Ha escrito, además, alrededor de doscientos relatos y novelas cortas, la mayoría de los cuales han sido recogidos en once colecciones.
            </p>
          </div>
        </div>
      </div>
      <!-- Lunes de terror -->
      <div class="mt-5">
        <h3 class="text-center">Hoy es <?= $dia ?> de <?= $dia_titulo ?>!!</h3>
      </div>
      <div class="container my-5">
        <!-- Carousel wrapper -->
        <div id="carouselBasicExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
          <!-- Controls -->
          <div class="d-flex justify-content-center mb-4">
            <button class="carousel-control-prev position-relative" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next position-relative" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!-- Inner -->
          <div class="carousel-inner py-4">
            <!-- Single item -->
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card">
                      <a href="./php/vista_libro.php?id=<?= $row[0]['id'] ?>"><img src="<?= $row[0]['img'] ?>" class="card-img-top" /></a>
                      <div class="card-body">
                        <a href="./php/vista_libro.php?id=<?= $row[0]['id'] ?>">
                          <h5 class="card-title text-center pt-1">
                            <span><?= $row[0]['titulo'] ?></span>
                          </h5>
                        </a>
                        <h6 class="card-text text-center pt-2">
                          <span class="autor">Autor </span><span class="autor_nombre fw-bold">
                            <?php
                            $get_id_autor = $row[0]['id_autor'];
                            $get_autor = $link->query("SELECT * FROM autor WHERE id = $get_id_autor");
                            $autor = $get_autor->fetch_all(MYSQLI_ASSOC);
                            ?>
                            <?= $autor[0]['nombre'] ?></span>
                        </h6>
                        <h3 class="card-text text-center libro_precio pt-5">
                          $<?= $row[0]['precio'] ?>
                        </h3>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="card">
                      <a href="./php/vista_libro.php?id=<?= $row[1]['id'] ?>"><img src="<?= $row[1]['img'] ?>" class="card-img-top" /></a>
                      <div class="card-body">
                        <a href="./php/vista_libro.php?id=<?= $row[1]['id'] ?>">
                          <h5 class="card-title text-center pt-1">
                            <span><?= $row[1]['titulo'] ?></span>
                          </h5>
                        </a>
                        <h6 class="card-text text-center pt-2">
                          <span class="autor">Autor </span><span class="autor_nombre fw-bold">
                            <?php
                            $get_id_autor = $row[1]['id_autor'];
                            $get_autor = $link->query("SELECT * FROM autor WHERE id = $get_id_autor");
                            $autor = $get_autor->fetch_all(MYSQLI_ASSOC);
                            ?>
                            <?= $autor[0]['nombre'] ?></span>
                        </h6>
                        <h3 class="card-text text-center libro_precio pt-5">
                          $<?= $row[1]['precio'] ?>
                        </h3>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="card">
                      <a href="./php/vista_libro.php?id=<?= $row[2]['id'] ?>"><img src="<?= $row[2]['img'] ?>" class="card-img-top" /></a>
                      <div class="card-body">
                        <a href="./php/vista_libro.php?id=<?= $row[2]['id'] ?>">
                          <h5 class="card-title text-center pt-1">
                            <span><?= $row[2]['titulo'] ?></span>
                          </h5>
                        </a>
                        <h6 class="card-text text-center pt-2">
                          <span class="autor">Autor </span><span class="autor_nombre fw-bold">
                            <?php
                            $get_id_autor = $row[2]['id_autor'];
                            $get_autor = $link->query("SELECT * FROM autor WHERE id = $get_id_autor");
                            $autor = $get_autor->fetch_all(MYSQLI_ASSOC);
                            ?>
                            <?= $autor[0]['nombre'] ?></span>
                        </h6>
                        <h3 class="card-text text-center libro_precio pt-5">
                          $<?= $row[2]['precio'] ?>
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4 col-md-12">
                    <div class="card">
                      <a href="./php/vista_libro.php?id=<?= $row[3]['id'] ?>"><img src="<?= $row[3]['img'] ?>" class="card-img-top" /></a>
                      <div class="card-body">
                        <a href="./php/vista_libro.php?id=<?= $row[3]['id'] ?>">
                          <h5 class="card-title text-center pt-1">
                            <span><?= $row[3]['titulo'] ?></span>
                          </h5>
                        </a>
                        <h6 class="card-text text-center pt-2">
                          <span class="autor">Autor </span><span class="autor_nombre fw-bold">
                            <?php
                            $get_id_autor = $row[3]['id_autor'];
                            $get_autor = $link->query("SELECT * FROM autor WHERE id = $get_id_autor");
                            $autor = $get_autor->fetch_all(MYSQLI_ASSOC);
                            ?>
                            <?= $autor[0]['nombre'] ?></span>
                        </h6>
                        <h3 class="card-text text-center libro_precio pt-5">
                          $<?= $row[3]['precio'] ?>
                        </h3>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="card">
                      <a href="./php/vista_libro.php?id=<?= $row[4]['id'] ?>"><img src="<?= $row[4]['img'] ?>" class="card-img-top" /></a>
                      <div class="card-body">
                        <a href="./php/vista_libro.php?id=<?= $row[4]['id'] ?>">
                          <h5 class="card-title text-center pt-1">
                            <span><?= $row[4]['titulo'] ?></span>
                          </h5>
                        </a>
                        <h6 class="card-text text-center pt-2">
                          <span class="autor">Autor </span><span class="autor_nombre fw-bold">
                            <?php
                            $get_id_autor = $row[4]['id_autor'];
                            $get_autor = $link->query("SELECT * FROM autor WHERE id = $get_id_autor");
                            $autor = $get_autor->fetch_all(MYSQLI_ASSOC);
                            ?>
                            <?= $autor[0]['nombre'] ?></span>
                        </h6>
                        <h3 class="card-text text-center libro_precio pt-5">
                          $<?= $row[4]['precio'] ?>
                        </h3>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="card">
                      <a href="./php/vista_libro.php?id=<?= $row[5]['id'] ?>"><img src="<?= $row[5]['img'] ?>" class="card-img-top" /></a>
                      <div class="card-body">
                        <a href="./php/vista_libro.php?id=<?= $row[5]['id'] ?>">
                          <h5 class="card-title text-center pt-1">
                            <span><?= $row[5]['titulo'] ?></span>
                          </h5>
                        </a>
                        <h6 class="card-text text-center pt-2">
                          <span class="autor">Autor </span><span class="autor_nombre fw-bold">
                            <?php
                            $get_id_autor = $row[5]['id_autor'];
                            $get_autor = $link->query("SELECT * FROM autor WHERE id = $get_id_autor");
                            $autor = $get_autor->fetch_all(MYSQLI_ASSOC);
                            ?>
                            <?= $autor[0]['nombre'] ?></span>
                        </h6>
                        <h3 class="card-text text-center libro_precio pt-5">
                          $<?= $row[5]['precio'] ?>
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <div class="card">
                      <a href="./php/vista_libro.php?id=<?= $row[6]['id'] ?>"><img src="<?= $row[6]['img'] ?>" class="card-img-top" /></a>
                      <div class="card-body">
                        <a href="./php/vista_libro.php?id=<?= $row[6]['id'] ?>">
                          <h5 class="card-title text-center pt-1">
                            <span><?= $row[6]['titulo'] ?></span>
                          </h5>
                        </a>
                        <h6 class="card-text text-center pt-2">
                          <span class="autor">Autor </span><span class="autor_nombre fw-bold">
                            <?php
                            $get_id_autor = $row[6]['id_autor'];
                            $get_autor = $link->query("SELECT * FROM autor WHERE id = $get_id_autor");
                            $autor = $get_autor->fetch_all(MYSQLI_ASSOC);
                            ?>
                            <?= $autor[0]['nombre'] ?></span>
                        </h6>
                        <h3 class="card-text text-center libro_precio pt-5">
                          $<?= $row[6]['precio'] ?>
                        </h3>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                    <div class="card">
                      <a href="./php/vista_libro.php?id=<?= $row[7]['id'] ?>"><img src="<?= $row[7]['img'] ?>" class="card-img-top" /></a>
                      <div class="card-body">
                        <a href="./php/vista_libro.php?id=<?= $row[7]['id'] ?>">
                          <h5 class="card-title text-center pt-1">
                            <span><?= $row[7]['titulo'] ?></span>
                          </h5>
                        </a>
                        <h6 class="card-text text-center pt-2">
                          <span class="autor">Autor </span><span class="autor_nombre fw-bold">
                            <?php
                            $get_id_autor = $row[7]['id_autor'];
                            $get_autor = $link->query("SELECT * FROM autor WHERE id = $get_id_autor");
                            $autor = $get_autor->fetch_all(MYSQLI_ASSOC);
                            ?>
                            <?= $autor[0]['nombre'] ?></span>
                        </h6>
                        <h3 class="card-text text-center libro_precio pt-5">
                          $<?= $row[7]['precio'] ?>
                        </h3>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                    <div class="card">
                      <a href="./php/vista_libro.php?id=<?= $row[8]['id'] ?>"><img src="<?= $row[8]['img'] ?>" class="card-img-top" /></a>
                      <div class="card-body">
                        <a href="./php/vista_libro.php?id=<?= $row[8]['id'] ?>">
                          <h5 class="card-title text-center pt-1">
                            <span><?= $row[8]['titulo'] ?></span>
                          </h5>
                        </a>
                        <h6 class="card-text text-center pt-2">
                          <span class="autor">Autor </span><span class="autor_nombre fw-bold">
                            <?php
                            $get_id_autor = $row[8]['id_autor'];
                            $get_autor = $link->query("SELECT * FROM autor WHERE id = $get_id_autor");
                            $autor = $get_autor->fetch_all(MYSQLI_ASSOC);
                            ?>
                            <?= $autor[0]['nombre'] ?></span>
                        </h6>
                        <h3 class="card-text text-center libro_precio pt-5">
                          $<?= $row[8]['precio'] ?>
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Inner -->
        </div>
      </div>
    </div>

    <!-- footer -->
    <footer>
      <div class="container-fluid">
        <div class="row d-flex justify-content-center text-center pt-3 networks">
          <!-- fb -->
          <a href="#" class="bg-facebook"><img data-aos="flip-left" src="images/icons/facebook.svg" /></a>
          <!-- tw -->
          <a href="#" class="bg-twitter mx-3"><img data-aos="flip-left" src="images/icons/twitter.svg" /></a>
          <!-- Dbb -->
          <a href="#" class="bg-dribble">
            <img data-aos="flip-left" src="images/icons/dribbble.svg" />
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
          <a href="index.php" class="link-light"><span>Inicio</span></a>
          <a href="acerca.html" class="link-light px-4"><span>Acerca de</span></a>
          <a href="contactanos.html" class="link-light"><span>Contáctanos</span></a>
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
  </div>
  <!-- Scripts -->

  <script src="js/jquery-3.6.0.js"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>
