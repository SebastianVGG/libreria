
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
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
    <link rel="stylesheet" href="../css/login.css" />
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
        <ul class="navbar-nav d-flex-inline" style="text-align:right">
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
  <header class="sticky-top" id="header_"></header>
    <!-- Contenido -->
    
    <div class="container">

      <div class="row row_1">
<div class="col-6 align-self-md-center align-content-center col_form1">
  <h3 class="text-center">Iniciar Sesión</h3>
  <form action="../php/session/login_backend.php" method="post" class="row g-3 needs-validation1" novalidate>
    <!-- Correo electrónico -->
    <div class="col-12 col-xxl-6 d-block col1_login">
      <label for="login_email" class="form-label"
        >*Correo electrónico</label
      >
      <input
        type="email"
        class="form-control c_login_email1"
        id="login_email"
        name="l_correo"
        value="example@outlook.com"
        required
      />
      <div class="invalid-feedback">
        El correo electrónico es incorrecto.
      </div>
    </div>
    <!-- Contraseña -->
    <div class="col-12 col-xxl-6 d-block c_login_password1">
      <label for="login_password" class="form-label">*Contraseña</label>
      <input
        type="password"
        name="l_password"
        class="form-control"
        id="login_password"
        required
      />
      <div class="invalid-feedback">
      </div>
    </div>
    <!-- Botón login -->
    <div class="col-12 d-block text-start mt-5">
      <button class="btn c_btn1" type="submit">iniciar sesión</button>
    </div>
  </form>
</div>

<div class="col-6 align-self-center align-self-end col_form2">
<h3 class="text-center">Registrarse</h3>
<form action="session/register_backend.php" method="post" class="row g-3 needs-validation2" novalidate>
  <!-- Nombre -->
  <div class="col-md-12 col-lg-6">
    <label for="login_nombre" class="form-label">Nombre</label>
    <input
      type="text"
      name="r_nombre"
      class="form-control c_login_nombre"
      id="login_nombre_id"
      required
    />
    <div class="invalid-feedback">Escribe un nombre.</div>
  </div>
  <!-- Apellido -->
  <div class="col-md-12 col-lg-6">
    <label for="login_apellido" class="form-label">Apellido</label>
    <input
      type="text"
      name="r_apellidos"
      class="form-control c_login_apellido"
      id="login_apellidos_id"
      required
    />
    <div class="invalid-feedback">Escribe un apellido.</div>
  </div>
  <!-- Correo electrónico -->
  <div class="col-md-12 col-lg-12">
    <label for="login_email" class="form-label"
      >*Correo electrónico</label
    >
    <input
      type="email"
      class="form-control c_login_email2"
      name="r_correo"
      id="register_correo"
      value="example@outlook.com"
      required
    />
    <div id="invalid-feedback_correo" class="invalid-feedback">
      El correo electrónico es incorrecto.
    </div>
  </div>
  <!-- Contraseña -->
  <div class="col-md-12 col-lg-6">
    <label for="login_password" class="form-label">*Contraseña</label>
    <input
      type="password"
      name="r_password"
      class="form-control c_login_password2"
      id="register_password_id"
      required
    />
    <div id="invalid-feedback_pass" class="invalid-feedback">
    Debe tener 1 letra minúscula, 1 letra mayúscula, 1 número y tener al menos 8 caracteres
    </div>
  </div>
  <!-- Confirmar contraseña -->
  <div class="col-md-12 col-lg-6">
    <label for="login_password_c" class="form-label label_confirmarc"
      >*Confirma tu contraseña</label
    >
    <input
      type="password"
      name="r_password1"
      class="form-control c_login_password2_c"
      id="register_password1"
      required
    />
    <div class="invalid-feedback">Confirma tu constraseña.</div>
  </div>
  <!-- Terminos y condiciones -->
  <div class="col-12">
    <div class="form-check">
      <input
        class="form-check-input"
        type="checkbox"
        value=""
        id="invalidCheck"
        required
      />
      <label class="form-check-label" for="invalidCheck">
        Acepta terminos y condiciones.
      </label>
      <div class="invalid-feedback">
        Debes aceptar los terminos y condiciones para continuar
      </div>
    </div>
  </div>
  <!-- Botón registrarse -->
  <div class="col-12">
    <button class="btn c_btn2" type="submit">Registrarse</button>
  </div>
</form>
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
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="../js/login.js"></script>
    <script src="../js/register.js"></script>
    
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
