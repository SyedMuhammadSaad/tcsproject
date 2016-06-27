<?php
/**
 * TeacherController gets model accordingly and perform different functions.
 */
namespace app\controllers;
use core\controllers\BaseController;
/**
 * Including modelFactory to create model according to teacher.
 */
//require_once 'C:\xampp\htdocs\TCS_Project\core\controllers\baseController.php';
/**
 * TeacherController class has CRUD functionality.
 */
class TeacherController extends BaseController
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
     * Teacher is created by putting in the information.
     * @param string $name Name
     * @param int $age Age
     * @param string $course Course Name
     * @return boolean
     */
    public function create($tablename,$param)
    {
        if($param==NULL)
        {
            return false;
        }
        else
        {
            $this->model->create("$tablename",$param[0],$param[1]);
            return true;
        }
        
    }
    /**
     * All of the courses are shown or read from table.
     */
    public function read($tablename,$param)
    {
        $count=$this->model->read("$tablename");
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
    public function update($tablename,$param)//Update table set column1 = newvalue where column2 = oldvalue
    {
        return parent::update("$tablename",$param[0],$param[1], $param[2], $param[3]);
    }
    /**
     * Deleted the row from table.
     * @param string $column Column Name
     * @param mixed $value Value with which row to be deleted
     * @return boolean
     */
    public function delete($tablename,$param)
    {
        return parent::delete("$tablename",$param[0], $param[1]);
    }
}
//  $obj=new TeacherController("teacher");
//$obj->update("Age", "Name", 30, "Aamir");
?>