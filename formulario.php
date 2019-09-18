<?php
$errorNombre = '';
$errorEmail = '';
$email = '';
$nombre = '';
if($_POST){
  $email = $_POST['email'];
  $nombre = $_POST['nombre'];
  var_dump($_POST);
  if ($email == ''){
    $errorEmail = 'Email no ingresado';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errorEmail = 'El email no cumple con los requisitos';
  }
  if ($_POST['nombre']== ''){
    $errorNombre = 'No has ingresado el nombre';
  }
  if (empty($errorEmail) && empty($errorNombre)){
    header('location:formulario.php');
  }
}
 ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>TEST</title>
  </head>
  <body>
      <form action="formulario.php" method="post">
<?php
echo $errorEmail;
echo $errorNombre;
 ?>

          <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value= "<?php echo $nombre;?>">
            <br>
          <label for="email">E-mail:</label>
            <input type="text" name="email" <?php echo $email;?>>
            <br>
            <input type="submit">
      </form>
  </body>
</html>
