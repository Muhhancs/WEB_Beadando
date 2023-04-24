<?php
$pagetitle = array(
    'title' => 'TZ & KP Coffee Webshop',
);

$header = array(
    'imagesource' => 'logo.png',
    'imagealt' => 'logo',
	'title' => 'TZ & KP Coffee Webshop',
	'motto' => 'You will not find better anywhere else'
);

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'firm' => 'TZ & KP Coffee Webshop'
);

$pages = array(
	'/' => array('file' => 'home', 'text' => 'Home', 'menun' => array(1,1)),
	'contact' => array('file' => 'contact', 'text' => 'Contact', 'menun' => array(1,1)),
	'shop' => array('file' => 'articles', 'text' => 'Shop', 'menun' => array(1,1)),
    'gallery' => array('file' => 'gallery', 'text' => 'Gallery', 'menun' => array(1,1)),
    'login' => array('file' => 'login', 'text' => 'Login', 'menun' => array(1,0)),
    'logout' => array('file' => 'logout', 'text' => 'Logout', 'menun' => array(0,1)),
    'login2' => array('file' => 'login2', 'text' => 'Login2', 'menun' => array(0,0)),
    'registration' => array('file' => 'registration', 'text' => 'Registration', 'menun' => array(0,0))
);

$error_page = array ('file' => '404', 'text' => 'Page not found!');
?>