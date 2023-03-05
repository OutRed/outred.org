<?php
$url = $_GET['url'];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$content = curl_exec($ch);
$content = str_replace($url, $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], $content);
echo $content;
