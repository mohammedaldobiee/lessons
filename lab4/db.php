<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mohammed";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    die("تم الاتصال  " . mysqli_connect_error());
}

// // إضافة بيانات
// $sql_insert = "INSERT INTO school (id, name, pass) VALUES ('1', 'mohammed', '123')";
// if (mysqli_query($conn, $sql_insert)) {
//     echo "تمت إضافة البيانات بنجاح";
// } else {
//     echo "خطأ في إضافة البيانات: " . mysqli_error($conn);
// }

// تعديل بيانات
// $sql_update = "UPDATE school SET name='ahmed' WHERE  id=1 ";
// if (mysqli_query($conn, $sql_update)) {
//     echo "تم تعديل البيانات بنجاح";
// } else {
//     echo "خطأ في تعديل البيانات: " . mysqli_error($conn);
// }

// // حذف بيانات
// $sql_delete = "DELETE FROM school WHERE id=1";
// if (mysqli_query($conn, $sql_delete)) {
//     echo "تم حذف البيانات بنجاح";
// } else {
//     echo "خطأ في حذف البيانات: " . mysqli_error($conn);
// }

mysqli_close($conn);
?>