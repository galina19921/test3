<?php
namespace Core;

use Controller\Controller;

class Router
{
	public function run()
	{
		$obj = new Controller;
		$obj->index();
	}
}