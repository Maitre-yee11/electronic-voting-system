<?php
function generatePassword($length = 5) {
    $characters = '0123456789!@#$%^&*()-_=+';
    $password = '';
    $characterCount = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $characterCount - 1)];
    }
    echo $password."<br>";
    $password = password_hash($password, PASSWORD_BCRYPT);
    return $password;
}
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;

$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;
$newPassword = generatePassword();
echo $newPassword."<br>" ;


?>