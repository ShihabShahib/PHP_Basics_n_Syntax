<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "Sunil";
    $class = "12th";
    $phy = 68;
    $chem = 98;
    $math = 25;
    $eng = 56;
    $bangla = 45;

    $total = $phy + $chem + $math + $eng + $bangla;

    $percentage = $total/500*100;

    echo "Student name is = $name<br>";
    echo "Student class is = $class<br>";
    echo "Student total number is = $total<br>";
    echo "Student percentage is = $percentage<br>";
    ?>
</body>
</html>