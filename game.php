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
    <?php
    if ($_POST) {
        $winstreak = $_POST["winstreak"];
        $mode = $_POST["mode"];
        $attempts = $_POST['attempts'];
        if (isset($_POST["wins"])) {
            $wins = $_POST["wins"];
        } else {
            $wins = 0;
        }
        if (isset($_POST['game'])) {
            $game = $_POST["game"];
            $lol = rand(1, 2);
            var_dump($_POST);
            if ($attempts <= 10) {
                switch ($mode) {
                    case 'easy';
                        echo ("<p>Ваших перемог" . "$wins" . "/" . "10</p>");
                        echo ("<p>Спроба " . "$attempts" . "/" . "10</p>");
                        if ($game == $lol) {
                            echo ("Ви виграли");
                            $_POST['attempts'] = ++$attempts;
                            ++$wins;
                        } else {
                            echo ("Ви програли кидаю ше раз");
                            $lol = rand(1, 2);
                            if ($game == $lol) {
                                echo ("Ви виграли");
                                $_POST['attempts'] = ++$attempts;
                                ++$wins;
                            } else {
                                echo ("Ви програли");
                                $_POST['attempts'] = ++$attempts;
                            }
                        }
                        break;
                    case "mid";
                        echo ("<p>Ваших перемог" . "$wins" . "/" . "10</p>");
                        echo ("<p>Спроба " . "$attempts" . "/" . "10</p>");
                        if ($game == $lol) {
                            echo ("Ви виграли");
                            if ($lol == 1) {
                                echo ("Вам випав орел");
                            } else {
                                echo ("Вам випала решка");
                            }
                            $_POST['attempts'] = ++$attempts;
                            ++$wins;
                        } else {
                            $_POST['attempts'] = ++$attempts;
                            echo ("Ви програли");
                        }
                        break;
                    case "hard";
                        echo ("<p>Ваших перемог" . "$wins" . "/" . "10</p>");
                        echo ("<p>Спроба " . "$attempts" . "/" . "10</p>");
                        if ($game != $lol) {
                            echo ("Ви програли");
                            $_POST['attempts'] = ++$attempts;
                        } else {
                            echo ("Кидаю ще раз");
                            $lol = rand(1, 2);
                            if ($game == $lol) {
                                echo ("Ви виграли");
                                $_POST['attempts'] = ++$attempts;
                                ++$wins;
                            } else {
                                echo ("Ви програли");
                                $_POST['attempts'] = $attempts++;
                            }
                        }
                        break;
                }
            } else {
                echo ("Ваші спроби закінчились");
                echo ("<a href='index.php'>На головну</a>");
            }
        } else {
            echo ("<p class='display-flex justify-content-center'>
            <img src='image/chose-side.png' alt='' width='300px' height='150px'>
            </p>");
        }
        // var_dump($attempts);
    }
    ?>
    <div>
        
        <form id="form" action="
        <?php
        if ($attempts == 10) {
            echo ("results.php");
        } else {
            echo ("game.php");
        }
        ?>
        " method="POST">
            <div class="display-flex game">
                <p class="orel">
                    <input type="radio" name="game" value="1" id="orel">
                    <label for="orel"></label>
                </p>
                <p class="reshka">
                    <input type="radio" name="game" value="2" id="reshka">
                    <label for="reshka"></label>
                </p>
            </div>
            <input type="hidden" name="attempts" value="<?php echo ($attempts); ?>">
            <input type="hidden" name="mode" value="<?php echo ($mode); ?>">
            <input type="hidden" name="wins" value="<?php echo ($wins); ?>">
            <input type="hidden" name="winstreak" value="<?php echo ($winstreak); ?>">
            <p class="display-flex justify-content-center"><button type="submit" class="submit"></button></p>
        </form>
    </div>
</body>

</html>