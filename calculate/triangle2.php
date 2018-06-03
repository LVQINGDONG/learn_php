<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>九九乘法表</title>
</head>
<body>
<?php
echo "<table>";
for ($i=1;$i<=9;$i++){
    echo "<tr>";
    for ($j=1;$j<=$i;$j++){
        echo "<td style='border: solid 1px black'>".$j."x".$i."=".$i*$j."</td>>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br/>";


for ($a=1;$a<=9;$a++){
    for ($b=$a;$b<=9;$b++){
        echo $b."x".$a."=".$a*$b."  ";
    }
    echo "<br/>";
}


?>
</body>
</html>