<?php
namespace App\Controller;

use App\Model\User;
use Base\BaseController;

class LoginController extends BaseController
{
	public function index()
	{
		if(!empty($_SESSION['id'])) {
			$this->redirect('/admin');
		} else {
			echo $this->view->render('/login');

			if(!empty($_POST)) {
				$this->login();
			}
		}
	}

	public function login()
	{
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$user = User::getByMail($email);

		if(!$user) {
			echo "<br><br>Неверный логин или пароль";
		}

		if($user) {
			if ($user->getPassword() != User::encryptPass($password)) {
				echo "<br><br>Неверный логин или пароль";
			} else {
				$_SESSION['id'] = $user->getID();
				$this->redirect('/admin');
			}
		}
	}
}
