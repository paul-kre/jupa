<?php
require_once(LIB_PATH."config.php");

class MySQLDatabase {

	private $connection;
	public $last_query;

	private $real_escape_string_exists;
	private $magic_quotes_active;

	function __construct() {
		$this->openConnection();

		$this->realEscapeStringExists = function_exists("mysqli_real_escape_string"); // i.e. PHP >= v4.3.0
		$this->magicQuotesActive = get_magic_quotes_gpc();
	}

	public function openConnection() {
		$this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
		if (!$this->connection) {
			die("Database connection failed: " . mysqli_error($this->connection));
		} else {
			$dbSelect = mysqli_select_db($this->connection, DB_NAME);
			if (!$dbSelect) {
				die("Database selection failed: " . mysqli_error($this->connection));
			}
		}
	}

	public function closeConnection() {
		if (isset($this->connection)) {
			mysqli_close($this->connection);
			unset($this->connection);
		}
	}

	public function query($sql) {
		$last_query = $sql;
		$result = mysqli_query($this->connection, $sql);
		$this->confirmQuery($result, $sql);
		return $result;
	}

	public function escapeValue($value) {
		if ($this->real_escape_string_exists) { // PHP v4.3.0 or higher
			// undo any magic quote effects so mysqli_real_escape_string_can do the work
			if ($this->magic_quotes_active) { $value = stripslashes($value); }
			$value = mysqli_real_escape_string($this->connection, $value);
		} else {
			// if magic quotes aren't already on then add slashes manually
			if (!$this->magic_quotes_active) { $value = addslashes($value); }
			// if magic quotes are active, then the slashes already exist
		}
		return $value;
	}

	public function fetchArray($result_set) {
		return mysqli_fetch_array($result_set);
	}

	public function numRows($result_set) {
		return mysqli_num_rows($result_set);
	}

	public function insertId() {
		return mysqli_insert_id($this->connection);
	}

	public function affectedRows() {
		return mysqli_affected_rows($this->connection);
	}

	private function confirmQuery($result, $sql) {
		if (!$result) {
			die("Database query failed: " . mysqli_connect_error() . $sql);
		}
	}

}

$db = new MySQLDatabase();