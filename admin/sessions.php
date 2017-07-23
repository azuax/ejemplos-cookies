<?php
    session_start();
    $_SESSION['loggedIn'] = true;
    $_SESSION['usuario'] = 'admin';
    $_SESSION['info'] = 'Esta es una información de la sesión';
    header('Location: index.php');

