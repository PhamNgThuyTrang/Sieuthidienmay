<?php
$username = "user_sanpham";
$password = "TripleTWeb";
$server = "localhost";
$dbname = "sản phẩm";

$connect = new mysqli($server, $username, $password, $dbname);

if(!$connect){
    die("Không kết nối: ".mysqli_connect_error());
    exit();
}

echo "Kết nối thành công";

$sql = "SELECT *FROM thongtin_sanpham";
$ketqua = mysqli_query($connect, $sql);

if(!$ketqua){
    die("Không thực hiện được câu lệnh SQL: ".mysqli_error($connect));
    exit();
}

while ($row = $ketqua->fetch_array(MYSQLI_ASSOC)) {
    echo "<p>Mã sản phẩm: " . $row['ID'] . "</p>";
    echo "<p>Tên sản phẩm: " . $row['Tên sản phẩm'] . "</p>";
    echo "<p>Giá: " . $row['Giá'] . "</p>";
    echo "<br>";
}


?>
