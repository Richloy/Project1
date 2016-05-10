
<?php


	$rawPhoneNumber = "800-555-5555"; 

	$phoneChunks = explode("-", $rawPhoneNumber);
	echo "Raw Phone Number = $rawPhoneNumber <br />";
	echo "First chunk = $phoneChunks[0]<br />";
	echo "Second chunk = $phoneChunks[1]<br />";
	echo "Third Chunk chunk = $phoneChunks[2]";


?>