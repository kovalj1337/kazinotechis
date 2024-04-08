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
</head>
<body>
    <h2>За <?php echo($attempts)?> спроб ви виграли</h2>
    <h1><?php echo($wins)?> раз!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h1>
    <form action="index.php" method="POST">
        <?php 
        $winstreak = $_POST["winstreak"]; 
        if($wins >= 5){
            $winstreak++;
            echo ("<button type='submit'>На головну</button>");
        }else{
            echo ("<button type='submit'>Спробувати ще раз</button>");
        }
        ?> 
        <input type="hidden" name="winstreak" value="<?php echo ($winstreak);?>">
    </form>
</body>
</html>