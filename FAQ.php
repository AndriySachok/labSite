<!DOCTYPE html>
<html>
    <head>
        <title>AndrewCodes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="contact-us.css">
       
        <body>
        <?php require "blocks/header.php" ?>
            
            <form action = "check-faq-question.php" method = "post">
                <div class = "FAQ">
                    <textarea name = "question" placeholder="Question"></textarea><br>
                    <button type="submit" name = "send">Send</button>
                </div>
            </form>

            <?php 
            require_once('db-user.php');
            include_once('check-faq-question.php');
            getQuestions($conn);
            require "blocks/footer.php";
            ?>
        </body>

</html>