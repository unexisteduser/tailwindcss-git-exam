<?php
require_once "../controllers/courses.controller.php";
require_once "../models/courses.model.php";
class AjaxCourse{
    public $subid;
    public function ajaxGetCourse(){
      $item = "subid";
      $value = $this->subid;
      $answer = (new ControllerCourse)->ctrShowCourse($item, $value);
      echo json_encode($answer);
    }
}
 
if(isset($_POST["subid"])){
  $getCourse = new AjaxCourse();
  $getCourse -> subid = $_POST["subid"];
  $getCourse -> ajaxGetCourse();
}