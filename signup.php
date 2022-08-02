<?php

  require 'Conexion.php';

  $message = '';

  if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO Usuarios (usuario, password) VALUES (:usuario, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $_POST['usuario']);
    $stmt->bindParam(':password',$_POST['password']);

    if ($stmt->execute()) {
      $message = 'El usuario se ha creado exitosamente';
    } else {
      $message = 'Lo siento, parece que hubo un problema para crear tu usuario, prueba mas tarde';
    }

    sleep(15);
    $message = '';

  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <?php require 'header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registrate</h1>

    <form action="index.php" method="POST">
      <input name="usuario" type="text" placeholder="Ingresa tu usuario">
      <input name="password" type="password" placeholder="Ingresa tu contraseña">
      <input name="confirm_password" type="password" placeholder="Confirma tu contraseña">
      <input type="submit" value="Registrate">
      
    </form>

  </body>
</html>
