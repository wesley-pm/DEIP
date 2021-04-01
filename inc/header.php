<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Sistema de Gestão de Cursos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <link rel="shortcut icon" href="<?php echo BASEURL; ?>assets/imagens/brasao.ico" type="image/x-icon">
    <script defer src="<?php echo BASEURL; ?>js/all.min.js"></script>

    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo BASEURL; ?>index.php" class="navbar-brand"> DEIP</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">          
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-users"></i> Militares <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>customers/add.php">Cadastrar</a></li>
                    <li><a href="<?php echo BASEURL; ?>customers/indexs.php">Gerenciar</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?php echo BASEURL; ?>customers/cursos.php"><i class="fas fa-book"></i> Cursos</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo BASEURL; ?>customers/listar_estatistica.php"><i class="fas fa-chart-line"></i> Estatística</a>
            </li>
            <li class="nav-item">
                <a href="#"><i class="fas fa-exclamation-circle"></i> Sobre</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo BASEURL; ?>customers/login.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
            </li>
          </ul>
        </div><!--/.navbar-collapse -->

      </div>
    </nav>

    <main class="container">