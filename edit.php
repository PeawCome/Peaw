<?php
require('connectdb.php');
$id = $_POST['id'];
$sql = "SELECT * FROM `product` WHERE ProductID =".$id;
$result  = $conn->query($sql);
if ($result->num_rows > 0) {
  echo  "<table class='table' border='1'>",
    "<thead>",
    "<tr>",
    "<th>ชื่อสินค้า</th>",
    "<th>ประเภทสินค้า</th>",
    "<th>ราคา</th>",
    "<th>จำนวนสินค้า</th>",
    "<th>แก้ไขข้อมูลสินค้า</th>",
    "</tr>",
    "</thead>";
    while ($row=$result->fetch_assoc()) {
      echo "<tbody>",
    "<tr>",
      "<td><input type='text' name='name2' value='".$row['ProductName']."'></td>",
      "<td><input type='text' name='name3' value='".$row['Catagory']."'></td>",
      "<td><input type='text' name='name4' value='".$row['Price']."'></td>",
      "<td><input type='text' name='name5' value='".$row['Quantity']."'></td>",
      "<td><button type='button' name='button9' id='mat' class='btn btn-warning' value='".$row["ProductID"]."'>แก้ไขสินค้า</button></td>",
    "</tr>",
    "</tbody>";
    }
    echo "</table>";
}
?>
