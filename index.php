<?php 
    
    define('NAME', 'Yoshi');
    
    $name = 'Luigi';
    $age = 30;    

    // define('NAME', 'Toad'); // don't do anithing
    // NAME = 'Peach'; // syntax error that crashes app
    $name = 'Mario';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>

    <h1>User Profile Page</h1>

    <div><?php echo NAME; ?></div>
    <div><?php echo $name; ?></div>
    <div><?php echo $age; ?></div>
    
</body>
</html>