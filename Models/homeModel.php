<?php
	require_once((ROOT_PATH)."/Libraries/Core/Mysql.php");
	require_once((ROOT_PATH)."/Models/homeModel.php");
	class homeModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}
	}
?>