<?php
/**
 * Course list.php file
 */
echo '<h4><a href="http://localhost/TCS_Project/public/index.php">Back to Index Page</a></h4>';
/**
 * listing the elements in course table.
 * @param courseController $obj Object made so function can be used
 */
echo "<table><tr><th>CourseName</th><th>CourseCode</th></tr>";
$size=sizeof($count);
$size2=count($count[0]);
if($size>0)
{

    for($i=0;$i<$size;$i++)
    {
        echo '<tr>';
        for($j=0;$j<$size2;$j++)
        {
            echo "<td style='text-align:left'>".$count[$i][$j]."</td>";
        }
        echo '</tr>';
    }
}
echo "</table>";
if($size==0)
{
    echo "<b>No Table to be Displayed</b>";
}

?>