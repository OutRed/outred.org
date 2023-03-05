<?php
// Get the URL to proxy
$url = $_GET['url'];

// Create a new cURL resource
$ch = curl_init();

// Set the cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Fetch the content from the URL
$content = curl_exec($ch);

// Check for errors
if ($content === false) {
    echo "Error fetching content";
    exit;
}

// Replace all occurrences of the original URL with your own URL
$proxyContent = str_replace($url, "https://outred.org/proxy.php?url=" . urlencode($url), $content);

// Output the proxied content
echo $proxyContent;
