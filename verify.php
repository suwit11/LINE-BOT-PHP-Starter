<?php
$access_token = 'IMP/LG0+BdBFbNWC9vQMAVBZJ9OXOULymEFH2+c9tziXYnMYxAeuol7A82lHCT+3DHAd0zH0X3y70T1CLaqg1ubneNusu/uLDWzTytE5pEc/FiME31SsHMpYlwHJahbF1Dje3wcjjLs+U8QCClO3twdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
