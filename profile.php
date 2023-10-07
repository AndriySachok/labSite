<!DOCTYPE html>
<html>
    <head>
        <title>AndrewCodes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="profile.css">
       
    </head>
        <body>
            <?php require "blocks/header.php" ?>
            <h1>Your Account</h1><br>
            <img src="src/IMG_4261.jpg" id="artem"><br>
            <h1><?php 
                require "check-auth.php";
                require "check-regist.php";
            
               if(empty($_SESSION['login'])) echo "Hhhm, Unknown user";
               else
                echo $_SESSION['login'];
            ?></h1>
            
            <h1>Reputation: ✰✰✰✰✰</h1>
            <form action="reset-cookie.php">
                <button class="btn btn-primary w-100 py-2" type="submit" name="send">Log out</button>
            </form>
            
              <?php require "blocks/footer.php" ?>
        </body>

</html>

