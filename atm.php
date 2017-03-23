<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ATM</title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
<link href="dist/sweetalert.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<style media="screen">
  td,th{
      height: 50px;
      text-align: center;
    }
    nav{
      margin-top: 5px;
    }
    /*body{
      background-image: url("images/bg.jpg");
    }*/
</style>
</head>
<body>
  <div class="dc">

  </div>
<form name="form1">
<table width="300" border="0">
<tr>
<td><input type="text" id="balance" name="balance">
<button type="submit" id="process" class="btn btn-primary">send</button></td>
</tr>
<tr>
<td><div id="account"></div></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
</table>
</form>
<!-- Bootstrap -->
<script src="assets/js/jquery-3.1.1.slim.min.js"></script>
<script src="assets/js/jquery-3.1.1.min.js" charset="utf-8"></script>

<script src="assets/js/bootstrap.js" charset="utf-8"></script>
<script src="assets/js/bootstrap.min.js" charset="utf-8"></script>

<!-- sweetalert -->
<script src="dist/sweetalert-dev.js"></script>
<script src="dist/sweetalert.min.js" charset="utf-8"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('button').clicl(function(){
      var balance = $("input[name='balance']").val();
      $.ajax({
        url : "atmconnect.php",
        type : "POST",
        data : {balance:balance},
        success : function(result){
          $('.dc').html(result);
          console.log(result);
          $("input[name='balance']").val("");
        }
      });
    });

  });
</script>
</body>
</html>
