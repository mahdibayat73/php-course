<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method - POST</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="firstName">
        <input type="submit">
    </form>

    <?php 
    
        if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
            // collect value of input field
            $name = $_POST['firstName'];
            if ( empty($name) ) {
                echo "Name is empty";
            }else {
                echo "Your name is: " . $name;
            }
        }

    ?>
</body>

</html>