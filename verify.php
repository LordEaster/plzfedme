<?php
$access_token = '6j9qqOSd9F9eG2hmnBWMElVN3Enlf11beeKRe45PGcxMENlLkDJolGElTnV6dbqipLrcWh8JMoPCcF0vlDE9hv5k17b9zTCygutqq+WhW68QC5+4kJsnlI4iIbI4nbAeHMLJ35yFUbjN8gWjzpZPUwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
