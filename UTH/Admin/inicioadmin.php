<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTH Admin</title>
    <link rel="stylesheet" href="C:\\Users\\x\\Desktop\\UES\\UTH\\General\\css\\quizz.css">
    <link rel="stylesheet" href="C:\\Users\\x\\Desktop\\UES\\UTH\\General\\css\\menu.css">
        <link rel="stylesheet" href="C:/Users/x/Desktop/UES/UTH/General/css/bootstrap.min.css">
    <link rel="icon" type="image/jpg" href="C:\\Users\\x\\Desktop\\UES\\UTH\\imgen\\Logo_CTH_2021_PNG.png">
</head>

<body background="C:\\Users\\x\\Desktop\\UES\\UTH\\imgen\\Hoja_CTH_PLANTILLA_P.jpg">

    <header>
        <input type="checkbox" id="btn-menu">
        
        <label for="btn-menu"><img src="C:\\Users\\x\\Desktop\\UES\\UTH\\imgen\\menu4.png" alt="">
            </label>

            <nav class="menu">
            <ul>
               <li><a href="file:///C:/Users/x/Desktop/UES/UTH/Admin/inicioadmin.php">Inicio</a></li>
                <li><a href="file:///C:/Users/x/Desktop/UES/UTH/Admin/registrouser.html">Crear Alumnos</a></li>
                <li><a href="file:///C:/Users/x/Desktop/UES/UTH/Admin/registropreguntas.html">Crea Preguntas </a></li>
                <li><a href="">Resultados Examen</a></li>
                <li><a href="file:///C:/Users/x/Desktop/UES/UTH/Admin/support.html">Soporte</a></li>

                 <div class="DatosAlumIN">
                    
                        <nav class="navbar navbar-expand-lg navbar">
                            <div class="container-fluid">
                    
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Nombre del Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Perfil</a></li>
                                <li><a class="dropdown-item" href="#">Mensajes</a></li>
                                <li><a class="dropdown-item" href="#">Salir</a></li>
                            </ul>
                            </li>
                            <li>
                    <img src="C:\\Users\\x\\Desktop\\UES\\UTH\\imgen\\user_13230(1).ico" alt="" width="30" height="30" class="d-inline-block align-top">
                            </li>
                        </ul>
                        </div>
                    </div>
                    </nav>
                </div>

            </ul>    
            </nav>

    </header>


    <div class="home-box custom-box">
        <h3>Bienvenid@! </h3> 
        <p>Administrador</p>
        <p>Aqui podras verificar calificaciones! Y editar el examen!</p>
    </div>

<?PHP $this->showMessages();?>
    <a href="<?php echo constant('URL'); ?>logout">logaut</a>
    ?>

</body>
</html>