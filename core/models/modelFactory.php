<?php
/**
 * modelFactory makes the model from course,student or teacher
 */
if(session_status()!=PHP_SESSION_ACTIVE)
        {
            session_start();
        }

/**
 * Including the models
 */
include_once $_SESSION['Root'].'\app\models\course.php';
include_once $_SESSION['Root'].'\app\models\student.php';
include_once $_SESSION['Root'].'\app\models\teacher.php';

/**
 * ModelFactory making the model according to they typeofModel passed.
 */
class ModelFactory
{
    /**
     * Factory method of model return model
     * @param string $type $type is passed to createModel factory to return model
     * @return string|\StudentModel|\TeacherModel|\CourseModel
     */
    public static function createModel($type)
    {
        if($type==="teacher")
        {
            return new TeacherModel;
        }
        else if($type==="student")
        {
            return new StudentModel;
        }
        else if($type==="course")
        {
            return new CourseModel;
        }
        else
        {
            return "Wrong model selected";
        }
    }
}

?>