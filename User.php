<?php

class User
{
	public $users;
	private $connection;

	function __construct($conn)
	{
		$this->users = array();
		$this->connection = $conn;
	}

	public function fetchUsers()
	{
		$this->users = array();

		$sql = "SELECT * FROM users INNER JOIN user_type ON users.user_type_id = user_type.user_type_id";

		if ($result = $this->connection->query($sql)) {
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$this->users[] = $row;
				}
			}
		}
	}
	
	public function getUserByID($user_id)
	{

		$sql = "SELECT * FROM users INNER JOIN user_type ON users.user_type_id =  		user_type.user_type_id WHERE user_id = '$user_id'";

		if ($result = $this->connection->query($sql)) {
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				return $row;
			} 
		}
	}
	
	public function deleteUser($user_id)
	{
		$sql = "DELETE FROM users WHERE user_id = '$user_id'";

		if ($this->connection->query($sql)) {
			return true;
		} else {
			return false;
		}
		
	}

	public function updateUser($user_id, $username, $password, $email, $name, $user_type_id)
	{
		$password = password_hash($password, PASSWORD_DEFAULT);
		
		$sql = "UPDATE users SET username = '$username', password = '$password', email = '$email', name = '$name', user_type_id = '$user_type_id' WHERE user_id = '$user_id'";

		if ($this->connection->query($sql)) {
			return true;
		} else {
			return false;
		}
		
	}

	public function addUser($username, $password, $email, $name, $user_type_id)
	{
		$password = password_hash($password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO users (username, password, email, name, user_type_id) VALUES ('$username', '$password', '$email', '$name', '$user_type_id')";

		if ($this->connection->query($sql)) {
			return true;
		} else {
			return false;
		}
		
	}

}