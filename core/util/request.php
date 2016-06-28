<?php
/**
 * request.php is a wrapper class
 */

/**
 * Namespace declaring and using other namespaces
 */
namespace core\util;
use core\controllers\ControllerFactory;
use core\controllers\BaseController;

/**
 * Request class is wrapper class which call further funcitonalities to run in project
 */
class Request
{
    /**
     * crud is create|read|update|delete
     * @var string 
     */
    private $crud;
    /**
     * table consist of buttonvalue selected from default.php
     * @var string 
     */
    private $table;
    /**
     * Contructor setting values of crud and table
     * @param string $crud
     * @param string $table
     */
    public function __construct($crud,$table) 
    {
        $this->crud=$crud;
        $this->table=$table;
        $contrlfactoryobj= new ControllerFactory;
        $contrlfactory=$contrlfactoryobj->createController($this->table);//making object of specific controller
        if(isset($contrlfactory))
        {
            $contrlfactory->operation($crud,$table);//calling operation which will call related view file
        }
    }
    /**
     * wrapper function wraps up the main project working
     */
    public function wrappper()
    {
        $param=$_POST['parameter'];//no. of inputs differ in differne values. $param is an array
        $modname=$_POST['modelname'];//storing modelname
        $crud=$_POST['crudname'];//storing functionality name
        $obj= new BaseController("$modname");
        $obj->$crud($modname,$param);//basecontroller object calling generic fucntions according $crud value
    }
}