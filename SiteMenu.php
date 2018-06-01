<?php

class SiteMenu 
{
	public $header_menu;
	public $footer_menu;
	private $connection;

	function __construct($conn)
	{
		$this->header_menu = array();
		$this->footer_menu = array();
		$this->connection = $conn;

		$sql = "SELECT * FROM site_menu WHERE menu_location = 0 ORDER BY menu_order ASC";

		if ($result = $this->connection->query($sql)) {
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$this->header_menu[] = $row;
				}
			}
		}

		$sql = "SELECT * FROM site_menu WHERE menu_location = 1 ORDER BY menu_order ASC";

		if ($result = $this->connection->query($sql)) {
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$this->footer_menu[] = $row;
				}
			}
		}  
	}

	public function fetchMenus()
	{
		$this->header_menu = array();
		$this->footer_menu = array();

		$sql = "SELECT * FROM site_menu WHERE menu_location = 0 ORDER BY menu_order ASC";

		if ($result = $this->connection->query($sql)) {
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$this->header_menu[] = $row;
				}
			}
		}

		$sql = "SELECT * FROM site_menu WHERE menu_location = 1 ORDER BY menu_order ASC";

		if ($result = $this->connection->query($sql)) {
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$this->footer_menu[] = $row;
				}
			}
		}
	}

	public function deleteMenu($menu_id)
	{
		$sql = "DELETE FROM site_menu WHERE menu_id = '$menu_id'";

		if ($this->connection->query($sql)) {
			return true;
		} else {
			return false;
		}
		
	}

	public function changeMenuOrder($menu_id, $order)
	{
		$sql = "UPDATE site_menu SET menu_order = '$order' 
				WHERE menu_id = '$menu_id'";

		if ($this->connection->query($sql)) {
			return true;
		} else {
			return false;
		}
		
	}

	public function updateMenu($menu_id, $menu_name, $menu_url)
	{
		$sql = "UPDATE site_menu SET menu_name = '$menu_name', menu_url = '$menu_url'
				WHERE menu_id = '$menu_id'";

		if ($this->connection->query($sql)) {
			return true;
		} else {
			return false;
		}
		
	}

	public function addMenu($menu_name, $menu_url, $menu_location)
	{
		$sql = "INSERT INTO site_menu 
				(menu_name, menu_url, menu_location)
				VALUES
				('$menu_name', '$menu_url', '$menu_location')";

		if ($this->connection->query($sql)) {
			return true;
		} else {
			return false;
		}
		
	}

	public function getMenuByID($menu_id)
	{

		$sql = "SELECT * FROM site_menu WHERE menu_id = '$menu_id'";

		if ($result = $this->connection->query($sql)) {
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				return $row;
			} 
		}
	}

}


?>