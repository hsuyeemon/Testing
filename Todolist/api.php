<?php
	/*
	serverside script for handling requests
	Get the task list
	add new task
	remove tasks
	mark complete status
	mark incompleta status
	*/

	$conn = mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"todolist");

	$action = $_REQUEST['action'];

	switch ($action) {
		case 'get':
			get_all_task();
			break;
		case 'add':
			add_task();
			break;
		case 'del':
			del_task();
			break;
		case 'done':
			done_task();
			break;
		case 'undo':
			undo_task();
			break;
		default:
			unknown_action();
	}

	function get_all_task(){

		global $conn;
		$result = mysqli_query($conn,"SELECT * FROM tasks");

		$tasks = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$tasks[] = $row;
		}

		echo json_encode($tasks);
	}

	function add_task(){

		global $conn;
		$subject = $_POST['subject'];

		$result = mysqli_query($conn,"INSERT INTO tasks (subject,createdate) VALUES ('$subject',now())");

		if($result){
			$id = mysql_insert_id();
			echo json_encode(array("err" => 0,"id" => $id));
		}else{
			echo json_encode(array("err" => 1,"msg" => "Unable to insert task"));

		}

	}
	function del_task(){

		global $conn;
		$id = $_POST['id'];

		$result = mysqli_query($conn,"DELETE FROM tasks WHERE id = $id");

		if($result){
			echo json_encode(array("err"=>0));
		}else{
			echo json_encode(array("err"=>1,"msg"=>"Unable to delete task"));
		}
	}

	function done_task(){
		global $conn;
		$id = $_POST["id"];

		$result = mysqli_query($conn,"UPDATE tasks SET status = 1 WHERE id = $id");

		if($result){
			echo json_encode(array("err"=>0));
		}else{
			echo json_encode(array("err"=>1,"msg"=>"Unable to update status"));
		}
	}

	 function undo_task() {     
	 	global $conn;    
	 	$id = $_POST['id'];     
	 	$result = mysqli_query($conn, "UPDATE tasks SET status = 0 WHERE id = $id");     
	 	if($result) {       
	 		echo json_encode(array("err" => 0));     
	 	} else {       
	 		echo json_encode(array("err" => 1, "msg" => "Unable to update status"));    
	 	}   
	 }

	 function unknown_action() {     
	 	echo json_encode(array("err" => 1, "msg" => "Unknown Action"));   
	 } 
?>

