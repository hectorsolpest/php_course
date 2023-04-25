<?php
/* Functions Syntax
function function_name($parameters)
{
  code to be executed
}
*/
function register($name)
{
    echo "$name registered \n";
}
register("Hector");

$register = function ($name)
{
    echo "$name registered \n";
};

$register("Hector");
