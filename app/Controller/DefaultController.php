<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}
	/**
	 * Page de contact par défaut
	 */
	public function contact()
	{
		$this->show('default/contact');
	}
/**
	 * Page de About par défaut
	 */
	public function about()
	{
		$this->show('default/about');
	}
}