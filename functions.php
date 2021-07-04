<?php

function isUserAuthorized() {
	return isset($_SESSION['user_id']);
}
