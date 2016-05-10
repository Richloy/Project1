<?php
	
	$seats = $_POST['seats'];
	$id    = $_POST['event_id'];
	$name    = $_POST['name'];
	//$seatblock = explode(",", $seats);
	

	//foreach ($seatblock as $seat){
		echo $name;
		
		
		// for each seats insert
	
		
	
	//try{
		//require("../db.php");
		
		//Insert variables from create_event.php to events table in database
		//$sql = "INSERT into events (event_id, event_name, event_desc, event_date, event_time, event_img, event_price, allow_conc) values( :event_id, :event_name, :event_desc, :event_date, :event_time, :event_img, :event_price, :allow_conc);";
		
		//$items = $DBH->prepare("$sql");

		//$items->bindParam(':seats', $seats, PDO::PARAM_STR);

		//$items->execute();

//	}catch(PDOException $pdoe){
	
	//	$DBH->rollback();
		
	//	$msg = 2;
	//}
	//	echo " Failure To Send "
	//}
	
	
?>