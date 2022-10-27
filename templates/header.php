<?php 
include_once("config/url.php");
include_once("config/process.php");
//include_once("config/connection.php");


//limpa a msg

if(isset($_SESSION['msg'])){
  $printMsg = $_SESSION['msg'];
  $_SESSION['msg'] = "";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap.min.css" integrity="sha512-6KY5s6UI5J7SVYuZB4S/CZMyPylqyyNZco376NM2Z8Sb8OxEdp02e1jkKk/wZxIEmjQ6DRCEBhni+gpr9c4tvA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php $BASE_URL ?>style.css">
    <title>AGENDA DE CONTATOS</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="<?php $BASE_URL ?>index.php">
        <img src="<?php $BASE_URL ?>logo.svg" alt="Agenda">
      </a>
      <div>
        <div class="navbar-nav">
          <a class="nav-link active home-link" href="<?php $BASE_URL ?>index.php">Agenda</a>
          <a class="nav-link active" href="<?php $BASE_URL ?>create.php">Adicionar Contato</a>
        </div>
      </div>
    </nav>
  </header>

<body>