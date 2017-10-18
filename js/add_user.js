$(document).ready(function(){
        // READ records
function readRecords() {
    $.get("readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}
// READ recods on page load
    readRecords();
    $(function(){
    $('#username').val("");
    $('#password').val("");
    

    });

   function readDept(){

    $.get("dept.php",{}, function (data){
       $("#dept").html(data);
     });
    }

 readDept();
    
  $('#submit').click(function(){
        var first_name = $("#first_name").val();
        var middle_name = $("#middle_name").val();
        var last_name = $("#last_name").val();
        var username = $("#username").val();
        var password = $("#password").val();
        var type = $("#type").val();

        var dept = $("#dept option:selected").val();

        console.log(first_name);
        console.log(middle_name);
        console.log(last_name);
        console.log(username);
        console.log(password);
        console.log(type);
        console.log(dept);

        $.post("reg_user.php", {
            first_name: first_name,
            middle_name: middle_name,
            last_name: last_name,
            username:username,
            password:password,
            type:type,
            dept:dept
           }, function (data, status){
            alert(data);
            readDept();

            //clear fields
        $("#first_name").val("");
        $("#middle_name").val("");
        $("#last_name").val("");
        $("#username").val("");
        $("#password").val("");
        $("#type").val("");
        $("#add_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();

       

        });

  });




    function readDept3(){

    $.get("dept.php",{}, function (data){
       $("#dept3").html(data);
     });
    }

 readDept3();
    
  $(document).on('click', '.edit_data', function(){  
           var user_id = $(this).data("id");  
           $.ajax({  
                url:"fetch1.php",  
                method:"POST",  
                data:{user_id:user_id},  
                dataType:"json",  
                success:function(data){  
                    $('#up_first_name').val(data.first_name);  
                    $('#up_middle_name').val(data.middle_name);  
                    $('#up_last_name').val(data.last_name);  
                    $('#up_username').val(data.username);   
                    $('#up_password').val(data.password);   
                    $('#usertype2').val(data.usertype);   
                     var dept3 = $("#dept3 option:selected").val(); 
                    $('#hidden_user_id').val(data.user_id);   
                    $('#add_data_Modal').modal('show');  
                    console.log('poop'+data.usertype);
                     console.log(dept3);


                }  
           });  
      });


$(document).on('click', '#deletebtn', function(){  
        var id=$(this).data("idpoop");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete_user.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                     readRecords();
                }  
            });  
       }  
    });

    // get values
$(document).on('click', '.view_data', function(){   
           var user_id = $(this).data("id");  
           $.ajax({  
                url:"select_users.php",  
                method:"post",  
                data:{user_id:user_id},  
                success:function(data){  
                     $('#employee_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  

    $('#accept').click(function(){
        var first_name = $("#up_first_name").val();
        var middle_name = $("#up_middle_name").val();
        var last_name = $("#up_last_name").val();
        var username = $("#up_username").val();
        var password = $("#up_password").val();
        var usertype = $("#usertype2").val();
        var department_id = $("#dept3").val();

        // get hidden field value
          var user_id = $("#hidden_user_id").val();
          console.log(first_name);
          console.log(middle_name);
          console.log(last_name);
          console.log(username);
          console.log(password);
          console.log(usertype);
          console.log(department_id);
          console.log('fuck'+user_id)

         // Update the details by requesting to the server using ajax
    $.post("updateUserDetails.php", {
            user_id: user_id,
            first_name: first_name,
            middle_name: middle_name,
            last_name: last_name,
            username:username,
            password:password,
            usertype:usertype,
            department_id:department_id,

        },   function (data) {
            console.log(data)
            // hide modal popup
            $("#add_data_Modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );

    });
   
});