<?php
/**
 * StudentController gets model accordingly and perform different functions.
 */

/**
 * StudentController class has CRUD functionality.
 */
class StudentController extends BaseController
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
    public function __construct($typeofModel)
    {
        $this->model=parent::__construct($typeofModel);
    }
    /**
     * Student is created by putting in the information.
     * @param string $name Name
     * @param int $age Age
     * @param string $degree Degree Name
     * @return boolean
     */
    public function create($param)
    {
        if($param==NULL)
        {
            return false;
        }
        else
        {
            $this->model->create($param[0],$param[1]);
            return true;
        }
        
    }
    /**
     * All of the courses are shown or read from table.
     */
    public function read($param)
    {
        $count=$this->model->read();
        require_once Root.d_S.'app'.d_S.'views'.d_S.buttonval.d_S.'list.php';
    }
    /**
     * Updates Table
     * @param string $column1 Column name as in query Update table set column1 = newvalue where column2 = oldvalue
     * @param string $column2 Column name as in query Update table set column1 = newvalue where column2 = oldvalue
     * @param mixed $newvalue Value which is going to be set in place of old value
     * @param mixed $oldvalue Value to be replaced
     * @return boolean
     */
    public function update($param)//Update table set column1 = newvalue where column2 = oldvalue
    {
        return parent::update(update($param[0],$param[1], $param[2], $param[3]));
    }
    /**
     * Deleted the row from table.
     * @param string $column Column Name
     * @param mixed $value Value with which row to be deleted
     * @return boolean
     */
    public function delete($param)
    {
        return parent::delete($param[0], $param[1]);
    }
}

?>
