<?php

include_once 'C:\xampp\htdocs\TCS_Project\app\controllers\teacherController.php';
include_once 'C:\xampp\htdocs\TCS_Project\core\models\modelFactory.php';
include_once 'C:\xampp\htdocs\TCS_Project\app\views\layouts\default.php';

echo '<form action="#" method="post">
        Column: <br>
                <input type="radio" name="set" value="Name"> Name<br>
                <input type="radio" name="set" value="Age"> Age<br>
                <input type="radio" name="set" value="Course"> Course<br>
                <br>
        Value: <input type="text" name="value"><br>
        <input type="submit">
       </form>';
$set = filter_input(INPUT_POST, "set");
$value = filter_input(INPUT_POST, "value");
$contrlrfctry=new TeacherController;
$contrlrfctry->setModel("teacher");
if($set!=NULL && $value!=NULL)
{
    $contrlrfctry->deleteTeacher($set, $value);
    $contrlrfctry->readTeacher();
}
?>

