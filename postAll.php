<?php

$host="localhost";
$user="root";
$password="";
$db_name="flutter_blog";
$conn=mysqli_connect($host,$user, $password,$db_name);
if(!$conn){
	echo "Not Connected";
}

$list=array();
$query= "SELECT * FROM post_table";
$result= mysqli_query($conn, $query);
while ($row=mysqli_fetch_assoc($result)) {
	//$result=$row;
	array_push($list,$row);
}


echo json_encode($list);



?>