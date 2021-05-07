<?php 

	//Constantes con directorios
	const BASE_URL = "http://localhost/tienda_virtual/";
	define("ROOT_PATH", dirname(dirname(__FILE__)));

	//Zona Horaria
	date_default_timezone_set('America/Nicaragua');

	//Conexion a la db mysql
	const DB_HOST = "localhost";
	const DB_NAME = "tienda";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "charset=utf8";

	//Delimitadores Decimal y Millar EJ. 24,12952.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo De Dolar O Moneda
	const SMONEY = "$";
	const SMONEY2 = "C$";

?>