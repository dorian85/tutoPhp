<?php

class BddHandler {
	private static $_bdd = null;

	private static $_dbname = "tutophp";
	private static $_pwd = "";
	private static $_user = "root"; 
	private static $_port = "3306";
	private static $_host = "localhost";
	private static $_driver = "mysql";

	private static function getConnectionToBdd() {
		$bdd;

		try {
			$bdd = new PDO(
				self::$_driver.":host=".self::$_host.";dbname=".self::$_dbname.";charset=utf8",
				self::$_user,
				self::$_pwd
			);
		} catch (PDOException $e) {
			$e->getMessage();
			echo "Impossible de se connecter à la base de données";
		}

		return $bdd;
	}

	public static function getBdd() {
		if (null == self::$_bdd) {
			self::$_bdd = self::getConnectionToBdd();
		}

		return self::$_bdd;
	}
}



