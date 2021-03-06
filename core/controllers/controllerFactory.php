<?php
/**
 * Controller Factory implemented here. Making objects according to input.
 */
namespace core\controllers;
/**
 * ControllerFactory make the controller according to the parameter passed
 */
class ControllerFactory
{
    /**
     * Factory Method implemented
     * @param string $type Type of button pressed is passed here to select controller
     * @return \core\controllers\className Returns StudentController or TeacherController or CourseController or HomeController or DefaultController
     */
    public static function createController($type='default') 
    {
        if(isset($type))
        {
            if($type!="default")
            {
                $className = 'app'.d_S.'controllers'.d_S.ucfirst($type)."Controller";

            }
            else
            {
                $className = 'core'.d_S.'controllers'.d_S.ucfirst($type)."Controller";

            }
            return new $className($type);
        }
        
        else if($className=="Controller")//if no controller is set
        {
            echo "$className Not Found!";
        }
    }
}
?>

