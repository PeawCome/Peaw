<?php
require('connectdb.php');
$sql = "SELECT * FROM `product`";
$result  = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<table class='table' border='1'>",
    "<thead>",
    "<tr>",
    "<th>#</th>",
    "<th>ชื่อสินค้า</th>",
    "<th>ประเภทสินค้า</th>",
    "<th>ราคา</th>",
    "<th>จำนวนสินค้า</th>",
    "</tr>",
    "</thead>";
    while ($row=$result->fetch_assoc()) {
      echo "<tbody><tr>",
        "<td>".$row["ProductID"]."</td>",
        "<td>".$row["ProductName"]."</td>",
        "<td>".$row["Catagory"]."</td>",
        "<td>".$row["Price"]."</td>",
        "<td>".$row["Quantity"]."</td>",
        "</tr>",
        "</tbody>";
    }
    echo "</table>";
}
?>
