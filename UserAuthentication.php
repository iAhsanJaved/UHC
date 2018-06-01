<?php

class UserAuthentication 
{
	private $connection;

	function __construct($conn)
	{
		$this->connection = $conn;
	}

	public function auth($username, $password)
	{

		if ($stmt = $this->connection->prepare("SELECT * FROM users 
				WHERE username = ?")) {
			// Bind the variables to the parameter as strings. 
	    	$stmt->bind_param("s", $username);
			
			// Execute the statement.
	    	$stmt->execute();

	    	// Getting result.
	    	$result = $stmt->get_result();

			// Close the prepared statement.
    		$stmt->close();
	    	
	    	if ($result->num_rows == 1) {
	    		
	    		$row = $result->fetch_assoc();

	    		// Verify Password
				if (password_verify($password, $row['password'])) {

					session_start();
					$_SESSION['Auth'] = array(
						'user_id' => $row['user_id'],
						'user_type_id' => $row['user_type_id']
					);

					// Connection close
					$this->connection->close();

					return true;
				} 
	    	}
	    
		}
		
		return false;
	}

	public function isAuthenticated()
	{
		session_start();
		if (isset($_SESSION['Auth'])) {
			return true;
		} else {
			return false;
		}
	}
	public function logout()
	{
		session_start();
		if (isset($_SESSION['Auth'])) {
			unset($_SESSION['Auth']);
		}
	}
}


?>