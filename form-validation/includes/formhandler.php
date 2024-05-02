<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST["firstname"]);
    $lastName = htmlspecialchars($_POST["lastname"]);
    $favouritePet = htmlspecialchars($_POST["favouritepet"]);

    echo "<h2>These are the data, that the user submitted:</h2>";
    echo $firstName . "<br>";
    echo $lastName . "<br>";
    echo $favouritePet . "<br>";

    header("Location: ../05-form.php");
} else {
    header("Location: ../05-form.php");
}