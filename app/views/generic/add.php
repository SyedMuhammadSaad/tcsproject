<?php
/**
 * Adding or Creating new values in teacher,course and student table
 */
echo '<h4><a href="http://localhost/TCS_Project/public/index.php">Back to Index Page</a></h4>';
if(session_status()!=PHP_SESSION_ACTIVE)
        {
            session_start();
        }

/**
 * Including the files requiered
 */
include_once $_SESSION['Root'].'\app\controllers\teacherController.php';
include_once $_SESSION['Root'].'\app\controllers\studentController.php';
include_once $_SESSION['Root'].'\app\controllers\courseController.php';
include_once $_SESSION['Root'].'\core\models\modelFactory.php';

//making form and taking inputs
echo '<form action="#" method="post">';
if($_SESSION["buttonvalue"]=="course")//if input is course
{
    echo '
            CourseName: <input type="text" name="coursename" placeholder="Course Name"><br>
            CourseCode: <input type="text" name="coursecode" placeholder="Course Code"><br>
        ';
    
    $courseName = filter_input(INPUT_POST, "coursename");
    $courseCode = filter_input(INPUT_POST, "coursecode");
    $contrlrfctry=new CourseController;//making object accordingly
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
else//if input is teacher or student
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
    //making object accordingly
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
    else//making object accordingly
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
