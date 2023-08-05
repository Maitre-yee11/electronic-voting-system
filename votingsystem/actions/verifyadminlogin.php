<?php
session_start();
include('connect.php');

$_SESSION['AId'] = $_POST['AId'];
$_SESSION['password'] = $_POST['password'];

$AId = $_SESSION['AId'];
$password = $_SESSION['password'];

$sql = "SELECT Password FROM admin WHERE AId = $AId";
$result = mysqli_query($con, $sql);
if ($result) {
    // Check if any row is returned
    if (mysqli_num_rows($result) > 0) {
        // Fetch the value
        $row = mysqli_fetch_assoc($result);
        $storedpwd = $row['Password'];
        // Compare the hashed passwords
        if (password_verify($password, $storedpwd)) {
            echo '<script>
            alert("LogIn Successful");
            window.location="../admin.php";
        </script>';

        } else {
            // Passwords don't match, deny access
            echo '<script>
            alert("incorrect credentials");
            window.location="../loginadmin.php";
        </script>';
        }
    }
}
?>
