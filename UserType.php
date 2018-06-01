<?php

class UserType
{
	public $user_type;
	private $connection;

	function __construct($conn)
	{
		$this->user_type = array();
		$this->connection = $conn;

		$sql = "SELECT * FROM user_type";

		if ($result = $this->connection->query($sql)) {
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$this->user_type[] = $row;
				}
			}
		}
	}


}