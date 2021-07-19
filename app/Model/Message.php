<?php

namespace App\Model;

use Base\BaseModel;
use Base\Db;

class Message extends BaseModel
{

	private string $message;
	private string $date;
	private int $userId;

	public function __construct(array $data = [])
	{
		if (!empty($data)) {
			$this->message = $data['message'];
			$this->date = $data['date'];
			$this->userId = $data['userId'];
		}
	}

	public static function getList($userId, int $limit = 10, int $offset = 0): array
	{
		$db = Db::getInstance();
		$data = $db->fetchAll(
			"SELECT * FROM messages WHERE `userId` = :userId LIMIT $limit OFFSET $offset",
			__METHOD__, [
				':userId' => $userId
			]
		);
		if (!$data) {
			return [];
		}

		$messages = [];
		foreach ($data as $elem) {
			$message = new self($elem);
			$message->id = $elem['id'];
			$messages[] = $message;
		}

		return $messages;
	}

	public function save()
	{
		$db = Db::getInstance();
		$insert = "INSERT INTO messages (`userId`, `date`, `message`) VALUES (
            :userId, :date, :message
        )";
		$res = $db->exec($insert, __METHOD__, [
			':userId' => $this->userId,
			':date' => $this->date,
			':message' => $this->message,
		]);

		return $res;
	}

	public function getMessage(): string
	{
		return $this->message;
	}

	public function setMessage(string $message): self
	{
		$this->message = $message;
		return $this;
	}

	public function setDate(string $date): self
	{
		$this->date = $date;
		return $this;
	}

	public function setId(int $id): self
	{
		$this->id = $id;
		return $this;
	}

	public function setUserID(int $userId): self
	{
		$this->userId = $userId;
		return $this;
	}


}
