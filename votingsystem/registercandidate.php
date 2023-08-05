
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<form action="actions/regcand.php" method="POST" >

  <div class="container">
    <p>
        <label for="Cname"><b>Name</b></label>
        <input type="text" placeholder="ex: Ravi Patil" name="Cname" required>
    </p>

        <label for="gender"><b>Gender</b></label>
        <input type="text" placeholder="ex: F or M" name="gender" required>
    </p>

    <p>
        <label for="party"><b>Party</b></label>
        <input type="text" placeholder="ex: BJP" name="party" required>
    </p>

    <p>
        <label for="phoneno"><b>Phone num</b></label>
        <input type="text" placeholder="ex: 9021320106" name="phoneno" pattern="[0-9]{10}"required >
    </p>

    <p>
        <label for="age"><b>Age</b></label>
        <input type="number" placeholder="ex: 31" name="age" required>
    </p>

    <p>
        <label for="Citizenship"><b>Citizenship</b></label>
        <input type="text" placeholder="ex: Indian" name="Citizenship" required>
    </p>

    <p>
        <label for="ResidencyCode"><b>Residency Code</b></label>
        <input type="text" placeholder="ex: 2100" name="ResidencyCode" required>
    </p>

    <p>
        <label for="RC"><b>Residency Code of area in which u want to contest</b></label>
        <input type="text" placeholder="ex: 2100" name="RC" required>
    </p>

    <p>
        <label for="CriminalRecord"><b>Criminal Record</b></label>
        <input type="text" placeholder="enter none if clean record" name="CriminalRecord" required>
    </p>

    <p>
        <label for="Nominated"><b>Nominated</b></label>
        <input type="text" placeholder="yes or no" name="Nominated" required>
    </p>

    <p>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter password" name="password" required>
    </p>
    
    <p>
        <label for="confirmpassword"><b>Confirm password</b></label>
        <input type="password" placeholder="Confirm password" name="confirmpassword" required>
    </p>

    <button type="submit" name="registerButton">Register</button>
  </div>

</form>
</body>
</html>
 -->



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RegisterCandidate</title>
    <link rel="stylesheet" href="style.css" />
    <!-- <script>
      function redirectToRegCandPage() {
        setTimeout(function() {
          window.location.href = "registeredSuccessfully.php";
        }, 500);
        return false;
      }
    </script> -->
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="actions/regcand.php" method="POST" autocomplete="off" class="sign-in-form" >

              <div class="heading">
                
                <h2>Register</h2>
                
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                  placeholder="Name"
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="Cname"
                  />
                  <!-- <label>Name</label> -->
                </div>
                <div class="input-wrap">
                  <input
                  placeholder="Gender"
                    type="text"
                    minlength="1"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="gender"
                  />
                  <!-- <label>Gender</label> -->
                </div>

                <div class="input-wrap">
                    <input
                  placeholder="Party"
                      type="text"
                      minlength="1"
                      class="input-field"
                      autocomplete="off"
                      required
                      name="party"
                    />
                    <!-- <label>Party</label> -->
                </div>

                <div class="input-wrap">
                    <input
                  placeholder="Phone Number"
                      type="number"
                      pattern="[0-9]{10}"
                      title="Please enter exactly 10 digits."
                      class="input-field"
                      autocomplete="off"
                      required
                      name="phoneno"
                    />
                    <!-- <label>Phone Number</label> -->
                </div>
                <div class="input-wrap">
                    <input
                  placeholder="Age"
                      type="number"
                      pattern="[0-9]{2}"
                      class="input-field"
                      autocomplete="off"
                      required
                      name="age"
                    />
                    <!-- <label>Age</label> -->
                  </div>
                
              </div>
          </div>

          <div class="carousel">
            <div class="input-wrap">
                <input
                placeholder="Citizenship"
                  type="text"
                  minlength="1"
                  class="input-field"
                  autocomplete="off"
                  required
                  name="Citizenship"
                />
                <!-- <label>Citizenship</label> -->
            </div>
            <div class="input-wrap">
                <input
                placeholder="Residency Code"
                  type="number"
                  minlength="4"
                  class="input-field"
                  autocomplete="off"
                  required
                  name="ResidencyCode"
                />
                <!-- <label> Residency Code</label> -->
            </div>
            <div class="input-wrap">
                <input
                placeholder="Enter Residency Code to Contest"
                  type="number"
                  minlength="4"
                  class="input-field"
                  autocomplete="off"
                  required
                  name="RC"
                />
                <!-- <label>Enter Residency Code to Contest</label> -->
            </div>
            <div class="input-wrap">
                <input
                placeholder="Criminal Record"
                  type="text"
                  minlength="1"
                  class="input-field"
                  autocomplete="off"
                  required
                  name="CriminalRecord"
                />
                <!-- <label>Criminal Record</label> -->
            </div>
            <div class="input-wrap">
                <input
                placeholder="Nominated[Y/N]"
                  type="text"
                  minlength="1"
                  class="input-field"
                  autocomplete="off"
                  required
                  name="Nominated"
                />
                <!-- <label>Nominated[Y/N]</label> -->
            </div>
            <div class="input-wrap">
                <input
                placeholder="Password"
                  type="password"
                  minlength="3"
                  class="input-field"
                  autocomplete="off"
                  required
                  name="password"
                />
                <!-- <label>Password</label> -->
            </div>
            <div class="input-wrap">
                <input
                placeholder="Confirm Password"
                  type="password"
                  minlength="3"
                  class="input-field"
                  autocomplete="off"
                  required
                  name="confirmpassword"
                />
                <!-- <label>Confirm password</label> -->
            </div>
            <input type="submit" value="Register" class="sign-btn" />

              </div>

            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>