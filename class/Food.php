<?php 

class Food {

	private $foodItemsTable = "food_items";
	private $conn;


	public function __construct($db)
	{
		$this->conn = $db;
		
	}

	public function itemList(){

		$stmt = $this->conn->prepare("SELECT id,name,price,description,status FROM food_items");
		$stmt->execute();
		$result = $stmt->get_result();
		return $result;
	}
	
}

?>