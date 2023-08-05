<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Voted</title>
    <link rel="stylesheet" href="style.css" />
    <style>
      .tick {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-size: 3rem;
        color: green;
      }
      .tick:before {
        content: "\2714";
      }
      .sign-btn {
        margin-top: 3.5rem;
        font-size: 1rem; /* adjust the font size as needed */
        padding: 0.5rem 1rem; /* adjust the padding as needed */
        width: 20%; /* set to "auto" or a specific value to adjust the button width */
      }
    </style>

    <script>
            function performAction1() {
                window.location.href = "candidateHome.php";
            }
        </script>

  </head>
  <body>
    <body>
        <main>
          <div class="box">
             <div class="tick">Registered Successfully
              <input type="submit" value="Return" onclick="performAction1()" class="sign-btn" />
             </div>
             <!-- <input type="submit" value="Return" class="sign-btn" /> -->
            </div>
        </main> 
  </body>
</h