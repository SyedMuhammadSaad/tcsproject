<?php
/**
 * ModelInterface has functions with all setter and getter
 */

/**
 * ModelInterface has pure virtual functions.
 */
interface ModelInterface
{
    /**
     * Name Setter
     * @param string $name
     */
    function setName($name);
    /**
     * Name Getter
     */
    function getName();
    /**
     * Age Setter
     * @param int $age
     */
    function setAge($age);
    /**
     * Age Getter
     */
    function getAge();
    /**
     * Course Setter
     * @param string $course
     */
    function setCourse($course);
    /**
     * Course Getter
     */
    function getCourse();
    /**
     * Degree Setter
     * @param string $degree
     */
    function setDegree($degree);
    /**
     * Degree Getter
     */
    function getDegree();
    /**
     * CourseName Setter
     * @param string $courseName
     */
    function setCourseName($courseName);
    /**
     * CourseName Getter
     */
    function getCourseName();
    /**
     * CourseCode Setter
     * @param string $courseCode
     */
    function setcourseCode($courseCode);
    /**
     * CourseCode Getter
     */
    function getCourseCode();
}

?>