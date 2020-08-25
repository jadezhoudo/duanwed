<?php 

include_once(__DIR__ . '/dbconnect.php');
// 2. Chuẩn bị QUERY
$tenhinhthucthanhtoan = 'bbbbbbbb'; //$_POST['httt_ten'];
$sql = "INSERT INTO `hinhthucthanhtoan`(httt_ten) VALUES('$tenhinhthucthanhtoan');";
// 3. Thực thi
mysqli_query($conn, $sql);


?>