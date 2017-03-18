<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ฟุตบอลโลก ประเทศเกาหลีใต้</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

    <link href="css/login.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color: #CCFFCC;">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">ฟุตบอลโลก 2020</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li>


                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">ฟุตบอลโลก ประเทศแอฟริกาใต้
                    <small>2020</small>

                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-6">
              <div class="" align="center">
                <img class="img-responsive" src="img/ball1.jpg" alt="" width="120%" style="margin-left:50%;">

              </div>


            </div>

            <div class="col-md-4">

            </div>


        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
<hr>

            </div>
        </div>

        <!--loginform -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
					<h1>Login to Your Account</h1><br>
				  <form method="post" action="checklogin.php">
  					<input type="text" id="user" name="uname" placeholder="Username">
  					<input type="password" id="pass" name="pass" placeholder="Password">
  					<input type="submit" id="login-btt" class="login loginmodal-submit" value="Login">
				  </form>

				</div>
			</div>
		  </div>


        <div class="">
          <label for="">Group A</label>
          <?php
          // Create connection
          $conn = new mysqli("localhost", "Aontam", "peaw", "ball");
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
          mysqli_set_charset($conn,"utf8");

          $sql = "SELECT * FROM team,score WHERE team.TeamId=score.TeamId AND Groups='A' ORDER BY score.Score DESC, (score.DoorIn-score.DoorOut) DESC, score.DoorIn DESC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
          ?>
          <table class="table table-bordered" style="text-algin:center;">
            <tr>
              <th>no.</th>
              <th>ประเทศ</th>
              <th>แข่ง</th>
              <th>ชนะ</th>
              <th>เสมอ</th>
              <th>แพ้</th>
              <th>ได้</th>
              <th>เสีย</th>
              <th>ต่าง</th>
              <th>แต้ม</th>
            </tr>
            <?php
            $i=0;
            while($row = $result->fetch_assoc()) {
              $i++;

              $score=($row["Win"]*3)+$row["Equal"];

              ?>

            <tr>
              <td><?=$i ?></td>
              <td><?=$row["TeamName"] ?></td>
              <td><?=$row["Matchs"] ?></td>
              <td><?=$row["Win"] ?></td>
              <td><?=$row["Equal"] ?></td>
              <td><?=$row["Lose"] ?></td>
              <td><?=$row["DoorIn"] ?></td>
              <td><?=$row["DoorOut"] ?></td>
              <td><?=$row["DoorIn"]-$row["DoorOut"] ?></td>
              <!-- <td><?=$row["Score"] ?></td> -->
              <td><?=$score ?></td>
            </tr>
            <?php

          } ?>
          </table>
          <?php
        
        } ?>
        </div>

        <div class="">
          <br>
          <label for="">Group B</label>
          <?php
          $sql = "SELECT * FROM team,score WHERE team.TeamId=score.TeamId AND Groups='B' ORDER BY score.Score DESC, (score.DoorIn-score.DoorOut) DESC, score.DoorIn DESC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
          ?>
          <table class="table table-bordered">
            <tr>
              <th>no.</th>
              <th>ประเทศ</th>
              <th>แข่ง</th>
              <th>ชนะ</th>
              <th>เสมอ</th>
              <th>แพ้</th>
              <th>ได้</th>
              <th>เสีย</th>
              <th>ต่าง</th>
              <th>แต้ม</th>
            </tr>
            <?php
            $i=0;
            while($row = $result->fetch_assoc()) {
              $i++;

              $score=($row["Win"]*3)+$row["Equal"];

              ?>

            <tr>
              <td><?=$i ?></td>
              <td><?=$row["TeamName"] ?></td>
              <td><?=$row["Matchs"] ?></td>
              <td><?=$row["Win"] ?></td>
              <td><?=$row["Equal"] ?></td>
              <td><?=$row["Lose"] ?></td>
              <td><?=$row["DoorIn"] ?></td>
              <td><?=$row["DoorOut"] ?></td>
              <td><?=$row["DoorIn"]-$row["DoorOut"] ?></td>
              <!-- <td><?=$row["Score"] ?></td> -->
              <td><?=$score ?></td>
            </tr>
            <?php
          } ?>
          </table>
          <?php
          echo "อันดับที่ 1 :";
        } ?>
        </div>

        <div class="">
          <br>
          <label for="">Group C</label>
          <?php
          $sql = "SELECT * FROM team,score WHERE team.TeamId=score.TeamId AND Groups='C' ORDER BY score.Score DESC, (score.DoorIn-score.DoorOut) DESC, score.DoorIn DESC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
          ?>
          <table class="table table-bordered">
            <tr>
              <th>no.</th>
              <th>ประเทศ</th>
              <th>แข่ง</th>
              <th>ชนะ</th>
              <th>เสมอ</th>
              <th>แพ้</th>
              <th>ได้</th>
              <th>เสีย</th>
              <th>ต่าง</th>
              <th>แต้ม</th>
            </tr>
            <?php
            $i=0;
            while($row = $result->fetch_assoc()) {
              $i++;

              $score=($row["Win"]*3)+$row["Equal"];

              ?>

            <tr>
              <td><?=$i ?></td>
              <td><?=$row["TeamName"] ?></td>
              <td><?=$row["Matchs"] ?></td>
              <td><?=$row["Win"] ?></td>
              <td><?=$row["Equal"] ?></td>
              <td><?=$row["Lose"] ?></td>
              <td><?=$row["DoorIn"] ?></td>
              <td><?=$row["DoorOut"] ?></td>
              <td><?=$row["DoorIn"]-$row["DoorOut"] ?></td>
              <!-- <td><?=$row["Score"] ?></td> -->
              <td><?=$score ?></td>
            </tr>
            <?php
          } ?>
          </table>
          <?php
          echo "อันดับที่ 1 :".$row["TeamName"];
        } ?>
        </div>

        <div class="">
          <br>
          <label for="">Group D</label>
          <?php
          $sql = "SELECT * FROM team,score WHERE team.TeamId=score.TeamId AND Groups='D' ORDER BY score.Score DESC, (score.DoorIn-score.DoorOut) DESC, score.DoorIn DESC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
          ?>
          <table class="table table-bordered">
            <tr>
              <th>no.</th>
              <th>ประเทศ</th>
              <th>แข่ง</th>
              <th>ชนะ</th>
              <th>เสมอ</th>
              <th>แพ้</th>
              <th>ได้</th>
              <th>เสีย</th>
              <th>ต่าง</th>
              <th>แต้ม</th>
            </tr>
            <?php
            $i=0;
            while($row = $result->fetch_assoc()) {
              $i++;

              $score=($row["Win"]*3)+$row["Equal"];

              ?>

            <tr>
              <td><?=$i ?></td>
              <td><?=$row["TeamName"] ?></td>
              <td><?=$row["Matchs"] ?></td>
              <td><?=$row["Win"] ?></td>
              <td><?=$row["Equal"] ?></td>
              <td><?=$row["Lose"] ?></td>
              <td><?=$row["DoorIn"] ?></td>
              <td><?=$row["DoorOut"] ?></td>
              <td><?=$row["DoorIn"]-$row["DoorOut"] ?></td>
              <!-- <td><?=$row["Score"] ?></td> -->
              <td><?=$score ?></td>
            </tr>
            <?php
          } ?>
          </table>
          <?php
          echo "อันดับที่ 1 :".$row["TeamName"];
        } ?>
        </div>

        <div class="">
          <br>
          <label for="">Group E</label>
          <?php
          $sql = "SELECT * FROM team,score WHERE team.TeamId=score.TeamId AND Groups='E' ORDER BY score.Score DESC, (score.DoorIn-score.DoorOut) DESC, score.DoorIn DESC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
          ?>
          <table class="table table-bordered">
            <tr>
              <th>no.</th>
              <th>ประเทศ</th>
              <th>แข่ง</th>
              <th>ชนะ</th>
              <th>เสมอ</th>
              <th>แพ้</th>
              <th>ได้</th>
              <th>เสีย</th>
              <th>ต่าง</th>
              <th>แต้ม</th>
            </tr>
            <?php
            $i=0;
            while($row = $result->fetch_assoc()) {
              $i++;

              $score=($row["Win"]*3)+$row["Equal"];

              ?>

            <tr>
              <td><?=$i ?></td>
              <td><?=$row["TeamName"] ?></td>
              <td><?=$row["Matchs"] ?></td>
              <td><?=$row["Win"] ?></td>
              <td><?=$row["Equal"] ?></td>
              <td><?=$row["Lose"] ?></td>
              <td><?=$row["DoorIn"] ?></td>
              <td><?=$row["DoorOut"] ?></td>
              <td><?=$row["DoorIn"]-$row["DoorOut"] ?></td>
              <!-- <td><?=$row["Score"] ?></td> -->
              <td><?=$score ?></td>
            </tr>
            <?php
          } ?>
          </table>
          <?php
          echo "อันดับที่ 1 :".$row["TeamName"];
        } ?>
        </div>

        <div class="">
          <br>
          <label for="">Group F</label>
          <?php
          $sql = "SELECT * FROM team,score WHERE team.TeamId=score.TeamId AND Groups='F' ORDER BY score.Score DESC, (score.DoorIn-score.DoorOut) DESC, score.DoorIn DESC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
          ?>
          <table class="table table-bordered">
            <tr>
              <th>no.</th>
              <th>ประเทศ</th>
              <th>แข่ง</th>
              <th>ชนะ</th>
              <th>เสมอ</th>
              <th>แพ้</th>
              <th>ได้</th>
              <th>เสีย</th>
              <th>ต่าง</th>
              <th>แต้ม</th>
            </tr>
            <?php
            $i=0;
            while($row = $result->fetch_assoc()) {
              $i++;

              $score=($row["Win"]*3)+$row["Equal"];

              ?>

            <tr>
              <td><?=$i ?></td>
              <td><?=$row["TeamName"] ?></td>
              <td><?=$row["Matchs"] ?></td>
              <td><?=$row["Win"] ?></td>
              <td><?=$row["Equal"] ?></td>
              <td><?=$row["Lose"] ?></td>
              <td><?=$row["DoorIn"] ?></td>
              <td><?=$row["DoorOut"] ?></td>
              <td><?=$row["DoorIn"]-$row["DoorOut"] ?></td>
              <!-- <td><?=$row["Score"] ?></td> -->
              <td><?=$score ?></td>
            </tr>
            <?php
          } ?>
          </table>
          <?php
          echo "อันดับที่ 1 :".$row["TeamName"];
        } ?>
        </div>

        <div class="">
          <br>
          <label for="">Group G</label>
          <?php
          $sql = "SELECT * FROM team,score WHERE team.TeamId=score.TeamId AND Groups='G' ORDER BY score.Score DESC, (score.DoorIn-score.DoorOut) DESC, score.DoorIn DESC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
          ?>
          <table class="table table-bordered">
            <tr>
              <th>no.</th>
              <th>ประเทศ</th>
              <th>แข่ง</th>
              <th>ชนะ</th>
              <th>เสมอ</th>
              <th>แพ้</th>
              <th>ได้</th>
              <th>เสีย</th>
              <th>ต่าง</th>
              <th>แต้ม</th>
            </tr>
            <?php
            $i=0;
            while($row = $result->fetch_assoc()) {
              $i++;

              $score=($row["Win"]*3)+$row["Equal"];

              ?>

            <tr>
              <td><?=$i ?></td>
              <td><?=$row["TeamName"] ?></td>
              <td><?=$row["Matchs"] ?></td>
              <td><?=$row["Win"] ?></td>
              <td><?=$row["Equal"] ?></td>
              <td><?=$row["Lose"] ?></td>
              <td><?=$row["DoorIn"] ?></td>
              <td><?=$row["DoorOut"] ?></td>
              <td><?=$row["DoorIn"]-$row["DoorOut"] ?></td>
              <!-- <td><?=$row["Score"] ?></td> -->
              <td><?=$score ?></td>
            </tr>
            <?php
          } ?>
          </table>
          <?php
          echo "อันดับที่ 1 :".$row["TeamName"];
        } ?>
        </div>

        <div class="">
          <br>
          <label for="">Group H</label>
          <?php
          $sql = "SELECT * FROM team,score WHERE team.TeamId=score.TeamId AND Groups='H' ORDER BY score.Score DESC, (score.DoorIn-score.DoorOut) DESC, score.DoorIn DESC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
          ?>
          <table class="table table-bordered">
            <tr>
              <th>no.</th>
              <th>ประเทศ</th>
              <th>แข่ง</th>
              <th>ชนะ</th>
              <th>เสมอ</th>
              <th>แพ้</th>
              <th>ได้</th>
              <th>เสีย</th>
              <th>ต่าง</th>
              <th>แต้ม</th>
            </tr>
            <?php
            $i=0;
            while($row = $result->fetch_assoc()) {
              $i++;

              $score=($row["Win"]*3)+$row["Equal"];

              ?>

            <tr>
              <td><?=$i ?></td>
              <td><?=$row["TeamName"] ?></td>
              <td><?=$row["Matchs"] ?></td>
              <td><?=$row["Win"] ?></td>
              <td><?=$row["Equal"] ?></td>
              <td><?=$row["Lose"] ?></td>
              <td><?=$row["DoorIn"] ?></td>
              <td><?=$row["DoorOut"] ?></td>
              <td><?=$row["DoorIn"]-$row["DoorOut"] ?></td>
              <!-- <td><?=$row["Score"] ?></td> -->
              <td><?=$score ?></td>
            </tr>
            <?php
          } ?>
          </table>
          <?php
           echo "อันดับที่ 1 :".$row["TeamName"];
        } ?>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>...</p>
                </div>

            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <script language="javascript">
    function CheckNum(){
    		if (event.keyCode < 48 || event.keyCode > 57){
    		      event.returnValue = false;
    	    	}
    	}

      n =  new Date();
      y = n.getFullYear();
      m = n.getMonth() + 1;
      d = n.getDate();
      var today = d+'/'+m+'/'+y;
//      document.getElementById("date").innerHTML = d + "/" + m + "/" + y;
      document.getElementById("sdate").value = d + "/" + m + "/" + y;
    </script>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>


    <script>
    $(document).ready(function(){
      $('#').attr('testnum');

     $("#btn-buy").click(function(){
       var cname = $('#cname').val();
       var age = $('#age').val();
        $.ajax({
          type:'POST',
          data: {
            cname : cname,
            age : age
          },
          url: "buy.php",
          success: function(result){
            $('#buyresult').html(result);
        }
      });
    });

   $("#aadd").click(function(){
     function myFunctionAdd() {

        var r = confirm("ยืนยันการเพิ่มข้อมูล");
        if (r == true) {

     var name = $('#aname').val();
     var detail = $('#adetail').val();
     var type = $('#atype').val();
      $.ajax({
        type:'POST',
        data: {
          name : name,
          detail : detail,
          type : type
        },
        url: "add.php",
        success: function(result){
          if(result=='ok'){
            alert("insert success");
            location.reload();
          }else{
            alert("insert error");
          }
      }
    });
    } else {
        alert("error");
    }
  }
  myFunctionAdd();
  });

  $("#addshow").click(function(){
    function myFunctionAdd2() {

       var r = confirm("ยืนยันการเพิ่มข้อมูล");
       if (r == true) {

    var sname = $('#sname').val();
    var sdate = $('#sdate').val();
    var stime = $('#stime').val();
;
console.log(sname+sdate+stime);
     $.ajax({
       type:'POST',
       data: {
         sname : sname,
         sdate : sdate,
         stime : stime
       },
       url: "addshow.php",
       success: function(result){
         if(result=='ok'){
           alert("insert success");
           location.reload();
         }else{
           alert("insert error");
         }
     }
   });
   } else {
       alert("error");
   }
 }
 myFunctionAdd2();
 });

  $("#search").keyup(function() {
      var value = this.value;

      $("table").find("tr").each(function(index) {
          if (!index) return;
          var id = $(this).find("td").first().text();
          $(this).toggle(id.indexOf(value) !== -1);
      });
  });

  });
    </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
