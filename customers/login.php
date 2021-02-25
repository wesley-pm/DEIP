<?php
session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="pt-br" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
    <title>Sistema de Gestão de Cursos</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="../assets/imagens/brasao.ico">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
</head>
<body>
    <div class="container">

        <header>

            <h1>Sistema de Gestão de Cursos</h1>

        </header>
        <section>       
            <div id="container_demo" >
                <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                <a class="hiddenanchor" id="toregister"></a>
                <a class="hiddenanchor" id="tologin"></a>
                <div id="wrapper">
                    <div id="login" class="animate form">
                        <form  method="POST" action="valida_login.php"> 
                            <h1>PMMS</h1> 
                            <p> 
                                <label for="username" class="uname" > Usuário  </label>
                                <input id="username" name="usuario" required="required" type="text" placeholder="Usuário" required autofocus/>
                            </p>
                            <p> 
                                <label for="password" class="youpasswd"> Senha </label>
                                <input id="password" name="senha" required="required" type="password" placeholder="Senha" required /> 
                            </p>

                            <input class="btn btn-lg btn-primary btn-block" type="submit" name="btnLogin" value="Acessar">

                        </form>
                        <p class="text-center text-danger">
                            <?php
                            if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                        ?>
                    </p>
                </div>

            </div>
        </div>  
    </section>
</div>
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>