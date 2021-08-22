<?php
require_once "../vendor/autoload.php";

try {
	$transport = (new Swift_SmtpTransport('smtp.yandex.ru', 465, 'ssl'))
	->setUsername('cyrylmajewski@yandex.ru')
	->setPassword('zqduermhbbfjvrjg');

	$mailer = new Swift_Mailer($transport);

	$message = (new Swift_Message('SMTP PHP'))
		->setFrom(['cyrylmajewski@yandex.ru' => 'cyrylmajewski@yandex.ru'])
		->setTo(['poroda95@gmail.com'])
		->setBody('Это сообщение пришло из php');

	$result = $mailer->send($message);

	var_dump(['res' => $result]);
} catch (Exception $e) {
	var_dump($e->getMessage());
	echo '<pre>' . print_r($e->getTrace(), 1);
}
