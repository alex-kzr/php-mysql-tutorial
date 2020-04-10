<?php 
    
    $stringOne = 'my email is ';
    
    $stringTwo = 'alex@xxx.com';
    echo $stringOne . $stringTwo;

    echo '<br>';

    $name = 'Mario';
    echo 'Hey, my name is ' . $name;
    echo '<br>';
    echo "Hey, my name is $name";

    echo '<br>';

    // echo "the ninja screamed "whaaaaa""; // crashes the app
    echo "the ninja screamed \"whaaaaa\""; // work if escape " char with \
    echo '<br>';
    echo 'the ninja screamed "whaaaaa"'; // work also

    echo '<br>';

    echo $name[0];

    echo '<br>';

    echo strlen($name);

    echo '<br>';

    echo strtoupper($name);

    echo '<br>';

    echo strtolower($name);

    echo '<br>';

    echo str_replace('M', 'W', $name);
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