<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>محاسبه باقی‌مانده</title>
</head>
<body>
    <form method="post">
        <label>عدد اول:</label>
        <input type="number" name="a" required>
        <br>
        <label>عدد دوم:</label>
        <input type="number" name="b" required>
        <br>
        <button type="submit">محاسبه</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = (int) $_POST['a'];
        $b = (int) $_POST['b'];
        $z = $a + $b;
        echo "جمع: " . $z . "<br>";
        echo "باقی‌مانده: " . ($z % $a);
    }
    ?>
</body>
</html>
