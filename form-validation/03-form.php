<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Validate</title>

    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>

    <?php

    //define variables and set to empty values
    $nameErr = $emailErr = $websiteErr = $genderErr = "";
    $name = $email = $website = $comment = $gender = "";

    if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
        if ( empty($_POST["name"]) ) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // Check if name only contains letters and whitespace
            if ( !preg_match("/^[a-zA-Z-' ]*$/", $name) ) {
                $nameErr = "Only letters an white space allowed";
            }
        }

        if ( empty($_POST["email"]) ) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // Check if e-mail address is well-formed
            if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
                $emailErr = "Invalid email format";
            }
        }

        if ( empty($_POST["website"]) ) {
            $website = "";
        }else {
            $website = test_input($_POST["website"]);
            // Check if URL address syntax is valid
            if ( !preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website) ) {
                $websiteErr = "Invalid URL";
            }
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

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <h1>PHP - Validate Name, Email, and URL</h1>
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
            <?php echo $websiteErr; ?>
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
    
        echo "<h2>Your Input:</h2>";
        echo $name . "<br>";
        echo $email . "<br>";
        echo $website . "<br>";
        echo $comment . "<br>";
        echo $gender . "<br>";
    ?>

</body>

</html>