<?php
/**
 * BaseController impements from ControllerInterface
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
     * Gets the type of model to use the parameters accordingly.
     * @var modelFactory 
     */
    private $model;
    /**
     * Set value of model
     * @param string $typeofModel
     */
    function __construct($typeofModel) 
    {
        $obj=new ModelFactory;
        return $this->model=$obj->createModel($typeofModel);
    }
    function operation($opr,$func)
    {
        if($opr=="create")
        {
            require_once Root.d_S.'app'.d_S.'views'.d_S.'generic'.d_S.'add.php';
        }
        else if($opr=="read")
        {
            $this->read($func,NULL);
        }
        else if($opr=="update")
        {
            require_once Root.d_S.'app'.d_S.'views'.d_S.buttonval.d_S.'edit.php';
        }
        else if($opr=="delete")
        {
            require_once Root.d_S.'app'.d_S.'views'.d_S.buttonval.d_S.'delete.php';
        }
    }
    function create($tablename,$param)
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
     * Read of Controller is called.
     */
    function read($tablename,$param)
    {
        $this->model->read("$tablename",$param);
    }
    /**
     * Updates Table
     * @param string $column1 Column name as in query Update table set column1 = newvalue where column2 = oldvalue
     * @param string $column2 Column name as in query Update table set column1 = newvalue where column2 = oldvalue
     * @param mixed $newvalue Value which is going to be set in place of old value
     * @param mixed $oldvalue Value to be replaced
     * @return boolean
     */
    function update($tablename,$param) 
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
     * Deleted the row from table.
     * @param string $column Column Name
     * @param mixed $value Value with which row to be deleted
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