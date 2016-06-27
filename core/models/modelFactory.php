<?php
/**
 * modelFactory makes the model from course,student or teacher
 */
namespace core\models;
//require_once Root.d_S.'app'.d_S.'models'.d_S.'teacher.php';
//require_once 'C:\xampp\htdocs\TCS_Project\app\models\teacher.php';
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
        $className = 'app'.d_S.'models'.d_S.ucfirst($type)."Model";
        if($className!=NULL)
        {
            return new $className;
        }
        else
        {
            echo "$className Not Found!";
        }
    }
}

?>
