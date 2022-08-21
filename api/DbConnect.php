<?php

/**
 * Database Connection
 */
class DbConnect
{
	private $server = 'localhost';
	private $dbname = 'react_crud';
	private $user = 'abdulkader';
	private $pass = 'Safi@2020';

	public function connect()
	{
		try {
			$conn = new PDO('mysql:host=' . $this->server . ';dbname=' . $this->dbname, $this->user, $this->pass);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conn;
		} catch (\Exception $e) {
			echo "Database Error: " . $e->getMessage();
		}
	}
}
