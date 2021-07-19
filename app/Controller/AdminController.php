<?php

namespace App\Controller;

use App\Model\User;
use Base\BaseController;

class AdminController extends BaseController
{
	public function index()
	{
		if(empty($_SESSION['id'])) {
			$this->redirect('/login');
		} else {
			$user = User::getById($_SESSION['id']);
			echo $this->view->render('/admin', ['user' => $user]);
			if(isset($_GET['exit'])) {
				$this->logout();
			}
		}
	}

	public function logout()
	{
		$_SESSION['id'] = null;
		$this->redirect('/login');
	}
}
