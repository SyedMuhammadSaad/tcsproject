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
    private $model;
    /**
     * Setting the modeltype required
     * @param string $typeofModel
     * @return |\StudentModel|\TeacherModel|\CourseModel
     */
    function __construct($typeofModel) 
    {
        $obj=new ModelFactory;
        return $this->model=$obj->createModel($typeofModel);
    }
    /**
     * Selects the operation and calls the view accordingly
     * @param string $opr
     * @param string $func
     */
    function operation($opr,$func)
    {
        $modl=$this->model;
        if($opr=="add")//if add then calls the generic add view
        {
            require_once Root.d_S.'app'.d_S.'views'.d_S.'generic'.d_S.$opr.'.php';
        }
        else//else calls the respective views
        {
            if($opr=="list")
            {
                $count=$this->read($func,NULL);
            }
            require_once Root.d_S.'app'.d_S.'views'.d_S.buttonval.d_S.$opr.'.php';
        }
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
            $this->model->create("$tablename",$param[1],$param[0]);
            return true;
        }
        
    }
    /**
     * Read function calls the respective controllers read function
     * @param string $tablename
     * @param array $param Null in read case
     * @return array
     */
    function read($tablename,$param)
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
            $this->model->update("$tablename",$param[0],$param[1], $param[2], $param[3]);
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
            $this->model->delete("$tablename",$param[0], $param[2]);
            return true;
        }
    }
}
?>