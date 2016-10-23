<?php
	define('HOST', 'localhost');
	define('USER', '*************');
	define('PASS', '******************');
	define('DBNAME', '*************');

	$logindb = new mysqli(HOST, USER, PASS, DBNAME);

	if ($logindb->connect_errno) {
		echo "Failed to connect to MySQL: (" 
		. $logindb->connect_errno . ") " . $logindb->connect_error;
	}
	
	
	define('HOST2', 'localhost');
	define('USER2', '*************');
	define('PASS2', '******************');
	define('DBNAME2', '***************');

	$element_index_db = new mysqli(HOST2, USER2, PASS2, DBNAME2);

	if ($element_index_db->connect_errno) {
		echo "Failed to connect to MySQL: (" 
		. $element_index_db->connect_errno . ") " . $element_index_db->connect_error;
	}
	
	define('HOST3', 'localhost');
	define('USER3', '************');
	define('PASS3', '******************');
	define('DBNAME3', '***************');

	$spec_index_db = new mysqli(HOST3, USER3, PASS3, DBNAME3);

	if ($spec_index_db->connect_errno) {
		echo "Failed to connect to MySQL: (" 
		. $spec_index_db->connect_errno . ") " . $spec_index_db->connect_error;
	}
					
?>