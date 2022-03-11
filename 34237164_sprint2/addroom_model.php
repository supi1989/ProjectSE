<?php
	include('conn.php');
	
	$roomname=$_POST['roomname'];
	$location=$_POST['location'];

	
	mysqli_query($conn,"insert into room (roomname, location) values ('$roomname', '$location')");
	header('location:addroom.php');


?>