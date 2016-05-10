
<html>
	<head>
		<title>The Millbank Theatre - Event Selection</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="../style.css"/>
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
							<li><a href="../gallery/gallery.html">GALLERY</a></li>
							<li><a href="../contact_us/contact_us.html">CONTACT US</a></li>
							<li><a href="../festival/festival.html">FESTIVAL</a></li>
							<li><a href="../links/links.html">LINKS</a></li>
							<li><a href="../about_us/about_us.html">ABOUT US</a></li>
							<li><a href="../admin/admin.html">ADMIN</a></li>
					</div>
				</div>
			</div>
		</div>
		<script>
			var event_choice;
		</script>
		
		<div id = "mainbox">
			<?php
				include('..\db.php');
				$query='select * from events;';
				
				echo '<table>';
				echo'<tr>
					<th style ="padding-right: 40px; border-bottom: 1px solid #b3b3b3;">Event Name</th>
					<th style ="padding-right: 40px; border-bottom: 1px solid #b3b3b3;">Time</th>
					<th style ="padding-right: 40px; border-bottom: 1px solid #b3b3b3;">Date</th>
					<th style ="padding-right: 40px; border-bottom: 1px solid #b3b3b3;">Price</th>
					<th style ="padding-right: 40px; border-bottom: 1px solid #b3b3b3;">Consession</th>
					<th style ="padding-right: 40px; border-bottom: 1px solid #b3b3b3;">Description</th>
					<th style ="padding-right: 40px; border-bottom: 1px solid #b3b3b3;"></th>
				</tr>';
				foreach ($DBH->query($query) as $row) {
						
				//	echo'<tr style ="border-bottom: 1px solid #b3b3b3">';
					//echo'<td style ="padding-right: 40px; border-bottom: 1px solid #b3b3b3;">'.$row[1].'</td>';
					//echo'<td style ="padding-right: 40px; border-bottom: 1px solid #b3b3b3;">'.$row[2].'</td>';
					//echo'<td style ="padding-right: 40px; border-bottom: 1px solid #b3b3b3;">'. $row[3].'</td>';
					//echo'<td style ="padding-right: 40px; border-bottom: 1px solid #b3b3b3;">&euro;'.$row[4].'</td>';
					//echo'<td style ="padding-right: 40px; border-bottom: 1px solid #b3b3b3;">'.$row[5].'</td>';
					//echo'<td style ="padding-right: 40px; border-bottom: 1px solid #b3b3b3; max-width: 250px; height: 30px; overflow: hidden;">'.$row[6].'</td>';

					//echo'<td style ="border-bottom: 1px solid #b3b3b3;"><a href="seatbooking.php"><img src="../images/book_now.png" width = "120" height = "35"/></a></td>';
					//echo'</tr>';
				//}
				//echo '</table>';
				echo"<tr>
					
					<td style =\"padding-right: 40px; border-bottom: 1px solid #b3b3b3;\">$row[1]</td>
					<td style =\"padding-right: 40px; border-bottom: 1px solid #b3b3b3;\">$row[2]</td>
					<td style =\"padding-right: 40px; border-bottom: 1px solid #b3b3b3;\">$row[3]</td>
					<td style =\"padding-right: 40px; border-bottom: 1px solid #b3b3b3;\">&euro;$row[4]</td>
					<td style =\"padding-right: 40px; border-bottom: 1px solid #b3b3b3;\">$row[5]</td>
					<td style =\"padding-right: 40px; border-bottom: 1px solid #b3b3b3;\">$row[6]</td>
					<td style =\"padding-right: 40px; border-bottom: 1px solid #b3b3b3; margin-left: 30;\">
						<a href='./seatbooking.php?s=$row[0]'>
							<img class==\"ico\" src=\"../images/book_now.png\" alt=\"Book Seats for this event\" width=\"120\" height=\"35\" />
						</a>
					</td>
			</tr>";

		}

		echo "</table>";
			?>
		</div>
		<script>
			function eventSelect(theId) {
				document.getElementById("mainbox").innerHTML = "Working, Event selected is"+ theId;
			}
	</body>
</html>
		