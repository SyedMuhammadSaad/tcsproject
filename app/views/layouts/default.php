<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p><b>Select the Table name and operation you want to perform.</b></p>
        <br>
        <form action="#" method="post" enctype="multipart/form-data">
            
            <input type="radio" name="buttonchoice" value="teacher"> Teacher<br>
            <input type="radio" name="buttonchoice" value="student"> Student<br>
            <input type="radio" name="buttonchoice" value="course"> Course<br>
            <button name="crud" value="create" type="submit">Create</button>
            <button name="crud" value="read" type="submit">Read</button>
            <button name="crud" value="update" type="submit">Update</button>
            <button name="crud" value="delete" type="submit">Delete</button><br>
        <?php
        /**
         * default.php handling which functionality to call and what models selected
         */
        
        /**
         * Including files
         */
        
        if(session_status()!=PHP_SESSION_ACTIVE)
        {
            session_start();
        }
        
        include_once $_SESSION['Root'].'\core\controllers\controllerFactory.php';
        include_once $_SESSION['Root'].'\app\views\teacher\list.php';
        include_once $_SESSION['Root'].'\app\views\student\list.php';
        include_once $_SESSION['Root'].'\app\views\course\list.php';
        
        
        
        $crudvalue = filter_input(INPUT_POST, "crud");//input for crud is saved here
        $buttonvalue = filter_input(INPUT_POST, "buttonchoice");//input for table formed is saved here
        $addpagebutton=$buttonvalue;
        
        $_SESSION["buttonvalue"]=$buttonvalue;//session variable
        if($buttonvalue!=NULL)
        {
            //controllerfactory object made here which sets model
            $contrlrfctry=ControllerFactory::createController("$buttonvalue");
            $contrlrfctry->setModel("$buttonvalue");
            if($crudvalue==="create")//if option selected if create
            {
                //add code is generic for all
                $_SESSION["c"]=$buttonvalue;
                header('Location: http://localhost/TCS_Project/app/views/generic/add.php');
                exit();
                
            }
            if($crudvalue==="read")//if option selected if read
            {
                if($buttonvalue=="teacher")
                {
                    listTeacher();
                }
                else if($buttonvalue=="student")
                {
                    listStudent();
                }
                else
                {
                    listCourse();
                }
            }
            if($crudvalue==="update")//if option selected if update
            {
                if($buttonvalue=="teacher")
                {
                    header('Location: http://localhost/TCS_Project/app/views/teacher/edit.php');
                    exit();
                }
                else if($buttonvalue=="student")
                {
                    header('Location: http://localhost/TCS_Project/app/views/student/edit.php');
                    exit();
                }
                else
                {
                    header('Location: http://localhost/TCS_Project/app/views/course/edit.php');
                    exit();
                }
            }
            if($crudvalue==="delete")//if option selected if delete
            {
                if($buttonvalue=="teacher")
                {
                    header('Location: http://localhost/TCS_Project/app/views/teacher/delete.php');
                    exit();
                }
                else if($buttonvalue=="student")
                {
                    header('Location: http://localhost/TCS_Project/app/views/student/delete.php');
                    exit();
                }
                else
                {
                    header('Location: http://localhost/TCS_Project/app/views/course/delete.php');
                    exit();
                }
            }
        }
        
        ?>
        </form>
    </body>
</html>
