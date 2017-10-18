$(document).ready(function(){
 
    var usertype = $('#usertype').data('organ');
    console.log(usertype);
    var department_id = $('#usertype').data('dept');
    console.log(department_id);
     var user = $('#usertype').data('user');
    console.log(user);
  //Admin
   if (usertype==1){
    $("#change_pass ").hide(); 
     $("#v_depart ").hide();
    
    }
    //User
 else if (usertype==2){
     $("#m_user ").hide();
     $("#m_department ").hide();
     $("#v_receiver ").hide();
     $("#v_depart ").hide();
     $("#change_pass ").hide();
    }
    //Receiver
   else if (usertype==3){
     $("#m_user ").hide();
    $("#m_department ").hide();
     $("#change_pass ").hide();
    }

});