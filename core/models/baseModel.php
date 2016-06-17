<?php
/**
 * BaseModel impements from ModelInterface
 */

/**
 * Including files
 */
require_once $_SESSION['Root'].'\core\models\modelInterface.php';

/**
 * BaseModel implements from ModelInterface and defines all the functions
 */
class BaseModel implements ModelInterface
{
    /**
     * @var string Name
     */
    private $name;
    /**
     *
     * @var int Age
     */
    private $age;
    /**
     *
     * @var string Course Name
     */
    private $course;
    /**
     *
     * @var string Degree Name
     */
    private $degree;
    /**
     *
     * @var string CourseName
     */
    private $courseName;
    /**
     *
     * @var string CourseCode
     */
    private $courseCode;
    /**
     * Name Setter
     * @param string $name
     */
    function setName($name)
    {
        $this->name=$name;
    }
    /**
     * Name Getter
     * @return string
     */
    function getName()
    {
        return $this->name;
    }
    /**
     * Age Setter
     * @param int $age
     */
    function setAge($age)
    {
         $this->age=$age;
    }
    /**
     * Age Getter
     * @return int
     */
    function getAge()
    {
        return $this->age;
    }
    /**
     * Course Setter
     * @param string $course
     */
    function setCourse($course)
    {
        $this->course=$course;
    }
    /**
     * Course Getter
     * @return string
     */
    function getCourse()
    {
        return $this->course;
    }
    /**
     * Degree Setter
     * @param string $degree
     */
    function setDegree($degree)
    {
        $this->degree=$degree;
    }
    /**
     * Degree Getter
     * @return string
     */
    function getDegree()
    {
        return $this->degree;
    }
    /**
     * CourseName Setter
     * @param string $courseName
     */
    function setCourseName($courseName)
    {
        $this->courseName=$courseName;
    }
    /**
     * CourseName Getter
     * @return string
     */
    function getCourseName()
    {
        return $this->courseName;
    }
    /**
     * CourseCode Setter
     * @param string $courseCode
     */
    function setcourseCode($courseCode)
    {
        $this->courseCode=$courseCode;
    }
    /**
     * CourseCode Getter
     * @return string
     */
    function getCourseCode()
    {
        return $this->courseCode;
    }
}

?>