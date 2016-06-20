<?php
/**
 * BaseController impements from ControllerInterface
 */

/**
 * Including files
 */
include_once $_SESSION['Root'].'\core\models\modelFactory.php';
require_once $_SESSION['Root'].'\core\controllers\controllerInterface.php';

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
    function setModel($typeofModel) 
    {
        return $this->model=ModelFactory::createModel($typeofModel);
    }
    /**
     * Updates Table
     * @param string $column1 Column name as in query Update table set column1 = newvalue where column2 = oldvalue
     * @param string $column2 Column name as in query Update table set column1 = newvalue where column2 = oldvalue
     * @param mixed $newvalue Value which is going to be set in place of old value
     * @param mixed $oldvalue Value to be replaced
     * @return boolean
     */
    function update($column1, $column2, $newvalue, $oldvalue) 
    {
        if($column1==NULL || $column2==NULL || $newvalue==NULL || $oldvalue==NULL)
        {
            return false;
        }
        else
        {
            $this->model->update($column1,$column2, $newvalue, $oldvalue);
            return true;
        }
    }
    /**
     * Deleted the row from table.
     * @param string $column Column Name
     * @param mixed $value Value with which row to be deleted
     * @return boolean
     */
    function delete($column, $value) 
    {
        if($column==NULL || $value==NULL)
        {
            return false;
        }
        else
        {
            $this->model->delete($column, $value);
            return true;
        }
    }
}

?>