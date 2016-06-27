<?php
/**
 * BaseController impements from ControllerInterface
 */
//require_once Root.d_S.'app'.d_S.'views'.d_S.'teacher'.d_S.'list.php';
//
//require_once Root.d_S.'app'.d_S.'views'.d_S.'teacher'.d_S.'delete.php';
//require_once Root.d_S.'app'.d_S.'views'.d_S.'student'.d_S.'list.php';
//require_once Root.d_S.'app'.d_S.'views'.d_S.'student'.d_S.'edit.php';
//require_once Root.d_S.'app'.d_S.'views'.d_S.'student'.d_S.'delete.php';
//require_once Root.d_S.'app'.d_S.'views'.d_S.'course'.d_S.'list.php';
//require_once Root.d_S.'app'.d_S.'views'.d_S.'course'.d_S.'edit.php';
//require_once Root.d_S.'app'.d_S.'views'.d_S.'course'.d_S.'delete.php';
//require_once Root.d_S.'app'.d_S.'views'.d_S.'generic'.d_S.'add.php';
//define("Root",dirname(dirname(dirname(__FILE__))));
//define("d_S",DIRECTORY_SEPARATOR);
//require_once Root.d_S.'core'.d_S.'controllers'.d_S.'controllerInterface.php';
//require_once Root.d_S.'core'.d_S.'models'.d_S.'modelFactory.php';
//require_once Root.d_S.'core'.d_S.'models'.d_S.'modelInterface.php';
//require_once Root.d_S.'core'.d_S.'models'.d_S.'baseModel.php';
//require_once Root.d_S.'app'.d_S.'models'.d_S.'teacher.php';
//require_once 'C:\xampp\htdocs\TCS_Project\core\controllers\controllerInterface.php';
//require_once 'C:\xampp\htdocs\TCS_Project\core\models\modelFactory.php';
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
        return $this->model=ModelFactory::createModel($typeofModel);
    }
    function operation($opr)
    {
        if($opr=="create")
        {
            require_once Root.d_S.'app'.d_S.'views'.d_S.'generic'.d_S.'add.php';
        }
        else if($opr=="read")
        {
            $this->read(NULL);
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
    function create($param)
    {
        if($param==NULL)
        {
            return false;
        }
        else
        {
            $this->model->create($param[1],$param[0]);
            return true;
        }
        
    }
    /**
     * Read of Controller is called.
     */
    function read($param)
    {
        $this->model->read($param);
    }
    /**
     * Updates Table
     * @param string $column1 Column name as in query Update table set column1 = newvalue where column2 = oldvalue
     * @param string $column2 Column name as in query Update table set column1 = newvalue where column2 = oldvalue
     * @param mixed $newvalue Value which is going to be set in place of old value
     * @param mixed $oldvalue Value to be replaced
     * @return boolean
     */
    function update($param) 
    {
        if($param==NULL)
        {
            return false;
        }
        else
        {
            $this->model->update($param[0],$param[1], $param[2], $param[3]);
            return true;
        }
    }
    /**
     * Deleted the row from table.
     * @param string $column Column Name
     * @param mixed $value Value with which row to be deleted
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
            $this->model->delete($param[0], $param[2]);
            return true;
        }
    }
}
?>