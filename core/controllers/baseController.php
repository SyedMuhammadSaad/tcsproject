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
     * Model Name is saved here
     * @var string Name of model
     */
    public $name;
    /**
     * Setting the modeltype required
     * @param string $typeofModel
     */
    function __construct($typeofModel) 
    {
        $this->name=$typeofModel;
        if($typeofModel!="default" && $typeofModel!="home")
        {
            $obj=new ModelFactory;
            $this->model=$obj->createModel($typeofModel);
        }
    }
    /**
     * Action is performed which calls respective functions
     * @param mixed $obj obj can be default or teacher,student or course controller
     */
    function _action($obj)
    {
        if($obj->parameters!=NULL)
        {
            $crudvalue=$obj->action;
            $this->$crudvalue($obj->parameters);//basecontroller object calling generic fucntions according $crud value
            $opr=$obj->action;
            $func=$obj->entity;
            require_once Root.d_S.'core'.d_S.'views'.d_S.'viewmanager.php';
        }
        else
        {
            $this->operation($obj->action,$obj->entity);
        }
    }
    /**
     * Selects the operation and calls the view accordingly
     * @param string $opr CRUD
     * @param string $func Teacher, Student or Course
     * @return boolean Returns True for checking
     */
    function operation($opr,$func)
    {
        $controller=$func;
        if($opr=="read")
        {
            $count=$this->read($func);
        }
        require_once Root.d_S.'core'.d_S.'views'.d_S.'viewmanager.php';
        return true;
    }
    /**
     * Add function calls the respective controller create function
     * @param array $param
     * @return boolean
     */
    function add($param)
    {
        if($param==NULL)
        {
            return false;
        }
        else
        {
            $this->model->__set($param[1],$param[0]);
            $this->model->create("$this->name",$param[1]);
            return true;
        }
        
    }
    /**
     * Read function calls the respective controllers read function
     * @param array $param Null in read case
     * @return array
     */
    function read($param = NULL)
    {
        return $this->model->read("$this->name",$param);
        
    }
    /**
     * Edit function calls the respective controllers update function
     * @param array $param
     * @return boolean
     */
    function edit($param) 
    {
        if($param==NULL)
        {
            return false;
        }
        else
        {
            $this->model->__set($param[0],$param[2]);
            $this->model->__set($param[1],$param[3]);
            $this->model->update("$this->name",$param[0],$param[1]);
            return true;
        }
    }
    /**
     * Delete function calls the respective controllers delete function
     * @param array $param
     * @return boolean
     */
    function delete($param) 
    {
        if($param==NULL)
        {
            return false;
        }
        else
        {
            $this->model->__set($param[0],$param[2]);
            $this->model->delete("$this->name",$param[0]);
            return true;
        }
    }
}
?>