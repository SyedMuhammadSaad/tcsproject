<?php

include_once 'C:\xampp\htdocs\TCS_Project\app\controllers\teacherController.php';
include_once 'C:\xampp\htdocs\TCS_Project\app\controllers\studentController.php';
include_once 'C:\xampp\htdocs\TCS_Project\app\controllers\courseController.php';
include_once 'C:\xampp\htdocs\TCS_Project\core\models\modelFactory.php';


session_start();
echo $_SESSION["buttonvalue"];
echo '<form action="#" method="post">';
if($_SESSION["buttonvalue"]=="course")
{
    echo '
            CourseName: <input type="text" name="coursename" placeholder="Course Name"><br>
            CourseCode: <input type="text" name="coursecode" placeholder="Course Code"><br>
        ';
    
    $courseName = filter_input(INPUT_POST, "coursename");
    $courseCode = filter_input(INPUT_POST, "coursecode");
    $contrlrfctry=new CourseController;
    $contrlrfctry->setModel("course");
    if($courseName!=NULL && $courseCode!=NULL)
    {
        $contrlrfctry->createCourse($courseName, $courseCode);
        $contrlrfctry->readCourse();
    }
    echo '
        <input type="submit">
    </form>';
}
else
{
    echo '
            Name: <input type="text" name="name" placeholder="Name"><br>
            Age: <input type="text" name="age" placeholder="Age"><br>
        ';
    if($_SESSION["buttonvalue"]=="teacher")
    {
         echo 'Course: <input type="text" name="course" placeholder="Course"><br>';
    }
    else
    {
        echo 'Degree: <input type="text" name="degree" placeholder="degree"><br>';
    }
    echo '
        <input type="submit">
    </form>';
    
    $name = filter_input(INPUT_POST, "name");
    $age = filter_input(INPUT_POST, "age");
    if($_SESSION["buttonvalue"]=="teacher")
    {
        $course = filter_input(INPUT_POST, "course");
        $contrlrfctry=new TeacherController;
        $contrlrfctry->setModel("teacher");
        if($name!=NULL && $age!=NULL && $course!=NULL)
        {
            $contrlrfctry->createTeacher($name, $age, $course);
            $contrlrfctry->readTeacher();
        }
    }
    else
    {
        $degree = filter_input(INPUT_POST, "degree");
        $contrlrfctry=new StudentController;
        $contrlrfctry->setModel("student");
        if($name!=NULL && $age!=NULL && $degree!=NULL)
        {
            $contrlrfctry->createstudent($name, $age, $degree);
            $contrlrfctry->readstudent();
        }
    }
}
