<?php
require 'vendor\autoload.php';
use GuzzleHttp\Client;

$client = new Client();
$response = $client->request('GET', 'https://api.weather.com/v2/pws/dailysummary/7day?stationId=KTNCHATT191&format=json&units=e&apiKey=e61ff8b86b5f4eba9ff8b86b5feebaf0');
$body = $response->getBody();
$user_string = $body->getContents();
$users = json_decode($user_string);
$t = 0;
for($i = 0; $i<7; $i++) {
    $t += sprintf($users->summaries[$i]->imperial->dewptHigh);
}
    echo ($t/7);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<h1><?php echo date("D M d Y"). ', sunrise time : ' .date_sunrise(time(), SUNFUNCS_RET_STRING, 35.025543, -85.132431, 90, -4);?></h1>
<h1><?php echo date("D M d Y"). ', sunset time : ' .date_sunset(time(), SUNFUNCS_RET_STRING, 35.025543, -85.132431, 90, -4);?></h1>
<a href="https://api.weather.com/v2/pws/dailysummary/7day?stationId=KTNCHATT191&format=json&units=e&apiKey=e61ff8b86b5f4eba9ff8b86b5feebaf0" >WUNDERGROUND KEY</a>

</body>
</html>