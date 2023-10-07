<?php 
    require_once('db-user.php');
    require_once('check-regist.php');
    require_once('check-auth.php');
    $message = $_POST['message'];
    $date = date("F j, Y, g:i a");
    $login = $_SESSION['login'];

    if($_COOKIE['logged'] == 'yes'){

        function getComments($conn){
            $sql2 = "SELECT * FROM `messages`";
            $result = $conn -> query($sql2);
            while($row = $result -> fetch_assoc()){
                echo "<div class = 'message-box'>";
                echo $row['login']."<br>";
                echo $row['date']."<br>";
                echo nl2br($row['message']);
                echo "</div>";
            }
        }

        if(empty($message)) echo "";
        else {
            $sql = "INSERT INTO `messages` (login, date, message) VALUES('$login', '$date', '$message')";
            if($conn -> query($sql) === TRUE){
                echo "Message was sent successfully";


                header('Location: /contact-us.php');
            }
            else echo "Error: " . $conn->error;
        }
    }
    else echo "Please log in first";
    

?>