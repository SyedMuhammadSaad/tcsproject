<?php
/**
 * Genericlist.php file
 */
echo '<h4><a href="http://localhost/TCS_Project/public/index.php">Back to Index Page</a></h4>';

$col=$modl->__get("attr");
echo "<table><tr>";
for($i=1;$i<sizeof($col);$i++)
{
    echo '<th>'.$col[$i].'</th>';
}
echo '</tr>';
$size=sizeof($count);
$size2=count($count[0]);
if($size>0)
{

    for($i=1;$i<$size;$i++)
    {
        echo '<tr>';
        for($j=1;$j<$size2;$j++)
        {
            echo "<td style='text-align:left'>".$count[$i][$j]."</td>";
        }
        echo '</tr>';
    }
}
echo "</table>";
if($size==0)
{
    echo "<h5><i>*No Table to be Displayed</i></h5>";
}

?>