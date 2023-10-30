<?php
// شروع سشن
session_start();

// اگر کاربر فرم را ارسال کرده باشد
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // دریافت نام کاربری و رمز عبور از فرم
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // در اینجا می‌توانید یک عملیات احراز هویت انجام دهید (به عنوان مثال، چک کردن نام کاربری و رمز عبور با مقادیر معتبر)
    
    // اگر احراز هویت موفقیت‌آمیز بود
    if ($username == "user" && $password == "pass") {
        // ذخیره نام کاربری در سشن
        $_SESSION["username"] = $username;
        
        // انتقال به صفحه دلخواه
        header("Location: welcome.php");
        exit();
    } else {
        // در صورت ناموفقیت احراز هویت، نمایش پیام خطا
        $error = "نام کاربری یا رمز عبور نادرست است.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ورود به سیستم</title>
</head>
<body>
    <h1>ورود به سیستم</h1>
    <?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>
    <form method="post">
        <label for="username">نام کاربری:</label>
        <input type="text" name="username" id="username" required><br>
        <label for="password">رمز عبور:</label>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" value="ورود">
    </form>
</body>
</html>
