
<?php
session_start();
include('connect.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$con=mysqli_connect("localhost","root","","votingsystem");
if(!$con){  
    die('Could not connect: '.mysqli_connect_error());  
}

$VId=$_SESSION['VId'];
echo $VId;
$CId=$_POST['CId'];
echo $CId;
$areacode=$_SESSION['areacode'];
echo $areacode;

$sql = "SELECT ResidencyCode FROM candidates WHERE CId = $CId";
$result = mysqli_query($con, $sql);
if ($result) {
    // Check if any row is returned
    if (mysqli_num_rows($result) > 0) {
        // Fetch the value
        $row = mysqli_fetch_assoc($result);
        $ac = $row['ResidencyCode'];

        if ($ac== $areacode) {
            $sql = "SELECT status FROM voter WHERE VId = $VId";
            $result = mysqli_query($con, $sql);
            
            if ($result) {
                // Check if any row is returned
                if (mysqli_num_rows($result) > 0) {
                    // Fetch the value
                    $row = mysqli_fetch_assoc($result);
                    $status = $row['status'];
            
                    // Check if the value is equal to a constant
                    $constant = 0; // The constant value you want to compare
            
                    if ($status == $constant) {
                        $sql = "INSERT INTO vote (VId, CId, areacode) VALUES ($VId, $CId,'$areacode')";
            
                        if(mysqli_query($con, $sql)){  
                           // echo "Record inserted successfully.<br>";
                            $sqlUpdate = "UPDATE voter SET status = 1 WHERE VId=$VId";
                        
                            if (mysqli_query($con, $sqlUpdate)) {
                                echo '<script>
                                alert("Record inserted and updated successfully");
                                window.location="../votedSuccessfully.php"
                                </script>';
                            } else {
                                echo "Could not update record: .<br>" . mysqli_error($con);
                            } 
                        } else {  
                            echo "Could not insert record: .<br>". mysqli_error($con);  
                        }              
                    } else {
                        echo '<script>
                        alert("Already voted");
                        window.location="../options.php"
                        </script>';
                    }
                } else {
                    echo "VId not found";
                }
            } else {
                echo "Query error: " . mysqli_error($con);
            }
            
            echo '<html>
                <head>
                    <script>
                        function performAction() {
                            window.location.href = "../options.php";
                        }
                    </script>       
                </head>
                <body>
                <button type="button" onclick="performAction()">return</button>
                </body>
                </html>';   
            mysqli_close($con);  

        
        }
        else{
            echo '<script>
            alert("U are voting in wrong region");
            window.location="../givevote.php"
            </script>';
        }
    }
    else {
        echo '<script>
            alert("invalid CId");
            window.location="../givevote.php"
            </script>';
    }
}
else {
    echo "Query error: " . mysqli_error($con);
}

?>
