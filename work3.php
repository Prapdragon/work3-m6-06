<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
</head>
<body>
    <?php
        $a = "3";
        $b = "4";
        $c = $a+$b;
        echo "<h3>";
        echo "ผลลัพธ์";
        echo "</h3>";
        echo "ค่าของ \$a = 3"."</br>"."ค่าของ \$b = 4";
        echo "</br>";
        echo "ผลรวมของ \$a และ \$b "." คือ ".$c;
        echo "</br>";
 
        $A = "20.5";
        $B = "20.5";
        $C = $A==$B;
        echo "<h3>";
        echo "ผลลัพธ์";
        echo "</h3>";
        echo "\$A = B"."</br>";
        echo "\$A = 20.5"."</br>";
        echo "\$B = 20.5"."</br>";
        echo "ค่าคือ => ".$C;
    ?>
</body>
</html>
