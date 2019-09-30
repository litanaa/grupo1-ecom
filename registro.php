<?php

if ($_POST){

  $json = file_get_contents ('data/users.jason');

  $users = json_decode($json, true);

  $users[] = [

    'email' => $_POST['email'],
    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),

  ];

$json = json_encode($users, JSON_PRETTY_PRINT);

file_put_contents('data/users.json', $json);

}

if ($_FILES) {
  if ($_FILES["imagen"]["error"] != 0){
    echo "Hubo un error al cargar la imagen";
  }
  else {
    $ext = pathinfo($_FILES ["imagen"]["name"], PATHINFO_EXTENSION);
    if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
      echo "La imagen debe ser jpg o png <br>";
    }
    else {
      move_uploaded_file($_FILES ["imagen"]["tmp_name"], "archivos/imagen." . $ext);
    }
  }
}

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon-32x32.png" type="image/png">
    <title>Happy Home!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" integrity="sha256-zmfNZmXoNWBMemUOo1XUGFfc0ihGGLYdgtJS3KCr/l0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/stylesregistro.css">
    <script src="https://kit.fontawesome.com/61e275e2c2.js"></script>
  </head>


  <body>

    <header>

      <?php include_once('partials/header.php');?>

    </header>

    

  <form action="registro.php" method="post">
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
  <?php include_once('partials/footer.php');?>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
