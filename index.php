<?php require "./inc/sesionStart.php" ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include "./inc/header.php" ?>

  <title>Administrador de inventario</title>
</head>

<body>
  <?php


  if (!isset($_GET['vista']) || $_GET['vista'] == "") {
    $_GET['vista'] = "login";
  }

  if (is_file("./vistas/" . $_GET['vista'] . ".php") && $_GET['vista'] != "login" && $_GET['vista'] != "404") {

    /*== Cerrar sesion forzosa ==*/
    if((!isset($_SESSION['id']) || $_SESSION['id']=="") || (!isset($_SESSION['usuario']) || $_SESSION['usuario']=="")){
      include "./vistas/logout.php";
      exit();/*detenenmos el programa por si huviera errores que siga  funcionando */
    }
 
    include "./inc/menu.php";
    include "./vistas/" . $_GET['vista'] . ".php";
     
    include "./inc/scriptmenu.php";
  
  } else {

    if ($_GET['vista'] == "login") {
      include "./vistas/login.php";
    } else {
      include "./vistas/404.php";
    }
  }

  ?>
</body>

</html>