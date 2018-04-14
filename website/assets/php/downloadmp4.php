<?php
require('youtube-dl.class.php');
try {
    new yt_downloader("$_POST['formElement_name']", TRUE);
}
catch (Exception $e) {
    die($e->getMessage());
}
