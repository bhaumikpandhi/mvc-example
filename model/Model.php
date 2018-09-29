<?php

include_once("model/Student.php");

class Model {
	public function getstudentList()
	{
		// static values
		return array(
			"Jhon" => new Student("Jhon Doe", "jhon@gmail.com", "123456"),
			"Walter" => new Student("Walter white", "walter@gmail.com", "654321"),
			"Michael" => new Student("Michael", "michael@gmail.com", "656587")
		);
	}
	
	public function getstudent($name)
	{
		// all students
		$allStudents = $this->getstudentList();
		return $allStudents[$name];
	}
	
	
}

?>