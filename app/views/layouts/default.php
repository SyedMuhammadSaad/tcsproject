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
        <p>Which Field you want to get access to:</p>
        <br>
        <form action="#" method="post" enctype="multipart/form-data">
            <button name="buttonchoice" value="teacher" type="submit">Teacher</button>
            <button name="buttonchoice" value="student" type="submit">Student</button>
            <button name="buttonchoice" value="course" type="submit">Course</button>
        </form>
        <?php
        $buttonvalue=$_POST["buttonchoice"];
        ?>
    </body>
</html>
