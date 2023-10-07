<?php
session_start();
require_once('db-user.php');
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['password'];

if(empty($login) || empty($email) || empty($pass)) echo "";

else {
    $sql = "INSERT INTO `users` (login,email,password) VALUES ('$login', '$email', '$pass')";
    if($conn -> query($sql) === TRUE){
        setcookie('logged', 'yes', time()+3600, '/');
        $_SESSION['login'] = $login;
        $_SESSION['email'] = $email;
        header('Location: /');
    }
    else echo "Error: " . $conn->error;
}
?>
