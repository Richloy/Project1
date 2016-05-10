<?php
	
	$event_name = $_POST['event_name'];
	$event_desc = $_POST['event_desc'];
	$event_date = $_POST['event_date'];
	$event_time = $_POST['event_time'];
	$allow_conc = $_POST['allow_conc'];
	$event_img = $_POST['event_img'];
	$event_price = $_POST['event_price'];
	
	try{
		require("../db.php");
		
		//Insert variables from create_event.php to events table in database
		$sql = "INSERT into events (event_id, event_name, event_desc, event_date, event_time, event_img, event_price, allow_conc) values( :event_id, :event_name, :event_desc, :event_date, :event_time, :event_img, :event_price, :allow_conc);";
		
		$items = $DBH->prepare("$sql");

		$items->bindParam(':event_id', $event_id, PDO::PARAM_STR);
		$items->bindParam(':event_name', $event_name, PDO::PARAM_STR);
		$items->bindParam(':event_desc', $event_desc, PDO::PARAM_STR);
		$items->bindParam(':event_date', $event_date, PDO::PARAM_STR);
		$items->bindParam(':event_time', $event_time, PDO::PARAM_STR);
		$items->bindParam(':allow_conc', $allow_conc, PDO::PARAM_STR);
		$items->bindParam(':event_img', $event_img, PDO::PARAM_STR);
		$items->bindParam(':event_price', $event_price, PDO::PARAM_STR);
		$items->execute();
		/* $last_id = $DBH->lastInsertId();
		$.post( "load_img.php", {last_id : last_id};
		echo "New record created successfully. Last inserted ID is: " . $last_id; */
	}catch(PDOException $pdoe){
	
		$DBH->rollback();
		
		$msg = 2;
	}
		echo " Failure To Send "
	
	
	
?>