<?php
	require('api_keys.php');
	
	$edmundsVehicleJSON = file_get_contents('http://api.edmunds.com/v1/api/vehicle/makerepository/findall?api_key=kte85guzd8qtkpcws9s9b8cx'.$edmundsVehicleKey.'&fmt=json');
	
	print $edmundsVehicleJSON;
?>