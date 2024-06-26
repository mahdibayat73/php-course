<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - Required</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>

<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    if ( empty($_POST["name"]) ) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if ( empty($_POST["email"]) ) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if ( empty($_POST["website"]) ) {
        $websiteErr = "Website is required";
    } else {
        $website = test_input($_POST["website"]);
    }

    if ( empty($_POST["comment"]) ) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if ( empty($_POST["gender"]) ) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}
?>

    <h2>PHP Form Validation Example</h2>
    <form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
        Name: <input type="text" name="name">
        <span class="error">
            * <?php echo $nameErr; ?>
        </span>
        <br><br>
        Email: <input type="text" name="email">
        <span class="error">
            * <?php echo $emailErr; ?>
        </span>
        <br><br>
        Website: <input type="text" name="website">
        <span class="error">
            * <?php echo $websiteErr; ?>
        </span>
        <br><br>
        Comment: <textarea name="comment" rows="6" cols="36"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">
            * <?php echo $genderErr; ?>
        </span>
        <br><br>
        <input type="submit" name="submit" value="Send">
    </form>

    <?php 
        echo "<h2>Your input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
    ?>

</body>

</html>