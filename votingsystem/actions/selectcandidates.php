<?php
session_start();
include('connect.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function generatecid($length = 5) {
  $characters = '0123456789';
  $cid = '';
  $characterCount = strlen($characters);

  for ($i = 0; $i < $length; $i++) {
      $cid .= $characters[rand(0, $characterCount - 1)];
  }
  return $cid;
}

if (!empty($_SESSION['candidateArr'])) {

  foreach ($_SESSION['candidateArr'] as $key => $candidate) {
    $Cname = $candidate['Cname'];
    $gender = $candidate['gender'];
    $party = $candidate['party'];
    $phoneno = $candidate['phoneno'];
    $age = $candidate['age'];
    $Citizenship = $candidate['Citizenship'];
    $ResidencyCode = $candidate['ResidencyCode'];
    $RC = $candidate['RC'];
    $CriminalRecord = $candidate['CriminalRecord'];
    $Nominated = $candidate['Nominated'];
    $password = $candidate['password'];

    // Generate a unique identifier for the candidate
    $CId = generatecid(); // Appending timestamp to uniqid

    if ($age > 30 && $Citizenship === 'Indian' && $ResidencyCode === $RC && $CriminalRecord === 'none' && $Nominated === 'yes') {
      // Insert the candidate data into the database

      $password = password_hash($password, PASSWORD_BCRYPT);
      
      // Prepare the insert statement
      $stmt = $con->prepare("INSERT INTO candidates (CId, Cname, gender, party, phoneno, age, Citizenship, ResidencyCode, RC, CriminalRecord, Nominated, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("issssissssss", $CId, $Cname, $gender, $party, $phoneno, $age, $Citizenship, $ResidencyCode, $RC, $CriminalRecord, $Nominated, $password);

      // Execute the insert statement
      if ($stmt->execute()) {
       // echo "<br>Candidate data inserted into the database successfully.<br>";
        echo '<script>
          alert("Candidate data inserted into the database successfully");
        </script>';
        // echo $Cname. "<br>";
        // echo $gender. "<br>";
        // echo $party. "<br>";
        // echo $phoneno. "<br>";
        // echo $age. "<br>";
        // echo $Citizenship. "<br>";
        // echo $ResidencyCode. "<br>";
        // echo $RC. "<br>";
        // echo $CriminalRecord. "<br>";  
        // echo $Nominated;
        // echo "<hr>";
        echo '
        <!DOCTYPE html>
        <html lang="en">
          <head>
            <title>Your form has been verified and details are given below</title>
            <link rel="stylesheet" href="../style.css" />
            <script>
                    function back() {
                        window.location.href = "../admin.php";
                    }
                </script>
          </head>
          <body>
            <body>
                <main>
                  <div class="box">
                    <div class="inner-box">
                        <div class="heading">
                          <h1>Selected Candidates</h1>
                        </div>
                        <div class="actual-form">
                            <div class="input-wrap">
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
                            <label for="area code to contest" style="color: black; font-size: 18px;">Residency Code : ' . $ResidencyCode . '</label>
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
                        <div class="actual-form">
                            <div class="input-wrap">
                           </div>
                        </div>
                         <div class="box">
                          <input type="submit" value="BACK" onclick="back()" class="sign-btn" />
                         </div>
                        </div>
                       
                       
                     </div>
                     
                    </div>
                </main> 
          </body>
        </html>
        ';
        echo '<script>
        window.location="../admin.php";
      </script>';
        // unset($_SESSION['candidateArr'][$key]);
      } else {
        echo "Error inserting candidate data: " . $stmt->error;
      }
    }
    unset($_SESSION['candidateArr'][$key]);
  }
  $stmt->close();
} else {
  // Handle case when no candidates are present
  echo '<script>
  alert("No candidates found");
  window.location="../admin.php";
</script>';
}
$con->close();
?>




