<?php

include_once 'C:\xampp\htdocs\TCS_Project\app\controllers\studentController.php';
include_once 'C:\xampp\htdocs\TCS_Project\core\models\modelFactory.php';
include_once 'C:\xampp\htdocs\TCS_Project\app\views\layouts\default.php';

echo '<form action="#" method="post">
        Column: <br>
                <input type="radio" name="set" value="Name"> Name<br>
                <input type="radio" name="set" value="Age"> Age<br>
                <input type="radio" name="set" value="Degree"> Degree<br>
                <br>
        Value: <input type="text" name="value"><br>
        <input type="submit">
       </form>';
$set = filter_input(INPUT_POST, "set");
$value = filter_input(INPUT_POST, "value");
$contrlrfctry=new StudentController;
$contrlrfctry->setModel("student");
if($set!=NULL && $value!=NULL)
{
    $contrlrfctry->deletestudent($set, $value);
    $contrlrfctry->readstudent();
}
?>
