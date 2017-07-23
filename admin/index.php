<?php
    $opc = (int)$_GET['c'];
    switch ($opc) {
        case 1:
            setcookie('prueba1', "Este es un texto de prueba", time() + 60*60);
            break;
        case 2:
            setcookie("prueba2", "Esta cookie es para el path /blog", time() + 60*60, "/blog");
            break;
        case 3:
            setcookie("prueba3", "Esta cookie vence en 30 segundos", time() + 30);
            break;        
        case 4:
            setcookie("prueba4", "Esta cookie es para el dominio uno.local", time() + 30*60, "/admin", "uno.local");
            break;
        case 5:
            setcookie("prueba5", "Esta cookie se envía sólo en https", time() + 30*60, "/admin", "cookies.local", true);
            break;
        case 6:
            setcookie("prueba6", "Esta cookie no se puede leer por javascript", time() + 30*60, "/admin", "cookies.local", false, true);
            break;
        
        default:
            break;
    }
?>
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
        <div class="container-fluid">
            <div class="row">
                <h1 class="text-center">
                    Pruebas con Cookies
                </h1>
                <p class="text-center">
                    <a href="index.php">Ir al inicio</a>
                    &nbsp;
                    |
                    &nbsp;
                    <a href="logout.php">Logout</a>
                </p>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="searchable-container">
                        <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                            <a href="index.php?c=1">
                                <div class="info-block block-info clearfix">
                                    <div class="btn-group bizmoduleselect">
                                        <label class="btn btn-default">
                                            <div class="bizcontent">
                                                <h5>
                                                    Seteamos cookie normalmente
                                                </h5>
                                                <pre>setcookie('prueba1',
"Este es un texto de prueba",
time() + 60*60);</pre>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                            <a href="index.php?c=2">
                                <div class="info-block block-info clearfix">
                                    <div class="btn-group bizmoduleselect">
                                        <label class="btn btn-default">
                                            <div class="bizcontent">
                                                <h5>
                                                    Seteamos para un path distinto
                                                </h5>
                                                <pre>setcookie("prueba2",
"Esta cookie es para el path /blog",
time() + 60*60,
"/blog");</pre>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                            <a href="index.php?c=3">
                                <div class="info-block block-info clearfix">
                                    <div class="btn-group bizmoduleselect">
                                        <label class="btn btn-default">
                                            <div class="bizcontent">
                                                <h5>
                                                    Seteamos con un vencimiento de 30 segundos
                                                </h5>
                                                <pre>setcookie("prueba3",
"Esta cookie vence en 30 segundos",
time() + 30);</pre>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                            <a href="index.php?c=4">
                                <div class="info-block block-info clearfix">
                                    <div class="btn-group bizmoduleselect">
                                        <label class="btn btn-default">
                                            <div class="bizcontent">
                                                <h5>
                                                    Seteamos para un dominio distinto
                                                </h5>
                                                <pre>setcookie("prueba4",
"Esta cookie es para el dominio uno.local",
time() + 30*60,
"/admin",
"uno.local");</pre>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                            <a href="index.php?c=5">
                                <div class="info-block block-info clearfix">
                                    <div class="btn-group bizmoduleselect">
                                        <label class="btn btn-default">
                                            <div class="bizcontent">
                                                <h5>
                                                    Seteamos para enviar sólo por https
                                                </h5>
                                                <pre>setcookie("prueba3",
"Esta cookie se envía sólo en https",
time() + 30*60,
"/admin",
"cookies.local",
true);</pre>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                            <a href="index.php?c=6">
                                <div class="info-block block-info clearfix">
                                    <div class="btn-group bizmoduleselect">
                                        <label class="btn btn-default">
                                            <div class="bizcontent">
                                                <h5>
                                                    Seteamos con flag HTTP Only
                                                </h5>
                                                <pre>setcookie("prueba3",
"Esta cookie no se puede leer por javascript",
time() + 30*60,
"/admin",
"cookies.local",
false,
true);</pre>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                            <a href="javascript:;" onclick="alert(document.cookie);">
                                <div class="info-block block-info clearfix">
                                    <div class="btn-group bizmoduleselect">
                                        <label class="btn btn-default">
                                            <div class="bizcontent">
                                                <h4>
                                                    Lectura de cookies con javascript
                                                </h4>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                            <a href="sessions.php" >
                                <div class="info-block block-info clearfix">
                                    <div class="btn-group bizmoduleselect">
                                        <label class="btn btn-default">
                                            <div class="bizcontent">
                                                <h4>
                                                    Setear una sesión
                                                </h4>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </body>
</html>