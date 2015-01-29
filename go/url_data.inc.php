<?php

include_once('current_domain.inc.php');

$url_data = array(
	'__DEFAULT__' => array(
		'title' => "1",
		'link' => '/index.php'
		),
	'1' => array(
		'title' => "1",
		'link' => '/index.php?p=1'
		),
	'2' => array(
		'title' => "2",
		'link' => '/index.php?p=2'
		)
);


array_walk($url_data, function(&$element)
{
	// use $current_domain in this function
	global $current_domain;
	
	if ( (substr($element['link'], 0, 4) != 'http') && (substr($element['link'], 0, 5) != 'https') ) {
        $element['link'] = $current_domain . $element['link'];
	}
});

?>