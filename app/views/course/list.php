<?php
/**
 * Course list.php file
 */

if(session_status()!=PHP_SESSION_ACTIVE)
        {
            session_start();
        }

/**
 * Including files
 */
include_once $_SESSION['Root'].'\app\controllers\courseController.php';
/**
 * listing the elements in course table.
 * @param courseController $obj Object made so function can be used
 */
function listCourse($obj)
{
    echo '<h4><a href="http://localhost/TCS_Project/public/index.php">Back to Index Page</a></h4>';
    $obj->readCourse();
}

?>