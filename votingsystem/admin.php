<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
		function performAction1() {
			window.location.href = "actions/viewcontestants.php";
		}
        function performAction2() {
			window.location.href = "actions/selectcandidates.php";
		}
        function logout(){
            window.location.href = "actions/logoutAdmin.php";
        }
	</script>
</head>
<body>
    <button type="button" onclick="performAction1()">View Contestants</button>
    <button type="button" onclick="performAction2()">Select Candidates</button>
    <button type="button" onclick="logout()">Logout</button>
</body>
</html>

 -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin</title>
    <link rel="stylesheet" href="style.css" />
    <script>
		function performAction1() {
			window.location.href = "actions/viewcontestants.php";
		}
        function performAction2() {
			window.location.href = "actions/selectcandidates.php";
		}
        function logout(){
            window.location.href = "actions/logoutAdmin.php";
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
                <h2>Admin</h2>
              </div>
              <div class="actual-form">
                <input type="submit" value="View Pending List" onclick="performAction1()" class="sign-btn" />
                <input type="submit" value="Select Candidates" onclick="performAction2()" class="sign-btn" />
                <input type="submit" value="Log out" onclick="logout()" class="sign-btn" />
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