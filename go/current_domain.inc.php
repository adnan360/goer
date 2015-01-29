<?php

//// Find out the current domain ////
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domain = $_SERVER['HTTP_HOST'];
$url2 = $protocol . $domain . $_SERVER['REQUEST_URI'];

//// Prepare the destination url ////
$current_domain = dirname(dirname($url2));

?>