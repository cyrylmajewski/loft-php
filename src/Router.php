<?php

namespace Base;

use Base\View;
class Router
{
	const NAMESPACE = '\\App\\Controller\\';
	private string $controllerName;
	private array $routes;
	private bool $processed = false;
	private \Base\View $view;

	public function __construct($session = [])
	{
		$this->view = new View();
	}

	public function process()
	{
		if (!$this->processed) {
			session_start();
			$parts = parse_url($_SERVER['REQUEST_URI']);
			$indexAction = 'index';
			$path = $parts['path'];
			$route = $this->routes[$path] ?? null;

			if ($route  !== null) {
				$this->controllerName = $route;
			} else {
				$parts = explode('/', $path);
				$this->controllerName = self::NAMESPACE . ucfirst(strtolower($parts[1])) . 'Controller';
				if (!class_exists($this->controllerName)) {
					return false;
				}
			}
			$controller = new $this->controllerName();


			$controller->setView($this->view);
			echo $controller->index();
			return true;
		}
	}

	public function getControllerName(): string
	{
		if(!$this->processed) {
			$this->process();
		}

		return $this->controllerName;
	}

	public function addRoute($path, $controllerName)
	{
		$this->routes[$path] = $controllerName;
	}
}
