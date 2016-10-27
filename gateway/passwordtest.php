<?php
// New user - add them to database
echo "Creating your account. <br>";
$pwd = '96a553f003';
//$password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);    
 $crypt_options = array(
      'cost' => 9
    );
 
$password = password_hash($pwd, PASSWORD_BCRYPT, $crypt_options);   
echo $password . '<br>';

$dbpwd = $password;

echo $dbpwd . '<br>';
if(password_verify(trim($pwd), $dbpwd))
{
    echo 'Match<br>';
}
else
{
    echo 'Match failed<br> ';
}

?>