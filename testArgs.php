<?php
require_once "./ParseArgv.php";

$parsed = new ParseArgv();
$arguments = $parsed->argsUnparsed;
// want   $arguments = $parsed->argv;  instead

foreach($arguments as $argument)
{		
	$associative=$parsed->parse($arguments);
	print_r($associative);

}	

