<?php 
$access_token = 'AiAKn8D2SwU5WmMIdAz61xISQU1My3I7zCI131sHF0mOdcRIZWVEIpCBYb3qx31fB/DylvOS+qW+osZW1N+SVWOeiGzlPUGNRVBKRk6CQhX54OHp/qc+ge/bORapsnMlD3p+hD2/nNQzlkvtQxJdEgdB04t89/1O/w1cDnyilFU=
';

'https://api.line.me/v1/oauth/verify';$headers = array('Authorization: Bearer ' . $access_token);$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);$result = curl_exec($ch);curl_close($ch);echo $result;
?>