<?php
/**
 * BaseController impements from ControllerInterface
 */
/**
 * Namespace declared and used
 */
namespace core\controllers;
use core\controllers\ControllerInterface;
use core\models\ModelFactory;

/**
 * BaseController implements from ControllerInterface and defines all the functions
 */
class BaseController implements ControllerInterface
{
    /**
     * Sets the model according to controller
     * @var |\StudentModel|\TeacherModel|\CourseModel 
     */
    public $model;
    /**
     * Setting the modeltype required
     * @param string $typeofModel
     * @return |\StudentModel|\TeacherModel|\CourseModel
     */
    function __construct($typeofModel) 
    {
        if($typeofModel!="default" && $typeofModel!="home")
        {
            $obj=new ModelFactory;
            return $this->model=$obj->createModel($typeofModel);
        }
    }
    /**
     * Home or Default Controller ses this function
     * @param string $val home or default
     * @param mixed $buttonvalue This value is passed in case of DefaultController
     * @return boolean Returns True for checking
     */
    public function call($val,$buttonvalue = NULL) 
    {
        $controller=$val;
        require_once Root.d_S.'core'.d_S.'views'.d_S.'viewmanager.php';
        return true;
    }
    /**
     * Selects the operation and calls the view accordingly
     * @param string $opr CRUD
     * @param string $func Teacher, Student or Course
     * @return boolean Returns True for checking
     */
    function operation($opr,$func)
    {
        if($opr=="read")
        {
            $count=$this->read($func);
        }
        require_once Root.d_S.'core'.d_S.'views'.d_S.'viewmanager.php';
        return true;
    }
    /**
     * Add function calls the respective controller create function
     * @param string $tablename
     * @param array $param
     * @return boolean
     */
    function add($tablename,$param)
    {
        if($param==NULL)
        {
            return false;
        }
        else
        {
            $this->model->__set($param[1],$param[0]);
            $this->model->create("$tablename",$param[1]);
            return true;
        }
        
    }
    /**
     * Read function calls the respective controllers read function
     * @param string $tablename
     * @param array $param Null in read case
     * @return array
     */
    function read($tablename,$param = NULL)
    {
        return $this->model->read("$tablename",$param);
        
    }
    /**
     * Edit function calls the respective controllers update function
     * @param string $tablename
     * @param array $param
     * @return boolean
     */
    function edit($tablename,$param) 
    {
        if($param==NULL)
        {
            return false;
        }
        else
        {
            $this->model->__set($param[0],$param[2]);
            $this->model->__set($param[1],$param[3]);
            $this->model->update("$tablename",$param[0],$param[1]);
            return true;
        }
    }
    /**
     * Delete function calls the respective controllers delete function
     * @param string $tablename
     * @param array $param
     * @return boolean
     */
    function delete($tablename,$param) 
    {
        if($param==NULL)
        {
            return false;
        }
        else
        {
            $this->model->__set($param[0],$param[2]);
            $this->model->delete("$tablename",$param[0]);
            return true;
        }
    }
}
?>