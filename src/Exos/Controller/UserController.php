<?php

namespace Exos\Controller;

use Exos\Model\User;

/**
* 
*/
class UserController
{	
	public function newAction($request)
	{
		var_dump($request["post"]);die;
		$user = new User($request["post"]);
	}
}