<?php 
    
    echo 'indexed arrays:';
    echo '<br>';
    $peopleOne = ['alex', 'crystal', 'ryu'];
    echo $peopleOne[1];

    echo '<br>';

    $peopleTwo = array('ken', 'chun-li');
    echo $peopleTwo[1];

    echo '<br>';
    
    $ages = [20, 30, 40, 50];
    print_r($ages);

    echo '<br>';

    $ages[1] = 25;
    print_r($ages);

    echo '<br>';
    
    $ages[] = 60;
    print_r($ages);

    echo '<br>';
    
    array_push($ages, 70);
    print_r($ages);

    echo '<br>';
    
    echo count($ages);

    echo '<br>';
    
    $peopleThree = array_merge($peopleOne, $peopleTwo);
    print_r($peopleThree);

    echo '<br>';

    echo 'associative arrays (key & value pairs):';

    echo '<br>';

    $ninjasOne = ['alex'=>'black', 'mario'=>'red', 'luigi'=>'white'];
    echo $ninjasOne['mario'];
    echo '<br>';
    print_r($ninjasOne);

    echo '<br>';

    $ninjasTwo = array('bowser'=>'green', 'peach'=>'yellow');
    $ninjasTwo['toad'] = 'pink';
    print_r($ninjasTwo);

    echo '<br>';

    echo count($ninjasOne);

    echo '<br>';
    $ninjasThree = array_merge($ninjasOne, $ninjasTwo);
    print_r($ninjasThree);

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