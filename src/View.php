<?php
namespace Base;

class View
{
	private string $templatePath;
	private $data = [];
	private $twig;

	public function __construct()
	{
		$this->templatePath = PROJECT_DIR . DIRECTORY_SEPARATOR;
	}

	public function render(string $tpl, $data = [], $twig = false): string
	{
		$this->data += $data;
		ob_start();
		include $this->templatePath . $tpl . DIRECTORY_SEPARATOR . 'index.php';
		return ob_get_clean();
	}

	public function renderTwig(string $tpl, $data = [])
	{
		if(!$this->twig) {
			$loader = new \Twig\Loader\FilesystemLoader($this->templatePath);
			$this->twig = new \Twig\Environment($loader);
		}

		return $this->twig->render($tpl, $data);
	}
}
