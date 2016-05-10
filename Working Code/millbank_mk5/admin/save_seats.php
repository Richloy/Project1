<?php
	
	$seat_id = $_POST['seat_id'];
	$seat_name = $_POST['seat_name'];
	$s_stage_img = $_POST['s_stage_img'];
		
	try{
		require("../db.php");
		
		//Insert variables from create_seat.php to seats table in database
		$sql = "INSERT into seats (seat_id, booking_id, seat_name, s_stage_img) values( :seat_id, :booking_id, :seat_name, :s_stage_img);";
		
		$items = $DBH->prepare("$sql");

		$items->bindParam(':seat_id', $seat_id, PDO::PARAM_STR);
		$items->bindParam(':booking_id', $booking_id, PDO::PARAM_STR);
		$items->bindParam(':seat_name', $seat_name, PDO::PARAM_STR);
		$items->bindParam(':s_stage_img', $s_stage_img, PDO::PARAM_STR);		
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