<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <div id="login-overlay" class="modal-dialog">
            <div class="modal-content">
             <div class="well">
            <h4 class="modal-title"><span class="fa fa-lock"></span> Login Now!</h4>
          </div>
             
            
         
                  <div class="modal-body">
             
                    <div class="row">
                        <div class="col-xs-12">
                        <form action="" method="POST" novalidate="novalidate">
                             
                              <div class="form-group">
                                  <div class="input-group">
                                  <div class="input-group-addon"><span class="fa fa-user-circle"></span></div>
                                  <input name="user"  type="user" id="user" class="form-control input-lg" placeholder="Enter Your Username" required="">
                                  </div>                      
                              </div>
                                                        
                           <div class="form-group">
                              <div class="input-group">
                                  <div class="input-group-addon"><span class="fa fa-lock">&nbsp;</span></div>
                                  <input name="pass"  type="password" id="pass" class="form-control input-lg" placeholder="Enter Your Password" required="">
                              </div>                      
                          </div>
                       
                                
                                   <input class="btn btn-success btn-block btn-lg" type=submit name='submit' value='LOGIN'>
                                   <br>
                                   <div class="well">
                              
                                </div>
                                  <hr>
                               

                              
                                <center><p><a href = "register.php">SignUp Here!</a></p></center>
                      </form>
                      </div>
                  </div>
 
              </div>
          
        </div>
      </div>
    </div>
   
</div>

</body>
</html>

