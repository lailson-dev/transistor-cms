<?php

require_once 'env.php';

class Connection
{
	private static $instance;

	public static function getInstance()
	{
		if(!isset(self::$instance)) {
			try {
				self::$instance = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME.';charset=utf8', DBUSER, DBPASS);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);				
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		}

		return self::$instance;
	}

	public static function prepare($sql)
	{
		return self::getInstance()->prepare($sql);
	}

}