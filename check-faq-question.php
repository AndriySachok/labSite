<?php 
    require_once('db-user.php');
    require_once('check-regist.php');
    require_once('check-auth.php');
    $question = $_POST['question'];
    $date = date("F j, Y, g:i a");
    $login = $_SESSION['login'];

    if($_COOKIE['logged'] == 'yes'){

        function getQuestions($conn){
            $sql2 = "SELECT * FROM `questions`";
            $result = $conn -> query($sql2);
            while($row = $result -> fetch_assoc()){
                echo "<div class = 'message-box'>";
                echo $row['login']."<br>";
                echo $row['date']."<br>";
                echo nl2br($row['question']);
                echo "</div>";
            }
        }

        if(empty($question)) echo "";
        else {
            $sql = "INSERT INTO `questions` (login, date, question) VALUES('$login', '$date', '$question')";
            if($conn -> query($sql) === TRUE){
                echo "Question was sent successfully";
                header('Location: /FAQ.php');
            }
            else echo "Error: " . $conn->error;
        }
    }
    else echo "Please log in first";
    

?>