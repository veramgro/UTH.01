<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="C:\\Users\\x\\Desktop\\UES\\UTH\\General\\css\\quizz.css">
    <link rel="stylesheet" href="C:\\Users\\x\\Desktop\\UES\\UTH\\General\\css\\menu.css">
    <link rel="icon" type="image/jpg" href="C:\\Users\\x\\Desktop\\UES\\UTH\\imgen\\Logo_CTH_2021_PNG.png">
    <title>Registro Alumnos</title>
</head>
<body>
    
     <?PHP $this->showMessages();?>

    <form action="<?php echo constant('URL'); ?>signup/nuevoUsuario" method="POST">
        <div></div>
       
            <h2>Registrarse</h2>
            <div class="home-box custom-box">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre">
            </p>
            <p>
                <label for="correo">Correo</label>
                <input type="text" name="correo" id="correo">
            </p>
            <p>
                <label for="contraseña">Contraseña</label>
                <input type="text" name="contraseña" id="contraseña">
            </p>
            <p>
                <input type="submit" value="Guardar Registro" />
            </p>
            <p>
                ¿Tienes una cuenta? <a href="<?php echo constant('URL'); ?>login">Iniciar sesion</a>
            </p>
        </form>
        </div>
</body>
</html>