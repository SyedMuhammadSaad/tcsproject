
        <h4><a href="http://localhost/TCS_Project/public/index.php">Back to Index Page</a></h4>

        
        <?php
        $col=$modl->__get("attr");
        echo '<i>Columns are|';
        for($i=1;$i<sizeof($col);$i++)
        {
            echo $col[$i].'|';
        }
        echo '</i>:';
        ?>
        <br>
        Column: <br><input type="text" name="parameter[2]"><br>
        Value: <br> <input type="text" name="parameter[0]"><br>
        <input type="text" value="<?php echo $entity;?>" style="display:none;" name="entity">
        <input type="text" value="<?php echo $action;?>" style="display:none;" name="action">
        <input type="submit">
        
      
