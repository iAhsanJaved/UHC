<?php

class SiteInfo 
{
	public $info;
	private $connection;

	function __construct($conn)
	{
		$this->info = array();
		$this->connection = $conn;

		$sql = "SELECT * FROM site_info";

		if ($result = $this->connection->query($sql)) {
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$this->info[$row['info_title']] = $row['info_value'];
				}
			}
		} 
	}

	public function fetchInfo()
	{
		$this->info = array();

		$sql = "SELECT * FROM site_info";

		if ($result = $this->connection->query($sql)) {
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$this->info[$row['info_title']] = $row['info_value'];
				}
			}
		}
	}

	public function updateInfo($info_title, $info_value)
	{
		$sql = "UPDATE site_info SET info_value = '$info_value' WHERE info_title = '$info_title'";

		if ($this->connection->query($sql)) {
			return true;
		} else {
			return false;
		}
	}
}


?>