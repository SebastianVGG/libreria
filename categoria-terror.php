<?php
include("php/config.php");
$limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 8;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;
$result = $link->query("SELECT * FROM libro WHERE id_categoria = 1 LIMIT $start, $limit");
$libros = $result->fetch_all(MYSQLI_ASSOC);
$result1 = $link->query("SELECT count(id) AS id FROM libro");
$custCount = $result1->fetch_all(MYSQLI_ASSOC);
$total = $custCount[0]['id'];
$pages = ceil($total / $limit);

$Previous = $page - 1;
$Next = $page + 1;

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/categoria-terror.css" />
  <link rel="stylesheet" href="css/footer.css">
  <title>Document</title>
</head>

<body>
  <!-- nav -->
  <div>
    <nav class="navbar sticky-top navbar-dark bg-primary justify-content-between px-5">
      <img class="animate__animated animate__backInRight animate__slow" src="images/icons/LogoBGO.png" />
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
              <li><a class="dropdown-item" href="#">Novedades</a></li>
              <li><a class="dropdown-item" href="#">Los mas leidos</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown itemMar">
            <a class="nav-link dropdown-toggle-split text-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Niños
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Colorear</a></li>
              <li><a class="dropdown-item" href="#">Comic</a></li>
              <li><a class="dropdown-item" href="#">Ilustrados</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown itemMar">
            <a class="nav-link dropdown-toggle-split text-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Adolescentes
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Ciencia ficción</a></li>
              <li><a class="dropdown-item" href="#">Romance</a></li>
              <li><a class="dropdown-item" href="#">Terror</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown itemMar">
            <a class="nav-link dropdown-toggle-split text-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Escolares
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Jardin de niños</a></li>
              <li><a class="dropdown-item" href="#">Primaria</a></li>
              <li><a class="dropdown-item" href="#">Secundaria</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="d-inline">
        <ul class="navbar-nav navbar-nav-scroll d-flex-inline" style="text-align:right">
          <li class="nav-item itemMar border border-2 border-white">
            <a class="nav-link text-light text-center" href="#" id="navbarScrollingDropdown" role="button" aria-expanded="false">
              <img src="images/icons/IconCarrito.png" class="MiniIcon">
              Carrito
            </a>
          </li>
          <br>
          <li class="nav-item itemMar border border-2 border-white">
            <a class="nav-link text-light text-center" href="#" id="navbarScrollingDropdown" role="button" aria-expanded="false">
              <img src="images/icons/IconPerfil.png" class="MiniIcon">
              Mi cuenta
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="row slider_">
        <img src="https://4.bp.blogspot.com/-XatlSnF4EG8/WEjaI079R9I/AAAAAAAARPY/qlv1lsAxos49Lw4IK3RUXY-yzjcKTYRRgCLcB/s1600/Libros%2Bterror%2Bpdf%2Bnoctambulos.jpg" class="img-fluid" alt="..." />
      </div>
      <!-- <div class="row slider_content ">
          <p>Los libros más relevantes del mes</p>
        </div> -->
    </div>
    <div class="row">
      <div class="row row_f">
        <!-- libros -->
        <?php foreach ($libros as $libro) :
          $get_id_autor = $libro['id_autor'];
          $get_autor = $link->query("SELECT * FROM autor WHERE id = $get_id_autor");
          $autor = $get_autor->fetch_all(MYSQLI_ASSOC);
        ?>

          <div class="col">
            <div class="card">
              <img src="<?= $libro['img']; ?>" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title text-center pt-1"><span><?= $libro['titulo']; ?></span></h5>
                <h6 class="card-text text-center pt-2">
                  <span class="autor">Autor </span><span class="autor_nombre fw-bold"><?= $autor[0]['nombre'] ?></span>
                </h6>
                <h3 class="card-text text-center libro_precio pt-5">$<?= $libro['precio']; ?></h3>
              </div>
            </div>
          </div>

          <?php endforeach; ?>

        <!-- Card example -->
        <!-- <div class="col">
            <div class="card">
              <img
                src="https://books.google.com.mx/books/publisher/content?id=tM82AwAAQBAJ&printsec=frontcover&img=1&zoom=5&edge=curl&imgtk=AFLRE71K6iXw8UZ0LEBn4SYNCQEiH5ovS14uXVQQCUIsFU2qn6VmdDjLKYNwie2fZI37uw3U6kDKAGVgYBoaD3fsEP1KFSyQk7FBz1l_pB-3EoC87hUPk3sV52KDFiGZMCV9_Q_LG9gX"
                class="card-img-top"
              />
              <div class="card-body">
                <h5 class="card-title text-center pt-1"><span>title</span></h5>
                <h6 class="card-text text-center pt-2">
                  <span class="autor">Autor </span
                  ><span class="autor_nombre fw-bold">Nombre</span>
                </h6>
                <h3 class="card-text text-center libro_precio pt-5">$500</h3>
              </div>
            </div>
          </div> -->
      </div>
    </div>

    <!-- Paginacion -->

    <nav aria-label="Page navigation">
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="categoria-terror.php?page=<?= $Previous; ?>" aria-label="Previous">
            <span aria-hidden="true">&laquo; Previous</span>
          </a>
        </li>
        <?php for ($i = 1; $i <= $pages; $i++) : ?>
          <li class="page-item"><a class="page-link" href="categoria-terror.php?page=<?= $i; ?>"><?= $i; ?></a></li>
        <?php endfor; ?>
        <li class="page-item">
          <a class="page-link" href="categoria-terror.php?page=<?= $Next; ?>" aria-label="Next"><span aria-hidden="true">Next</span></a>
        </li>
      </ul>
    </nav>
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
          <a href="" class="link-light"><span>Inicio</span></a>
          <a href="" class="link-light px-4"><span>Acerca de</span></a>
          <a href="" class="link-light"><span>Contáctanos</span></a>
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
  <script src="js/categoria-terror.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>