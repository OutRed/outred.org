<?php
if(isset($_POST['url'])) {
    // Get the URL to be proxied
    $url = $_POST['url'];

    // Open the cURL session
    $curlSession = curl_init();

    // Set the URL of the page to be retrieved
    curl_setopt($curlSession, CURLOPT_URL, $url);

    // Set cURL options
    curl_setopt($curlSession, CURLOPT_HEADER, false);
    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlSession, CURLOPT_FOLLOWLOCATION, true);

    // Retrieve the page
    $response = curl_exec($curlSession);

    // Close the cURL session
    curl_close($curlSession);

    // Replace all absolute URLs with relative URLs
    $base_url = 'http://' . $_SERVER['HTTP_HOST'] . '/';
    $response = str_replace($url, '', $response);
    $response = str_replace($base_url, '', $response);

    // Output the response
    echo $response;
}
?>
