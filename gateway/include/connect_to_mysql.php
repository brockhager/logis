<?php  
// This file is www.developphp.com curriculum material
// Written by Adam Khoury January 01, 2011
// http://www.youtube.com/view_play_list?p=442E340A42191003
/*  
1: "die()" will exit the script and show an error statement if something goes wrong with the "connect" or "select" functions. 
2: A "mysql_connect()" error usually means your username/password are wrong  
3: A "mysql_select_db()" error usually means the database does not exist. 
*/ 
// Place db host name. Sometimes "localhost" but  
// sometimes looks like this: >>      ???mysql??.someserver.net 
$db_host = "localhost"; 
// Place the username for the MySQL database here 
$db_username = "edisatos";  
// Place the password for the MySQL database here 
$db_pass = "Ra1nbwoUn1c0rn2016$$";  
// Place the name for the MySQL database here 
$db_name = "edisatos_logindb"; 

// Run the actual connection here  
  

					define('HOST', 'localhost');
					define('USER', 'edisatos');
					define('PASS', 'Ra1nbwoUn1c0rn2016$$');
					define('DBNAME', 'edisatos_logindb');

					$flowdb = new mysqli(HOST, USER, PASS, DBNAME);

					if ($flowdb->connect_errno) {
						echo "Failed to connect to MySQL: (" 
						. $flowdb->connect_errno . ") " . $flowdb->connect_error;
					}           
?>