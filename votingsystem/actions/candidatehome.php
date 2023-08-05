<?php
include ('connect.php');
session_start();

$Cname = $_SESSION['Cname'];

$query = "SELECT CId,Cname,gender,party,phoneno,age,Citizenship,RC,CriminalRecord,Nominated FROM candidates WHERE Cname = '$Cname'";
$result = mysqli_query($con, $query);

if ($row = mysqli_fetch_assoc($result)) {

    $CId = $row['CId'];
    $gender = $row['gender'];
    $party= $row['party'];
    $phoneno= $row['phoneno'];
    $age= $row['age'];
    $Citizenship= $row['Citizenship'];
    // $ResidencyCode= $row['$RC'];
    $RC= $row['RC'];
    $CriminalRecord= $row['CriminalRecord'];
    $Nominated= $row['Nominated'];

    echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Your form has been verified and details are given below</title>
    <link rel="stylesheet" href="../style.css" />
    <style>
    .sign-btn{
      width:30%
    }
    </style>

    <script>
            function logout() {
                window.location.href = "logoutcandidate.php";
            }
        </script>
  </head>
  <body>
    <body>
        <main>
          <div class="box">
            <div class="inner-box">
                <div class="heading">
                  <h3>Your form has been verified</h3>
                  <h3> and details are given below</h3>
                  </div>
                    <div class="actual-form">
                    <div class="input-wrap">
                  </div>
                </div>
                
            <div class="actual-form">
                <div class="input-wrap">
                  <label for="CId" style="color: black; font-size: 18px;">CId: ' . $CId . '</label>
                </div>
             </div>
             <div class="actual-form">
                <div class="input-wrap">
                  <label for="CId" style="color: black; font-size: 18px;">Name: ' . $Cname . '</label>
                </div>
             </div>
             <div class="actual-form">
                <div class="input-wrap">
                  <label for="gender" style="color: black; font-size: 18px;">Gender : ' . $gender . '</label>
                </div>
             </div>
             <div class="actual-form">
                <div class="input-wrap">
                  <label for="party" style="color: black; font-size: 18px;">Party : ' . $party . '</label>
                </div>
             </div>
             <div class="actual-form">
                <div class="input-wrap">
                  <label for="Phone No." style="color: black; font-size: 18px;"></label>Phone No. : ' . $phoneno . '</label>
                </div>
             </div>

            
             
            </div>
                <div class="carousel">
                  <div class="actual-form">
                  <div class="input-wrap">
                  </div>
                </div>
                <div class="actual-form">
                <div class="input-wrap">
                </div>
              </div>
              <div class="actual-form">
                <div class="input-wrap">
                  <label for="age" style="color: black; font-size: 18px;">Age : ' . $age . '</label>
                </div>
             </div>
              <div class="actual-form">
                <div class="input-wrap">
                  <label for="citizenship" style="color: black; font-size: 18px;">Citizenship : ' . $Citizenship . '</label>
                </div>
             </div>
                <div class="actual-form">
                    <div class="input-wrap">
                     <label for="area code to contest" style="color: black; font-size: 18px;">Residency Code To Contest : ' . $RC . '</label>
                 </div>
                 </div>

                <div class="actual-form">
                    <div class="input-wrap">
                      <label for="criminal record" style="color: black; font-size: 18px;">Criminal Record : ' . $CriminalRecord . '</label>
                    </div>
                 </div>
                 <div class="actual-form">
                    <div class="input-wrap">
                      <label for="nominated" style="color: black; font-size: 18px;">Nominated[Y/N] : ' . $Nominated . '</label>
                    </div>
                 </div>
                 
                <div class="actual-form">
                  <div class="input-wrap">
                  </div>
                </div>
                

                
                 <div class="box">
                  <input type="submit" value="LOG OUT" onclick="logout()" class="sign-btn" />
                 </div>
                </div>
               
               <!-- add more labels and input fields as needed -->
               
               
             </div>
             
            </div>
        </main> 
  </body>
</html>
';

} 
?>
