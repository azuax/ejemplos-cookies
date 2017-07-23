<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // no haga esto en casa
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user == 'admin' && $pass == 'admin') {
        setcookie('loggedIn', 1, time() + 3600, '/admin/', "cookies.local");
        header('Location: /admin/');
    }else{
        header('Location: index.php?err=1');
    }

}
