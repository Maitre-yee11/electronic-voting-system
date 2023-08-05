<?php
session_start();
?>

<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Get Area Code</title>
    <link rel="stylesheet" href="../style.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="index.html" autocomplete="off" class="sign-in-form">
              <div class="heading">
                <h2>Your Area Code</h2>
              </div>  
                <input type="text" name="sessionValue" value="<?php echo $_SESSION['areacode']; ?>" readonly>      
                <input type="submit" value="Return" class="sign-btn" />
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
</html>
 -->

 <!-- <!DOCTYPE html>
<html lang="en">
  <head>
  <script>
		function performAction1() {
			window.location.href = "../options.php";
		}
	</script>
    <title>Get Area Code</title>
    <link rel="stylesheet" href="../style.css" />
    <style>
      .input-field {
        font-size: 20px;
      }
    </style>
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="" autocomplete="off" class="sign-in-form">
              <div class="heading">
                <h2>Your Area Code</h2>
              </div>  
                <input type="text" name="sessionValue" value="<?php echo $_SESSION['areacode']; ?>" readonly class="input-field">      
                <button type="button" onclick="performAction()" class="sign-btn">back</button>
              </div>
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
</html> -->


<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <script>
    function performAction() {
      window.location.href = "../options.php";
    }
  </script>
  <title>Get Area Code</title>
  <link rel="stylesheet" href="../style.css" />
  <style>
    .input-field {
      font-size: 20px;
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
              <h2>Your Area Code</h2>
            </div>
            <input type="text" name="sessionValue" value="<?php echo $_SESSION['areacode']; ?>" readonly class="input-field">
            <button type="submit" class="sign-btn">Back</button>
          </form>
        </div>
        <div class="carousel">
          <div class="images-wrapper">
            <img src="img3.jpg" class="image img-1 show" alt="" />
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>

 -->






 <?php
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
          width: 100%;
          max-width: 1020px;
          height: 520px;
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
                       
                            <h2>Area Code</h2>
                            
                        </div>';
                            echo $_SESSION['areacode'];
                            echo '
                            <div class="input-wrap">
                           </div>
                        <input type="submit" value="Return" class="sign-btn" />
                        
                    </form>
                </div>
                <div class="carousel">
                <div class="input-wrap">
                </div>
                
                    <div class="images-wrapper">
                        <img src="img6.jpg" class="image img-1 show" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>';
?>
