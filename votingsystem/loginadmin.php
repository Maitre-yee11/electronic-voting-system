<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <form action="actions\verifyadminlogin.php" method="POST">

    <div class="container">
    <label for="AId"><b>Admin Id</b></label>
    <input type="text" placeholder="ex: 1" name="AId" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter password" name="password" required>
    
    <button type="submit" name="loginButton">Login</button>
    </div>

    </form>
</body>
</html> -->

<!-- 
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="actions\verifyadminlogin.php" method="POST" autocomplete="off" class="sign-in-form">

              <div class="heading">
                <h2>Admin Login</h2>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="1"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Admin ID</label>
                </div>
                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="1"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>
                <input type="submit" value="Login" class="sign-btn" />
                <input type="submit" value="Back" class="sign-btn" />
              </div>
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
</html> -->

<!-- 

running candidate wala
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Candidate Login</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="actions\verifyadminlogin.php" method="POST" autocomplete="off" class="sign-in-form">

              <div class="heading">
                <h2>Admin Login</h2>
              </div>
              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="number"
                    minlength="1"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="AId"
                  />
                  <label>Candidate name</label>
                </div> 
                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="1"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="password"
                  />
                  <label>Password</label>
                </div>
                <input type="submit" value="Login" class="sign-btn" name="loginButton" />
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
</html> -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Login</title>
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
            <form action="actions/verifyadminlogin.php" method="POST" autocomplete="off" class="sign-in-form">

              <div class="heading">
              <div class="input-wrap">
                </div>
                <h2>Admin Login</h2>
              </div>
              <div class="input-wrap">
                </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                  placeholder="Admin ID"
                    type="number"
                    minlength="1"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="AId"
                  />
                  <!-- <label>Admin ID</label> -->
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
                <input type="submit" value="Login" class="sign-btn" />
                <input type="submit" value="Back"onclick="performAction1()" class="sign-btn" />
              </div>
          </div>
          <div class="carousel">
            <div class="images-wrapper">
              <img src="img.jpg" class="image img-1 show" alt="" />
            </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>