<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/categoria.css" />
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/loader.css">
  <title>Document</title>
</head>

<body id="body">
  <!-- nav -->
  <div>
    <nav class="navbar sticky-top navbar-dark bg-primary justify-content-between px-5">
      <a href="../index.php"><img class="animate__animated animate__backInRight animate__slow" src="../images/icons/LogoBGO.png" /></a>
      <form class="d-flex" action="busqueda.php" method="POST" novalidate>
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
              <li><a class="dropdown-item" href="categoria.php?categoria=ciencia_ficcion">Ciencia ficci??n</a></li>
              <li><a class="dropdown-item" href="categoria.php?categoria=romance">Romance</a></li>
              <li><a class="dropdown-item" href="categoria.php?categoria=fantasia">Fantas??a</a></li>
              <li><a class="dropdown-item" href="categoria.php?categoria=clasico">Cl??sicos</a></li>
              <li><a class="dropdown-item" href="categoria.php?categoria=accion">Acci??n</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown itemMar">
            <a class="nav-link dropdown-toggle-split text-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ebooks
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="categoria.php?categoria=novedades_ebook">Novedades</a></li>
              <li><a class="dropdown-item" href="categoria.php?categoria=ebook_terror">Terror</a></li>
              <li><a class="dropdown-item" href="categoria.php?categoria=ebook_ciencia_ficcion">Ciencia ficci??n</a></li>
              <li><a class="dropdown-item" href="categoria.php?categoria=ebook_romance">Romance</a></li>
              <li><a class="dropdown-item" href="categoria.php?categoria=ebook_fantasia">Fantas??a</a></li>
              <li><a class="dropdown-item" href="categoria.php?categoria=ebook_clasico">Cl??sicos</a></li>
              <li><a class="dropdown-item" href="categoria.php?categoria=ebook_accion">Acci??n</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown itemMar">
            <a class="nav-link dropdown-toggle-split text-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Otros
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="categoria.php?categoria=no_ficcion">No ficci??n</a></li>
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
  <div class="container-fluid">
    <div class="row">
      <div class="row slider_">
      <?php
      if(isset($_GET['categoria']))
        if($_GET['categoria'] == 'terror' or $_GET['categoria'] == 'ebook_terror')
          echo '<img src="../images/categorias/terror.jpg" class="img-fluid" alt="..." />';

        if($_GET['categoria'] == 'ciencia_ficcion'  or $_GET['categoria'] == 'ebook_ciencia_ficcion')
          echo '<img src="../images/categorias/ciencia_ficcion.jpg" class="img-fluid" alt="..." />';

        if($_GET['categoria'] == 'fantasia'  or $_GET['categoria'] == 'ebook_fantasia')
          echo '<img src="../images/categorias/fantasia.jpg" class="img-fluid" alt="..." />';

        if($_GET['categoria'] == 'romance' or $_GET['categoria'] == 'ebook_romance')
          echo '<img src="../images/categorias/romance.jpg" class="img-fluid" alt="..." />';

        if($_GET['categoria'] == 'accion' or $_GET['categoria'] == 'ebook_accion')
          echo '<img src="../images/categorias/accion.jpg" class="img-fluid" alt="..." />';

        if($_GET['categoria'] == 'clasico' or $_GET['categoria'] == 'ebook_clasico')
          echo '<img src="../images/categorias/clasicos.jpg" class="img-fluid" alt="..." />';

        if($_GET['categoria'] == 'novelas_cuentos' or $_GET['categoria'] == 'no_ficcion')
          echo '<img src="../images/categorias/no_ficcion_-_novelas_y_cuentos.jpg" class="img-fluid" alt="..." />';
      ?>
      </div>
      <!-- <div class="row slider_content ">
          <p>Los libros m??s relevantes del mes</p>
        </div> -->
    </div>
    <div class="row">
      <div id="loadData" class="row row_f ">
        <!-- libros -->
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
    <!-- <div id="loaded" class="d-flex justify-content-center">
    </div> -->
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
          <a href="../contactanos.html" class="link-light"><span>Cont??ctanos</span></a>
        </div>
        <div class="row text-center pt-2 text-white">
          <p>Aviso de privacidad | T??rminos y condiciones</p>
          <p>
            Los precios publicados en esta tienda est??n sujetos a cambios sin
            previo aviso y solo son aplicables para ventas en l??nea.
          </p>
          <p>Algunos t??tulos est??n sujetos a disponibilidad.</p>
          <p>Todos los Derechos Reservados</p>
        </div>
      </div>
    </footer>
  </div>

  <!-- Scripts -->
  <script src="../js/jquery-3.6.0.js"></script>
  <script src="../js/categoria.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>
