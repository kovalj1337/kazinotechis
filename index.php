<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="header display-flex">
            <div>
                <img src="image/logo.png" alt="">
            </div>
            <div>
                <img src="image/techies-header.jpg" alt="" width="100px" height="50px">
            </div>
            <div class="cabinet-mulyazh">
                <a href="#">Мій профіль(муляж)</a>
            </div>
        </div>
    </header>
    <main class="">
        <div class="display-flex logotipe">
            <img src="image/logo-reshka.png" alt="" width="300px" height="150px">
        </div>
        <div class="display-flex logotipe">
            <img src="image/mode.png" alt="" width="200px" height="75px">
        </div>
        <div class="display-flex mode">
            <?php
            if (isset($_POST["winstreak"])) {
                $winstreak = $_POST["winstreak"];
            } else {
                $winstreak = 1;
            }
            ?>
            <form method="post" action="game.php">
                <input type="hidden" name="winstreak" value="<?php echo ($winstreak); ?>">
                <button type="submit" name="mode" value="easy" class="techies-easy"></button>
                <button type="submit" name="mode" value="mid" class="techies-mid" <?php
                if ($winstreak >= 2) {
                    echo "";
                } else {
                    echo ("disabled");
                }
                ?>>Середній</button>
                <button type="submit" name="mode" value="hard" class="techies-hard" <?php
                if ($winstreak >= 3) {
                    echo "";
                } else {
                    echo ("disabled");
                }
                ?>>Важкий</button>
                <input type="hidden" name="attempts" value="0">
            </form>
        </div>
    </main>
    <footer>
        <div class="footer">
            <img src="image/reklama.png" alt="" width="1280px" height="75px">
        </div>
    </footer>
</body>

</html>