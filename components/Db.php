<?php

Class Db {

	public static function getConnection()
	{
		$paramsPath = ROOT.'/config/db_params.php';
		$params = include($paramsPath);
		try {
		$dsn = "mysql:host={$params['host']};dbname={$params['dbname']};charset=utf8;";

		$db = new PDO($dsn, $params['user'], $params['password']);

		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}
		return $db;
	}


		}
