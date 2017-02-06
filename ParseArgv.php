<?php

class ParseArgv
{
    private $argsParsed;
    public $argsUnparsed;
    private $associative = array();
    private $args = array();

    public function __construct()
    {
        $this->argsUnparsed = $_SERVER['argv'];
        $this->argsParsed = array(
            "One" => "one",
            "Two" => "two",
        );
    }

    public function getParsed()
    {
        return $this->argsParsed;
    }
    
    public function parse($argv)
    {
	$argv = $this->argsUnparsed;
	$argvs = array();
	foreach($argv as $arg)
	{
		// This is supposed to find the -- characters in a string 
		if(substr($arg,0,2) == '--')
		{
			$equals = strpos($arg, '=');
			// If character in string equals '='  saving anything before it as a key and anything afterward as a value
			if($arg == $equals)
			{
				foreach($arg as $k=>$v)
				{
					$argvs[equals - 1] = $k;
				}
			}
			else if($arg !== $equals)
			{
				 foreach($arg as $k=>$v)
                                {
                                        $argvs[equals + 1] = $v;
                                }
                   
			}	
    		}
	}
	// return the associavtive array
    	return $this->argvs;		
    }

}
