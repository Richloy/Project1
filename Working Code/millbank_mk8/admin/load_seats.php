<?php
require("../db.php");

//Load data from seats in database theatre
$sql = 'select * from seats;';
    foreach ($DBH->query($sql) as $row) {
		//echo  
        echo "Seat ".$row['seat_id']." - ";
		echo " ".$row['seat_name']."<br>";
		        		
    }
?>

<?php
