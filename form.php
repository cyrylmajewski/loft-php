<?php

echo "<pre>";
var_dump($_POST);
var_dump($_FILES);

if (isset($_FILES['photo']['tmp_name'])) {
	move_uploaded_file($_FILES['photo']['tmp_name'], 'images/1.svg');
}
