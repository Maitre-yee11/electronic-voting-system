<!-- <form action="actions/candlist.php" method="POST">

  <div class="container">
    <label for="areacode"><b>area code</b></label>
    <input type="text" placeholder="Enter area code" name="areacode" required>
    
    <button type="submit">Enter</button>
  </div>

</form>
 -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Enter Area Code</title>
    <link rel="stylesheet" href="style.css" />
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
            <form action="actions/candlist.php" method="POST">

              <div class="heading">
              <div class="input-wrap">
                </div>
                <h2>Enter Your Area Code</h2>
              </div>
              <div class="actual-form">
                <div class="input-wrap">
                  <input
                  placeholder="Area Code"
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <!-- <label>Area Code</label> -->
                </div>
                    

                <input type="submit" value="Submit" class="sign-btn" />
              </div>
          </div>

          <div class="carousel">
          <div class="input-wrap">
                </div>
                
            <div class="images-wrapper">
              <img src="img3.jpg" class="image img-1 show" alt="" />
            </div>

           
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>