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
				$("#er4").hide();
				$("#er5").hide();
				$("#er6").hide();
				$("#er7").hide();
				$("#er8").hide();
				$("#er9").hide();
				$("#er10").hide();
				$("#er11").hide();
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
					<div id = "customer">
						CUSTOMER SESSION
					</div>
				</div>
				<div id = "menu">
					<div id = "menubox">
						<ul>
							
							<li><a href="../index.html">HOME</a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div id = "adminbox">
			<table>
				<tr>
					<td>First Name:</td>
					<td colspan = "3"><input type="text" name="c_f_name" id="c_f_name" Size = 20 class = "t_grey"></input></td>
				</tr>
				
				<tr>
					<td>Last Name:</td>
					<td colspan = "3"><input type="text" name ="c_l_name" id="c_l_name" Size = 20 class = "t_grey" placeholder=""></input></td>
				</tr>
				
				<tr>
					<td>Password:</td>
					<td colspan = "3"><input type="password" name ="c_password" id="c_password" Size = 20 class = "t_grey" placeholder=""></input></td>
				</tr>
				
				<tr>
					<td>Email:</td>
					<td colspan = "3"><input type="text" name ="c_email" id="c_email" Size = 20 class = "t_grey" placeholder=""></input></td>
				</tr>
				
				<tr>
					<td>Telephone No:</td>
					<td colspan = "3"><input type="text" name ="c_tel" id="c_tel" Size = 20 class = "t_grey" placeholder=""></input></td>
				</tr>
				
				<tr>
					<td>Mobile No:</td>
					<td colspan = "3"><input type="text" name ="c_mob" id="c_mob" Size = 20 class = "t_grey" placeholder=""></input></td>
				</tr>
				
				<tr>
					<td>House/Apt. No:</td>
					<td colspan = "3"><input type="text" name ="house_no" id="house_no" Size = 20 class = "t_grey" placeholder=""></input></td>
				</tr>
				
				<tr>
					<td>Street:</td>
					<td colspan = "3"><input type="text" name ="street_name" id="street_name" Size = 20 class = "t_grey" placeholder=""></input></td>
				</tr>
				
				<tr>
					<td>Town:</td>
					<td colspan = "3"><input type="text" name ="town" id="town" Size = 20 class = "t_grey" placeholder=""></input></td>
				</tr>
				
				<tr>
					<td>County:</td>
					<td colspan = "3"><select name ="county" id="county"  class = "t_grey" >
						<option value="Antrim">Antrim</option>
						<option value="Armagh">Armagh</option>
						<option value="Carlow">Carlow</option>
						<option value="Cavan">Cavan</option>
						<option value="Clare">Clare</option>
						<option value="Cork">Cork</option>
						<option value="Derry">Derry</option>
						<option value="Donegal">Donegal</option>
						<option value="Down">Down</option>
						<option value="Dublin">Dublin</option>
						<option value="Fermanagh">Fermanagh</option>
						<option value="Galway">Galway</option>
						<option value="Kerry">Kerry</option>
						<option value="Kildare">Kildare</option>
						<option value="Kilkenny">Kilkenny</option>
						<option value="Laois">Laois</option>
						<option value="Leitrim">Leitrim</option>
						<option value="Limerick">Limerick</option>
						<option value="Longford">Longford</option>
						<option value="Louth">Louth</option>
						<option value="Mayo">Mayo</option>
						<option value="Monaghan">Monaghan</option>
						<option value="Offaly">Offaly</option>
						<option value="Roscommon">Roscommon</option>
						<option value="Tipperary">Tipperary</option>
						<option value="Tyrone">Tyrone</option>
						<option value="Waterford">Waterford</option>
						<option value="Westmeath">Westmeath</option>
						<option value="Wexford">Wexford</option>
						<option value="Wicklow">Wicklow</option>
					</select></td>
									
				</tr>
				
				<tr>
					<td>Country:</td>
					<td colspan = "3"><select name ="country" id="country" class = "t_grey" >
						<option value="Afghanistan">Afghanistan</option>
						<option value="Åland Islands">Åland Islands</option>
						<option value="Albania">Albania</option>
						<option value="Algeria">Algeria</option>
						<option value="American Samoa">American Samoa</option>
						<option value="Andorra">Andorra</option>
						<option value="Angola">Angola</option>
						<option value="Anguilla">Anguilla</option>
						<option value="Antarctica">Antarctica</option>
						<option value="Antigua and Barbuda">Antigua and Barbuda</option>
						<option value="Argentina">Argentina</option>
						<option value="Armenia">Armenia</option>
						<option value="Aruba">Aruba</option>
						<option value="Australia">Australia</option>
						<option value="Austria">Austria</option>
						<option value="Azerbaijan">Azerbaijan</option>
						<option value="Bahamas">Bahamas</option>
						<option value="Bahrain">Bahrain</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="Barbados">Barbados</option>
						<option value="Belarus">Belarus</option>
						<option value="Belgium">Belgium</option>
						<option value="Belize">Belize</option>
						<option value="Benin">Benin</option>
						<option value="Bermuda">Bermuda</option>
						<option value="Bhutan">Bhutan</option>
						<option value="Bolivia">Bolivia</option>
						<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
						<option value="Botswana">Botswana</option>
						<option value="Bouvet Island">Bouvet Island</option>
						<option value="Brazil">Brazil</option>
						<option value="Brunei Darussalam">Brunei Darussalam</option>
						<option value="Bulgaria">Bulgaria</option>
						<option value="Burkina Faso">Burkina Faso</option>
						<option value="Burundi">Burundi</option>
						<option value="Cambodia">Cambodia</option>
						<option value="Cameroon">Cameroon</option>
						<option value="Canada">Canada</option>
						<option value="Cape Verde">Cape Verde</option>
						<option value="Cayman Islands">Cayman Islands</option>
						<option value="Central African Republic">Central African Republic</option>
						<option value="Chad">Chad</option>
						<option value="Chile">Chile</option>
						<option value="China">China</option>
						<option value="Christmas Island">Christmas Island</option>
						<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
						<option value="Colombia">Colombia</option>
						<option value="Comoros">Comoros</option>
						<option value="Congo">Congo</option>					
						<option value="Cook Islands">Cook Islands</option>
						<option value="Costa Rica">Costa Rica</option>
						<option value="Cote D'ivoire">Cote D'ivoire</option>
						<option value="Croatia">Croatia</option>
						<option value="Cuba">Cuba</option>
						<option value="Cyprus">Cyprus</option>
						<option value="Czech Republic">Czech Republic</option>
						<option value="Denmark">Denmark</option>
						<option value="Djibouti">Djibouti</option>
						<option value="Dominica">Dominica</option>
						<option value="Dominican Republic">Dominican Republic</option>
						<option value="Ecuador">Ecuador</option>
						<option value="Egypt">Egypt</option>
						<option value="El Salvador">El Salvador</option>
						<option value="Equatorial Guinea">Equatorial Guinea</option>
						<option value="Eritrea">Eritrea</option>
						<option value="Estonia">Estonia</option>
						<option value="Ethiopia">Ethiopia</option>					
						<option value="Faroe Islands">Faroe Islands</option>
						<option value="Fiji">Fiji</option>
						<option value="Finland">Finland</option>
						<option value="France">France</option>
						<option value="French Guiana">French Guiana</option>
						<option value="French Polynesia">French Polynesia</option>
						<option value="Gabon">Gabon</option>
						<option value="Gambia">Gambia</option>
						<option value="Georgia">Georgia</option>
						<option value="Germany">Germany</option>
						<option value="Ghana">Ghana</option>
						<option value="Gibraltar">Gibraltar</option>
						<option value="Greece">Greece</option>
						<option value="Greenland">Greenland</option>
						<option value="Grenada">Grenada</option>
						<option value="Guadeloupe">Guadeloupe</option>
						<option value="Guam">Guam</option>
						<option value="Guatemala">Guatemala</option>
						<option value="Guernsey">Guernsey</option>
						<option value="Guinea">Guinea</option>
						<option value="Guinea-bissau">Guinea-bissau</option>
						<option value="Guyana">Guyana</option>
						<option value="Haiti">Haiti</option>
						<option value="Honduras">Honduras</option>
						<option value="Hong Kong">Hong Kong</option>
						<option value="Hungary">Hungary</option>
						<option value="Iceland">Iceland</option>
						<option value="India">India</option>
						<option value="Indonesia">Indonesia</option>
						<option value="Iran">Iran</option>
						<option value="Iraq">Iraq</option>
						<option value="Ireland">Ireland</option>
						<option value="Isle of Man">Isle of Man</option>
						<option value="Israel">Israel</option>
						<option value="Italy">Italy</option>
						<option value="Jamaica">Jamaica</option>
						<option value="Japan">Japan</option>
						<option value="Jersey">Jersey</option>
						<option value="Jordan">Jordan</option>
						<option value="Kazakhstan">Kazakhstan</option>
						<option value="Kenya">Kenya</option>
						<option value="Kiribati">Kiribati</option>
						<option value="North Korea">North Korea</option>
						<option value="South Korea">South Korea</option>
						<option value="Kuwait">Kuwait</option>
						<option value="Kyrgyzstan">Kyrgyzstan</option>					
						<option value="Latvia">Latvia</option>
						<option value="Lebanon">Lebanon</option>
						<option value="Lesotho">Lesotho</option>
						<option value="Liberia">Liberia</option>
						<option value="Libya">Libya</option>
						<option value="Liechtenstein">Liechtenstein</option>
						<option value="Lithuania">Lithuania</option>
						<option value="Luxembourg">Luxembourg</option>
						<option value="Macao">Macao</option>
						<option value="Macedonia">Macedonia</option>
						<option value="Madagascar">Madagascar</option>
						<option value="Malawi">Malawi</option>
						<option value="Malaysia">Malaysia</option>
						<option value="Maldives">Maldives</option>
						<option value="Mali">Mali</option>
						<option value="Malta">Malta</option>
						<option value="Marshall Islands">Marshall Islands</option>
						<option value="Martinique">Martinique</option>
						<option value="Mauritania">Mauritania</option>
						<option value="Mauritius">Mauritius</option>
						<option value="Mayotte">Mayotte</option>
						<option value="Mexico">Mexico</option>
						<option value="Moldova">Moldova</option>
						<option value="Monaco">Monaco</option>
						<option value="Mongolia">Mongolia</option>
						<option value="Montenegro">Montenegro</option>
						<option value="Montserrat">Montserrat</option>
						<option value="Morocco">Morocco</option>
						<option value="Mozambique">Mozambique</option>
						<option value="Myanmar">Myanmar</option>
						<option value="Namibia">Namibia</option>
						<option value="Nauru">Nauru</option>
						<option value="Nepal">Nepal</option>
						<option value="Netherlands">Netherlands</option>
						<option value="Netherlands Antilles">Netherlands Antilles</option>
						<option value="New Caledonia">New Caledonia</option>
						<option value="New Zealand">New Zealand</option>
						<option value="Nicaragua">Nicaragua</option>
						<option value="Niger">Niger</option>
						<option value="Nigeria">Nigeria</option>
						<option value="Niue">Niue</option>
						<option value="Norfolk Island">Norfolk Island</option>
						<option value="Northern Mariana Islands">Northern Mariana Islands</option>
						<option value="Norway">Norway</option>
						<option value="Oman">Oman</option>
						<option value="Pakistan">Pakistan</option>
						<option value="Palau">Palau</option>
						<option value="Palestine">Palestine</option>
						<option value="Panama">Panama</option>
						<option value="Papua New Guinea">Papua New Guinea</option>
						<option value="Paraguay">Paraguay</option>
						<option value="Peru">Peru</option>
						<option value="Philippines">Philippines</option>
						<option value="Pitcairn">Pitcairn</option>
						<option value="Poland">Poland</option>
						<option value="Portugal">Portugal</option>
						<option value="Puerto Rico">Puerto Rico</option>
						<option value="Qatar">Qatar</option>
						<option value="Reunion">Reunion</option>
						<option value="Romania">Romania</option>
						<option value="Russian Federation">Russian Federation</option>
						<option value="Rwanda">Rwanda</option>
						<option value="Saint Helena">Saint Helena</option>
						<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
						<option value="Saint Lucia">Saint Lucia</option>
						<option value="Samoa">Samoa</option>
						<option value="San Marino">San Marino</option>
						<option value="Sao Tome and Principe">Sao Tome and Principe</option>
						<option value="Saudi Arabia">Saudi Arabia</option>
						<option value="Senegal">Senegal</option>
						<option value="Serbia">Serbia</option>
						<option value="Seychelles">Seychelles</option>
						<option value="Sierra Leone">Sierra Leone</option>
						<option value="Singapore">Singapore</option>
						<option value="Slovakia">Slovakia</option>
						<option value="Slovenia">Slovenia</option>
						<option value="Solomon Islands">Solomon Islands</option>
						<option value="Somalia">Somalia</option>
						<option value="South Africa">South Africa</option>
						<option value="Spain">Spain</option>
						<option value="Sri Lanka">Sri Lanka</option>
						<option value="Sudan">Sudan</option>
						<option value="Suriname">Suriname</option>
						<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
						<option value="Swaziland">Swaziland</option>
						<option value="Sweden">Sweden</option>
						<option value="Switzerland">Switzerland</option>
						<option value="Syrian Arab Republic">Syrian Arab Republic</option>
						<option value="Taiwan">Taiwan</option>
						<option value="Tajikistan">Tajikistan</option>
						<option value="Tanzania">Tanzania</option>
						<option value="Thailand">Thailand</option>
						<option value="Timor-leste">Timor-leste</option>
						<option value="Togo">Togo</option>
						<option value="Tokelau">Tokelau</option>
						<option value="Tonga">Tonga</option>
						<option value="Trinidad and Tobago">Trinidad and Tobago</option>
						<option value="Tunisia">Tunisia</option>
						<option value="Turkey">Turkey</option>
						<option value="Turkmenistan">Turkmenistan</option>
						<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
						<option value="Tuvalu">Tuvalu</option>
						<option value="Uganda">Uganda</option>
						<option value="Ukraine">Ukraine</option>
						<option value="United Arab Emirates">United Arab Emirates</option>
						<option value="United Kingdom">United Kingdom</option>
						<option value="United States">United States</option>
						<option value="Uruguay">Uruguay</option>
						<option value="Uzbekistan">Uzbekistan</option>
						<option value="Vanuatu">Vanuatu</option>
						<option value="Venezuela">Venezuela</option>
						<option value="VietNam">VietNam</option>
						<option value="Virgin Islands, British">Virgin Islands, British</option>
						<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
						<option value="Wallis and Futuna">Wallis and Futuna</option>
						<option value="Western Sahara">Western Sahara</option>
						<option value="Yemen">Yemen</option>
						<option value="Zambia">Zambia</option>
						<option value="Zimbabwe">Zimbabwe</option>
					</select></td>
				</tr>
				
				<tr>
					<td colspan = "3"></td> 
					<td align="right" ><button onclick="getEventsFromData();">Submit</button></td>
				</tr>
				
			</table>
												
		<div id="er1" style="color:red;">No First Name</div>
		<div id="er2" style="color:red;">No Last Name</div>
		<div id="er3" style="color:red;">No Password</div>
		<div id="er4" style="color:red;">No Email</div>
		<div id="er5" style="color:red;">No Telephone No.</div>
		<div id="er6" style="color:red;">No Mobile No.</div>
		<div id="er7" style="color:red;">No House No.</div>
		<div id="er8" style="color:red;">No Street Name</div>
		<div id="er9" style="color:red;">No Town</div>
		<div id="er10" style="color:red;">No County</div>
		<div id="er11" style="color:red;">No Country</div>
		<div id="done" style="color:red;">Event Created</div>
			
		</div>
		
		<script>
				
		
			function getEventsFromData(){
				alert('First STEP');
				var c_f_name = document.getElementById('c_f_name').value;
				var c_l_name = document.getElementById('c_l_name').value;
				var c_password = document.getElementById('c_password').value;
				var c_email = document.getElementById('c_email').value;
				var c_tel = document.getElementById('c_tel').value;
				var c_mob = document.getElementById('c_mob').value;
				var house_no = document.getElementById('house_no').value;
				var street_name = document.getElementById('street_name').value;
				var town = document.getElementById('town').value;
				var county= document.getElementById('county').value;
				var country = document.getElementById('country').value;
				
				alert('second test');
				
				// Check required fields are populated
				if(c_f_name == ''){
					$("#er1").show().fadeOut(5000);
				}	
				if(c_l_name == ''){
					$("#er2").show().fadeOut(5000);
				}	
				if(c_password == ''){
					$("#er3").show().fadeOut(5000);
				}	
				if(c_email == ''){
					$("#er4").show().fadeOut(5000);
				}	
				if(c_tel == ''){
					$("#er5").show().fadeOut(5000);
				}	
				if(c_mob == ''){
					$("#er6").show().fadeOut(5000);
				}
				if(house_no == ''){
					$("#er7").show().fadeOut(5000);
				}	
				if(street_name == ''){
					$("#er8").show().fadeOut(5000);
				}	
				if(town == ''){
					$("#er9").show().fadeOut(5000);
				}	
				if(county == ''){
					$("#er10").show().fadeOut(5000);
				}	
				if(country == ''){
					$("#er11").show().fadeOut(5000);
				
				}else
					
				<!--method for posting user input variables to the save_customer.php page that links to and saves the input to the database-->
				$.post( "save_customer.php", {c_f_name : c_f_name, c_l_name : c_l_name, c_password : c_password, c_email : c_email, c_tel : c_tel, c_mob : c_mob,  house_no : house_no, street_name : street_name, town : town, county : county, country : country}).done(function(){
					$("#done").show().fadeOut(5000);
					alert('third test');
				});
				


			}
			
			
		</script>		
	</body>
</html>	