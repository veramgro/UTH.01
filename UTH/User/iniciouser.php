<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTH Inicio</title>
    <link rel="stylesheet" href="C:/Users/x/Desktop/UES/UTH/General/css/bootstrap.min.css">
    <link rel="stylesheet" href="C:\\Users\\x\\Desktop\\UES\\UTH\\General\\css\\quizz.css">
    <link rel="stylesheet" href="C:\\Users\\x\\Desktop\\UES\\UTH\\General\\css\\menu.css">
    <link rel="icon" type="image/jpg" href="C:\\Users\\x\\Desktop\\UES\\UTH\\imgen\\Logo_CTH_2021_PNG.png">
</head>

<body background="C:\\Users\\x\\Desktop\\UES\\UTH\\imgen\\Hoja_CTH_PLANTILLA_P.jpg">

    <header>
        <input type="checkbox" id="btn-menu">
        
        <label for="btn-menu"><img src="C:\\Users\\x\\Desktop\\UES\\PRACTICA\\imgen\\menu4.png" alt="">
            </label>

            <nav class="menu">
            <ul>
                <li><a href="file:///C:/Users/x/Desktop/UES/UTH/User/iniciouser.php">Inicio</a></li>
                <li><a href="file:///C:/Users/x/Desktop/UES/UTH/User/quiz.html">Examen</a></li>
                <li><a href="file:///C:/Users/x/Desktop/UES/UTH/User/quiz.html">Encuesta</a></li>
                <li><a href="">Preguntas frecuentes</a></li>
<li>
                 <a class="navbar-brand" href="#">
                </a>
                    <div class="DatosAlumIN">
                    
                        <nav class="navbar navbar-expand-lg navbar">
                            <div class="container-fluid">
                    
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            
                           <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nombre del alumno
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Perfil</a>
                            <a class="dropdown-item" href="#">Salir</a>
                            </div>
                            </li>
                            <li>
                    <img src="C:\\Users\\x\\Desktop\\UES\\UTH\\imgen\\user_13230(1).ico" alt="" width="80" height="50" class="d-inline-block align-top">
                            </li>
                            </li>
            </ul>    
            </nav>

    </header>

    <div class="home-box custom-box">
        <h3>Bienvenid@! </h3> 
        <p>Alumn@</p>
        <p>Al centro Tecnologico de Hermosillo</p>
    </div>

 <?PHP $this->showMessages();?>
    <a href="<?php echo constant('URL'); ?>logout">logaut</a>
</body>
</html>