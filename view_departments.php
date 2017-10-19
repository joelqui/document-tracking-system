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
     <script src="js/departments.js"></script>


<style type="text/css">
  
.input-group-addon{
  color:green; background-color: #ffffff;
}

</style>

<script type="text/javascript">

$(document).ready(function(){

 readRecords();

 function readRecords(query)
 {
  $.ajax({
   url:"readDepartments.php",
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
                 <li  id="usertype" data-organ="<?php echo $_SESSION['usertype'];?>" class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span  class="fa fa-sign-in"></span> Log-in as: <?php echo $_SESSION['username']; ?>!  <span class="caret"></span></a>
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
<!-- ================ Departments View============================================================== -->    

<br><br>
<br>
<div class="container" style="width:700px;">
  <br>

    <div class="row">
        <div class="col-md-12">
          <br>
           <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#add_departments_modal">Add New Departments</button><br>
            <br>
            <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon"><i class="fa fa-search"  ></i>Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search anything.." class="form-control" />
    </div>
   </div>
            <div class="records_content"></div>
        </div>
    </div>
</div>


 <div id="add_departments_modal" class="modal fade">  
          <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title"><p class="serif" color="blue"><b><h4>Add Departments</h4></b></p></h4>    
                </div>  
                <div class="modal-body">  
                  
                       <div class="form-group input-group">
                         <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                  <input type="text" class="form-control"  name="department_name" id="department_name" value="" required="" placeholder="Enter deparment_name">
                                  <span class="help-block"></span>
                       </div>
                      <div class="form-group input-group">
                         <span class="input-group-addon"><i class="fa fa-code"  ></i></span>
                                  <input type="text" class="form-control"  name="department_code" id="department_code" value="" required="" placeholder="Enter department_code">
                                  <span class="help-block"></span>
                       </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                
                <input type="hidden" name="hidden_user_id" id="hidden_user_id">

                <button type="submit" class="btn btn-primary"  id="submit" value="submit" >Submit</button>
                            
            </div>
           </div>  
      </div>  
 </div> 
 </div> 




 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog ">
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                      <h4 class="modal-title"><p class="serif" color="blue"><b><h4>Departments Details</h4></b></p></h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  

<div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title"><p class="serif" color="blue"><b><h4>Update Departments</h4></b></p></h4>    
                </div>  
                <div class="modal-body">  
                    <form method="post">
                       <div class="form-group input-group">
                         <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                  <input type="text" class="form-control"  name="department_name" id="up_department_name" value="" required="" placeholder="Enter deparment_name">
                                  <span class="help-block"></span>
                       </div>
                      <div class="form-group input-group">
                         <span class="input-group-addon"><i class="fa fa-code"  ></i></span>
                                  <input type="text" class="form-control"  name="department_code" id="up_department_code" value="" required="" placeholder="Enter department_code">
                                  <span class="help-block"></span>
                       </div>
                <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                
                <input type="hidden" name="hidden_user_id" id="hidden_user_id">

                <button type="button" class="btn btn-primary"  id="accept1" >Save Changes</button>
                
               
            </div> 
           </div>  
      </div>  
 </div> 
</div>
</body>
</html>


</body>
</html>

