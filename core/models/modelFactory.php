<?php
/**
 * modelFactory makes the model from course,student or teacher
 */
/**
 * Namespace declared
 */
namespace core\models;
/**
 * ModelFactory making the model according to they typeofModel passed.
 */
class ModelFactory
{
    /**
     * Factory method of model return model
     * @param string $type $type is passed to createModel factory to return model
     * @return \core\models\className Returns StudentModel or TeacherModel or CourseModel
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
