<!-- jfjffjfjfjfjfjfjfj --> 
<?php
$name = isset($_POST['name']) ? $_POST['name']:null;
$age  = isset($_POST['age']) ? $_POST['age']:null;


if ($name) {
    echo "Tên của bạn: $name<br>";
    echo "Tuổi: $age<br>";

}
else
    echo "<p>Nhập dữ liệu và bấm vào Gửi đi</p>";

?>
