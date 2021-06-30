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
  <link rel="stylesheet" href="../css/index.css" />
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/carrito.css" />
  <link rel="stylesheet" href="../css/footer.css">
  <title>Busqueda</title>
</head>
  <body>
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
        <div class="container-fluid"><div class="row px-5 py-5">
        <?php
        include('config.php');
        if(isset($_POST['busNow']) && !empty($_POST['busNow']) || isset($_GET['busNow']) && !empty($_GET['busNow'])){
            if(isset($_POST['busNow']) && !empty($_POST['busNow'])){
                $sentenciaABuscar = strtoupper($_POST['busNow']);
            }else{
                $sentenciaABuscar = strtoupper($_GET['busNow']);
            }
            
        ?>
            <div class="row text-center mb-5">
                <h2 class="text-primary">Busqueda: <span class="text-secondary" style="font-size: 25px;"><?= $sentenciaABuscar?></span></h2>
            </div>
            <div class="col col-7 text-center">
                <h2 class="text-primary text-center">Libros</h2>
        <?php
            $sqlCon = "SELECT COUNT(*) as contar FROM libro WHERE titulo LIKE '%$sentenciaABuscar%';";
            $consul = mysqli_query($link,$sqlCon);
            $mostrarConteo = mysqli_fetch_array($consul);
            if($mostrarConteo['contar'] > 0){
        ?>
                <table class="table">
                <thead>
                    <th scope="col" class="tdCentrado">Portada</th>
                    <th scope="col" class="tdCentrado">Título</th>
                    <th scope="col" class="tdCentrado">Formato</th>
                    <th scope="col" class="tdCentrado">Precio</th>
                </thead>
                <tbody>
                    <?php
                    $sql="SELECT * from libro WHERE titulo LIKE '%$sentenciaABuscar%'";
                    $result=mysqli_query($link,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                        $idAut=$mostrar['id_autor'];
                        $sqlInfoAut="SELECT * from autor WHERE id = $idAut";
                        $resultInfoAut=mysqli_query($link,$sqlInfoAut);
                        $mostrarInfoAut = mysqli_fetch_array($resultInfoAut);
                    ?>
                    <tr>
                    <td class="tdCentrado"><div class="col"><img src="<?= $mostrar['img']?>" class="LibroPortada"></div></td>
                    <td class="tdCentrado"><h5><?= $mostrar['titulo']?></h5><br><h6>Autor: <?= $mostrarInfoAut['nombre']?> <?= $mostrarInfoAut['apellidos']?></h6></td>
                    <td class="tdCentrado"><?php echo $mostrar['formato'] ?></td>
                    <td class="tdCentrado">$<?php echo $mostrar['precio'] ?></td> </td>
                    <?php
                    }
                }else{
                    ?>
                        <div style="margin-top:15%; margin-bottom: 15%;">
                            <h3 class="text-primary">Ningun libro coincide con la busqueda.</h3>
                            <h5>Intenta a buscar palabras clave.</h5>
                        </div>
                    <?php
                }
                    ?>
                </tbody>
                </table>
            </div>
            <div class="col col-5 px-5 text-center">
                <h2 class="text-primary">Autores</h2>
                <table class="table">
                <thead>
                    <th scope="col" class="tdCentrado">Autor</th>
                </thead>
                <tbody>
                <?php
                $arrayCad = explode(" ", $sentenciaABuscar);
                $i = 0;
                $contAut = 0;
                do{
                    $aux = $arrayCad[$i];
                    $sql="SELECT * from autor";
                    $result=mysqli_query($link,$sql);
                    $sqlN="SELECT * from autor WHERE nombre LIKE '%$aux%'";
                    $resultN=mysqli_query($link,$sqlN);
                    $sqlA="SELECT * from autor WHERE apellidos LIKE '%$aux%'";
                    $resultA=mysqli_query($link,$sqlA);
                    while($mostrar=mysqli_fetch_array($result)){
                        if($mostrarN=mysqli_fetch_array($resultN) || $mostrarA=mysqli_fetch_array($resultA)){
                            ?>
                            <tr>
                                <td class="tdCentrado">
                                    <div class="row">
                                        <div><h6 style="font-size: 30px;"><?= $mostrar['nombre']?> <?= $mostrar['apellidos']?></h6></div>
                                    </div>
                                </td>
                                </tr>
                            <?php
                            $contAut++;
                        }
                    }
                    $i++;
                }while($i < count($arrayCad));
                    if($contAut < 1){
                    ?>
                    <div class="text-center" style="margin-top:15%; margin-bottom: 15%;">
                        <h3 class="text-primary">Ningun autor coincide con la busqueda.</h3>
                        <h5>Intenta a buscar palabras clave.</h5>
                    </div>
                    <?php
                    }
                    ?>
                </tbody>
                </table>
            </div>
        </div>
        <?php
            }else{?>
                <div class="text-center mx-5" style="margin-top:15%; margin-bottom: 15%;"><h3>La busqueda estaba vacia al realizar la operación.</h3></div>
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
</div>
<!-- Scripts -->

<script src="../js/jquery-3.6.0.js"></script>
<script src="../js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>