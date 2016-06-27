<?php
/**
 * Controller Factory implemented here. Making objects according to input.
 */

/**
 * ControllerFactory make the controller according to the parameter passed
 */
class ControllerFactory
{
    /**
     * Factory Method implemented
     * @param string $type Type of button pressed is passed here to select controller
     * @return string|\StudentController|\TeacherController|\CourseController
     */
    public static function createController($type) 
    {
        $className = ucfirst($type)."Controller";
        if(isset($type))
        {
            return new $className($type);
        }
        else if($className!="Controller")
        {
            throw new Exception("$className Not Found!");
        }
    }
}
?>

