<?php
/**
 * Teacher list.php file
 */

if(session_status()!=PHP_SESSION_ACTIVE)
        {
            session_start();
        }

/**
 * Including files
 */
include_once $_SESSION['Root'].'\app\controllers\teacherController.php';
/**
 * listing the elements in teacher table.
 * @param teacherController $obj Object made so function can be used
 */
function listTeacher($obj)
{
    echo '<h4><a href="http://localhost/TCS_Project/public/index.php">Back to Index Page</a></h4>';
    $obj->readTeacher();
}

?>
