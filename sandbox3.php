<?php

    echo 'file system2:';
    echo '<br>';

    $file = 'readme.txt';
    
    // opening a file for reading
    // $handle = fopen($file, 'r'); // reading only
    // $handle = fopen($file, 'r+'); // read and write to the file, placing pointer to the start of the file
    $handle = fopen($file, 'a+'); // read and write to the file, placing pointer to the end of the file

    // read the file
    // echo fread($handle, filesize($file)); // read whole file
    // echo fread($handle, 112); // read only first 112 bites

    // read a single line
    echo fgets($handle); // read first line and move pointer to the next line
    echo fgets($handle); // read second line and move pointer to the next line

    // read a single character
    echo fgetc($handle); // read first char from the pointer and move pointer to the next char

    // writing to a file
    fwrite($handle, "\nEverything popular is wrong.");

    // close the file
    fclose($handle);

    // delete the file
    // unlink($file);

?>