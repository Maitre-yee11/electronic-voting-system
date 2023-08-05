<?php
if (isset($_POST['return'])) {
    // Redirect to options.php
    header("Location: ../options.php");
    exit;
}

session_start();
include ('connect.php');
$areacode = $_SESSION['areacode'];

$sql = "SELECT Cname, CId FROM candidates WHERE ResidencyCode = $areacode";
$result = mysqli_query($con, $sql);

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <title>Name of Candidates</title>
    <link rel="stylesheet" href="../style.css" />
    <style>
      .box {
          position: relative;
          width: 50%;
          max-width: 1020px;
          height: 600px;
          background-color: #fff;
          border-radius: 3.3rem;
          box-shadow: 0 60px 40px -30px rgba(0, 0, 0, 0.27);
        }
        </style>
</head>
<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="../options.php" autocomplete="off" class="sign-in-form">
                        <div class="heading">
                        <div class="input-wrap">
                            </div>
                            <h2>Name of Candidates</h2>
                            <div class="input-wrap">
                            </div>
                        </div>';
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "1: " . $row["Cname"] . "<br>";
                                    echo "CId: " . $row["CId"] . "<br>";
                                }
                            }
                            echo '
                            <div class="input-wrap">
                                </div>
                        <input type="submit" value="Return" class="sign-btn" />
                    </form>
                </div>
                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="img2.jpg" class="image img-1 show" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>';
?>

