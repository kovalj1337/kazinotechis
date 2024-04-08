<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST["winstreak"])) {
        $winstreak = $_POST["winstreak"];
    } else {
        $winstreak = 1;
    }
    ?>
    <form method="post" action="game.php">
        <input type="hidden" name="winstreak" value="<?php echo ($winstreak);?>">
        <button type="submit" name="mode" value="easy">Легкий</button>
        <button type="submit" name="mode" value="mid" <?php 
        if($winstreak >= 2){
            echo "";
        }else{
            echo ("disabled");
        }
        ?>>Середній</button>
        <button type="submit" name="mode" value="hard" <?php 
        if($winstreak >= 3){
            echo "";
        }else{
            echo ("disabled");
        }
        ?>>Важкий</button>
        <input type="hidden" name="attempts" value="0">
    </form>
</body>
</html>