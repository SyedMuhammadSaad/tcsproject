<?php
/**
 * Teacher edit.php file
 */
echo '<h4><a href="http://localhost/TCS_Project/public/index.php">Back to Index Page</a></h4>';
if(session_status()!=PHP_SESSION_ACTIVE)
        {
            session_start();
        }

/**
 * Including files
 */
include_once $_SESSION['Root'].'\app\controllers\teacherController.php';
include_once $_SESSION['Root'].'\core\models\modelFactory.php';
include_once $_SESSION['Root'].'\app\views\layouts\default.php';
//making form and taking values
echo '<form action="#" method="post">
        Column: <br>
                <input type="radio" name="set" value="Name"> Name<br>
                <input type="radio" name="set" value="Age"> Age<br>
                <input type="radio" name="set" value="Course"> Course<br>
                <br>
        New Value: <input type="text" name="newvalue"><br>
        Where: <br>
                <input type="radio" name="where" value="Name"> Name<br>
                <input type="radio" name="where" value="Age"> Age<br>
                <input type="radio" name="where" value="Course"> Course<br>
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