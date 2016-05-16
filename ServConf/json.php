<?php
	// Convert fahrenheit / celsius function
	function tempConvert($valueConvert, $convertType)
	{
		if($convertType == "fahrenheit"){
			$conversion = ((9/5) * $valueConvert) + (32);
		}
		else if ($convertType == "celsius"){
			$conversion = ($valueConvert - 32) * (5/9);
		}
	   return $conversion;
	}
	
	$myFile = "data.json";
	
	// random value
	$celsius = rand(-20, 100);
	
	//Get form data
	$formdata = array(
		'celsius_temperature'=> $celsius,
		'fahrenheit_temperature'=> tempConvert($celsius, "fahrenheit"),
		'date'=> time()
	);
	if (file_exists("data.json")) {
		echo "Le fichier existe.";
				
		$arr_data = array(); // create empty array
		try
		{
		   //Get data from existing json file
		   $jsondata = file_get_contents($myFile);
		   // converts json data into array
		   $arr_data = json_decode($jsondata, true);
		   // Push user data to array
		   array_push($arr_data,$formdata);
		   //Convert updated array to JSON
		   $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
		   
		   //write json data into data.json file
		   if(file_put_contents($myFile, $jsondata)) {
				echo 'Data successfully saved';
			}
		   else
				echo "error";
		}
		catch (Exception $e) {
				echo 'Caught exception: ', $e->getMessage(), "\n";
		}
	}
	else {
		$arr_data = array(); // create empty array
		try
		{
		   	// Push user data to array
		   	array_push($arr_data,$formdata);
		   	//Convert updated array to JSON
		   	$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
			$fp = fopen($myFile, 'w');
			fwrite($fp, json_encode($arr_data));
			fclose($fp);
		}
		catch (Exception $e) {
				echo 'Caught exception: ', $e->getMessage(), "\n";
		}
	}
	exec("/usr/bin/php upload.php");
?>
