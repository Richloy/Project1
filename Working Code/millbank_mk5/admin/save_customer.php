<?php
										
	$c_f_name = $_POST['c_f_name'];
	$c_l_name = $_POST['c_l_name'];
	$c_password = $_POST['c_password'];
	$c_email = $_POST['c_email'];
	$c_tel = $_POST['c_tel'];
	$c_mob = $_POST['c_mob'];
	$house_no = $_POST['house_no'];
	$street_name = $_POST['street_name'];
	$town = $_POST['town'];
	$county = $_POST['county'];
	$country = $_POST['country'];
	
	try{
		require("db.php");
		
		//insert variables from create_customer.php to customers table in database
		$sql = "INSERT into customers (customer_id, c_f_name, c_l_name, c_password, c_email, c_tel, c_mob, house_no, street_name, town, county, country) values(:customer_id, :c_f_name, :c_l_name, :c_password, :c_email, :c_tel, :c_mob, :house_no, :street_name, :town, :county, :country);";
		
		$items = $DBH->prepare("$sql");

		$items->bindParam(':customer_id', $id, PDO::PARAM_STR);
		$items->bindParam(':c_f_name', $c_f_name, PDO::PARAM_STR);
		$items->bindParam(':c_l_name', $c_l_name, PDO::PARAM_STR);
		$items->bindParam(':c_password', $c_password, PDO::PARAM_STR);
		$items->bindParam(':c_email', $c_email, PDO::PARAM_STR);
		$items->bindParam(':c_tel', $c_tel, PDO::PARAM_STR);
		$items->bindParam(':c_mob', $c_mob, PDO::PARAM_STR);			
		$items->bindParam(':house_no', $house_no, PDO::PARAM_STR);
		$items->bindParam(':street_name', $street_name, PDO::PARAM_STR);
		$items->bindParam(':town', $town, PDO::PARAM_STR);
		$items->bindParam(':county', $county, PDO::PARAM_STR);
		$items->bindParam(':country', $country, PDO::PARAM_STR);
		$items->execute();
		
	}catch(PDOException $pdoe){
	
		$DBH->rollback();
		
		$msg = 2;
	}
		echo " Failure To Send "
	
	
	
?>