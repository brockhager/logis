<?PHP
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
require_once("./include/membersite_config.php");

session_start();
if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
  exit;
}

	$username = $_SESSION['usr_0bcef5a6b0'];
	require_once("./admin/dblogin.php");
					
			$loginquery = "SELECT * FROM `users` WHERE `username` = '$username'";
			$loginresult = $logindb->query($loginquery);	
		$lrow = $loginresult->fetch_assoc();		
		$dbusername = $lrow['username'];
		
		
		if($username == $dbusername){
			
			$userlevel = $lrow['level'];
			
			if($userlevel == 'admin'){
			
			$admin_link = "<p><h2><a href='./admin/'>Admin Area</a></h2></p>";
		}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Home page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
</head>
<body>
<div id='fg_membersite_content'>
<h2>Home Page</h2>
Welcome back <?echo $fgmembersite->UserFullName(); ?>!
<?php echo $admin_link;?>
<p><h2><a href='../gateway/site/'>Go To GATEWAY SITE</a></h2></p>
<p><a href='change-pwd.php'>Change password</a></p>
<br><br><br>
<br>
<p><a href='logout.php'>Logout</a></p>
</div>
</body>
</html>
