<pre>
<?php

	print_r($_GET);
	echo str_repeat('-',100) . '<br/>';
	echo $_SERVER['REQUEST_URI'];

?>
</pre>

<br/>
<?php
include 'url_data.inc.php';

if (isset($url_data[@$_GET['code']]['link'])) {
	$url = @$url_data[@$_GET['code']]['link'];
} else {
	$url = @$url_data['__DEFAULT__']['link'];
}

echo 'link: '.$url;
?>