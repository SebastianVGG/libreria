<!DOCTYPE html>
<html lang="es">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    <link rel="stylesheet" href="header.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/carrito.css" />
    <link rel="stylesheet" href="css/footer.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
  </head>
  <body>
    <div>
      <nav class="navbar sticky-top navbar-dark bg-primary justify-content-between px-5">
        <img class="animate__animated animate__backInRight animate__slow" src="images/icons/LogoBGO.png"/>
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
          <ul class="navbar-nav navbar-nav-scroll d-flex-inline"style="text-align:right">
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
    <div class="row px-5 py-5">
      <div class="col col-7">
        <h2 class="text-primary">Mis libros</h2>
        <table class="table">
          <thead>
            <th scope="col" class="tdCentrado">Tu producto</th>
            <th scope="col" class="tdCentrado">Precio</th>
            <th scope="col" class="tdCentrado">Cantidad</th>
            <th scope="col" class="tdCentrado" style="width: 100px;">Sub-total</th>
            <th scope="col" class="tdCentrado">Eliminar</th>
          </thead>
          <tbody>
            <div data-aos="fade-right">
              <tr>
                <td class="tdCentrado">
                  <div class="row">
                    <div class="col-3"><img src="images/HPOrdenDelFenix.jpg" class="LibroPortada"></div>
                    <div class="col"><h5>Harry Potter y la Orden del Fenix</h5><br><h6>Autor: J.K. Rowling</h6></div>
                  </div>
                </td>
                <td class="tdCentrado">$500</td>
                <td class="tdCentrado"><input type="number" value="1" class="InputPequeño"></td>
                <td class="tdCentrado">$1500</td>
                <td class="tdCentrado"><input type="button" class="btn btn-close"></td>
              </tr>
            </div>
            <div data-aos="fade-right">
              <tr>
                <td class="tdCentrado">
                  <div class="row">
                    <div class="col-3"><img src="images/HPPrisioneroDeAzkaban.png" class="LibroPortada"></div>
                    <div class="col"><h5>Harry Potter y el prisionero de Azkaban</h5><br><h6>Autor: J.K. Rowling</h6></div>
                  </div>
                </td>
                <td class="tdCentrado">$500</td>
                <td class="tdCentrado"><input type="number" value="1" class="InputPequeño"></td>
                <td class="tdCentrado">$1500</td>
                <td class="tdCentrado"><input type="button" class="btn btn-close"></td>
              </tr>
            </div>
            <div data-aos="fade-right">
              <tr data-aos="zoom-in-right">
                <td class="tdCentrado">
                  <div class="row">
                    <div class="col-3"><img src="images/HPReliquiasDeLaMuerte.jpg" class="LibroPortada"></div>
                    <div class="col"><h5>Harry Potter y las reliquias de la muerte</h5><br><h6>Autor: J.K. Rowling</h6></div>
                  </div>
                </td>
                <td class="tdCentrado">$500</td>
                <td class="tdCentrado"><input type="number" value="1" class="InputPequeño"></td>
                <td class="tdCentrado">$1500</td>
                <td class="tdCentrado"><input type="button" class="btn btn-close"></td>
              </tr>
            </div>
          </tbody>
        </table>
      </div>
      <div class="col col-5 px-5 text-center">
        <h2 class="text-primary">Resumen del pedido</h2>
        <div class="row">
          <div class="col">
            <h5 class="text-secondary">Subtotal</h5>
            <h5 class="text-secondary">  Descuento</h5>
            <h4>Total</h4>
          </div>
          <div class="col">
            <h5 class="text-secondary" aligntext="right">$4500</h5>
            <h5 class="text-secondary" aligntext="right">$500</h5>
            <h4 aligntext="right">$4000</h4>
          </div>
        </div>
        <input type="button" class="btn btn-primary w-75 my-5 py-3" value="Realizar pago">
        <h5 class="text-primary">POLITICA DE DEVOLUCIONES</h5>
        <p>Tienes hasta 20 días para devolver tu producto por cualquier motivo. Para que sea valido este no debe haber sido manipulado.</p>
        <h5 class="text-primary">ENVIO Y ENTREGA</h5>
        <p>Los pedidos se entregan en dias laborales (de lunes a viernes), exceptuando días festivos.</p>
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
    <script src="js/carrito.js"></script>
    </body>
</html>

