<?php
session_start();
include('connect.php');

$_SESSION['VId'] = $_POST['VId'];

$VId = $_SESSION['VId'];
$pwd = $_POST['password'];

// $sql = "SELECT areacode FROM voter WHERE VId = $VId";
// $result = mysqli_query($con, $sql);

// if ($result) {
//     if (mysqli_num_rows($result) > 0) {
//         $row = mysqli_fetch_assoc($result);
//         $areacode = $row['areacode'];
//         $_SESSION['areacode'] = $areacode;

//         echo $_SESSION['VId'];
//         echo $_SESSION['areacode'];
        
//         echo '<script>
//             alert("Login successful");
//             window.location="../options.php";
//         </script>';
//     } else {
//         echo '<script>
//             alert("Invalid credentials");
//             window.location="../login.php";
//         </script>';
//     }
// } else {
//     echo "Query error: " . mysqli_error($con);
// }



$sql = "SELECT password FROM voter WHERE VId = $VId";
$result = mysqli_query($con, $sql);
if ($result) {
    // Check if any row is returned
    if (mysqli_num_rows($result) > 0) {
        // Fetch the value
        $row = mysqli_fetch_assoc($result);
        $storedpwd = $row['password'];
        
        // Compare the hashed passwords
        if (password_verify($pwd, $storedpwd)) {
            //     echo '<script>
            //     alert("LogIn Successful");
            //     window.location="../options.php";
            // </script>';
            
            $sql = "SELECT areacode FROM voter WHERE VId = $VId";
            $result = mysqli_query($con, $sql);
            
            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $areacode = $row['areacode'];
                    $_SESSION['areacode'] = $areacode;
            
                    echo $_SESSION['VId'];
                    echo $_SESSION['areacode'];
                    
                    echo '<script>
                        alert("Login successful");
                        window.location="../options.php";
                    </script>';
                } else {
                    echo '<script>
                        alert("Invalid credentials");
                        window.location="../login.php";
                    </script>';
                }
            } else {
                echo "Query error: " . mysqli_error($con);
            }

        } else {
            // Passwords don't match, deny access
            echo '<script>
            alert("incorrect credentials");
            window.location="../login.php";
        </script>';
        }
    }
}
else {
    echo "Query error: " . mysqli_error($con);
}
mysqli_close($con);
?>
