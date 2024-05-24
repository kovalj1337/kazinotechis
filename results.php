<?php
    if($_POST){
        $attempts = $_POST['attempts'];
        $wins = $_POST["wins"];
    }
?>
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
    <h1 class='display-flex justify-content-center font-results'>Ви виграли <?php echo($wins)?> <?php 
    if($wins >= 2 && $wins <= 4){
        echo("раза з\n" . $attempts . "!");
    }else{
        echo("раз з\n" . $attempts . "!");
    }
    ?></h1>
    <h2><?php 
    if($wins >= 5){
        echo("<p class='display-flex justify-content-center font-for-level'>Ви можете перейти на новий рівень!</p>");
        echo("<p class='display-flex justify-content-center font-for-level'>Натисніть кнопку на головну щоб перейти на головне меню</p>");
    }else{
        echo ("<p class='display-flex justify-content-center font-for-level'>Ви програли більше 5 разів!</p>");
        echo("<p class='display-flex justify-content-center font-for-level'>Ви не можете перейти на інший рівень натисніть кнопку рестарт</p>");
    }
    ?></h2>
    <form action="index.php" method="POST">
        <?php 
        $winstreak = $_POST["winstreak"]; 
        if($wins >= 5){
            $winstreak++;
            echo ("<p class='display-flex justify-content-center'><button type='submit' class='na-golovnu '></button></p>");
        }else{
            echo ("<p class='display-flex justify-content-center'><button type='submit' class='restart'></button></p>");
        }
        ?> 
        <input type="hidden" name="winstreak" value="<?php echo ($winstreak);?>">
    </form>
</body>
</html>