<?php
session_start();
include('connect.php');
$_SESSION['Cname'] = $_POST['Cname'];

$Cname = $_SESSION['Cname'];
$pwd = $_POST['password'];

$sql = "SELECT Cname FROM candidates WHERE Cname = '$Cname'";
$result = mysqli_query($con, $sql);
if ($result) {
    // Check if any row is returned
    if (mysqli_num_rows($result) > 0) {
        // Fetch the value
        $sql = "SELECT password FROM candidates WHERE Cname = '$Cname'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $storedpwd = $row['password'];

                $password = password_hash($pwd, PASSWORD_BCRYPT);
                echo $password;
                // Compare the hashed passwords
                if (password_verify($pwd, $storedpwd)) {
                    echo '<script>
                            alert("LogIn Successful");
                            window.location="candidatehome.php";
                        </script>';
                } else {
                    echo '<script>
                        alert("Invalid password");
                        window.location="../logincandidate.php";
                    </script>';
                }
            } else {
                echo '<script>
                    alert("Incorrect credentials");
                    window.location="../logincandidate.php";
                </script>';
            }
        } else {
            echo '<script>
                alert("Error executing SQL statement");
                window.location="../logincandidate.php";
            </script>';
        }
    } else {
        echo '<script>
            alert("You are not verified to contest");
            window.location="../home.php";
        </script>';
    }
} else {
    echo '<script>
        alert("Error executing SQL statement");
        window.location="../logincandidate.php";
    </script>';
}
mysqli_close($con);
?>
