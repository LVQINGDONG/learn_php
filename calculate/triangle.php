<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/5/31
 * Time: 19:26
 */

echo "<table>";
    for ($i=1;$i<=9;$i++){
        echo "<tr>";
            for ($j=1;$j<=$i;$j++){
                echo "<td>".$j."x".$i."=".$i*$j."</td>>";
            }
        echo "</tr>";
    }
echo "</table>";
echo "<br/>";

?>