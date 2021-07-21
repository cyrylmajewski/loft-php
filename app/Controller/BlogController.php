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
	private bool $userIsAdmin = false;
	private array $messages = [];

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
			$this->userIsAdmin = true;
			$user = $userModel->getById($_SESSION['id']);
		}
		else {
			$user = $userModel->getById($_GET['id']);

			if ($_GET['id'] == $_SESSION['id']) {
				$this->userIsAdmin = true;
			}
		}

		$messages = Message::getList($user->getID());

		if(!empty($messages)) {

			foreach ($messages as $message) {
				$this->messages[$message->id] = [
					'message' => $message->message,
					'userId' => $message->userId,
					'date' => $message->date,
				];
			}
		}

		echo $this->view->render('/blog', [
			'user' => $user,
			'admin' => $this->userIsAdmin,
			'messages' => $this->messages
		]);
		if(!empty($_POST)) {
			$this->messageController->sendMessage($user->getID(), $_POST);
			$this->redirect('/blog?id=' . $user->getID());
		}
	}

}
