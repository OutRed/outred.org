<?php
if(isset($_POST['url'])) {
    $url = $_POST['url'];
    $html = file_get_contents($url);
    $html = str_replace('href="http', 'href="/proxy.php?url=http', $html);
    $html = str_replace('src="http', 'src="/proxy.php?url=http', $html);
    echo $html;
} else {
    echo 'Enter a URL to proxy.';
}
?>
