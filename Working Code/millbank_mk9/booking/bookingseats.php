<?php
	
	$seats = $_POST['seats'];
	$id    = $_POST['event_id'];
	$name    = $_POST['name'];
	$seatblock = explode(",", $seats);
	
	foreach ($seatblock as $seat){
		//echo $id;

		try{
			require("../db.php");
			
			/*** UPDATE BOOKED SEATS AND BOOKING NAME TO DATABASE ***/
			 $sql = "UPDATE event_seats
						SET event_seats.is_booked 	 	= 1,
							event_seats.booking_name	= :booking_name,
						WHERE event_id = :event_id AND seat_id = :seat_id";
			
					
			$items = $DBH->prepare("$sql");

			$items->bindParam(':seat_id', $seats, PDO::PARAM_INT);
			$items->bindParam(':event_id', $id, PDO::PARAM_INT);
			$items->bindParam(':booking_name', $name, PDO::PARAM_STR);
			
			$items->execute();

		}catch(PDOException $pdoe){
			echo 'Error';
			$DBH->rollback();
		}
	}
	
	
?>