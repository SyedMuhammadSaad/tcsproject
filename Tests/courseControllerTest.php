<?php
/**
 * Testing courseController
 */


/**
 * Testing courseController and crud functionalities
 */
class StudentControllerTest extends PHPUnit_Framework_TestCase
{
    /**
     * Returning array of array to test testCreateCourse
     * @return array
     */
    public function providertestCreateCourse()
    {
        return array(array("Advance Mathematics","14401MA"),array("","14401MA"));
    }
    /**
     * Testing CreateCourse
     * @param string $courseName
     * @param string $courseCode
     * @dataProvider providertestCreateCourse
     */
    public function testCreateCourse($courseName,$courseCode)
    {
        $obj=new CourseController;
        $obj->setModel("course");
        $this->assertEquals(true,$obj->createCourse($courseName, $courseCode));
    }
    /**
     * Returning array of array to test testUpdateStudent
     * @return array
     */
    public function providertestUpdateCourse()
    {
        return array(array("CourseCode","CourseName","14404MS","Advance Mathematics"),array("","CourseName","14404MS","Advance Mathematics"));
    }
    /**
     * Testing UpdateCourse
     * @param string $column1
     * @param string $column2
     * @param mixed $newvalue
     * @param mixed $oldvalue
     * @dataProvider providertestUpdateCourse
     */
    public function testUpdateCourse($column1, $column2, $newvalue, $oldvalue)
    {
        $obj=new CourseController;
        $obj->setModel("course");
        $this->assertEquals(true,$obj->updateCourse($column1, $column2, $newvalue, $oldvalue));
    }
    /**
     * Returning array of array to test testDeleteCourse
     * @return array
     */
    public function providertestDeleteCourse()
    {
        return array(array("CourseName",""),array("CourseName","Advance Mathematics"));
    }
    /**
     * Deleteing Course
     * @param string $column
     * @param mixed $value
     * @dataProvider providertestDeleteCourse
     */
    public function testDeleteCourse($column, $value)
    {
        $obj=new CourseController;
        $obj->setModel("course");
        $this->assertEquals(true,$obj->deleteCourse($column, $value));
    }
}
