$(document).ready(function () {
    // READ records
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
//final

$('#submit').click(function(){
        var department_name = $("#department_name").val();
        var department_code = $("#department_code").val();

        console.log(department_name);
        console.log(department_code);
      

          $.post("reg_departments.php", {
            department_name: department_name,
            department_code: department_code,
           
        }, function (data, status){
            alert(data);

            //clear fields
        $("#department_name").val("");
        $("#department_code").val("");
       
        $("#add_departments_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();

        });

  });
   
   //for view 
$(document).on('click', '.edit_data', function(){  
           var department_id = $(this).data("id");  
           $.ajax({  
                url:"fetch2.php",  
                method:"POST",  
                data:{department_id:department_id},  
                dataType:"json",  
                success:function(data){  
                    $('#up_department_name').val(data.department_name);  
                    $('#up_department_code').val(data.department_code);     
                    $('#hidden_user_id').val(data.department_id); 
                    $('#add_data_Modal').modal('show');  
                    console.log(department_name);
                     console.log(department_code);


                }  
           });  
      });

//for delete
$(document).on('click', '#deletebtn', function(){  
        var id=$(this).data("idpoop");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete_departments.php",  
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


//read departments Code
    // for
$(document).on('click', '.view_data', function(){   
           var department_id = $(this).data("id");  
           $.ajax({  
                url:"select_departments.php",  
                method:"post",  
                data:{department_id:department_id},  
                success:function(data){  
                     $('#employee_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  


    $('#accept1').click(function(){
        var department_name = $("#up_department_name").val();
        var department_code = $("#up_department_code").val();
       
        // get hidden field value
          var department_id = $("#hidden_user_id").val();
          console.log(department_name);
          console.log(department_code);
          console.log(department_id);
       
         // Update the details by requesting to the server using ajax
    $.post("updateDepartments.php", {
            department_id: department_id,
            department_name: department_name,
            department_code: department_code,
            

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


