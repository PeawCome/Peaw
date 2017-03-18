<?php
 require("connectdb.php");
 $id = $_POST['id'];
 $satatus = $_POST['status'];
 $ProductName = $_POST['ProductName'];
 $Type = $_POST['Type'];
 $Price = $_POST['Price'];
 $Quantity = $_POST['Quantity'];
if($satatus==1){

 $sql = "INSERT INTO product (ProductName,Catagory,Price,Quantity) VALUES ('".$ProductName."','".$Type."',".$Price.",".$Quantity.")";

 if ($conn ->query($sql)===TRUE) {
    echo "เพิ่มข้อมูลสำเร็จ";
 }else {
   echo "เพิ่มข้อมูลไม่สำเร็จ";
 }
 }else{
   $sql = "UPDATE product SET ProductName = '".$ProductName."',Catagory = '".$Type."',Price = ".$Price.",Quantity = ".$Quantity." WHERE ProductID = ".$id;
   if ($conn->query($sql) === TRUE) {
      echo "แก้ไขข้อมูลสำเร็จ";
   }else {
     echo "แก้ไขข้อมูลไม่สำเร็จ";
   }
 }



  $conn->close();
 ?>
