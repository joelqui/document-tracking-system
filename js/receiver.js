$(document).ready(function() {
	
	function readQueue() {
    	$.get("doc_process/queue.php", {}, function (data) {
        $("#mySel").html(data);
        console.log(data);
    	});
	}
    function readForwared() {
        $.get("doc_process/forwarded.php", {}, function (data) {
        $("#mySel2").html(data);
        console.log(data);
        });
    }
    function readDept() {
        $.get("doc_process/dept.php", {}, function (data) {
        $("#dept").html(data);
        console.log(data);
        });
    }
    readForwared()
    readQueue();
    readDept();
    console.log(readDept);
    console.log(readQueue);
    console.log(readForwared);



    $('#yup').click(function(){
        $('#mySel option:selected').each(function(){
        var value1 = $(this).val();
        var docid =$(this).data('docid');
        console.log(value1);
        console.log(docid);
        
        var val1 = $( "#dept" ).val();
        console.log(val1);
       
        $.post("doc_process/exe.php", {
            value1: value1,
            docid:docid,
            val1: val1
        }, function (data, status) {
            alert(data);
            readQueue();
            readForwared();
            readDept()
            console.log(data);
             $("#myModal2").modal("hide");
        }); 
        });
        
    });

    });
        