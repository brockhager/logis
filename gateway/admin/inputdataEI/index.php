<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
require_once("../../include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("../../login.php");
    exit;
}
require_once("../dblogin.php");



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
<tr><td>Element ID</td><td>Spec Value</td><td>Spec Description</td></tr>";
$query2 = "SELECT * FROM `spec_codes` ";
$result2 = $spec_index_db->query($query2);
$srowresultsarr = array();
$srowvalsort = array();
$srowelvalsort = array();
while($srow = $result2->fetch_assoc()){
$srowval = $srow['code_value'];
$srowvalsort[] = $srow['code_value'];
$srowdesc = $srow['code_description'];
$srowelval = $srow['element_value'];
$srowelvalsort[] = $srow['element_value'];
$srowresultsarr[] = array($srowelval, $srowval, $srowdesc);
}
array_multisort($srowelvalsort, SORT_ASC, $srowvalsort, SORT_ASC, $srowresultsarr);
	foreach($srowresultsarr as $srra){
		$svaluer = $srra[1];
		$sdescr = $srra[2];
		$selval = $srra[0];
			echo "<tr><td>".$selval."</td><td>".$svaluer."</td><td>".$sdescr."</td></tr>";
			$prev_sval[] = $svaluer;
			$prev_elval[] = $selval;
		}
echo "<tr><td>".$srow['code_value']."</td><td>".$srow['code_description']."</td></tr>";
echo" </table><br><h3>Element Index Table</h3>
<table id='eindextable'>
<tr><td>Element ID</td><td>Element Description</td></tr>";
$query1 = "SELECT * FROM `element_index` ";
$result1 = $element_index_db->query($query1);
$erowresultsarr = array();
$erowvalsort = array();
$i = 0;
while($erow = $result1->fetch_assoc()){
$erowval = $erow['element_id'];
$erowvalsort[] = $erow['element_id'];
$erowdesc = $erow['element_description'];
	
$erowresultsarr[] = array($erowval, $erowdesc);
$i++;
}
natsort($erowvalsort);
foreach($erowvalsort as $key => $value){
	foreach($erowresultsarr as $erra){
		$evaluer = $erra[0];
		$edescr = $erra[1];
			if($value == $evaluer){
			echo "<tr><td>".$evaluer."</td><td>".$edescr."</td></tr>";
			}
		}
}
echo " </table>
</div>
</body>
</html>
"

?>