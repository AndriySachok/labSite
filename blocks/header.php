<header class = "header">
                <a href = "index.php" class = "logo">PirateIt</a>
                <div class = "brighten img"><img src = "src/giphy(1).gif" width = 70px></div>
            <nav class = "navbar">
                    <a href = "index.php">Categories</a>
                    <a href = "games.php">Games</a>
                    <?php
                        if($_COOKIE['logged'] == 'yes'):
                    ?>
                    <a href = "profile.php">Profile</a>
                    <?php else: ?>
                    <a href = "regist.php">Sign up/in</a>
                    <?php endif; ?>
            </nav>
            </header>