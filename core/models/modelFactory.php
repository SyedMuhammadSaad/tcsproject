<?php

include_once '../../app/models/course.php';
include_once '../../app/models/student.php';
include_once '../../app/models/teacher.php';

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
