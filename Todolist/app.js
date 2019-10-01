$(document).ready(function() {   

	//call server-side scripts to show task list

	$.get("api.php",{action:"get"},function(tasks){
		$.each(tasks,function(index,task){
			if(task.status ==1){
				buildTask(task.subject,task.id).appendTo("#done");
			}else{
				buildTask(task.subject,task.id).appendTo("#tasks");
			}
		});


		$("#done imput").attr("checked","checked");
		$("h1 span").html($("#tasks li").length);
	},"json");


	$("#new-task button").click(function() {     
		var task = $("#new-task input").val(); 
     	if(!task) return false;     

     	$.post("api.php",{action:"add",subject:task},function(res){
     		if(res.err == 1){
     			alert(res.msg);
     		}else{
     			buildTask(task,res.id).appendTo("#tasks");
     		}
     	});
     	//buildTask(task).appendTo("#tasks");     
     	$("h1 span").html( $("#tasks li").length );
     	$("#new-task input").val("").focus();   
     }); 

	$("#new-task input").keydown(function(e) {     
		if(e.which == 13)       
			$("#new-task button").click();   
	}); 

	//call server-side scripts to show task list

	



}); 


function buildTask(msg,id) {   
	var checkbox = $("<input>", {type: "checkbox"}).click(function() {


		var task = $(this).parent();
		var task_id = task.data("id");
		if($(this).is(":checked")){
			$.post("api.php",{action:"done",id:task_id},function(){
				task.prependTo("#done");
				$("h1 span").html($("#tasks li").length);
			});
		}else{
			$.post("api.php",{action:"undo",id:task_id},function(){
				task.appendTo("#task");
				$("h1 span").html($("#tasks li").length);
			});

		}});
	    /*
	    if($(this).is(":checked")) {      
	     	$(this).parent().prependTo("#done");     
	     } 
	     else  {      
	     	$(this).parent().appendTo("#tasks");     
	     }     
	     $("h1 span").html( $("#tasks li").length );   
	 	});
	 	*/   

	var task = $("<span>").html(msg);   
	var del = $("<a>", {     
		href: "#"   }).html("&times;").click(function() {
			var task = $(this).parent();    
			var task_id = task.data("id");     
			$.post("api.php", {action: "del", id: task_id}, function(res) {   
				task.remove();    
				$("h1 span").html( $("#tasks li").length );     
			}, "json");
			//$(this).parent().remove();     
			//$("h1 span").html( $("#tasks li").length );   
		});    	

	return $("<li>").data("id",id).append(checkbox).append(task).append(del); 
}
