<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" integrity="sha256-zmfNZmXoNWBMemUOo1XUGFfc0ihGGLYdgtJS3KCr/l0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/stylesregistro.css">
    <script src="https://kit.fontawesome.com/61e275e2c2.js"></script>
  </head>


  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.html">HH</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="ingreso.html">Ingresá <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registro.html">Registrate</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categorías
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="detalle.html">Cuadros</a>
              <a class="dropdown-item" href="#">Deco</a>
              <a class="dropdown-item" href="mesas.html">Mesas</a>
              <a class="dropdown-item" href="lamparas.html">Lamparas</a>
              <a class="dropdown-item" href="#">Canasto & Contenedores</a>
              <a class="dropdown-item" href="#">Almohadones</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mis Pedidos <i class="fas fa-shopping-cart"></i></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>



  <form action="validar.php" method="post">
  <div class="row">
    <div class="elquehayquearreglar" class="form-group" class="col -xs-12 col-md-6 col-lg-4s" style="width: 32rem;">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
    <div class="form-group col-md-6">
      <label for="Teléfono">Teléfono</label>
      <input type="number" class="form-control" id="Teléfono" placeholder="Teléfono">
    </div>
  </div>
  <div class="form-group"class="col -xs-12 col-md-6 col-lg-4s" style="width: 32rem;" >
    <label for="inputAddress">Nombre y Apellido</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Manyula">
  </div>
  <div class="form-group"class="col -xs-12 col-md-6 col-lg-4s" style="width: 32rem;">
    <label for="inputAddress">Dirección</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Av. Siempre viva 742">
  </div>
  <div class="form-row "class="col -xs-12 col-md-6 col-lg-4s" style="width: 32rem;">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Provincia</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Cód. Postal</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

<footer>
  <div class="row">

<nav class="nav-izq">
  <ul>
    <li>Conocenos</li>
    <li>Dónde estamos?</li>
    <li>
      <a href="faq.html">Preguntas Frecuentes</a>
    </li>
  </ul>
</nav>

<nav class="nav-der">
  <ul>
    <li>
<a href="http://Facebook.com" target="new"><i class="fab fa-facebook-f"></i></a>
    </li>
    <li>
      <a href="http://Twitter.com" target="new"><i class="fab fa-twitter"></i></a>
    </li>
    <li>
      <a href="http://Instagram.com" target="new"><i class="fab fa-instagram"></i></a>
    </li>
  </ul>
</nav>

<div class="navegacion-abajo">


<nav class="nav-izq-abajo">
  <ul>
    <li>Contactanos:</li>

    <li> <a href="faq.html"><i class="fas fa-phone"></i> Llamanos!</a>
     </li>
    <li>
      <a href="faq.html"><i class="far fa-envelope"></i> HappyHome@gmail.com</a>
    </li>
  </ul>
</nav>

<nav class="nav-der-abajo">
  <ul>
    <li>
<a class="mercado" href="http://mercadopago.com.ar"> <img src="img/mercadopago.png" alt="mercadopago"></a>
    </li>

</nav>
</div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>