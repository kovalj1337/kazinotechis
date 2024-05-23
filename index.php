<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
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
                <button type="submit" name="mode" value="mid" 
                <?php
                if ($winstreak >= 2) {
                    echo "class='techies-mid' ";
                } else {
                    echo ("class='techies-mid-disabled' disabled");
                }
                ?>
                >Середній</button>
                <button type="submit" name="mode" value="hard" 
                <?php
                if ($winstreak >= 3) {
                    echo "class='techies-hard' ";
                } else {
                    echo ("class='techies-hard-disabled' disabled");
                }
                ?>
                >Важкий</button>
                <input type="hidden" name="attempts" value="0">
            </form>
        </div>
    </main>
</body>
</html>