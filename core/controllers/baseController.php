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
use core\views\ViewManager;

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
     */
    function __construct($typeofModel) 
    {
        if($typeofModel!="default")
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
        require_once Root.d_S.'app'.d_S.'config.php';
        global $dbcon;
        $action=$obj->action;
        $entity=$obj->entity;
        $viewmanagerparameters['layout']=$dbcon['Layout'];
        $viewmanagerparameters['action']=$action;
        $viewmanagerparameters['entity']=$entity;
        $viewmanagerparameters['model']=$this->model;
        $viewmanagerparameters['error']=false;
        if(($action != NULL || $action == 'read') && $entity == 'default')
        {
            $error=true;
            $viewmanagerparameters['error']=$error;
            ViewManager::display($viewmanagerparameters);
        }
        else if($obj->parameters!=NULL)
        {
            $crudvalue=$obj->action;
            $this->$crudvalue($obj->parameters);//basecontroller object calling generic fucntions according $crud value
            if(($obj->parameters[2]==NULL  || !isset($obj->parameters[0])) && !isset($obj->parameters[1]))
            {
                $error=true;
                $viewmanagerparameters['error']=$error;
            }
            ViewManager::display($viewmanagerparameters);
        }
        else
        {
            $controller=$obj->entity;
            $viewmanagerparameters['controller']=$controller;
            if($action=="read")
            {
                $count=$this->read($entity);
                $viewmanagerparameters['count']=$count;
            }
            ViewManager::display($viewmanagerparameters);
        }
    }
    /**
     * Add function calls the respective controller create function
     * @param array $param
     * @return boolean
     */
    function add($param)
    {
        if($param[2]==NULL || $param[0]==NULL )
        {
            return false;
        }
        else
        {
            $this->model->__set($param[2],$param[0]);
            $this->model->create($param);
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
        return $this->model->read($param);
        
    }
    /**
     * Edit function calls the respective controllers update function
     * @param array $param
     * @return boolean
     */
    function edit($param) 
    {
        if($param[2]==NULL || $param[3]==NULL || !isset($param[0]) || !isset($param[1]))
        {
            return false;
        }
        else
        {
            $this->model->__set($param[0],$param[2]);
            $this->model->__set($param[1],$param[3]);
            $this->model->update($param);
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
        if($param[2]==NULL || !isset($param[0]))
        {
            return false;
        }
        else
        {
            $this->model->__set($param[0],$param[2]);
            $this->model->delete($param);
            return true;
        }
    }
}
?>