<?php
/**
 * GenericDelete.php file
 */
echo '
    <h4><a href="http://localhost/TCS_Project/public/index.php">Back to Index Page</a></h4>';
$col=$modl->__get("attr");
echo 'Column:<br>';
for($i=1;$i<sizeof($col);$i++)
{
    echo '<input type="radio" name="parameter[0]" value="'.$col[$i].'">';
    echo $col[$i].'<br>';
}
echo 'Value: <input type="text" name="parameter[2]"><br>';
echo '<input type="submit">
    <input type="text" value="'.$entity.'" style="display:none;" name="entity">
    <input type="text" value="'.$action.'" style="display:none;" name="action">
    ';

