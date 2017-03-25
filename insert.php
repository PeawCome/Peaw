<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insert To Data !</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="jQuery/dist/sweetalert.min.js">
    <style media="screen">
      th,td{
        height: 50px;
        text-align: center;
      }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-default">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index_2.html" id="de">Brand</a>
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="warning"><a href="#" id="in">เพิ่มข้อมูล</a></li>
        <li class="warning"><a href="#" id="se">ดูรายการสินค้า</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" id="ed">แก้ไขข้อมูลสินค้า</a>

        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">ค้นหา</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="cd-signup">Sign Up</a></li>
        <li><a href="#" class="cd-signin">Log In</a></li>
        <li class = "dropdown">
            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
               Java
               <b class = "caret"></b>
            </a>

            <ul class = "dropdown-menu">
               <li><a href = "#">jmeter</a></li>
               <li><a href = "#">EJB</a></li>
               <li><a href = "#">Jasper Report</a></li>

               <li class = "divider"></li>
               <li><a href = "#">Separated link</a></li>

               <li class = "divider"></li>
               <li><a href = "#">One more separated link</a></li>
            </ul>

         </li>
      </ul>
    </div>
  </div>
</nav>

    <!-- <div class="nav nav-tabs" style="margin-left: 60px;margin-top: 20px;">
      <button type="button" name="button4" class="btn btn-danger" id="de">หน้าแรก</button>
      <button type="button" name="button1" class="btn btn-warning" >เพิ่มสินค้า</button>
      <button type="button" name="button2" class="btn btn-success" id="se">ดูรายการสินค้า</button>
      <button type="button" name="button3" class="btn btn-info" id="ed">แก้ไขสินค้า</button>
    </div> -->
    <div class="sign-up" style="display:none;width: 40%;margin-left: 30%;">
      <form class="form-horizontal">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">ชื่อ</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="UserName" placeholder="UserName">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">รหัสผ่าน</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" name="Password" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <label for="inputTel3" class="col-sm-2 control-label">เบอร์โทรศัพท์</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="Tel" placeholder="Tel">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">อีเมลล์</label>
        <div class="col-sm-8">
          <input type="email" class="form-control" name="Email" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default" id="id_signup">Sign Up</button>
          <button type="close" class="btn btn-danger">Close</button>
        </div>
      </div>
    </form>
    </div>

    <div class="log-in" style="display:none;width: 40%;margin-left: 30%;">
      <form class="form-horizontal">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">UserName</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="UserName" placeholder="UserName">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" name="Password" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-info" id="id_signin">Sign in</button>
            <button type="close" class="btn btn-danger">Close</button>
          </div>
        </div>
      </form>
    </div>


    <div class="de" style="width: 90%;margin-left: 60px;margin-top: 10px;">

    </div>
    <div class="se" style="width: 90%;margin-left: 60px;margin-top: 10px;">

    </div>
    <div class="ed" style="width: 90%;margin-left: 60px;margin-top: 10px;display:none;">

    </div>
    <div class="as" style="display:none;">
      <div class="panel panel-warning" style="width: 40%;margin-left: 30%;">
        <div class="panel-heading">เพื่มข้อมูลสินค้า</div>
        <div class="panel-body">
          <form>
            <div class="form-group">
              <label for="exampleInputName2">ชื่อสินค้า</label>
              <input type="text" class="form-control" name="productName" placeholder="กรุณากรอกชื่อสินค้า..." required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">ประเภทของสินค้า</label>
              <input type="text" class="form-control" name="productType" placeholder="กรุณากรอกประเภทสินค้า..." required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">ราคาสินค้า</label>
              <input type="text" class="form-control" name="productPrice" placeholder="กรุณากรอกราคาสินค้า.." required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">จำนวสินค้าสินค้า</label>
              <input type="email" class="form-control" name="productQuantity" placeholder="กรุณากรอกจำนวนสินค้า..." required="">
            </div>
            <button type="button" name="button6" class="btn btn-warning" id="insert">Send invitation</button>
          </form>
        </div>
      </div>
    </div>

    <div class="mt" style="display: none;width: 90%;margin-left: 60px;margin-top: 10px;">
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
          "<th>แก้ไขข้อมูลสินค้า</th>",
          "<th>ลบรายการสินค้า</th>",
          "</tr>",
          "</thead>";
          while ($row=$result->fetch_assoc()) {
            echo "<tbody><tr>",
              "<td>".$row["ProductID"]."</td>",
              "<td>".$row["ProductName"]."</td>",
              "<td>".$row["Catagory"]."</td>",
              "<td>".$row["Price"]."</td>",
              "<td>".$row["Quantity"]."</td>",
              "<td><button type='button' name='edit' class='btn btn-primary' value='".$row["ProductID"]."'>แก้ไขข้อมูลสินค้า</button></td>",
              "<td><button type='button' name='delete' id='delete' class='btn btn-danger' value='".$row["ProductID"]."'>ลบข้อมูลสินค้า</button></td>",
              "</tr>",
              "</tbody>";
          }
          echo "</table>";
      }
      ?>
    </div>

    <div class="default">

    </div>
    <!-- Scripts -->
		<script src="jQuery/jquery-3.1.1.min.js" charset="utf-8"></script>
    <script src="bootstrap/js/bootstrap.js" charset="utf-8"></script>
    <script src="bootstrap/js/bootstrap.min.js" charset="utf-8"></script>

    <script src="jQuery/dist/sweetalert.min.js"></script>
      <!-- function_Insert_Update_Delete -->

      <script type="text/javascript">
        $(document).ready(function(){
          //insertข้อมูล
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
                  });
                }
              });
          });
          //Updateข้อมูล
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
                },function(){
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
          //Selectข้อมูล
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
          // selectข้อมูลเพื่อทำการ Update ข้อมูลเก่า
          $('.btn-primary').click(function(){
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
          //ลบข้อมูล
          $('.mt').on('click','#delete',function(){
            $('.delete').css("display","block");
            $('.mt').css("display","none");
            $('.as').css("display","none");
            $('.se').css("display","none");
            $('.ed').css("display","none");
            var value = $(this).val();
            $.ajax({
              url : "delete.php",
              type : "POST",
              data : {id:value},
              success : function(result){
                swal({
                  title: result,
                  text: "You won't be able to revert this!",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
                });
                  $('button[name="delete"]').val("");
              }
          });
        });

        $('.cd-signin').click(function(){
          $('.log-in').css("display","block");
          $('.sign-up').css("display","none");
          $('.mt').css("display","none");
          $('.as').css("display","none");
          $('.se').css("display","none");
          $('.ed').css("display","none");
        });
        //function login
        $('#id_signup').click(function(){
          var UserName = $('input[name="UserName"]').val();
          var Password = $('input[name="Password"]').val();
          var Tel = $('input[name="Tel"]').val();
          var Email = $('input[name="Email"]').val();
          var status = 1;
          $.ajax({
            url : "login.php",
            type : "POST",
            data : {status:status,UserName:UserName,Password:Password,Tel:Tel,Email:Email},
            success : function(result){

              swal({
                title: result,
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Sign Up it!'
              });
              console.log(result);
              $('.default').html(result);
              $('input[name="UserName"]').val("");
              $('input[name="Password"]').val("");
              $('input[name="Tel"]').val("");
              $('input[name="Email"]').val("");
            }
          });
        });

        $('#id_signin').click(function(){
          var status = 2;
          $.ajax({
            url : "login.php",
            type : "POST",
            data : {status:status},
            success : function(result){
              swal({
                title: result,
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, login it!'
              });
                $('.default').html(result);
                console.log(result);
            }
          });
        });
        $('.cd-signup').click(function(){
          $('.sign-up').css("display","block");
          $('.log-in').css("display","none");
          $('.mt').css("display","none");
          $('.as').css("display","none");
          $('.se').css("display","none");
          $('.ed').css("display","none");
        });
        $('#de').click(function(){
          location.reload();
        });
      });
      </script>
  </body>
</html>
