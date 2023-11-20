<?php
if (isset($_GET['url'])) {
    $url = urldecode($_GET['url']);

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="funbit.apk"'); // You can change the filename here

    readfile($url);
    exit;
} else {
    echo 'Invalid URL';
}
?>
