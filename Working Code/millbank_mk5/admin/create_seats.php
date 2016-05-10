<!DOCTYPE HTML>
<html>
	<head>
		<title>The Millbank Theatre</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="../style.css"/>
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script>
				
			$(document).ready(function(){
				$("#er1").hide();
				$("#er2").hide();
				$("#er3").hide();				
				$("#done").hide();
			});
			
			<!--function which refreshes the content of the message box with data from the database every 2 seconds-->		
	function refresh(){
		// TextArea message box content is loaded from load.php and element is faded-in in 200ms 
		$('#seats').load('load_seats.php').fadeIn("fast");
		//variable refreshId uses setInterval function to call refresh function every 1 seconds	
	}	
		var refreshId= setInterval(refresh, 1000);
		
		</script>
	</head>

	<body>
		<div id = "heading">
			<div id = "logobgrnd">
				<div id = "logobox">
					<div id ="logo">
						<img src="http://www.millbanktheatre.ie/wp-content/themes/millbanktheatre/img/logo.png" title="The Millbank Theatre" />
					</div>
					<div id = "admin">
						ADMIN SESSION
					</div>
				</div>
				<div id = "menu">
					<div id = "menubox">
						<ul>
							<li><a href="" class="current">ADMIN</a></li>
							<li><a href="../index.html">HOME</a></li>
							<li><a href="create_event.php">NEW EVENTS</a></li>
							<li><a href="alter_event.html">ALTER EVENT</a></li>
							<li><a href="create_seats.php">NEW SEATS</a></li>							
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div id = "adminbox">
			<table>
				
				<tr>
					<td>Seat Id:</td>
					<td colspan = "3"><input type="text" name="seat_id" id="seat_id" Size = 36 class = "t_grey"></input></td>
				</tr>
				<tr>
					<td>Seat Name:</td>
					<td colspan = "3"><input type="text" name="seat_name" id="seat_name" Size = 36 class = "t_grey"></input></td>
				</tr>
				
				
				
				
				<tr>
					<td colspan = "3">Select a file: <input type="file" name="img" onclick="showUploadPic" id = "s_stage_img"></td>
				</tr>
				
				
				<tr>
					<td colspan = "2"></td> 
					<td align="right" ><button onclick="getEventsFromData();">Submit</button></td>
				</tr>
				
			</table>
			<div id = "seats">
				
            	
            </div>
			
			<div id = "eventpic">
				Uploaded Picture.
            	<img src="../images/seating.jpg"></img>
            </div>
									
			<div id="er1" style="color:red;">No Seat Id</div>
			<div id="er2" style="color:red;">No Seat Name</div>
			<div id="er3" style="color:red;">No Image Selected</div>			
			<div id="done" style="color:red;">Seat Created</div>
		</div>
		<script>
			
			function showUploadPic(){
				var pic = document.getElementById('s_stage_img').value;
				document.getElementById('eventpic').innerHTML = pic;
			}
		
			function getEventsFromData(){
				//alert('First STEP');
				
				var seat_id = document.getElementById('seat_id').value;
				var seat_name = document.getElementById('seat_name').value;
				var s_stage_img = document.getElementById('s_stage_img').value;
				
				<!--validate field input-->
				if ((seat_id == null || seat_id == "" ) || (seat_name == null || seat_name == "" )){
					alert("Name and Description Required !!");
					document.getElementById("seat_name").value = "";
					document.getElementById("event_desc").value = ""; 
					return false;		
				}
				
				// If event_price is Not a Number or less than one or greater than 100
				x = document.getElementById("seat_id").value;
				if (isNaN(x) || x < 1 || x > 142 || x == null || x == "") {
					alert("Please Enter a valid Seat No.");
					document.getElementById("seat_id").value = "";
				}
				
				//alert('second test');
				
				// Check required fields are populated
				if(seat_id == ''){
					$("#er1").show().fadeOut(5000);
				}	
				if(seat_name == ''){
					$("#er2").show().fadeOut(5000);
				}
				if(s_stage_img == ''){
					$("#er3").show().fadeOut(5000);				
				}else
					
				<!--method for posting user input variables to the save_seats.php page that links to and saves the input to the database-->
				$.post( "save_seats.php", {seat_id : seat_id, seat_name : seat_name, s_stage_img : s_stage_img}).done(function(){
					$("#done").show().fadeOut(5000);
					<!--clear the input fields-->
					document.getElementById("seat_id").value = "";
					document.getElementById("seat_name").value = ""; 
					//alert('third test');
				});
			
			}
			
				
			
			
		</script>		
	</body>
</html>	