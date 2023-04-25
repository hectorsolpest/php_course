<?php
/*
 PHP has an exceptions model similar of owner
programming languages. An exception can be thrown, and caught
(catched) within PHP. Code may be surrounded in a try block to
facilitate the catching of potential exceptions. Each try must have at
least one corresponding catch or finally block.
 */

function division($x, $y)
{
    if ($y == 0)
    {
        throw new Exception('Division by 0');
    }
    else
    {
        return $x/$y;
    }
}

try
{
    division(100,0);
}
catch (Exception $error)
{
    echo "Error: " . $error->getMessage();
}