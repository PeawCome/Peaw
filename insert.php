<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insert Data !</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="dist/sweetalert.css" rel="stylesheet">
  </head>
  <body>
    <div class="se" style="width: 90%;margin-left: 60px;margin-top: 10px;">

    </div>
    <div class="ed" style="width: 90%;margin-left: 60px;margin-top: 10px;display:none;">

    </div>
    <div class="as" style="display:none;">
      <form class="form-inline" method="post">
      ProductName  <input type="text" name="productName">
      ProductCategory <input type="text" name="productType">
      ProductPrice <input type="text" name="productPrice">
      ProductQuantity <input type="text" name="productQuantity">
      <button type="button" name="button6" class="btn btn-warning" id="insert">INSERT</button>
      </form>
      <h1 class="result"></h1>
    </div>
    <div class="mt" style="display: none;width: 90%;margin-left: 60px;margin-top: 10px;">
      <?php
      require('connectdb.php');
      $sql = "SELECT * FROM `product`";
      $result  = $conn->query($sql);
      if ($result->num_rows > 0) {
        echo "<form>",
          "<table class='table' border='1'>",
          "<thead>",
          "<tr>",
          "<th>#</th>",
          "<th>ชื่อสินค้า</th>",
          "<th>ประเภทสินค้า</th>",
          "<th>ราคา</th>",
          "<th>จำนวนสินค้า</th>",
          "<th>แก้ไขข้อมูลสินค้า</th>",
          "</tr>",
          "</thead>";
          while ($row=$result->fetch_assoc()) {
            echo "<tbody><tr>",
              "<td>".$row["ProductID"]."</td>",
              "<td>".$row["ProductName"]."</td>",
              "<td>".$row["Catagory"]."</td>",
              "<td>".$row["Price"]."</td>",
              "<td>".$row["Quantity"]."</td>",
              "<td><button type='button' name='edit' class='btn btn-defualt' value='".$row["ProductID"]."'>แก้ไข</button></td>",
              "</tr>",
              "</tbody>";
          }
          echo "</table>";
          echo "</form>";
      }
      ?>
    </div>
    <div class="" style="margin-left: 60px;margin-top: 20px;">
      <button type="button" name="button1" class="btn btn-warning" id="in">เพิ่มสินค้า</button>
      <button type="button" name="button2" class="btn btn-success" id="se">ดูรายการสินค้า</button>
      <button type="button" name="button3" class="btn btn-info" id="ed">แก้ไขสินค้า</button>
      <button type="button" name="button4" class="btn btn-danger" id="de">ลบสินค้า</button>
    </div>

      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.js" charset="utf-8"></script>
      <script src="js/bootstrap.min.js" charset="utf-8"></script>
      <script src="dist/sweetalert-dev.js"></script>
      <script src="dist/sweetalert.min.js" charset="utf-8"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#insert').click(function(){
              var ProductName = $("input[name='productName']").val();
              var Type = $("input[name='productType']").val();
              var Price = $("input[name='productPrice']").val();
              var Quantity = $("input[name='productQuantity']").val();
              var status = 1;
              $.ajax({
                url  : "add.php",
                type : "POST",
                data : {id:0,status:status,ProductName:ProductName,Type:Type,Price:Price,Quantity:Quantity},
                success : function(result){
                  $('.result').html(result);
                  $("input[name='productName']").val("");
                  $("input[name='productType']").val("");
                  $("input[name='productPrice']").val("");
                  $("input[name='productQuantity']").val("");
                  swal({
                    title: result,
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, Insert it!",
                    closeOnConfirm: false
                  },
                  function(){
                    swal("Insert!", "Your imaginary file has been Insert.", "success");
                    location.reload();
                  });
                }
              });

          });
          $('.ed').on('click','#mat',function(){
              $('.ed').css("display","block");
              $('.as').css("display","none");
              $('.mt').css("display","none");
              var value = $(this).val();
              var status = 2;
              var ProductName = $("input[name='name2']").val();
              var Type = $("input[name='name3']").val();
              var Price = $("input[name='name4']").val();
              var Quantity = $("input[name='name5']").val();
            $.ajax({
              url : "add.php",
              type : "POST",
              data : {status:status,id:value,ProductName:ProductName,Type:Type,Price:Price,Quantity:Quantity},
              success : function(result){
                swal({
                  title: result,
                  text: "Submit to run ajax request",
                  type: "info",
                  showCancelButton: true,
                  closeOnConfirm: false,
                  showLoaderOnConfirm: true,
                },
                function(){
                  setTimeout(function(){
                    swal("ยินดีที่ได้รู้จัก!");
                  }, 2000);
                  location.reload();
                });
                $("button[name='button9']").val("");
              }
            });
          });
          $('#in').click(function(){
            $('.as').css("display","block");
            $('.se').css("display","none");
            $('.ed').css("display","none");
            $('.mt').css("display","none");
          });
          $('#se').click(function(){
            $('.se').css("display","block");
            $('.as').css("display","none");
            $('.ed').css("display","none");
            $('.mt').css("display","none");
            $.ajax({
              url : "select.php",
              success : function(result){
                $('.se').html(result);
              }
            });
          });
          $('#ed').click(function(){
            $('.mt').css("display","block");
            $('.as').css("display","none");
            $('.se').css("display","none");
          });
          $('.btn-defualt').click(function(){
            var value = $(this).val();
            $('.ed').css("display","block");
            $('.mt').css("display","none");
            $('.as').css("display","none");
            $('.se').css("display","none");

            $.ajax({
              url : "edit.php",
              type : "POST",
              data : {id:value},
              success : function(result){
                $('.ed').html(result);
                $("button[name='edit']").val("");
                console.log(result);
              }
            });
          });
      });
      </script>
  </body>
</html>
