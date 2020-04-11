<?php 
    
    echo 'multidimentional arrays:';
    echo '<br>';

    $blogs  = [
        ['mario party', 'mario', 'lorem', 30], 
        ['mario kart cheats', 'toad', 'lorem', 25],
        ['zelda hidden chests', 'link', 'lorem', 50]
    ];
    print_r($blogs);
    echo '<br>';
    print_r($blogs[1]);
    echo '<br>';
    print_r($blogs[1][1]);
    echo '<br>';

    $blogs2  = [
        ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30], 
        ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
        ['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem', 'likes' => 50]
    ];
    
    print_r($blogs2[1]['author']);
    echo '<br>';

    echo count($blogs2);
    echo '<br>';

    $blogs2[] = ['title'=>'castle party', 'author'=>'peach', 'content'=>'lorem', 'likes'=>100];
    print_r($blogs2);
    echo '<br>';

    $poped = array_pop($blogs2);  // take last one element in array
    print_r($poped);

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