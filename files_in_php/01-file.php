<?php 

echo file_exists("01-file.php");
echo "<hr>";
echo is_file("01-file.php");
echo "<hr>";
echo is_dir("dir");
echo "<hr>";
$dirPath = "dir/new-dir";
if ( !file_exists($dirPath) ) {
    mkdir($dirPath);
    echo "فایل شما با موفقیت ایجاد شد.";
}else {
    echo "فایل مورد نظر شما موجود میباشد!";
}
echo "<hr>";
// if ( file_exists($dirPath) ) {
//     rmdir($dirPath);
//     echo "فایل مورد نظر شما با موفقیت حذف شد.";
// }else {
//     echo "این فایل قبلا حذف شده است!";
// }