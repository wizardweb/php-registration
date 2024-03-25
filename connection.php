<?php
class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'registration2';
    private $conn;

    public function __construct() {
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
           if ($this->conn->connect_error) {
				// If there's an error, print an error message or handle it as needed
            	$response = array('success' => false, 'errors' => 'Error Database Connection', 'database' => 'false');

			echo json_encode($response);
			} 
        } catch (Exception $e) {
            // Database connection error
        	$response = array('success' => false, 'errors' => 'Error Database Connection', 'database' => 'false');

			echo json_encode($response);
            exit; // Exit the script
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        $this->conn->close();
    }
}
?>
