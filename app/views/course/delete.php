<?php

include_once 'C:\xampp\htdocs\TCS_Project\app\controllers\courseController.php';
include_once 'C:\xampp\htdocs\TCS_Project\core\models\modelFactory.php';
include_once 'C:\xampp\htdocs\TCS_Project\app\views\layouts\default.php';

echo '<form action="#" method="post">
        Column: <br>
                <input type="radio" name="set" value="courseName"> CourseName<br>
                <input type="radio" name="set" value="courseCode"> CourseCode<br>
                <br>
        Value: <input type="text" name="value"><br>
        <input type="submit">
       </form>';
$set = filter_input(INPUT_POST, "set");
$value = filter_input(INPUT_POST, "value");
$contrlrfctry=new CourseController;
$contrlrfctry->setModel("course");
if($set!=NULL && $value!=NULL)
{
    $contrlrfctry->deleteCourse($set, $value);
    $contrlrfctry->readCourse();
}
?>
