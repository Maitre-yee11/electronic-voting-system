<!-- <form action="actions/gvote.php" method="POST">

  <div class="container">
    <label for="CId"><b>cid</b></label>
    <input type="number" placeholder="Enter candidate Id" name="CId" required>

    <button type="submit">VOTE</button>
  </div>

</form> -->


<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vote</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="../gvote.html" autocomplete="off" class="sign-in-form">

              <div class="heading">
                <h2>Vote</h2>
              </div>
              <div class="actual-form">
                
                <div class="input-wrap">
                    <input
                          type="text"
                          class="input-field"
                          autocomplete="off"
                          required
                        />
                        <label>Enter Candidate ID</label>
                      </div> 


                <input type="submit" value="Vote" class="sign-btn" />
              </div>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="C:\Users\user\Pictures\IMG_20230506_122403_973.jpg" class="image img-1 show" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Your vote is important</h2>
                </div>
              </div>

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
    <title>Vote</title>
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
            <form action="actions/gvote.php" autocomplete="off" class="sign-in-form" method="POST">

              <div class="heading">
              <div class="input-wrap">
                </div>
               <div class="input-wrap">
                 </div>
                <h2>Vote</h2>
              </div>
              <div class="actual-form">
                
                <div class="input-wrap">
                  <!-- <input
                    type="text"
                    class="input-field"
                    placeholder="Enter candidate Id" name="CId"
                    autocomplete="off"
                    required
                  /> -->
                  <input type="number" placeholder="Enter Candidate ID" name="CId" required>
                  <!-- <label>Enter Candidate ID</label> -->
                </div> 

                <input type="submit" value="Vote" class="sign-btn" />
              </div>
            </form>
          </div>

          <div class="carousel">
          <div class="input-wrap">
                           </div>
            <div class="images-wrapper">
            <div class="input-wrap">
              </div>
              <img src="img2.jpg" class="image img-1 show" alt="" />
            </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
