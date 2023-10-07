<!DOCTYPE html>
<html>
    <head>
        <title>AndrewCodes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="regist.css">
       
    </head>
        <body>
            <?php require "blocks/header.php" ?>
              <div class = "flex-container">
                <div class = "flex-child first">
              <form action="check-regist.php" method="post">
                <br><h1>Sign up</h1><br>
            
                <div class="form-floating">
                <label for="floatingInput">Login</label>
                  <input type="text" name="login" class="form-control" id="floatingInput" placeholder="Your name"><br>
                  
                    <label for="floatingInput">Email address</label>
                  <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  
                </div>
                <div class="form-floating">
                    <label for="floatingPassword">Password</label>
                  <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                  
                </div>
            
                <div class="form-check">
                  
                  <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                  </label>
                  <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit" name="send">Sign up</button>
                <p class="mt-5 mb-3 text-body-secondary">© <?php echo date("d.m.Y"); ?></p>
              </form>
              </div>
            <div class = "flex-child second">
              <form action="check-auth.php" method="post">
                <br><h1>Log in</h1><br>
            
                <div class="form-floating">
                    <label for="floatingInput">Email</label>
                  <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Your скринька">
                  
                </div>
                <div class="form-floating">
                    <label for="floatingPassword">Password</label>
                  <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                  
                </div>
            
                <div class="form-check">
                  
                  <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                  </label>
                  <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit" name="send">Sign in</button>
                <p class="mt-5 mb-3 text-body-secondary">© <?php echo date("d.m.Y"); ?></p>
              </form>
            </div>
          </div>
          <?php require_once "blocks/footer.php" ?>
        </body>

</html>

