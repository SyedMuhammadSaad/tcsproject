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
        New Value: <input type="text" name="newvalue"><br>
        Where: <br>
                <input type="radio" name="where" value="Name"> Name<br>
                <input type="radio" name="wherewhere" value="Age"> Age<br>
                <input type="radio" name="group1" value="Course"> Course<br>
        Old Value: <input type="text" name="oldvalue"><br>
        <input type="submit">
      </form>';
$set = filter_input(INPUT_POST, "set");
$newvalue = filter_input(INPUT_POST, "newvalue");
$where = filter_input(INPUT_POST, "where");
$oldvalue = filter_input(INPUT_POST, "oldvalue");
$contrlrfctry=new TeacherController;
$contrlrfctry->setModel("teacher");
if($set!=NULL && $newvalue!=NULL && $where!=NULL && $oldvalue!=NULL)
{
    $contrlrfctry->updateTeacher("$set", "$where", $newvalue, $oldvalue);
    $contrlrfctry->readTeacher();
}
?>