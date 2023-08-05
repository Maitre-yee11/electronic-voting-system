

<!-- <form action="actions/log.php" method="POST">

  <div class="container">
    <label for="VId"><b>Voter Id</b></label>
    <input type="number" placeholder="ex: 1" name="VId" required>
    
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter password" name="password" required>
    
    <button type="submit" name="loginButton">Login</button>
  </div>

</form>

 -->
<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Voter Login</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="index.html" autocomplete="off" class="sign-in-form">

              <div class="heading">
                <h2>Voter Login</h2>
              </div>
                <form action="actions/log.php" method="POST">
                </div>
              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Voter ID</label>
                </div> 
                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>
                <input type="submit" value="Login" class="sign-btn" />
              </div>


                </form>            
          </div>
          <div class="carousel">
            <div class="images-wrapper">
              <img src="C:\Users\user\Pictures\IMG_20230506_122403_973.jpg" class="image img-1 show" alt="" />
            </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
 -->


 <!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Voter Login</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="actions/log.php" method="POST" autocomplete="off" class="sign-in-form">

              <div class="heading">
                <h2>Voter Login</h2>
              </div>
              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="number"
                    name="VId"
                    required
                  />
                  <label>Voter ID</label>
                </div> 
                <div class="input-wrap">
                  <input
                    type="password"
                    name="password"
                    required
                  />
                  <label>Password</label>
                </div>
                <button type="submit" name="loginButton" class="sign-btn">Login</button>
              </div>
            </form>
          </div>
          <div class="carousel">
            <div class="images-wrapper">
              <img src="C:\Users\user\Pictures\IMG_20230506_122403_973.jpg" class="image img-1 show" alt="" />
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>


  -->


  <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Voter Login</title>
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
            <form action="actions/log.php" method="POST" autocomplete="off" class="sign-in-form">

              <div class="heading">
              <div class="input-wrap">
                </div>
                <h2>Voter Login</h2>
                <div class="input-wrap">
                </div>
              </div>
              <div class="actual-form">
                <div class="input-wrap">
                  <input
                  placeholder="Voter ID"
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="VId"
                  />
                  <!-- <label>Voter ID</label> -->
                </div> 
                <div class="input-wrap">
                  <input
                  placeholder="Password"
                    type="password"
                    minlength="4"
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
