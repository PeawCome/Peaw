<?php
require('connectdb.php');
$status = $_POST['status'];
$inputUserName = $_POST['inputUserName'];
$inputPassword = $_POST['inputPassword'];
$inputTel = $_POST['inputTel'];
$inputEmail = $_POST['inputEmail'];
$inputName = $_POST['inputName'];
$inputPass = $_POST['inputPass'];

if($status==1){

  $sql = "INSERT INTO login (UserName, Password, Tel, Email) VALUES ('".$inputUserName."','".$inputPassword."','".$inputTel."','".$inputEmail."')";
  if($conn ->query($sql)===TRUE){
    echo "สมัครเรียบร้อยแล้ว...";
  }else{
    echo "สมัครไม่สำเร็จโปรดทำรายการใหม่อีกครั้ง...";
  }
}else{
  $sql = "SELECT * FROM login WHERE UserName = '".$inputName."' AND Password = '".$inputPass."'";
  if($conn->query($sql)){

    echo "ล็อกอินสำเร็จ...";

  }else{
    echo "ล็อกอินไม่สำเร็จกรุณนาตรวจสอบรหัสผ่านใหม่อีกครั้ง...";
  }
}

$conn -> close();

 ?>
