<?php
namespace Root\Html;
final class DatabaseConnection
{
    private static $instance;
    private $connection;

    private function __construct()
    {
			$db_info = array(
				"db_host" => "mysql2",
				"db_port" => "3306",  // now we use connection without port. 
				"db_user" => "root",
				"db_pass" => "root",
				"db_name" => "information_schema",
				"db_charset" => "UTF-8");

			try {
                echo "connect";
				$this->connection = new \PDO("mysql:host=".$db_info['db_host'].';dbname='.$db_info['db_name'], $db_info['db_user'], $db_info['db_pass']);
                echo "connect3";
                // var_dump($this->connection);

			} catch(\PDOException $error) {
				echo $error->getMessage();
			}
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}


