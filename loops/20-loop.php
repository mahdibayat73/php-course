<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Lottery</title>
    <style>

        .wrapper {
            max-width: 400px;
            margin: 10px auto;
        }
        .item {
            width: 70px;
            margin: 4px;
            border-radius: 2px;
        }
    </style>
</head>

<body>

    <main id="main" class="container">
        <h1 class="text-center">Lottery</h1>
        <form action="Lottery.php" method="POST" class="wrapper d-flex flex-wrap">
            <?php
            $i = 1;
            while ($i <= 45) :
                echo "<div class='border item p-2 text-center d-flex flex-column'>";
                echo $i;
                echo "<input type='checkbox' name='box-$i' value='$i'>";
                echo "</div>" . PHP_EOL;
                $i++;
            endwhile;
            ?>
            <input type="submit" name="submit" value="Play">
        </form>
    </main>

</body>

</html>