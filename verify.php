<?php
$access_token = 'L0U55aMHEGKbIVbaN6zaUPZwZ0S8Xs6cfc3hhCz7HFkDOUhYBjSvVzeN7s2Fis6duJRgzxpAVraeTiAxtlzlzxBD2vRfIIbrks3yzini6jHyopUIS2bpEzVZ6JeZdC+iB8AY5hZsV7Qf6dtrJX6nWgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
