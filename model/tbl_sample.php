<?php 

	class tbl_sample {

		public function __construct(){
			//Really Nothing to do	
		}

		public function getAllDataInJSON(){
			$db_object = new Database(); //Config Passed Via config.php, Optional Parameters left out
			if(!$db_object->connection){
				die(mysqli_error($db_object->connection));
			}
			$query = $db_object->selectQuery("*", "sample");
			$result = $db_object->query_exec($query);
			$value_array = $db_object->fetch_array($result);

			$json_encoded_value = json_encode($value_array);

			return $json_encoded_value;
		}

	}


 ?>