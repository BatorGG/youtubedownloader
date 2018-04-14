<?php
require('youtube-dl.class.php');
try {
    new yt_downloader("$_POST['formElement_name']", TRUE, "audio");
}
catch (Exception $e) {
    die($e->getMessage());
}
