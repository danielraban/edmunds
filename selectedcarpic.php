<?php
	require('api_keys.php');
	
	$curModelId = $_GET['curModelId'];
	
	$selectedCarPic = file_get_contents('http://api.edmunds.com/v1/api/vehiclephoto/service/findphotosbystyleid?styleId='.$curModelId.'&api_key=kte85guzd8qtkpcws9s9b8cx'.$edmundsVehicleKey.'&fmt=json');
	
	print $selectedCarPic;
?>