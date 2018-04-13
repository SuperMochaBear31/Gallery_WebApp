<?php

//function __autoload ($class){
spl_autoload_register(function ($class) {
    $class 		= strtolower($class);
	$the_path 	= "includes/{$class}.php";

//	$class = strtolower($class);
//	$the_path = "includes/{$class}.php";
	
//	if(file_exists($the_path)){
//		require_once($the_path);	
//		
//	} else {
//		
//		die("<br>" . "This file named {$class}.php was not found dude...");
//	}
	
	if(is_file($the_path) && !class_exists($class)){
		include $the_path;
	} else {
		
		die("<br>" . "This file named {$class}.php was not found dude...");
	}
	
});

?>