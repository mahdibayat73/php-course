<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>ماشین حساب ساده</title>
</head>
<body>
    <h2>ماشین حساب PHP</h2>
    <form method="post">
        عدد اول: <input type="number" name="num1" required><br><br>
        عدد دوم: <input type="number" name="num2" required><br><br>
        عملگر: 
        <select name="operator">
            <option value="+">جمع (+)</option>
            <option value="-">تفریق (-)</option>
            <option value="*">ضرب (*)</option>
            <option value="/">تقسیم (/)</option>
        </select><br><br>
        <input type="submit" value="محاسبه">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // دریافت مقادیر ورودی از فرم
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];

        // انجام عملیات ریاضی
        switch ($operator) {
            case "+":
                $result = $num1 + $num2;
                break;
            case "-":
                $result = $num1 - $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            case "/":
                $result = ($num2 != 0) ? $num1 / $num2 : "خطا: تقسیم بر صفر امکان‌پذیر نیست!";
                break;
            default:
                $result = "عملگر نامعتبر!";
        }

        // نمایش نتیجه
        echo "<h3>نتیجه: $result</h3>";
    }
    ?>
</body>
</html>
