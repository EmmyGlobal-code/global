<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
//connect to mysqli database
$con= New Mysqli('localhost','root','');

//select database
$con->select_db('Post_database');

//check if the button is click
if (isset($_GET['post_btn'])) {
	if (!empty($_GET['client_name']) &&
		 !empty($_GET['client_email']) &&
		  !empty($_GET['client_tittle']) &&
		   !empty($_GET['client_text'])) {

		// creating variable and initializing them
		$name=$_GET['client_name'];
		$email=$_GET['client_email'];
		$tittle=$_GET['client_tittle'];
		$text=$_GET['client_text'];

		// sql query insert values
		$insert=$con->query("INSERT INTO post_table(name,email,tittle,texts)
						VALUES(
						'$name',
						'$email',
						'$tittle',
						'$text'
						)");


		// check if post successfuly
		if ($insert) {
			sleep(1);
			echo "post";
		}else{echo $con->error;}
	}
}else{
	echo "all field must be fill before making a post";
}

	 ?>

</body>
</html>