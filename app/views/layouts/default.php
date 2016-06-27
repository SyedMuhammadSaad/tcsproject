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
        <form action="index.php" method="post" enctype="multipart/form-data">
            
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
        
        $crudvalue = filter_input(INPUT_POST, "crud");//input for crud is saved here
        $buttonvalue = filter_input(INPUT_POST, "buttonchoice");//input for table formed is saved here
        $addpagebutton=$buttonvalue;
        
        define("buttonval",$buttonvalue);
        define("crudval",$crudvalue);
        
        ?>
        </form>
    </body>
</html>
