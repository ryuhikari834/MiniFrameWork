<?php 
	require_once( dirname(dirname(__FILE__))."/Libraries/Core/Controllers.php");
	require_once( dirname(dirname(__FILE__))."/Libraries/Core/Views.php");
	class Errors extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function notFound()
		{
			$this->views->getView($this,"error");
		}
	}
	$notFound = new Errors();
	$notFound->notFound();
?>