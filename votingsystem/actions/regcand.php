<?php
session_start();


function sanitize($inputtext){
    // $inputtext=strip_tags[$inputtext];
    $inputtext=str_replace(" ","",$inputtext);
    return $inputtext;
}

function sanitizename($inputtext){
    // $inputtext=strip_tags[$inputtext];
    $inputtext=ucfirst($inputtext);
    return $inputtext;
}

function sanitizeCR($inputtext){
    // $inputtext=strip_tags[$inputtext];
    $inputtext=str_replace(" ","",$inputtext);
    $inputtext=strtolower($inputtext);
    return $inputtext;
}

function sanitizeCZ($inputtext){
    // $inputtext=strip_tags[$inputtext];
    $inputtext=str_replace(" ","",$inputtext);
    $inputtext=strtolower($inputtext);
    $inputtext=ucfirst($inputtext);
    return $inputtext;
}

function sanitizenom($inputtext){
    // $inputtext=strip_tags[$inputtext];
    $inputtext=str_replace(" ","",$inputtext);
    $inputtext=strtolower($inputtext);
    if ($inputtext === 'yes' || $inputtext=== 'no') {
        // Value is valid
        return $inputtext;
      } else {
        return 'no'; // Default value
      }
}

function sanitizepwd($inputtext){
    // $inputtext=strip_tags[$inputtext];
    return $inputtext;
}


$Cname=sanitizename($_POST['Cname']);
echo $Cname. "<br>";
$gender=sanitize($_POST['gender']);
echo $gender. "<br>";
$party=sanitizepwd($_POST['party']);
echo $party. "<br>";
$phoneno = $_POST['phoneno'];
echo $phoneno. "<br>";
// if (preg_match('/^[0-9]+$/', $phoneno) && strlen($phoneno) === 10) {
//     echo $phoneno;
// } else {
//     header("Location: ./registercandidate.php?message=InvalidInput");
//     exit();
// }
$age = $_POST['age'];
// echo $age. "<br>";
$Citizenship=sanitizeCZ($_POST['Citizenship']);
// echo $Citizenship. "<br>";
$ResidencyCode=sanitize($_POST['ResidencyCode']);
$RC = sanitize($_POST['RC']); 
// echo $ResidencyCode. "<br>";
// echo $RC. "<br>";
$CriminalRecord=sanitizeCR($_POST['CriminalRecord']);
// echo $CriminalRecord. "<br>";   
$Nominated=sanitizenom($_POST['Nominated']);
// echo $Nominated;
$password=sanitizepwd($_POST['password']);
// echo $password. "<br>";
$confirmpassword=sanitizepwd($_POST['confirmpassword']);


$candidate = [
    'Cname' => $Cname,
    'gender' => $gender,
    'party' => $party,
    'phoneno' => $phoneno,
    'age' => $age,
    'Citizenship' => $Citizenship,
    'ResidencyCode' => $ResidencyCode,
    'RC' => $RC,
    'CriminalRecord' => $CriminalRecord,
    'Nominated' => $Nominated,
    'password' => $password,
];

// // Add candidate to the session variable
$_SESSION['candidateArr'][] = $candidate;
foreach ($_SESSION['candidateArr'] as $candidate) {
    $Cname = $candidate['Cname'];
}


header("Location: ../registeredSuccessfully.php");
exit;
?>

