<?php
include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function home()
	{
		if (!isset($_GET['student']))
		{
			// return specific student
			$students = $this->model->getstudentList();
			include 'view/studentlist.php';
		}
		else
		{
			// return all students
			$student = $this->model->getstudent($_GET['student']);
			include 'view/viewstudent.php';
		}
	}
}

?>