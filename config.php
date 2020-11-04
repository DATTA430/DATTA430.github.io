<?php

	$conn = mysqli_connect('localhost','root','root','spark_banking');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>