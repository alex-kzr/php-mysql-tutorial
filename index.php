<?php 
    
    echo 'include:';
    echo '<br>';

    include('some_other_php_file.php');
    include('some_other_php_file2.php'); // do not crash down code if file missing


    echo 'require:';
    echo '<br>';

    require('some_other_php_file.php');
    // require('some_other_php_file2.php'); // chash down code if file missing

    echo 'end of php';

    

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
        <?php include('content.php') ?>
        <?php include('content.php') ?>
        <?php include('content.php') ?>
</body>
</html>