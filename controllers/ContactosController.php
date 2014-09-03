<?php

class ContactosController {

	public function indexAction()
	{
		return new View('contactos');		
	}

	public function cityAction($city)
	{
		exit('contactos ' . $city);
	}
}