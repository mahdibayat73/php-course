<?php 

//تمرین پیشرفته: برنامه‌ای بنویسید که نام کاربر و سن او را دریافت کند. اگر کاربر نام خود را "admin" وارد کرد و سن او بالاتر از 18 بود، پیام "مدیر خوش‌آمدید" چاپ شود، در غیر این صورت پیام "دسترسی مجاز نیست" نمایش داده شود.

$username = "admin";
$age = 29;

if ( $username == "admin" && $age > 18 ) {
    echo "مدیر خوش آمدید!";
} else {
    echo "دسترسی مجاز نیست!";
}