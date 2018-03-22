<?php 
$access_token = 'EunneITz+CDcCPDQVRAAUNVyOKRMj1Fwp66SwZpQOpKtyYcbcUfxQLyFrEplCzgIB/DylvOS+qW+osZW1N+SVWOeiGzlPUGNRVBKRk6CQhXt+hD0MrbetZ9evG+RcZAepHRZty7xtNW12M2iUcNGEgdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/oauth2/v2.1/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);curl_close($ch);
echo $result;
?>