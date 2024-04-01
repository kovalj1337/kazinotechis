<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if ($_POST) {
    $mode = $_POST["mode"];
    if (isset($_POST['game'])) {
        $game = $_POST["game"];
        $lol = rand(1, 2);
        if (isset($_POST['attempts'])) {
            $attempts = $_POST['attempts'];
        } else {
            $attempts = 1;
        }
        if ($attempts <= 10) {
            switch ($mode) {
                case 'easy';
                    if ($game == $lol) {
                        ;
                        echo ("Ви виграли");
                        ++$attempts;
                    } else {
                        echo ("Ви програли кидаю ше раз");
                        $lol = rand(1, 2);
                        if ($game == $lol) {
                            echo ("Ви виграли");
                            ++$attempts;
                        } else {
                            echo ("Ви програли");
                            $attempts++;
                        }
                    }
                    break;
                    case "mid";
                    echo ("<p>Спроба " . "$attempts" . "/" . "10</p>");
                    if ($game == $lol) {
                        ++$attempts;
                        echo ("Ви виграли");
                        if ($lol == 1) {
                            echo ("Вам випав орел");
                        } else {
                            echo ("Вам випала решка");
                        }
                    } else {
                        ++$attempts;
                        echo ("Ви програли");
                    }
                    break;
                case "hard";
                    if ($game != $lol) {
                        ;
                        echo ("Ви програли");
                        ++$attempts;
                    } else {
                        echo ("Кидаю ще раз");
                        $lol = rand(1, 2);
                        if ($game == $lol) {
                            echo ("Ви виграли");
                            ++$attempts;
                        } else {
                            echo ("Ви програли");
                            $attempts++;
                        }
                    }
                    break;
            }
        } else {
            echo ("Ваші спроби закінчились");
            $attempts = 0;
        }
    } else {
        echo ("Виберіть сторону");
    }
}
?>
<form id="form" action="game.php" method="POST">
        <input type="radio" name="game" value="1" id="orel">
        <label for="orel">Орел</label>
        <input type="radio" name="game" value="2" id="reshka">
        <label for="reshka">Reshka</label>
        <input type="hidden" name="attempts" value="<?php echo ($attempts); ?>">
        <input type="hidden" name="mode" value="<?php echo ($mode); ?>">
        <button type="submit">sabmit</button>
</form>
</body>
</html>

