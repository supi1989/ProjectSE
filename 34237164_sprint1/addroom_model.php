<?php
	include('conn.php');
	
	$roomname=$_POST['roomname'];
	$location=$_POST['location'];
	$capacity=$_POST['capacity'];
	$projector=$_POST['projector'];
	$microphone=$_POST['microphone'];
	$other=$_POST['other'];
	

	
	mysqli_query($conn,"insert into room (roomname, location, capacity, projector, microphone, other  ) values ('$roomname', '$location', '$capacity', '$projector', '$microphone', '$other')");
	header('location:addroom.php');


?>