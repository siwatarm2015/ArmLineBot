<?php 
$access_token = 'KpFfecrkMgy+VLpBQqBeIZb+PqzvlGwmUlWQj738u8jczoc8iSPxmbegJMq9EZK0B/DylvOS+qW+osZW1N+SVWOeiGzlPUGNRVBKRk6CQhVi39+t7fQksFdJL4vOCgHUYWzN/2AsgdkuPNzEgBqFSQdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v2/oauth/verify?access_token='.$access_token;
$headers = array('Content-Type: application/x-www-form-urlencoded');
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);curl_close($ch);
echo $result;
?>