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
include_once $_SESSION['Root'].'\app\controllers\courseController.php';
include_once $_SESSION['Root'].'\core\models\modelFactory.php';
include_once $_SESSION['Root'].'\app\views\layouts\default.php';
//making form and taking values
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
