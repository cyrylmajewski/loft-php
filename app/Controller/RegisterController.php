<?php

namespace App\Controller;

use App\Model\User;
use Base\BaseController;

class RegisterController extends BaseController
{

	public function index()
	{
		if(!empty($_SESSION['id'])) {
			$this->redirect('/admin');
		} else {
			echo $this->view->render('/register');

			if(!empty($_POST)) {
				$this->register();
			}
		}
	}

	public function register()
	{
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$repPass = trim($_POST['repeatPassword']);

		$verified = $this->verifyPassword($repPass, $password);
		$success = true;


		if (isset($name)) {
			if(strlen($name) < 1) {
				echo "<br><br>Имя не может быть пустым";
				$success = false;
			}

			if(strlen($password) < 4) {
				echo "<br><br>Введите больше 4 знаков пароля";
				$success = false;
			}

			$user = User::getByMail($email);
			if(isset($user)) {
				echo "<br><br>Пользователь с такой почтой уже существует";
				$success = false;
			}
		}

		if ($verified && $success) {
			$user = (new User())->setName($name)->setEmail($_POST['email'])->setPassword(User::encryptPass($password));
			$user->save();
			$this->redirect('/login');
		}
	}

	private function verifyPassword($pass, $repPass): bool
	{
		return $pass === $repPass;
	}

}
