<?php
// http://codular.com/curl-with-php
// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://api.openweathermap.org/data/2.5/weather?zip=20115,es&APPID=b85a3e48e187e4137e9c34b82e57e0ac',
    //CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
foreach (json_decode($resp) as $key => $value) {
	echo $key.": <br/>";
	foreach ($value as $entry) {
		if ($key == "weather") {
			foreach ($entry as $val) {
				echo $val."<br/>";
			}
		}
		echo $entry."<br/>";
	}
}
//var_dump(json_decode($resp));
//print_r($resp);
?>