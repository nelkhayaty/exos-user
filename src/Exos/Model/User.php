<?php

namespace Exos\Model;

/**
* 
*/
class User
{
	private $name;

	private $email;

	private $avatar;

	public function __construct($data)
	{
		$this->setName($data["name"]);
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	public function getAvatar()
	{
		return $this->avatar;
	}

	public function setAvatar($avatar)
	{
		$this->avatar = $avatar;

		return $this;
	}
}