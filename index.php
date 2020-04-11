<?php 
    
    echo 'conditional statements:';
    echo '<br>';

    $price = 20;
    if($price < 10){
        echo 'if condition is met';
    }elseif($price < 30){
        echo 'elseif condition is met';
    }else{
        echo 'conditions are not met';
    }

    echo '<br>';
    
    $products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
	];

    foreach($products as $product){
        if($product['price'] < 15 && $product['price'] > 2){
            echo $product['name'] . '&&<br>';
        }
        if($product['price'] > 20 || $product['price'] < 10){
            echo $product['name'] . '||<br>';
        }
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach($products as $product){ ?>
            <?php if($product['price'] > 15){ ?>
                <li><?php echo $product['name']; ?></li>
            <?php } ?>
        <?php } ?>
    </ul>
    
</body>
</html>