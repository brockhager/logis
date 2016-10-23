<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
	require_once("../dblogin.php");
	if(isset($_POST['element_submit'])){

if($_POST['code_value'] != ""){
	if($_POST['code_desc'] != ""){
$code_id = $_POST['code_id'];		
$code_value = $_POST['code_value'];
$code_desc = $_POST['code_desc'];

echo "<tr><td>".$code_id."</td><td>".$code_value."</td><td>".$code_desc."</td></tr>";

		}
	}
}


?>