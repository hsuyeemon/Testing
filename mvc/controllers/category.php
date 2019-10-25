<?php

switch ($action) {
	case "":
	case "list":
		show_list();
		break;
	case "new":
		show_new();
		break;
	case "add":
		add_cat();
		break;
	case "del":
		rm_cat($id);
		break;
	case "edit":
		ed_cat($id);
		break;
	default:
		exit("Unknown Action => $action");
		break;
}


function show_list(){
	$cats = get_cats();
	render("list",$cats);
}

function show_new(){
	render("new");
}

function add_cat(){
	$name = $_POST["name"];
	$result = insert_cat($name);	

	header("location : http://localhost/Testing/mvc/category/list/");
}

function rm_cat($id){
	$result = del_cat($id);

	header("location : http://localhost/Testing/mvc/category/list/");
}

function ed_cat($id){
	$result = update_cat($id);

	header("location : http://localhost/Testing/mvc/category/list/");
}

?>