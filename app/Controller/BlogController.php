<?php

namespace App\Controller;

use App\Model\Message;
use App\Model\User;
use Base\BaseController;
use App\Controller\MessageController;
use Base\View;

class BlogController extends BaseController
{
	private \App\Controller\MessageController $messageController;

	public function __construct()
	{
		$this->messageController = new MessageController();
	}

	public function index()
	{
		$userModel = new User();
		if(empty($_SESSION['id'])) {
			$this->redirect('/login');
		}
		if(empty($_GET['id'])) {
			$user = $userModel->getById($_SESSION['id']);
		}
		else {
			$user = $userModel->getById($_GET['id']);
		}
		$messages = Message::getList($user->getID());

		echo $this->view->render('/blog', ['user' => $user]);

		if(!empty($_POST)) {
			$this->messageController->sendMessage($user->getID(), $_POST);
			$this->redirect('/blog?id=' . $user->getID());
		}

		if(!empty($messages)) {
			var_dump($messages);
		}
	}

}
