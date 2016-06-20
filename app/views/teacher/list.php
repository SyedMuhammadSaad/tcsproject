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
include_once $_SESSION['Root'].'\core\controllers\controllerFactory.php';
/**
 * listing the elements in teacher table.
 * @param teacherController $obj Object made so function can be used
 */
function listTeacher()
{
    echo '<h4><a href="http://localhost/TCS_Project/public/index.php">Back to Index Page</a></h4>';
    $contrlrfctry=ControllerFactory::createController("teacher");
    $contrlrfctry->setModel("teacher");
    $contrlrfctry->read();
}

?>

