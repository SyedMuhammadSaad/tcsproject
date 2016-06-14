<?php
/**
 * Controller Factory implemented here. Making objects according to input.
 */


/**
 * Including files so controller can select which class to return
 */
include_once '../../app/controllers/teacherController.php';
include_once '../../app/controllers/studentController.php';
include_once '../../app/controllers/courseController.php';


class ControllerFactory
{
    /**
     * Factory Method implemented
     * @param string $type Type of button pressed is passed here to select controller
     * @return string|\StudentController|\TeacherController|\CourseController
     */
    public static function createController($type) 
    {
        if($type==="teacher")
        {
            return new TeacherController;//returning control to TeacherController
        }
        else if($type==="student")
        {
            return new StudentController;//returning control to StudentController
        }
        else if($type==="course")
        {
            return new CourseController;//returning control to CourseController
        }
        else
        {
            return "Wrong Type Selected";//if wrong type is seleceted echo the wrong selection
        }
    }
    
}


?>

