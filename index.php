
<?php
session_start();
if(!isset($_SESSION["username"])){
 header("Location: department-views.php");
exit(); }

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>

    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/date_time.js"></script>
   

<script type="text/javascript">
$(document).ready(function(){
    $(function(){
    $('#username').val("");
    $('#password').val("");
    });

});

</script>

<style type="text/css">
   .text { font-family:  courier, courier; }
.panel-heading {
    padding: 5px 15px;
}

.panel-heading {
    padding: 5px 15px;
}

.panel-footer {
  padding: 1px 15px;
  color: #A0A0A0;
}

.profile-img {
  width: 96px;
  height: 96px;
  margin: 0 auto 10px;
  display: block;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}

.login-form .panel .panel-heading {
      color: #fff;
      background: #102434;
      text-align: center;
      line-height: 2.5em;
      font-weight: bold;
      font-size: 14px;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
      -webkit-border-top-left-radius: 5px;
          -moz-border-radius-topleft: 5px;
          -webkit-border-top-right-radius: 5px;
          -moz-border-radius-topright: 5px;
    }
.con{

      font-family: Cooper Black;
      font-weight: bold;
      color: #000000;
      border: 1px solid #000000;
      width: 340px;
      padding: 10px;
      text-align: center;
      -webkit-border-radius: 10px;
      -moz-border-radius:10px;
      border-radius: 10px;
  }
</style>
</head>
<body background="img/bg.jpg">
  <br>
          <center>  
           <div id="clockbox" class="con"></div>
  <p class="text"> <marquee width = "100%"><h2><font color="red"><b>DOCUMENT TRACKING SYSTEM</b></font></h2></marquee><p>
    <div class="container" style="margin-top:40px">
    <div class="row">
      <div class="col-sm-6 col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong> <center>Login Area</strong>
          </div>
          <div class="panel-body">
            <form role="form" action="session_start.php" method="POST">
              <fieldset>
               
                <div class="row">
                  <div class="center-block">
                    <img class="profile-img"
                      src="img/user.png?sz=120" alt="">
                  </div>
                </div>

                <div class="row">
                
                  <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span> 
                        <input class="form-control" placeholder="Enter Username"  id="username" value="" required="" name="username" type="text" autofocus>
                      </div>
                    </div>
                    
                    <div class="form-group input-group">
                         <span class="input-group-addon"><i class="fa fa-key"  ></i></span>
                         <input type="password" class="form-control" id="password"  name="password" required="" placeholder="Enter Password" autocomplete="off" >
                        <span class="help-block"></span>
                      </div>

                    <div class="form-group">
                      <!--<input type="submit" class="btn btn-md btn-success btn-block" name="submit" value="Sign in">-->
                      <button type="submit" name="submit" value="submit" class="btn btn-md btn-success btn-block"><span  class="fa fa-sign-in"></span> Login</button>
                    </div>
                  </div>

                </div>
              </fieldset>
            </form>
          </div>
          <div class="panel-footer ">
                
          <a href="#"><small>Division of Southern Leyte</small><small><i>(Document Tracking System)</i></small></a>
                 </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
