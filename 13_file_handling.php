<?php

/*
File handling is the ability to read and write files on the server.
PHP has built-in functions for reading and writing files
 */

$file = 'extras/file.txt';

//read content of the file
if (file_exists($file))
{
    //echo readfile($file);
    $handle = fopen($file, 'r');
    $content = fread($handle, filesize($file));
    fclose($handle);
    echo $content;
}
else
{
    $handle = fopen($file, 'w');
    $content = 'Victor' . PHP_EOL . 'Sofia' . PHP_EOL . 'Michel';
    fwrite($handle, $content);
    fclose($handle);
}