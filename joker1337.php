<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>КАЗІНО САНІ БОЧАРОВСКО ФЕМІЛІ МОНТЕНЕГРО</h1>
    <form action="joker1337.php" method="POST">
            <input type="radio" name="mode" value="1" id="easy">
            <label for="orel">easy</label>
            <input type="radio" name="mode" value="2" id="normal">
            <label for="reshka">HOPMA/\</label>
            <input type="radio" name="mode" value="3" id="hard">
            <label for="reshka">Xapdd</label>
    </form>
    <?php
    if ($_POST) {
        if (isset($_POST['game'])){
            $game = $_POST["game"];
            $lol = rand(1, 2);
            $mode = $_POST["mode"];
            if (isset ($_POST['attempts'])) {
                $attempts = $_POST['attempts'];
            } else {
                $attempts = 1;
            }
            if ($attempts <= 10) {
                // if ($game == $lol){;
                //     echo ("Ви виграли");
                //     ++$attempts;
                // }else{
                //     echo ("Ви програли кидаю ше раз");
                //     $lol = rand(1, 2);
                //     if ($game == $lol){
                //         echo ("Ви виграли");
                //         ++$attempts;
                //     }else{
                //         echo ("Ви програли");
                //         $attempts++;
                //     }
                // }
                // echo ("<p>Спроба " . "$attempts" . "/" . "10</p>");
                // if ($game == $lol) {
                //     ++$attempts;
                //     echo ("Ви виграли");
                //     if ($lol == 1) {
                //         echo ("Вам випав орел");
                //     } else {
                //         echo ("Вам випала решка");
                //     }
                // } else {
                //     ++$attempts;
                //     echo ("Ви програли");
                // }
                if ($game != $lol){;
                    echo ("Ви програли");
                    ++$attempts;
                }else{
                    echo ("Кидаю ще раз");
                    $lol = rand(1, 2);
                    if ($game == $lol){
                        echo ("Ви виграли");
                        ++$attempts;
                    }else{
                        echo ("Ви програли");
                        $attempts++;
                    }
                }
            } else {
                echo ("Ваші спроби закінчились");
                $attempts = 0;
            }
        }else{
            echo ("Виберіть сторону");
        }
        var_dump($game, $lol);
    }
    ?>
    <form id="form" action="joker1337.php" method="POST">
        <input type="radio" name="game" value="1" id="orel">
        <label for="orel">Орел</label>
        <input type="radio" name="game" value="2" id="reshka">
        <label for="reshka">Reshka</label>
        <input type="hidden" name="attempts" value="<?php echo (isset ($_POST['attempts'])); ?>">
        <input type="hidden" name="attempts" value="<?php echo ($attempts); ?>">
        <button type="submit">lol</button>
    </form>
</body>

</html>