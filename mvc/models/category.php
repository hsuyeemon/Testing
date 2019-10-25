<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"store");

function get_cats(){
	global $conn;
	$result = mysqli_query($conn,"SELECT * FROM categories");

	$cats = array();

	while($row = mysqli_fetch_assoc($result)){
		$cats[] = $row;
	}
    #print_r($cats);

	return $cats;
}

function insert_cats(){

	global $conn;
	mysqli_query($conn,"INSERT INTO categories 
		VALUES ('name',now(),now())" );

	return mysqli_insert_id();
}

function del_cat($id){
	mysqli_query($conn, "DELETE FROM categories WHERE id=$id");

	return mysql_affected_rows();
}

function update_cat($id){
	mysqli_query($conn, "UPDATE categories SET name='rename' WHERE id=$id");

	return mysql_affected_rows();
}
?>