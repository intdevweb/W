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
		//c'est ici que l'on pourrait faire des requetes sql
	}
	/**
	 * Page de contact par défaut
	 */
	public function contact()
	{
		$this->show('default/contact');
		//c'est ici que l'on pourrait faire des requetes sql
	}
/**
	 * Page de About par défaut
	 */
	public function about()
	{
		$this->show('default/about');
		//c'est ici que l'on pourrait faire des requetes sql
	}
}