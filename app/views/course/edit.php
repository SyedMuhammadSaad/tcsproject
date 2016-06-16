<?php

include_once 'C:\xampp\htdocs\TCS_Project\app\controllers\courseController.php';
include_once 'C:\xampp\htdocs\TCS_Project\core\models\modelFactory.php';
include_once 'C:\xampp\htdocs\TCS_Project\app\views\layouts\default.php';

echo '<form action="#" method="post">
        Column: <br>
                <input type="radio" name="set" value="courseName"> CourseName<br>
                <input type="radio" name="set" value="courseCode"> CourseCode<br>
                <br>
        New Value: <input type="text" name="newvalue"><br>
        Where: <br>
                <input type="radio" name="where" value="courseName"> CourseName<br>
                <input type="radio" name="where" value="courseCode"> CourseCode<br>
        Old Value: <input type="text" name="oldvalue"><br>
        <input type="submit">
      </form>';
$set = filter_input(INPUT_POST, "set");
$newvalue = filter_input(INPUT_POST, "newvalue");
$where = filter_input(INPUT_POST, "where");
$oldvalue = filter_input(INPUT_POST, "oldvalue");
$contrlrfctry=new CourseController;
$contrlrfctry->setModel("course");
if($set!=NULL && $newvalue!=NULL && $where!=NULL && $oldvalue!=NULL)
{
    $contrlrfctry->updateCourse("$set", "$where", $newvalue, $oldvalue);
    $contrlrfctry->readCourse();
}
?>