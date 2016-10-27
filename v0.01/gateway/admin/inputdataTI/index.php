<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
require_once("../../include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("../../login.php");
    exit;
}
//require_once("../dblogin.php");



echo "
<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml'>
<head>
<title>LOGIS Element Index Builder</title>
<link rel='STYLESHEET' type='text/css' href='../mainstyle.css' />
<script src='../../script/jquery.min.js' type='text/javascript'></script>
<script type='text/javascript' src='../scripts.js' /></script>
</head>
<body>
<div id='resultbox'><div id='resultbox_close' onclick='resultbox_hide()'></div><div id='tyflowsubmitdiv'></div></div>
<div id='main_container'>
<h2> LOGIS Element Index Builder </h2>
<form id='inputform' class='inputform' method='post' action='#'>
<div class='container'>
    <label for='e_value' >Element Value: </label>
    <input type='text' name='e_value' class='e_value' id='e_value' maxlength='4' /><br/>
</div>
<div class='container'>
    <label for='e_description' >Element Description:</label>
    <input type='text' name='e_description' class='e_description' id='e_description' maxlength='100' /><br/>
</div>
<div class='container'>
    <label for='code_value' >Code Value: </label>
    <input type='text' name='code_value' class='code_value' id='code_value' maxlength='4' /><br/>
</div>
<div class='container'>
    <label for='code_description' >Code Description:</label>
    <input type='text' name='code_description' class='code_description' id='code_description' maxlength='100' /><br/>
</div>
<div class='container'>
    <input type='submit' name='element_submit' id='element_submit' class='element_submit' value='Submit' maxlength='100' /><br/>
</div>
</form>
</div>

<div id='resulttablediv'><h3>Spec Index Table</h3>
<table id='sindextable'>
<tr><td>Spec Value</td><td>Spec Description</td><td>Element Value</td></tr>";
$query2 = "SELECT * FROM `spec_codes` ";
$result2 = $spec_index_db->query($query2);
while($srow = $result2->fetch_assoc()){

	echo "<tr><td>".$srow['code_value']."</td><td>".$srow['code_description']."</td><td>".$srow['element_value']."</td></tr>";

}

echo" </table><br><h3>Element Index Table</h3>
<table id='eindextable'>
<tr><td>Element Value</td><td>Element Description</td></tr>";
$query1 = "SELECT * FROM `element_index` ";
$result1 = $element_index_db->query($query1);
while($erow = $result1->fetch_assoc()){

	echo "<tr><td>".$erow['element_value']."</td><td>".$erow['element_description']."</td></tr>";

}

echo " </table>
</div>
</body>
</html>
"

?>