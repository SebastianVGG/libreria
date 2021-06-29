<?php

session_start();
if(!isset($_SESSION['correo']))
{
  $sesion = '';
  $sesion.= '<h2>Sesión no iniciada </h2><a href="login.php"><button class="btn btn-info btn_logout" type="submit"> Iniciar sesión </button></a>';
  echo $sesion;
}else{

include("config.php");

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    <link rel="stylesheet" href="header.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="../css/carrito.css" />
    <link rel="stylesheet" href="../css/footer.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
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
  <?php
  $idUser = $_SESSION['id_'];
  $sqlCount="SELECT COUNT(*) as cuenta from carrito WHERE id = $idUser";
  $resultCount=mysqli_query($link,$sqlCount);
  $mostrarCount = mysqli_fetch_array($resultCount);
  if($mostrarCount['cuenta'] > 0){
  ?>
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
            <?php
              $sql="SELECT * from carrito WHERE id_usuario = $idUser";
              $result=mysqli_query($link,$sql);
              $subtotal = 0;
              $total = 0;
              while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
              <td class="tdCentrado">
                <div class="row">
                  <?php 
                  $idCar=$mostrar['id'];
                  $idLib=$mostrar['id_libro'];
                  $sqlInfoLib="SELECT * from libro WHERE id = $idLib";
                  $resultInfoLib=mysqli_query($link,$sqlInfoLib);
                  $mostrarInfoLib = mysqli_fetch_array($resultInfoLib);
                  $idAut=$mostrarInfoLib['id_autor'];
                  $sqlInfoAut="SELECT * from autor WHERE id = $idAut";
                  $resultInfoAut=mysqli_query($link,$sqlInfoAut);
                  $mostrarInfoAut = mysqli_fetch_array($resultInfoAut);
                  ?>
                  <div class="col-3"><img src="<?= $mostrarInfoLib['img']?>" class="LibroPortada"></div>
                  <div class="col"><h5><?= $mostrarInfoLib['titulo']?></h5><br><h6>Autor: <?= $mostrarInfoAut['nombre']?> <?= $mostrarInfoAut['apellidos']?></h6></div>
                </div>
              </td>
              <td class="tdCentrado">$<?php echo $mostrarInfoLib['precio'] ?></td>
              <td class="tdCentrado"><?php echo $mostrar['cantidad'] ?></td>
              <td class="tdCentrado">$<?php echo ($mostrar['cantidad'] * $mostrarInfoLib['precio']) ?></td>
              <td class="tdCentrado"><button id="elim" name="elim" class="btn btn-danger" onclick="quitarDeCarrito(<?php echo $mostrar['id']?>)">X</button></td>
            </tr>
            <?php
              $subtotal = $subtotal + ($mostrar['cantidad'] * $mostrarInfoLib['precio']);
              }
              mysqli_close($link);
              if($subtotal >= 1000 && $subtotal < 5000){
                $descuerto = intval($subtotal/10);
                $total = $subtotal - $descuerto;
              }else if($subtotal >= 5000 && $subtotal < 10000){
                $descuerto = intval($subtotal/15);
                $total = $subtotal - $descuerto;
              }else if($subtotal >= 10000){
                $descuerto = intval($subtotal/20);
                $total = $subtotal - $descuerto;
              }
            ?>
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
            <h5 class="text-secondary" aligntext="right">$<?= $subtotal?></h5>
            <h5 class="text-secondary" aligntext="right">$<?= $descuerto?></h5>
            <h4 aligntext="right">$<?= $total?></h4>
          </div>
        </div>
        <input type="button" class="btn btn-primary w-75 my-5 py-3" value="Realizar pago">
        <h5 class="text-primary">DESCUENTOS</h5>
        <p>Descuento del 10% en compras superiores a $1,000.<br>
          Descuento del 15% en compras superiores a $5,000.<br>
          Descuento del 20% en compras superiores a $10,000.<br>
          Los descuentos NO son acumulables.</p>
        <h5 class="text-primary">POLITICA DE DEVOLUCIONES</h5>
        <p>Tienes hasta 20 días para devolver tu producto por cualquier motivo. Para que sea valido este no debe haber sido manipulado.</p>
        <h5 class="text-primary">ENVIO Y ENTREGA</h5>
        <p>Los pedidos se entregan en dias laborales (de lunes a viernes), exceptuando días festivos.</p>
      </div>
    </div>
  <?php
  }else{
  ?>
    <div class="text-center mx-5 row" style="margin-top:15%; margin-bottom: 15%;">
      <div class="col col-7">
        <h1>Aun no has añadido libros a tu carrito.</h1>
      </div>
      <div class="col col-5 px-5 text-center">
        <h5 class="text-primary">DESCUENTOS</h5>
        <p>Descuento del 10% en compras superiores a $1,000.<br>
          Descuento del 15% en compras superiores a $5,000.<br>
          Descuento del 20% en compras superiores a $10,000.<br>
          Los descuentos NO son acumulables.</p>
        <h5 class="text-primary">POLITICA DE DEVOLUCIONES</h5>
        <p>Tienes hasta 20 días para devolver tu producto por cualquier motivo. Para que sea valido este no debe haber sido manipulado.</p>
        <h5 class="text-primary">ENVIO Y ENTREGA</h5>
        <p>Los pedidos se entregan en dias laborales (de lunes a viernes), exceptuando días festivos.</p>
      </div>
    </div>
  <?php
  }
  ?>
    
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
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/carrito.js"></script>
    </body>
</html>

<?php } ?>
