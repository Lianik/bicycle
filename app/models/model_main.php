<?php

class Model_Main extends Model
{
	
	public function get_data()
	{	
		$db = new PDO('mysql:host=127.0.0.1;dbname=testdb;charset=utf8', 'root');
		try {
		    $stmt = $db->query("SELECT * FROM employees");
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		} catch(PDOException $ex) {
		    echo "$ex->getMessage()";
		    die();
		}
		
		return $data;
	}

}
