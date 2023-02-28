<?php
require_once "../controllers/courses.controller.php";
require_once "../models/courses.model.php";

class saveCourse{
  public $trans_type; 

  public $sname;
  public $subid;
  public $tname;
  public $unit;
  public $cperson;

  public function saveCourseRecord(){
    $trans_type = $this->trans_type;

  	$sname = $this->sname;
  	$subid = $this->subid;
    $tname = $this->tname;
  	$phone = $this->unit;
    $cperson = $this->cperson;

    $data = array("sname"=>$sname,
                  "subid"=>$subid,
                  "tname"=>$tname,
                  "unit"=>$unit,
                  "cperson"=>$cperson);

    if ($trans_type == 'New'){
      $answer = (new ControllerCourse)->ctrAddCourse($data);
    }else{
      $answer = (new ControllerCourse)->ctrEditCourse($data);
    }

  }
}

$save_course = new saveCourse();
$save_course -> trans_type = $_POST["trans_type"];

$save_course -> sname = $_POST["sname"];
$save_course -> subid = $_POST["subid"];
$save_course -> tname = $_POST["tname"];
$save_course -> phone = $_POST["phone"];
$save_course -> cperson = $_POST["cperson"];

$save_course -> saveCourseRecord();