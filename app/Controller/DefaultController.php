<?php
	
	namespace Controller;

	use \W\Controller\Controller;

	class DefaultController extends Controller
	{

		public function home()
		{
			echo "home !";
		}

		public function about()
		{
			echo "about !";	
			$postManager = new \Manager\PostManager();
			var_dump($postManager);
		}

	}