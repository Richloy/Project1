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
			/* $(function() {
				$( "#event_date" ).datepicker();
				//alert(event_date)	
			});
			  
			$(".date").datepicker({
				dateFormat: 'yy-m-d',
				inline:true,
				onSelect: function(dateText) {
					display("Selected date: " + dateText + "; input's current value: " + this.value);
				}
			}); */
	
			$(document).ready(function(){
				$("#er1").hide();
				$("#er2").hide();
				$("#er3").hide();
				$("#er4").hide();
				$("#er5").hide();
				$("#er6").hide();
				$("#done").hide();
			});
		
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
							<li><a href="admin.html">ADMIN</a></li>
							<li><a href="../index.html">HOME</a></li>
							<li><a href="new_event.html" class="current">NEW EVENTS</a></li>
							<li><a href="alter_event.html">ALTER EVENT</a></li>
							<li><a href="seating_report.html">SEATING REPORT</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div id = "adminbox">
			<table>
				<tr>
					<td>Event Name:</td>
					<td colspan = "3"><input type="text" name="event_name" id="event_name" Size = 60 class = "t_grey"></input></td>
				</tr>
				<tr>
				<td>Price: </td>
				<td colspan = "3"><input type="text" name ="event_price" id="event_price" Size = 10 class = "t_grey" placeholder="€"></input></td>
				</tr>
				
				<tr>
					<td>Description:</td>
					<td colspan = "3"><textarea name="event_desc" id="event_desc" rows = 5 cols = 5 class = "t_grey"> </textarea></td>
				</tr>
				<tr>
					<td>Date:</td>
					<td><input type="date" name="event_date" id="event_date" class = "t_grey"></input></td>		
					<td>Time:</td>
					<td>
						<select id="event_time" class "t_grey">
							<option value = "" >HH:MM</option>
							<option value = "12:00" >12:00</option>
							<option value = "12:30" >12:30</option>
							<option value = "13:00" >13:00</option>
							<option value = "13:30" >13:30</option>
							<option value = "14:00" >14:00</option>
							<option value = "14:00" >14:30</option>
							<option value = "15:00" >15:00</option>
							<option value = "15:30" >15:30</option>
							<option value = "16:00" >16:00</option>
							<option value = "16:30" >16:30</option>
							<option value = "17:30" >17:00</option>
							<option value = "17:30" >17:30</option>
							<option value = "18:00" >18:00</option>
							<option value = "18:30" >18:30</option>
							<option value = "19:00" >19:00</option>
							<option value = "19:30" >19:30</option>
							<option value = "20:00" >20:00</option>
							<option value = "20:30" >20:30</option>
							<option value = "21:00" >21:00</option>
							<option value = "21:30" >21:30</option>
							<option value = "22:00" >22:00</option>
							<option value = "22:30" >22:30</option>
							<option value = "23:00" >23:00</option>
							</select>
					</td>
				</tr>
				
				<tr>
					<td colspan = "4">Select a file: <input type="file" name="img" onclick="showUploadPic" id = "event_img"></td>
				</tr>
				<tr>
				</tr>
				<tr><td>Allow <br>Concession</td>
				<td><select id="allow_conc">
							<option value = "N" >No</option>
							<option value = "Y" >Yes</option>
							</select>
							</td>
				</tr>
				<tr>
					<td colspan = "3"></td> 
					<td align="right" ><button onclick="getEventsFromData();">Submit</button></td>
				</tr>
			</table>
			<div id = "eventpic">
				Uploaded Picture.
            	<img src="../images/harb.jpg"></img>
            </div>
									
			<div id="er1" style="color:red;">No Event Name</div>
			<div id="er2" style="color:red;">No Event Description</div>
			<div id="er3" style="color:red;">No Event Price</div>
			<div id="er4" style="color:red;">No Event Date</div>
			<div id="er5" style="color:red;">No Event Time</div>
			<div id="er6" style="color:red;">No Event Image</div>
			<div id="done" style="color:red;">Event Created</div>
		</div>
		<script>
			
			function showUploadPic(){
				var pic = document.getElementById('event_img').value;
				document.getElementById('eventpic').innerHTML = pic;
			}
		
			function getEventsFromData(){
				//alert('First STEP');
				var event_name = document.getElementById('event_name').value;
				var event_desc = document.getElementById('event_desc').value;
				var event_price = document.getElementById('event_price').value;
				var event_date = document.getElementById('event_date').value;
				var event_time = document.getElementById('event_time').value;
				var allow_conc = document.getElementById('allow_conc').value;
				var event_img = document.getElementById('event_img').value;
				
				<!--validate field input-->
				if ((event_name == null || event_name == "" ) || (event_desc == null || event_desc == "" )){
					alert("Name and Description Required !!");
					document.getElementById("event_name").value = "";
					document.getElementById("event_desc").value = ""; 
					return false;		
				}
				
				// If event_price is Not a Number or less than one or greater than 100
				x = document.getElementById("event_price").value;
				if (isNaN(x) || x < 1 || x > 100 || x == null || x == "") {
					alert("Please Enter a valid Event Price");
					document.getElementById("event_price").value = "";
				}
				
				//alert('second test');
				
				// Check required fields are populated
				if(event_name == ''){
					$("#er1").show().fadeOut(5000);
				}	
				if(event_desc == ''){
					$("#er2").show().fadeOut(5000);
				}
				if(event_price == ''){
					$("#er3").show().fadeOut(5000);
				}
				if(event_date == ''){
					$("#er4").show().fadeOut(5000);
				}
				if(event_time == ''){
					$("#er5").show().fadeOut(5000);
				}
				if(event_img == ''){
					$("#er6").show().fadeOut(5000);
				}else
					
				<!--method for posting user input variables to the save_event.php page that links to and saves the input to the database-->
				$.post( "save_event.php", {event_name : event_name, event_desc : event_desc, event_date : event_date, event_time : event_time, event_img : event_img, event_price : event_price, allow_conc : allow_conc}).done(function(){
					$("#done").show().fadeOut(5000);
				
					//alert('third test');
				});
			
			}
			
				
			
			
		</script>		
	</body>
</html>	