
<html>
	<head>
		<title>The Millbank Theatre - Event Selection</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="../style.css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	</head>

	<body>
		<div id = "heading">
			<div id = "logobgrnd">
				<div id = "logobox">
					<div id="links">
						<p><span class="title">T:</span> +353 1 843 7475</p>
						<p><span class="title">E:</span> info@millbanktheatre.ie</p>
						<a href="http://www.facebook.com/TheMillbankTheatre" target="_blank"><img src="../images/facebook.png" width="20" height="20" title="The Millbank Theatre Facebook" /></a>
						<a href="http://www.twitter.com/millbanktheatre" target="_blank"><img src="../images/twitter.png" width="20" height="20" title="The Millbank Theatre Twitter" /></a>
					</div>	

					<div id ="logo">
						<img src="http://www.millbanktheatre.ie/wp-content/themes/millbanktheatre/img/logo.png" title="The Millbank Theatre" />
					</div>
				</div>
				<div id = "menu">
					<div id = "menubox">
						<ul>
							<li><a href="../index.html">HOME</a></li>
							<li><a href="" class="current">EVENTS</a></li>
							<li><a href="gallery/gallery.html">GALLERY</a></li>
							<li><a href="contact_us/contact_us.html">CONTACT US</a></li>
							<li><a href="festival/festival.html">FESTIVAL</a></li>
							<li><a href="links/links.html">LINKS</a></li>
							<li><a href="about_us/about_us.html">ABOUT US</a></li>
							<li><a href="admin/admin.html">ADMIN</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<body>
	
	<script>
	var seats = new Array();

	</script>
		<div id = "theTheatre">
		<?php
			if(isset( $_GET['s'])){
		
			$id = $_GET['s'];
			
				try{
				
					require ("../db.php");
					
					/*** GET FILM FROM THE DATABASE ***/
					$sql = "SELECT IS_BOOKED FROM EVENT_SEATS WHERE Event_Id = :id;";
			
					$items = $DBH->prepare("$sql");
			
					$items->bindParam(':id', $id, PDO::PARAM_INT);
			
					$items->execute();
					
					
					
				}catch(PDOExecption $e) {

				$DBH->rollback();
				$msg = 5;
				}
			}else{
				header("Location: mydvd.php?msg=$msg");
			}

			echo '';
			//include('..\db.php');
			//$query='select IS_BOOKED from EVENT_SEATS WHERE Event_Id = 1;';
			$spacer = 100;
			#Aisles
			$Aisles = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L"]; 
			$rowCount = 0;
			$rowNumber = -14;
			$f = 1;
			#Stage Div
			echo '<div style="position:absolute; text-align: center; height:31px; width:538px; background:brown; left:'.$spacer.'">STAGE</div>';
			foreach ($items as $row) {

					
				#Create Aisle and letter accordingly
				if($f == 8 || $f == 22 || $f == 36 || $f == 50 || $f == 64 || $f == 78 || $f == 92 || $f == 106 || $f == 120 || $f == 130 || $f == 137){
					#Aisle J
					if($f == 130){
						echo '<div style="position:absolute; text-align: center; height:30px; width:282px; background:red; left:'.$spacer.'">' . $Aisles[$rowCount] . '</div>';
						$rowCount++;
						$spacer = $spacer+284;
					
					#Aisle K
					}else if($f == 137){
						echo '<div style="position:absolute; text-align: center; height:30px; width:188px; background:red; left:'.$spacer.'">' . $Aisles[$rowCount] . '</div>';
						$rowCount++;
						$spacer = $spacer+190;
					
					#Aisles A ~ I
					}else{
						echo '<div style="position:absolute; text-align: center; height:30px; width:90px; background:red; left:'.$spacer.'">' . $Aisles[$rowCount] . '</div>';
						$rowCount++;
						$spacer = $spacer+92;
					}
					if($row['IS_BOOKED'] == '1'){
						echo '<div id ="' . $f .'" style="position:absolute; text-align: center; height:30px; width:30px; background:grey; left:'.$spacer.'" >' . ($f-$rowNumber) . '</div>';
					$f++;
					} else {
						echo '<div id ="' . $f .'" style="position:absolute; text-align: center; height:30px; width:30px; background:green; left:'.$spacer.'" onclick="myFunction('.$f.')" >' .  ($f-$rowNumber) . '</div>';
					$f++;
					}
				
				#Start a new row
				}else if($f == 1 || $f == 15 || $f == 29 || $f == 43 || $f == 57 || $f == 71 || $f == 85 || $f == 99 || $f == 113 || $f == 127 || $f == 135 || $f == 140){
					
					#Correct Seat no's for Aisle K
					if($f == 135){
						$rowNumber = $rowNumber + 8;
					
					#Correct Seat no's for Aisle L					
					}else if($f == 140){
						echo '<div style="position:absolute; text-align: center; height:58px; width:182px; border-style:solid; background:yellow; left:'.$spacer.'">LIGHTING BOX</div>';
						$rowNumber = $rowNumber + 5;
						
					#All other Seats
					}else{
						$rowNumber = $rowNumber + 14;
					}
					echo '<br style = "line-height:14px;"></br>';
					$spacer = 100;
					if($row['IS_BOOKED'] == '1'){
						echo '<div id ="' . $f .'" style="position:absolute; text-align: center; height:30px; width:30px; background:grey; left:'.$spacer.'" >' . ($f-$rowNumber) . '</div>';
					$f++;
					} else {
						echo '<div id ="' . $f .'" style="position:absolute; text-align: center; height:30px; width:30px; background:green; left:'.$spacer.'" onclick="myFunction('.$f.')" >' . ($f-$rowNumber) . '</div>';
					$f++;
					}
					
				}else if($row['IS_BOOKED'] == '1'){
					echo '<div id ="' . $f .'" style="position:absolute; text-align: center; height:30px; width:30px; background:grey; left:'.$spacer.'" >' . ($f-$rowNumber) . '</div>';
					$f++;
					#Add Aisle L
					if($f == 143){
						$spacer = $spacer+32;
						echo '<div style="position:absolute; text-align: center; height:30px; width:252px; background:red; left:'.$spacer.'">' . $Aisles[$rowCount] . '</div>';
					}
				} else {
					echo '<div id ="' . $f .'" style="position:absolute; text-align: center; height:30px; width:30px; background:green; left:'.$spacer.'" onclick="myFunction('.$f.')" >' . ($f-$rowNumber) . '</div>';
					$f++;
					#Add Aisle L
					if($f == 143){
						$spacer = $spacer+32;
						echo '<div style="position:absolute; text-align: center; height:30px; width:252px; background:red; left:'.$spacer.'">' . $Aisles[$rowCount] . '</div>';						
					}
				}
				$spacer = $spacer+32;
				
			}
			echo '';
			$spacer = 100;
			echo '<br style = "line-height:14px;"></br>';
			echo '<div id = "seatSelCount">Seats Selected: 0</div>';
			echo '<div id = resetButton style="position:absolute; text-align: center; height:30px; width:200px; left:'.$spacer.'"><button onClick="window.location.reload()">Reset Selection</button></div>';	
			$spacer = $spacer + 200;
			echo '<div id = resetButton style="position:absolute; text-align: center; height:30px; width:200px; left:'.$spacer.'"><button onClick="postSelectedSeats()">Submit</button></div>';	
		?> 
	</div>

		<script>
			function myFunction(theId) {
				if(checkSelect(theId)){				
					seats.push(theId);
					document.getElementById(theId).style.background = "lightblue";
				}else{
					document.getElementById(theId).style.background = "green";
				}
				document.getElementById("seatSelCount").innerHTML = "Seats Selected: "+ seats.length;
				
				if(seats.length == 10){
					window.alert('Group Rates are available please contact us on +353 1 843 7475 for more information')
				}
			}
			function checkSelect(seatId){
				var i;				
				for(i = 0; i < seats.length; i++){
					if(seatId == seats[i]){
						seats.splice(i, 1);
						return false;
					}
				}
				return true;	
			}
			function postSelectedSeats(){
				$.post( "booked.php", { seats: seats})
				
			}
		</script>
	</body>
</html>