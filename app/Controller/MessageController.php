<?php
namespace App\Controller;

use App\Model\Message;
use Base\BaseController;


class MessageController extends BaseController
{

	public function sendMessage($userId, $content)
	{
		$message = (new Message())
			->setMessage($content['message'])
			->setUserID($userId)
			->setDate(date("Y-m-d H:i:s"))
			->save();
		return true;
	}

	public function showMessages($message)
	{
		echo __METHOD__;
	}
}
