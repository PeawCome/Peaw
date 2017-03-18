<?php
require('connectdb.php');
$id = $_POST['id'];

$sql = "DELETE FROM `product` WHERE `ProductID` = ".$id;

if($conn ->query($sql)===TRUE){
  echo "ลบข้อมูลสำเร็จ";
}else{
  echo "ลบข้อมูลไม่สำเร็จ";
}
$conn->close();

 ?>
