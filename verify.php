<?php 
$access_token = 'uW96In3bdMmPl+UZKY93eBfsEZNgvhl6TluiMycGdAMIIMSJZ079VdWtGmN1fOW8B/DylvOS+qW+osZW1N+SVWOeiGzlPUGNRVBKRk6CQhXjsWBbWji+zcqAF/rfuJKxunR92s8q5MuEr+z4jSfvcwdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v2/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);curl_close($ch);
echo $result;
?>