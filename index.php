<?php 
    
    echo 'variable scope:';
    echo '<br>';

    echo 'local vars:';
    echo '<br>';

    function myFunc(){
        $price = 10;
        echo $price;
    }    
    myFunc();
    echo $price; // undefined variable in this scope - looking for global var
    echo '<br>';

    function myFuncTwo($age){
        echo $age;
    }
    myFuncTwo(25);
    echo $age; // undefined variable in this scope - looking for global var
    echo '<br>';

    echo 'global vars:';
    echo '<br>';

    $name = 'mario';
    function sayHello(){
        echo "hello $name"; // undefined variable in this scope - looking for local var
    }
    sayHello();
    echo '<br>';

    $name2 = 'mario';
    function sayHello2(){
        global $name2; // using global var
        $name2 = 'yoshi';
        echo "hello $name2"; 
    }
    sayHello2();
    echo '<br>';
    echo $name2;
    echo '<br>';

    $name3 = 'mario';
    function sayBye(&$name3){  // var passed by refference
        $name3 = 'wario'; // changes global var
        echo "bue $name3"; 
    }
    sayBye($name3);
    echo $name3;

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