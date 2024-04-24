<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST - METHOD</title>
</head>

<body>

    <?php

    echo "<h1>PHP POST METHOD</h1>";
    echo "<p>_POST contains an array of variables received via the HTTP POST method.</p>";

    ?>

    <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["fname"]);
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo "Your name is: $name";
        }
    }

    ?>

</body>

</html>