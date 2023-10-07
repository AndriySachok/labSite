<!DOCTYPE html>
<html>
    <head>
        <title>AndrewCodes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="contact-us.css">
       
    </head>
        <body>
        <?php require "blocks/header.php" ?>
            <form action = "check-contact-us-message.php" method = "post">
            <div class = "contact-us">
               
                <textarea name = "message" placeholder="Message"></textarea><br>
                <button type="submit" name = "send">Send</button>
            </div>
            </form>

            <?php 
            require_once('db-user.php');
            include_once('check-contact-us-message.php');
            getComments($conn);
            require "blocks/footer.php";
            ?>
        </body>

</html>