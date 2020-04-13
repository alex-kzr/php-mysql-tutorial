<?php 
    
    echo 'functions:';
    echo '<br>';

    function sayHello($name = 'alex', $time = 'morning'){
        echo "good $time $name";
    }    

    sayHello('mario', 'evening');
    echo '<br>';

    function formatProduct($product){
        echo "{$product['name']} costs \${$product['price']} to buy <br>";
    }

    formatProduct(['name'=>'gold star', 'price'=>20]);
    $formatted = formatProduct(['name'=>'gold star', 'price'=>20]);
    echo '<br>';
    echo $formatted;

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