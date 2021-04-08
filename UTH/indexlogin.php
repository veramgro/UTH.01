<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in CTH</title>
    <link rel="stylesheet" href="C:\\Users\\x\\Desktop\\UES\\UTH\\General\\css\\styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="icon" type="image/jpg" href="C:\\Users\\x\\Desktop\\UES\\UTH\\imgen\\Logo_CTH_2021_PNG.png">

</head>

<body background="C:\\Users\\x\\Desktop\\UES\\UTH\\imgen\\TESTLOG.png">
    <form action="indexlogin.php" class="form-box animated fadeInUp" class="col-12" th:action="@{/login}" method="get">
        <h1 class="form-title">Inicio sesion</h1>
         
         <?PHP $this->showMessages();?>
    <form action="<?php echo constant('URL'); ?>login/atuentificarse" method="POST">
        <div></div>
        
        <input type="text" placeholder="correo" autofocus name="correo" id="correo">
        <input type="password" placeholder="Password" name="contraseña" id="contraseña">
        <button type="submit" value="Iniciar sesión">
         Iniciar sesión
        </button>

        <div class="form-title">
            <a href="#" style="color:#FFFFFF;">¿Olvidaste tu contraseña?</a>
            <a href="<?php echo constant('URL'); ?>signup" style="color:#FFFFFF;">Crear una cuenta</a>
        </div>
        
    </form>


</body>

</html>
