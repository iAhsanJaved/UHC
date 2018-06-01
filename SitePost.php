<?php


class SitePost 
{
	public $posts;
	private $connection;

	function __construct($conn)
	{
		$this->connection = $conn; 
	}

	public function fetchPosts()
	{
		$sql = "SELECT * FROM site_posts";

		if ($result = $this->connection->query($sql)) {
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$this->posts[] = $row;
				}
			}
		}
	}

}


?>