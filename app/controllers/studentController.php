<?php
/**
 * StudentController gets model accordingly and perform different functions.
 */
/**
 * Namespace used and declared
 */
namespace app\controllers;
use core\controllers\BaseController;
/**
 * StudentController class has CRUD functionality.
 */
class StudentController extends BaseController
{
    /**
     * Sets the model according to controller
     * @var |\StudentModel|\TeacherModel|\CourseModel 
     */
    private $model;
    /**
     * Parent is setting the modeltype required
     * @param string $typeofModel
     * @return |\StudentModel|\TeacherModel|\CourseModel
     */
    public function __construct($typeofModel)
    {
        $this->model=parent::__construct($typeofModel);
    }
    /**
     * Create function calls the respective controller create function
     * @param string $tablename
     * @param array $param
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
     * Read function calls the respective controllers read function
     * @param string $tablename
     * @param array $param Null in read case
     * @return array
     */
    public function read($tablename,$param)
    {
        return $this->model->read("$tablename");
    }
    /**
     * Update function calls the respective controllers update function
     * @param string $tablename
     * @param array $param
     * @return boolean
     */
    public function update($tablename,$param)
    {
        return parent::update("$tablename",$param[0],$param[1], $param[2], $param[3]);
    }
    /**
     * Delete function calls the respective controllers delete function
     * @param string $tablename
     * @param array $param
     * @return boolean
     */
    public function delete($tablename,$param)
    {
        return parent::delete("$tablename",$param[0], $param[1]);
    }
}
?>