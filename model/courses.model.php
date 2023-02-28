<?php

require_once "connection.php";

class ModelCourses{
	static public function mdlAddCourse($table, $data){
        $course_id = (new Connection)->connect()->prepare("SELECT CONCAT('C', LPAD((count(id)+1),4,'0')) as gen_id  FROM courses FOR UPDATE");

            $course_id->execute();
		    $courseid = $course_id -> fetchAll(PDO::FETCH_ASSOC);

		$stmt = (new Connection)->connect()->prepare("INSERT INTO $table(subid, sname, unit, tname, phone) VALUES (:subid, :sname, :unit, :tname, :phone)");

		$stmt->bindParam(":subid", $courseid[0]['gen_id'], PDO::PARAM_STR);
		$stmt->bindParam(":sname", $data["sname"], PDO::PARAM_STR);
		$stmt->bindParam(":unit", $data["unit"], PDO::PARAM_STR);
		$stmt->bindParam(":tname", $data["tname"], PDO::PARAM_STR);
		$stmt->bindParam(":phone", $data["phone"], PDO::PARAM_STR);


		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}
		$stmt->close();
		$stmt = null;

	}

	static public function mdlShowCourses(){
		$stmt = (new Connection)->connect()->prepare("SELECT * FROM courses ORDER BY sname");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}	

	static public function mdlEditCourse($table, $data){
		$stmt = (new Connection)->connect()->prepare("UPDATE $table SET subid = :subid, sname = :sname, unit = :unit, tname = :tname, phone = :phone WHERE id = :id");

		$stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);
		$stmt->bindParam(":subid", $data["subid"], PDO::PARAM_STR);
		$stmt->bindParam(":sname", $data["sname"], PDO::PARAM_STR);
		$stmt->bindParam(":unit", $data["unit"], PDO::PARAM_STR);
		$stmt->bindParam(":tname", $data["tname"], PDO::PARAM_STR);
		$stmt->bindParam(":phone", $data["phone"], PDO::PARAM_STR);

		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;

	}		
}