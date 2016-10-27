<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
	require_once("../dblogin.php");
	
	if(isset($_POST['element_submit'])){
		if($_POST['e_value'] != ""){
			if($_POST['e_desc'] != ""){
		$e_value = mysqli_real_escape_string($element_index_db, trim($_POST['e_value']));
		$e_desc = mysqli_real_escape_string($element_index_db, trim($_POST['e_desc']));	
		
		$elementcheck = $element_index_db->query('SELECT * FROM `element_index`');
		$elementvals = array();
		while($elresults = $elementcheck->fetch_assoc()){
			$elementvals[] =  mysqli_real_escape_string($element_index_db, trim($elresults['element_value']));
						
		}
		foreach($elementvals as $ev){
			$e_valuecomp = $ev;
			if($e_valuecomp == $e_value){
				$evccheck = true;
			}
		}
		
		if(!$evccheck == true){
		
$create_element_table =
'CREATE TABLE IF NOT EXISTS element_index
(
    element_id INT NOT NULL AUTO_INCREMENT,
	element_value VARCHAR(4) NOT NULL,
    element_description VARCHAR(100) NOT NULL,
    PRIMARY KEY(element_id)
)';

$create_ele_tbl = $element_index_db->query($create_element_table);
if (!$create_ele_tbl) {
	echo "Error locating Table";
}

	
	$sql1 = 'INSERT into element_index
	(
                element_value,
				element_description
				)
                values
                (
				"'.$e_value.'",
				"'.$e_desc.'"
		         )';     
	if($element_index_db->query($sql1)){
		echo "Element info ".$e_value." and ".$e_desc." has been saved.<br>";
	}
	else{echo "Error Loading into Table.. Field Unique?";}
				

			} 
				else{
					echo "Element exists in database!";
				}
			}
			else{echo"Please input an Element Description.";}
		}
		else{
			echo "Please input an Element Value.";
		}

if($_POST['code_value'] != ""){
	if($_POST['code_desc'] != ""){
		if($_POST['e_value'] != ""){
$element_value = $_POST['e_value'];		
$code_value = $_POST['code_value'];
$code_desc = $_POST['code_desc'];

$create_spec_table =
'CREATE TABLE IF NOT EXISTS spec_codes 
(
    code_id INT NOT NULL AUTO_INCREMENT,
    code_value VARCHAR(4) NOT NULL,
    code_description VARCHAR(100) NOT NULL,
	element_value VARCHAR (4) NOT NULL,
    PRIMARY KEY(code_id)
)';

$create_spec_tbl = $spec_index_db->query($create_spec_table);
if (!$create_spec_tbl) {
	echo "Error locating Table";
}


		$speccheck = $spec_index_db->query('SELECT * FROM `spec_codes`');
		$specvals = array();
		while($spresults = $speccheck->fetch_assoc()){
			$specval = mysqli_real_escape_string($spec_index_db, trim($spresults['code_value']));
			if($specval == $code_value){
				$spelval = mysqli_real_escape_string($spec_index_db, trim($spresults['element_value']));
				if($spelval = $element_value){
					$svccheck = true;
				}
			}
			
		}
		
	if($svccheck != true){
	
	$sql2 = 'INSERT into spec_codes
 (
                code_value,
				code_description,
				element_value
				)
                values
                (
				"'.$code_value.'",
				"'.$code_desc.'",
				"'.$element_value.'"
		         )';     
	if($spec_index_db->query($sql2)){
		echo "Spec info ".$code_value." and ".$code_desc." has been saved.<br>";
					}
					else{echo"Cannot connect to the databse.";}
				}
				else{echo"This spec ".$code_value." for this element ".$element_value." has already been added to the database.";}				
			}
			else{echo"Please input an Element Value.";}			
		}
		else{echo"Please input a Spec Description.";}
	}
	else{echo"Please input a Spec Value.";}
}


?>