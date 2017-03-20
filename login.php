<?php
require('connectdb.php');
$status = $_POST['status'];
$UserName = $_POST['UserName'];
$Password = $_POST['Password'];
$Tel = $_POST['Tel'];
$Email = $_POST['Email'];

if($status==1){

  $sql = "INSERT INTO login (UserName, Password, Tel, Email) VALUES ('".$UserName."','".$Password."','".$Tel."','".$Email."')";
  if($conn ->query($sql)===TRUE){
    echo "สมัครเรียบร้อยแล้ว...";
  }else{
    echo "สมัครไม่สำเร็จโปรดทำรายการใหม่อีกครั้ง...";
  }
}else{
  $sql = "SELECT * FROM login WHERE UserName = '".$UserName."', Password = '".$Password."'";
  echo "=".$sql;
  if($conn ->query($sql)===TRUE){

    echo "ล็อกอินสำเร็จ...";

  }else{
    echo "ล็อกอินไม่สำเร็จกรุณนาตรวจสอบรหัสผ่านใหม่อีกครั้ง...";
  }
}

$conn -> close();

 ?>
