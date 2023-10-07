<?php
    require_once('check-regist.php');
    require_once('check-auth.php');

    if($_COOKIE['logged'] == 'yes'){
        setcookie('logged', 'yes', time()-3600, '/');
        session_destroy();
    }
   
    header('Location: /');

?>