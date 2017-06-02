<?php
/*
 * Copyright (C) 2015 Suzuki Gudalajara
 *
 */
$devserverlist = array('127.0.0.1','::1','192.168.0.102','localhost');

if(!in_array($_SERVER['SERVER_NAME'], $devserverlist)){
	define("HOST", "localhost");
	define("USER", "suzukigd_suzuki");
	define("PASSWORD", "q_hTL1FIsslx");
	define("DATABASE", "suzukigd_suzukidb");
} else {
	define("HOST", "localhost");
	define("USER", "master");
	define("PASSWORD", "12345");
	define("DATABASE", "suzukidb");
}
define("SECURE", FALSE);    // FOR DEVELOPMENT ONLY!!!!

