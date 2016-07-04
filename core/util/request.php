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
    public $crud;
    /**
     * table consist of buttonvalue selected from default.php
     * @var string 
     */
    public $table;
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
    public function __construct($crud,$table) 
    {
        $this->crud=$crud;
        $this->table=$table;
        $this->parameters=NULL;
    }
}