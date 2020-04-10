<?php 
    
    $radius = 25;
    $pi = 3.14;
    
    echo 'arithmetic operators - +, -, *, /, %, **';
    echo '<br>';
    echo $pi * $radius**2;

    echo '<br>';

    echo 'order of operation - B I D M A S:';
    echo '<br>';
    // Brackets(), Indices**, Division/, Multiplication*, Addition+, Subtraction-
    echo 2 * (4 + 9) / 3;

    echo '<br>';

    echo 'increment & decrement operators:';
    echo '<br>';
    echo $radius++;
    echo '<br>';
    echo $radius;

    echo '<br>';

    echo ++$radius;
    echo '<br>';
    echo $radius;

    echo '<br>';

    echo 'shorthand operators:';
    echo '<br>';
    $age = 20;
    $age +=10; // $age = $age + 10;
    echo $age;
    echo '<br>';
    $age -=5; // $age = $age - 5;
    echo $age;
    echo '<br>';
    $age *= 2; // $age = $age * 2;
    echo $age;
    
    echo '<br>';

    echo 'number functions:';
    echo '<br>';
    echo floor($pi);
    echo '<br>';
    echo ceil($pi);
    echo '<br>';
    echo pi();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    
</body>
</html>