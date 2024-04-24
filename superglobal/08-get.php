<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET - METHOD</title>
</head>

<body>
    <?php

    echo "<h1>PHP GET METHOD</h1>";
    echo "<p>_GET containes an array of variables received via the HTTP GET method</p>";

    ?>

    <form method="get" action="welcome_get.php">
        Name: <input type="text" name="name">
        Email: <input type="text" name="email">
        <input type="submit">
    </form>
</body>

</html>