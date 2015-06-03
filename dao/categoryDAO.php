
<!-- ITO ANG CLASS NA NAGLALAMAN NG MGA FUNCTION, PINAGSAMASAMA KOLAHAT NG QUERY DITO PARA NASA AYOS -->


<?php

include('pdo_connect.php');

class CategoryDAO {



/*=== LIST OF ALL MAIN CATEGORY ===*/
public static function mainCategories() {
		global $db;

		try {
			
			$query = "SELECT * FROM `main_category`"; //change and put your query here

			$stmt = $db->prepare($query);
			$stmt->execute();
			if($stmt->rowCount() > 0) {
				$data = array();
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
					$data[] = $row;
				}
				return $data;
			}

		} catch (PDOException $e) {
			echo 'ERROR' . $e->getMessage();
		}
	}





	/*=== LIST OF ALL sub1 CATEGORY ===*/
public static function sub1Categories($id) {
		global $db;

		try {
			
			$query = "SELECT * FROM `sub1_category` WHERE main_category_id_fk = '$id'"; //change and put your query here

			$stmt = $db->prepare($query);
			$stmt->execute();
			if($stmt->rowCount() > 0) {
				$data = array();
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
					$data[] = $row;
				}
				return $data;
			}

		} catch (PDOException $e) {
			echo 'ERROR' . $e->getMessage();
		}
	}




	/*=== LIST OF ALL sub2 CATEGORY ===*/
public static function sub2Categories($id) {
		global $db;

		try {
			
			$query = "SELECT * FROM `sub2_category` WHERE sub1_category_id_fk = '$id'"; //change and put your query here

			$stmt = $db->prepare($query);
			$stmt->execute();
			if($stmt->rowCount() > 0) {
				$data = array();
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
					$data[] = $row;
				}
				return $data;
			}

		} catch (PDOException $e) {
			echo 'ERROR' . $e->getMessage();
		}
	}






}


 ?>