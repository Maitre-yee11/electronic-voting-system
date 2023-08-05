<!-- <!DOCTYPE html>
<html>
<head>
	<title>Button Example</title>
	<script>
		function performAction1() {
			window.location.href = "registercandidate.php";
		}
        function performAction2() {
			window.location.href = "logincandidate.php";
		}
	</script>
</head>
<body>
	<button type="button" onclick="performAction1()">REGISTER</button>
    <button type="button" onclick="performAction2()">LOGIN</button>
</body>
</html> -->






<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CHOOSE</title>
    <link rel="stylesheet" href="style.css" />
          
    <script>
		function performAction1() {
			window.location.href = "registercandidate.php";
		}
        function performAction2() {
			window.location.href = "logincandidate.php";
		}
		function performAction3() {
			window.location.href = "home.php";
		}

	</script>
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <!-- <form action="" autocomplete="off" class="sign-in-form"> -->
              <div class="heading">
                <h2>CHOOSE :</h2>
              </div>
              <div class="actual-form">
                <input type="submit" value="REGISTER" onclick="performAction1()" class="sign-btn" />
                <input type="submit" value="LOGIN" onclick="performAction2()" class="sign-btn" />
                <input type="submit" value="BACK" onclick="performAction3()" class="sign-btn" />
              </div>
          </div>
          <div class="carousel">
            <div class="images-wrapper">
              <img src="img7.jpg" class="image img-1 show" alt="" />
            </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>