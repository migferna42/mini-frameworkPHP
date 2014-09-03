<?php

class HomeController {

	public function indexAction()
	{
		// return ['nombre' => 'Miguel Angel', 'edad' => 22, 'profesion' => 'Ingeniero'];
		// return 'En construccion';
		return new View('home', ['nombre' => 'Miguel Angel']);
	}
}