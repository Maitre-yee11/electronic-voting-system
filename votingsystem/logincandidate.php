<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Candidate Login</title>
    <link rel="stylesheet" href="style.css" />
    <script>
		function performAction1() {
			window.location.href = "home.php";
		}
	</script>
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="actions/logcandidate.php" method="POST" autocomplete="off" class="sign-in-form">

              <div class="heading">
              <div class="input-wrap">
                </div>
                <h2>Candidate Login</h2>
              </div>
              <div class="actual-form">
                <div class="input-wrap">
                  <input
                  placeholder="Candidate Name"
                    type="text"
                    minlength="1"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="Cname"
                  />
                  <!-- <label>Candidate name</label> -->
                </div> 
                <div class="input-wrap">
                  <input
                  placeholder="Password"
                    type="password"
                    minlength="1"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="password"
                  />
                  <!-- <label>Password</label> -->
                </div>
                <input type="submit" value="Login" class="sign-btn" name="loginButton" />
                <input type="submit" value="Back"onclick="performAction1()" class="sign-btn" />
              </div>
            </form>
          </div>
          <div class="carousel">
            <div class="images-wrapper">
              <img src="img.jpg" class="image img-1 show" alt="" />
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
