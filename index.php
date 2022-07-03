<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="./fei.png">
    <link rel="stylesheet" href="./css/style.css">
    <script src="js/script.js" defer></script>
    <title>OWASP</title>
</head>
<body>
<form action="login.php" method="post">
    <div class="marginbottom">
        <label for="email">Username: </label>
        <input id="email" name="email" type="text">
    </div>
    <div class="marginbottom">
        <label for="password">Password: </label>
        <input id="password" type="password" name="password">
    </div>
    <input class="marginbottom" type="submit" value="Login">
    <br><br><br><br>

</form>
</body>
</html>