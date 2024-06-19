<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="disModal"></div>

	<style type="text/css">
		.dis_post{
			box-shadow: 3px 3px 5px 4px #ddd;
		}
		.date{
			width: 160px;
			font-size: 12.5px;
			color:rgba(0,0,0,0.5);
			margin-top: 2px;
		}
		.modal{
			position: fixed;
			width: 100%;
			height: 100%;
			left: 0;
			top: 0;
			background: rgba(10,10,10,0.2);
		}
	</style>

<?php 
//connect to mysqli database
$con= New Mysqli('localhost','root','');

//create database
$con->query("CREATE DATABASE Post_database");

//select database
$con->select_db('Post_database');

//create table
$table=$con->query("CREATE TABLE Post_table(
	id int(80) auto_increment primary key NOT NULL,
	name VARCHAR(300) NOT NULL,
	email VARCHAR(100) NOT NULL,
	tittle VARCHAR(200) NOT NULL,
	texts VARCHAR(250) NOT NULL,
	dates TIMESTAMP
	)");

// select query to get post
$select=$con->query("SELECT * FROM post_table ORDER by id DESC LIMIT 3");

if ($select->num_rows>0) {
	$dis='';
	$date='';
	while ($i=$select->fetch_assoc()) {
		$date = strtotime ( $i['dates'] );
		$dis.='</br><div class="dis_post p-3"> 
		<div class="text-primary"><b>'.$i['tittle'].'</b> </div>
		<div class="mt-2"> '.$i['texts'].'</div></br>
		<div class="mt-2">By <b>'.$i['name'].'</b> </div>
		<div class="date">'.date ( 'd/M/Y h:i:s' , $date ).'</div>
		</div></br></br>';
	}
	echo $dis;
}

 ?>


</body>
</html>