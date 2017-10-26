$(document).ready(function(){

//called when key is pressed in textbox
  $("#tracking_input").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only!!").show().fadeOut("slow");
               return false;
    }
   });
  
    $("#btnsearch").click(function(){
      var tracking = $("#tracking_input").val();
      console.log(tracking);

      $.post("read_tracking.php",{
        tracking:tracking
      }, function(data){
        $("#result").html(data);
        console.log(data);
      })
    });

 });
