$(document).ready(function () {
	function Incoming() {
    	$.get("doc_process/Option.php", {}, function (data) {
        $("#incoming").html(data);
        console.log(data);
    	});
	}
	function DeptQueue() {
    	$.get("doc_process/deptqueue.php", {}, function (data) {
        $("#onqueue").html(data);
        console.log(data);
    	});
	}
    function readDept() {
        $.get("doc_process/dept.php", {}, function (data) {
        $("#depts").html(data);
        console.log(data);
         $("#myModal2").modal("hide");
        });
    }
    function readForwarded() {
        $.get("doc_process/forwarded.php", {}, function (data) {
        $("#live_forward").html(data);
        console.log(data);
        });
    }
    Incoming(); // calling function
    DeptQueue();
    readDept();
    readForwarded();
    $('#accept').click(function(){
    	$('#incoming option:selected').each(function(){
    		var docid = $(this).val();
    		console.log(docid);

    	$.post("doc_process/execute.php", {
            docid:docid
        }, function (data, status) {
            alert(data);
            Incoming(); // calling function
    		DeptQueue();
            readDept() ;
           readForwarded();
            console.log(data);
             $("#myModal").modal("hide");
        });
    	});
    });
    $('#forward').click(function(){
        $('#onqueue option:selected').each(function(){
        var value1 = $(this).val();
        console.log(value1);
        
        var val1 = $( "#depts" ).val();
        console.log(val1);

        $.post("doc_process/exe.php", {
            value1: value1,
            val1: val1
        }, function (data, status) {
            alert(data);
            Incoming(); // calling function
            DeptQueue();
            readDept() ;
            readForwarded();
            console.log(readForwarded);
        }); 
        });
        
    });
});