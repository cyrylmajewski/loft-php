<?php
require_once('init.php');

if (isUserAuthorized()) {
	//user not authorized
	header('Location: index.php');
	die;
}


var_dump($_POST);

