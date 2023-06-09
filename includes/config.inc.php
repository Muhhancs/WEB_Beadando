<?php
$pagetitle = array(
    'title' => 'Simple Website Ltd.',
);

$header = array(
    'imagesource' => 'logo.png',
    'imagealt' => 'logo',
	'title' => 'Simple Website',
	'motto' => ''
);

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'firm' => 'Simple Website Ltd.'
);

$pages = array(
<<<<<<< Updated upstream
	'/' => array('file' => 'home', 'text' => 'Home'),
	'introduction' => array('file' => 'introduction', 'text' => 'Introduction'),
	'contact' => array('file' => 'contact', 'text' => 'Contact'),
	'articles' => array('file' => 'articles', 'text' => 'Articles'),
    'table' => array('file' => 'table', 'text' => 'Table')
=======
	'/' => array('file' => 'home', 'text' => 'Home', 'menun' => array(1,1)),
	'contact' => array('file' => 'contact', 'text' => 'Contact', 'menun' => array(1,1)),
	'shop' => array('file' => 'shop', 'text' => 'Shop', 'menun' => array(1,1)),
    'cart' => array('file' => 'cart', 'text' => 'Cart', 'menun' => array(0,1)),
    'gallery' => array('file' => 'gallery', 'text' => 'Gallery', 'menun' => array(1,1)),
    'galleryup' => array('file' => 'galleryup', 'text' => 'Upload', 'menun' => array(1,1)),
    'upload' => array('file' => 'upload', 'text' => 'Upload2', 'menun' => array(0,0)),
    'email' => array('file' => 'email', 'text' => 'Email', 'menun' => array(0,0)),
    'login' => array('file' => 'login', 'text' => 'Login', 'menun' => array(1,0)),
    'logout' => array('file' => 'logout', 'text' => 'Logout', 'menun' => array(0,1)),
    'login2' => array('file' => 'login2', 'text' => 'Login2', 'menun' => array(0,0)),
    'registration' => array('file' => 'registration', 'text' => 'Registration', 'menun' => array(0,0)),
    'other' => array('file' => 'other', 'text' => 'Other', 'menun' => array(1,1)),
    'mailform' => array('file' => 'mailform', 'text' => 'Mailform', 'menun' => array(0,0))

>>>>>>> Stashed changes
);

$error_page = array ('file' => '404', 'text' => 'Page not found!');

$FOLDER = './gallery/';
$TYPES = array ('.jpg', '.png');
$MEDIATYPES = array('image/jpeg', 'image/png');
$DATEFORMAT = "m/d/Y H:i";
$MAXSIZE = 500*1024;
?>