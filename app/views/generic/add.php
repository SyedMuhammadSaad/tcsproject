<html>
    <body>
        <h4><a href="http://localhost/TCS_Project/public/index.php">Back to Index Page</a></h4>

        <form action="index.php" method="post">
        Value: <br> <input type="text" name="parameter[0]"><br>
        Column: <br><input type="text" name="parameter[1]"><br>
        <input type="submit">
        <input type="text" value="<?php echo buttonval;?>" style="display:none;" name="modelname">
        <input type="text" value="<?php echo crudval;?>" style="display:none;" name="crudname">
      </form>
    </body>
</html>
