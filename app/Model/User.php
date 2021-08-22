<?php

namespace App\Model;

use Base\BaseModel;
use Base\DB;

class User extends BaseModel
{
	public string $name;
	public int $id;
	public string $date;
	public string $email;
	public string $password;

	public function __construct($data = [])
	{
		if ($data) {
			$this->id = $data['id'];
			$this->name = $data['name'];
			$this->email = $data['email'];
			$this->password = $data['password'];
			$this->date = $data['date'];
		}
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function setName(string $name): self
	{
		$this->name = $name;
		return $this;
	}

	public function getID(): int
	{
		return $this->id;
	}

	public function setID(int $id): void
	{
		$this->id = $id;
	}

	public function getPassword(): string
	{
		return $this->password;
	}

	public function setPassword(string $password): self
	{
		$this->password = $password;
		return $this;
	}

	public function getDate(): string
	{
		return $this->date;
	}

	public function setDate($date): self
	{
		$this->date = $date;
		return $this;
	}

	public function getEmail(): string
	{
		return $this->email;
	}

	public function setEmail($email): self
	{
		$this->email = $email;
		return $this;
	}

	public function save(): int
	{
		$db = Db::getInstance();
		$insert = "INSERT INTO users (`name`, `email`, `password`) VALUES (
            :name, :email, :password 
        )";
		$db->exec($insert, __METHOD__, [
			':name' => $this->name,
			':email' => $this->email,
			':password' => $this->password,
		]);

		$id = $db->lastInsertId();
		$this->id = $id;

		return $id;
	}

	public static function getByMail(string $email): ?self
	{
		$db = Db::getInstance();
		$select = "SELECT * FROM users WHERE `email` = :email";
		$data = $db->fetchOne($select, __METHOD__, [
			':email' => $email
		]);

		if (!$data) {
			return null;
		}
		return new self($data);
	}

	public static function getById(int $id): ?self
	{
		$db = Db::getInstance();
		$select = "SELECT * FROM users WHERE id = $id";
		$data = $db->fetchOne($select, __METHOD__);

		if (!$data) {
			return null;
		}
		return new self($data);
	}

	public static function encryptPass(string $password): string
	{
		return sha1('wflk.v23/w..;' . $password);
	}
}
