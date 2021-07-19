<?php

namespace Base;


use App\Model\User;
use Base\View;

abstract class BaseController
{
	protected $view;
	private $data;
	private $user;

	public function setView(View $view): void
	{
		$this->view = $view;
	}

	public function redirect(string $url)
	{
		header('Location: ' . $url);
	}

	public function setUser(User $user):void
	{
		$this->user = $user;
	}
}
