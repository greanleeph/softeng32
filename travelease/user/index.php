<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">  <!-- CSS LINKED HERE -->
</head>
<body>
    <div class="header finisher-header"></div>  <!-- Background Header -->

    <main>  <!-- Wrapped content to prevent layout shifts -->
        <!-- Sign Up Container -->
        <div class="container" id="signupContainer" style="display:none;">
            <img src="bot.png" alt="TravelEase Logo" style="width: 50px; height:fit-content;"> <!--IMAGE LOCATION HERE-->
            <h1 class="form-title">Register</h1>
            <form method="post" action="">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="fName" id="fName" placeholder="First Name" required>
                    <label for="fName">First Name</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                    <label for="lName">Last Name</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="emailSignup" placeholder="Email" required>
                    <label for="emailSignup">Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="passwordSignup" placeholder="Password" required>
                    <label for="passwordSignup">Password</label>
                </div>
                <input type="submit" class="btn" value="Sign Up" name="signUp">
            </form>
            <p class="or">-----------or----------</p>
            <div class="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
            </div>
            <div class="links">
                <p>Already have an account?</p>
                <button id="signInButton">Sign In</button>
            </div>
        </div>

        <!-- Sign In Container -->
        <div class="container" id="signinContainer">
            <img src="bot.png" alt="TravelEase Logo" style="width: 50px; height:fit-content;"> <!--IMAGE LOCATION HERE-->
            <h1 class="form-title">Sign In</h1>
            <form method="post" action="">
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="emailSignin" placeholder="Email" required>
                    <label for="emailSignin">Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="passwordSignin" placeholder="Password" required>
                    <label for="passwordSignin">Password</label>
                </div>
                <p class="recover">
                    <a href="#">Recover Password</a>
                </p>
                <input type="submit" class="btn" value="Sign In" name="signIn">
            </form>
            <p class="or">-----------or----------</p>
            <div class="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
            </div>
            <div class="links">
                <p>Don't have an account yet?</p>
                <button id="signUpButton">Sign Up</button>
            </div>
        </div>
    </main>
    <script src="finisher-header.es5.min.js" type="text/javascript"></script>
    <script src="script.js"></script> <!-- SCRIPT LOCATION HERE -->
    <script type="text/javascript">
        new FinisherHeader({
          "count": 12,
          "size": {
            "min": 1500,
            "max": 1500,
            "pulse": 0
          },
          "speed": {
            "x": {
              "min": 0.6,
              "max": 3
            },
            "y": {
              "min": 0.6,
              "max": 3
            }
          },
          "colors": {
            "background": "#058c1d",
            "particles": [
              "#000000",
              "#07ff4a",
              "#3eff46",
              "#0025ff"
            ]
          },
          "blending": "overlay",
          "opacity": {
            "center": 0.6,
            "edge": 0
          },
          "skew": 0,
          "shapes": [
            "c"
          ]
        });
    </script>
</body>
</html>
