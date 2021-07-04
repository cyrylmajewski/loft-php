<?php

require_once('init.php');

if (!isUserAuthorized()) {
	//user not authorized
	header('Location: registerForm.php');
	die;
}

//User authorized

