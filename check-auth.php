<?php
    session_start();
    require_once('db-user.php');
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if(empty($email) || empty($pass)) echo "";
    else {
        $sql = "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "Welcome ";
                setcookie('logged', 'yes', time()+3600, '/');
                $_SESSION['login'] = $row['login'];
                $_SESSION['email'] = $row['email'];
                header('Location: /');
            }
        }
        else {
            echo "No such user";
        }
    }
?>