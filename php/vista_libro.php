<?php

include("php/config.php");

if (isset($_GET["id"]))
$id_get = $_GET["id"];
else{
  $page = 0;
}

$sql = "SELECT * FROM libro WHERE id = $id_get";
$query = $link->query($sql);
$row = $query->fetch_assoc();
$get_id_autor = $row['id_autor'];
$get_autor = $link->query("SELECT * FROM autor WHERE id = $get_id_autor");

$url = $row['img'];
$titulo = $row['titulo'];
$autor = $get_autor->fetch_all(MYSQLI_ASSOC);
$precio = $row['precio'];
$isbn = $row['isbn'];
$idioma = $row['idioma'];
$paginas = $row['paginas'];
$descripcion = $row['descripcion'];
$formato = $row['formato'];



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
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      rel="stylesheet"
    />
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
    ></script>

    <link rel="stylesheet" href="css/vista_libro.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <title>Document</title>
  </head>
  <body>
    <!-- nav -->
    <div>
      <nav
        class="
          navbar
          sticky-top
          navbar-dark
          bg-primary
          justify-content-between
          px-5
        "
      >
        <img
          class="animate__animated animate__backInRight animate__slow"
          src="images/icons/LogoBGO.png"
        />
        <form class="d-flex">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Buscar"
            aria-label="Search"
          />
          <button class="btn btn-outline-light mx-2" type="submit">
            Search
          </button>
        </form>
      </nav>
    </div>
    <div>
      <nav
        class="navbar navbar-expand-lg sticky-top navbar-dark bg-primary px-5"
      >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto navbar-nav-scroll">
            <li class="nav-item dropdown itemMar">
              <a
                class="nav-link dropdown-toggle-split text-light"
                href="#"
                id="navbarScrollingDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Libros
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarScrollingDropdown"
              >
                <li><a class="dropdown-item" href="#">Novedades</a></li>
                <li><a class="dropdown-item" href="#">Los mas leidos</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown itemMar">
              <a
                class="nav-link dropdown-toggle-split text-light"
                href="#"
                id="navbarScrollingDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Niños
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarScrollingDropdown"
              >
                <li><a class="dropdown-item" href="#">Colorear</a></li>
                <li><a class="dropdown-item" href="#">Comic</a></li>
                <li><a class="dropdown-item" href="#">Ilustrados</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown itemMar">
              <a
                class="nav-link dropdown-toggle-split text-light"
                href="#"
                id="navbarScrollingDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Adolescentes
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarScrollingDropdown"
              >
                <li><a class="dropdown-item" href="#">Ciencia ficción</a></li>
                <li><a class="dropdown-item" href="#">Romance</a></li>
                <li><a class="dropdown-item" href="#">Terror</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown itemMar">
              <a
                class="nav-link dropdown-toggle-split text-light"
                href="#"
                id="navbarScrollingDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Escolares
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarScrollingDropdown"
              >
                <li><a class="dropdown-item" href="#">Jardin de niños</a></li>
                <li><a class="dropdown-item" href="#">Primaria</a></li>
                <li><a class="dropdown-item" href="#">Secundaria</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="d-inline">
          <ul
            class="navbar-nav navbar-nav-scroll d-flex-inline"
            style="text-align: right"
          >
            <li class="nav-item itemMar border border-2 border-white">
              <a
                class="nav-link text-light text-center"
                href="#"
                id="navbarScrollingDropdown"
                role="button"
                aria-expanded="false"
              >
                <img src="images/icons/IconCarrito.png" class="MiniIcon" />
                Carrito
              </a>
            </li>
            <br />
            <li class="nav-item itemMar border border-2 border-white">
              <a
                class="nav-link text-light text-center"
                href="login.html"
                id="navbarScrollingDropdown"
                role="button"
                aria-expanded="false"
              >
                <img src="images/icons/IconPerfil.png" class="MiniIcon" />
                Mi cuenta
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col">
          <img
            src="<?=$url?>"
          />
        </div>
        <div class="col">
          <div><h3><?=$titulo?></h3></div>
          <div class="autor">
            <span class="autor">Autor: </span
            ><span class="autor_nombre fw-bold"><?=$autor[0]['nombre']?></span>
          </div>
        </div>
        <div class="col">
          <div class="precio text-center mt-5"><span class="fw-bold">PRECIO: </span>$<?=$precio?></div>
          <div class="add-carrito text-center"><span class="fw-bold">AGREGAR A CARRITO</span></div>
        </div>
      </div>
      <div class="row">
        <h3 class="text-center">Información adicional</h3>
        <div class="col mt-3 icon-col">
          <div><img src="images/icons/isbn.svg" /><?=$isbn?></div>
          <div class="mt-4"><img src="images/icons/pagina.svg" /><?=$paginas?> páginas.</div>
        </div>
        <div class="col mt-3 icon-col">
          <div><img src="images/icons/idioma.svg" /><?=$idioma?></div>
          <div class="mt-4"><img src="images/icons/calendario.svg" />AÑO PENDIENTE</div>
        </div>
      </div>
      <div class="row mt-4">
        <h3>Sinopsis</h3>
        <div class="col">
          <p>
          <?=$descripcion?>
          </p>
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

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
      integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
      crossorigin="anonymous"
    ></script>
  </body>
</html>