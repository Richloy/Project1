<?php
			echo '';
			include('..\db.php');
			$query='select IS_BOOKED from EVENT_SEATS WHERE Event_Id = 1;';
			$spacer = 100;
			#Aisles
			$Aisles = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L"]; 
			$rowCount = 0;
			$rowNumber = -14;
			$f = 1;
			#Stage Div
			echo '<div style="position:absolute; text-align: center; height:31px; width:538px; background:brown; left:'.$spacer.'">STAGE</div>';
			foreach ($DBH->query($query) as $row) {

					
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