<?php
session_start();
include ('connect.php');

  // Check if there are candidates in the session variable
  if (!empty($_SESSION['candidateArr'])) {
    // Iterate over the candidates array
    foreach ($_SESSION['candidateArr'] as $candidate) {
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
      // Access more fields as needed


      // Print candidate information
      // echo "<p>Name: $Cname</p>";
      // echo "<p>Gender: $gender</p>";
      // echo "<p>Age: $age</p>";
      // echo "<p>Phone num: $phoneno </p>";
      // echo "<p>Citizenship: $Citizenship</p>";
      // echo "<p>Party: $party</p>";
      // echo "<p>Residency Code: $ResidencyCode</p>";
      // echo "<p>Criminal Record: $CriminalRecord</p>";
      // echo "<p>Nominated: $Nominated</p>";
      // // Add more fields as needed
      echo "<hr>";


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
                        <h1>Pending List</h1>
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


    }

    
  } else {
    // Handle case when no candidates are present
    echo '<script>
    alert("No pending candidates found");
    window.location="../admin.php";
</script>';
  }
  ?>
</body>
</html>


