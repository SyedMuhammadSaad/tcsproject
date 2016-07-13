<?php
/**
 * request.php is a wrapper class
 */

/**
 * Namespace declaring and using other namespaces
 */
namespace core\util;



/**
 * Request class is wrapper class which call further funcitonalities to run in project
 */
class Request
{
    /**
     * crud is create|read|update|delete
     * @var string 
     */
    public $action;
    /**
     * table consist of buttonvalue selected from default.php
     * @var string 
     */
    public $entity;
    /**
     * parameters to be passed when edit or add or delete selected
     * @var string 
     */
    public $parameters;
    /**
     * Contructor setting values of crud and table
     * @param string $crud
     * @param string $table
     * @return StudentController|\TeacherController|\CourseController
     */
    public function __construct() 
    {
        $this->entity=isset($_REQUEST['entity']) ? $_REQUEST['entity'] : "default";
        
        $this->action=isset($_REQUEST['action']) ? $_REQUEST['action'] : NULL;
        
        $this->parameters=isset($_REQUEST['parameter']) ? $_REQUEST['parameter'] : NULL;
    }
}