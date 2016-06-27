<html>
    <body>
        <h4><a href="http://localhost/TCS_Project/public/index.php">Back to Index Page</a></h4>

        <form action="index.php" method="post">
        Column: <br>
                <input type="radio" name="parameter[0]" value="CourseName"> CourseName<br>
                <input type="radio" name="parameter[0]" value="CourseCode"> CourseCourse<br>
                <br>
        Value: <input type="text" name="parameter[2]"><br>
        <input type="submit">
        <input type="text" value="<?php echo buttonval;?>" style="display:none;" name="modelname">
        <input type="text" value="<?php echo crudval;?>" style="display:none;" name="crudname">
       </form>
    </body>
</html>