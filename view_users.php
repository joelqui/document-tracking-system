<?php

include("auth.php"); //include auth.php file on all secure pages ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
   
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style1.css" />
   
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/usertype.js"></script>
     <script src="js/add_user.js"></script>
     

<style type="text/css">
  
.input-group-addon{
  color:green; background-color: #ffffff;
}

</style>
<script type="text/javascript">
$(document).ready(function(){
    $(function(){
    $('#username').val("");
    $('#password').val("");
    });

});


$(document).ready(function(){

 readRecords();

 function readRecords(query)
 {
  $.ajax({
   url:"readRecords.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('.records_content').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   readRecords(search);
  }
  else
  {
   readRecords();
  }
 });
});






</script>

</head>

<body>
<div class="navbar-wrapper">
    <div class="container-fluid">
        <nav class="navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>        
                <a class="navbar-brand" href="#">Document Tracking System</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#" class=""><span class="fa fa-wrench"> </span> Under Construction</a></a></li>
                        <li><a href="tracking_document.php"><span class="fa fa-file"></span> Track Documents</span></a></li>
                        <li><a href="adddocu.php"><span class="fa fa-file"></span> Add Documents</span></a></li>
                       
                    </ul>
                    <ul class="nav navbar-nav pull-right">   
                 <li  id="usertype" data-organ="<?php echo $_SESSION['usertype'];?>" id="dept1" data-poop="<?php echo $_SESSION['department_id'];?>" class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span  class="fa fa-sign-in"></span> Log-in as: <?php echo $_SESSION['username']; ?>!  <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                               <li id="m_user" ><a href="view_users.php">Manage User</a></li>
                                <li id="m_department"><a href="view_departments.php">Manage Departments</a></li>
                               <!-- <li id="v_receiver"><a href="receiversview.php">View as Receiver</a></li>-->
                                <li id="v_department"><a href="department-views.php">View as Department</a></li>
                                <li id="change_pass"><a href="change_pass.php">Change Password</a></li>
                                <li class=""><a href="logout.php"><span  class="fa fa-sign-out"></span>Logout </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

</div>

<!-- ================BOOTSTRAP MODAL HERE start!!============================================================== -->    
<br><br>
<br>

<!--Fecth data here!!-->
<div class="container" style="width:700px;">
  <br>

    <div class="row">
        <div class="col-md-12">
          <br>
        <button class="btn btn-primary btn-xs" data-toggle="modal" id="clear" data-target="#add_user_modal">Add New Users</button><br><br>  
         <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon"><i class="fa fa-search"  ></i>Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search anything.." class="form-control" />
    </div>
   </div>
    

            <div class="records_content"></div>
        </div>
    </div>
</div><!--Fecth  data end!!-->

 <!--Add user modal here!!-->
<div class="modal fade" id="add_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add User</h4>
            </div>
            <!--modal body here!-->
            <div class="modal-body">
                     <div class="form-group input-group">
                                  <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                 <input type="text" class="form-control" id="first_name" name="first_name" required="" placeholder="Firstname" autofocus>
                                  <span class="help-block"></span>
                   </div>
                    <div class="form-group input-group">
                         <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                  <input type="text" class="form-control" id="middle_name" name="middle_name" required="" placeholder="Middlename">
                                  <span class="help-block"></span>
                      </div>
                      <div class="form-group input-group">
                                  <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                  <input type="text" class="form-control"  id="last_name" name="last_name" required="" placeholder="Lastname">
                                  <span class="help-block"></span>
                       </div>
                      <div class="form-group input-group">
                                   <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                  <input type="text" class="form-control" id="username" name="username"  required="" placeholder="Username">
                                  <span class="help-block"></span>
                       </div>
                       <div class="form-group input-group">
                                   <span class="input-group-addon"><i class="fa fa-key"  ></i></span>
                                              <input type="password" class="form-control" id="password"  required
                                              placeholder="Password" autocomplete="off" >
                                  <span class="help-block"></span>
                       </div>
                       <div class="form-group input-group">
                                  <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                       <select name="usertype" class="form-control" id="type">
                       <option >Select user type</option>
                       <option value="1">Admin</option>
                       <option value="2">User</option>
                       <option value="3">Receiver</option>
                      </select>
                      </div>
                      <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-id-card-o"  ></i></span>         
                       <select name="dept" class="form-control" id="dept" placeholder="Select Department">
                       </select>
                      </div>
                   </div> <!--modal body end!-->
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <input type="hidden" name="hidden_user_id" id="hidden_user_id">
                <button type="submit" class="btn btn-primary"  id="submit" value="submit" >Submit</button>             
            </div>
        </div>
    </div>
</div><!--Add user modal end!!-->
 
 <!--View data here in Table-->
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog ">
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                      <h4 class="modal-title"><p class="serif" color="blue"><b><h4>User Details</h4></b></p></h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>   <!--View data Table end-->
<!--Update User Details Bootstrap-->
<div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title"><p class="serif" color="blue"><b><h4>Update User</h4></b></p></h4>    
                </div>  
                <div class="modal-body">  
                    <form method="post">
                       <div class="form-group input-group">
                                  <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                  <input type="text" class="form-control"  name="first_name" id="up_first_name" value="" required="" placeholder="Enter Firstname">
                                  <span class="help-block"></span>
                       </div>
                      <div class="form-group input-group">
                         <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                  <input type="text" class="form-control"  name="middle_name" id="up_middle_name" value="" required="" placeholder="Enter Middlename">
                                  <span class="help-block"></span>
                       </div>
                      <div class="form-group input-group">
                                  <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                  <input type="text" class="form-control"  name="last_name" id="up_last_name" value="" required="" placeholder="Enter Lastname"> 
                                  <span class="help-block"></span>
                       </div>
                           <div class="form-group input-group">
                                   <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                  <input type="text" class="form-control"  name="username" id="up_username" value="" required="" placeholder="Enter Username">
                                  <span class="help-block"></span>
                       </div>
                       <div class="form-group input-group">
                                   <span class="input-group-addon"><i class="fa fa-key"  ></i></span>
                                              <input type="password" class="form-control"  name="password" id="up_password" value="" required="" placeholder="Enter Password">
                                  <span class="help-block"></span>
                       </div>
                     <div class="form-group input-group">
                                  <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                       <select id="usertype2" name="usertype" class="form-control">
                             <option value="">Select user type</option>
                             <option value="1">Admin</option>
                            <option value="2">User</option>
                           <option value="3">Receiver</option>
                      </select>
                      </div>
                     <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-id-card-o"  ></i></span>         
                       <select name="department_id" class="form-control" id="dept3" placeholder="Select Department">
                       </select>
                      </div>
                <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <input type="hidden" name="hidden_user_id" id="hidden_user_id">
                <button type="button" class="btn btn-primary"  id="accept" >Save Changes</button>
            </div> 
          </div>  
      </div>  
  </div> <!--Update User Details Bootstrap end-->

</body>
</html>

</body>
</html>

