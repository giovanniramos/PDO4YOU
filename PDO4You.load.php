<?php

/**
 * Wrapper to load classes
 * 
 * */

// Simple lambda function to require a php file.
function requires(array $var)
{
	array_walk($var, create_function('$x', 'require_once("classes/$x");'));
}

// Loading the interface first.
requires(array('PDOConfig.class.php', 'PDOLibrary.php', 'PDO4You.class.php'));


?>