<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="css/estilos.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="card card-container">
                <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin" method="POST" action="login.php">
                    <?php if ($_GET['err'] == 1): ?>
                        <span id="reauth-email" class="reauth-email">Los datos ingresados no corresponden</span>
                    <?php endif; ?>
                    <input type="text" id="inputUser" name="user" class="form-control" placeholder="Usuario" required autofocus>
                    <input type="password" id="inputPass" name="pass" class="form-control" placeholder="Contraseña" required>
                    <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" value="1" name="recuerdame"> Recuérdame
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Acceso</button>
                </form><!-- /form -->
                <a href="#" class="forgot-password">
                    ¿Olvidaste tu contraseña?
                </a>
            </div><!-- /card-container -->
        </div><!-- /container -->
    </body>
</html>