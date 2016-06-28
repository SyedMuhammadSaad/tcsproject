<!DOCTYPE html>

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
            <button name="crud" value="add" type="submit">Create</button>
            <button name="crud" value="list" type="submit">Read</button>
            <button name="crud" value="edit" type="submit">Update</button>
            <button name="crud" value="delete" type="submit">Delete</button><br>
        <?php
        /**
         * default.php handling which functionality to call and what models selected
         */
        
        $crudvalue = filter_input(INPUT_POST, "crud");//input for crud is saved here
        $buttonvalue = filter_input(INPUT_POST, "buttonchoice");//input for table formed is saved here
        
        /**
         * Defining constant value of buttonvalue
         */
        define("buttonval",$buttonvalue);
        /**
         * Defining constant value of crudvalue
         */
        define("crudval",$crudvalue);
        
        ?>
        </form>
    </body>
</html>
