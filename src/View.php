<?php
namespace Base;

class View
{
	private string $templatePath;
	private $data = [];
	public function __construct()
	{
		$this->templatePath = PROJECT_DIR . DIRECTORY_SEPARATOR;
	}

	public function render(string $tpl, $data = []): string
	{
		$this->data += $data;
		ob_start();
		include $this->templatePath . $tpl . DIRECTORY_SEPARATOR . 'index.php';
		return ob_get_clean();
	}
}
