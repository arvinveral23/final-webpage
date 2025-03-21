<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food Network</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Nav Section Start -->
  <section class="navBar">
    <div class="topNav">
      <div class="logo">
        <a href="#welcome"><span>Food</span> Network</a>
      </div>
      <div class="navItems">
        <a href="#welcome">Home</a>
        <a href="#about">About Me</a>
        <a href="#recipies">Recipies</a>
        <a href="#" class="login-btn" onclick="openModal('loginModal');"></a>
      </div>
    </div>
  </section>
  <!-- Nav Section End -->

  <!-- LOGIN MODAL -->
  <div id="loginModal" class="modal">
  <form class="modal-content animate" action="login.php" method="POST">
      <span onclick="closeModal('loginModal')" class="close" title="Close Modal">&#10005;</span>
      <h1 class="jason">Login</h1>
      <div class="input-box">
        <i class='bx bxs-user'></i>
        <input type="text" name="username" placeholder="Username" required>
      </div>
      <div class="input-box">
        <i class='bx bxs-lock-alt'></i>
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <div class="remember-forgot">
        <a href="#">Forgot password?</a>
        <button type="submit" class="btn" name="signIn">Sign In</button>
      </div>
      <div class="register-link">
        <p>Don't have an account? 
          <a href="#" onclick="openModal('signupModal'); closeModal('loginModal')">Sign up</a>
        </p>
      </div>
    </form>
</div>

  <!-- SIGNUP MODAL -->
  <div id="signupModal" class="modal">
    <form class="modal-content animate" action="register.php" method="post">
      <span onclick="closeModal('signupModal')" class="close" title="Close Modal">&#10005;</span>
      <h1 class="signup">Sign Up</h1>
      <div class="fill-up">
        <input type="text" name="fullname" placeholder="Enter Your Name" required>
        <input type="text" name="email" placeholder="Enter Email" required>
        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="password" name="password" placeholder="Enter Password" required>
      
      </div>
      <p>By creating an account you agree to our 
          <a href="#" style="color:rgb(255, 255, 255)">Terms & Privacy</a>.
      </p>
      <div class="clearfix">
        <button type="button" class="btn3-cancel-btn" onclick="closeModal('signupModal')">Cancel</button>
        <button type="submit" class="btn3-confirm-btn" name="signUp">Confirm</button>
      </div>
    </form>
  </div>
  <!-- LOGIN/SIGNUP MODALS END -->


    <!-- Welcome Section Start -->

    <section class="welcome" id="welcome">
        <div class="welcomeMain">
            <div class="welcomeLeft">
                <h1>Skip The Diet,<br>Just Eat Healthy
                <br>With <span>Food</span> Network</h1>

                <p>healthy and delicious food for you!</p>
                <button>Order Now</button>
            </div>

            <div class="welcomeRight">
                <img src="/login/img/Group 8425.png" alt="">
            </div>
        </div>
    </section>





    <!-- Welcome Section End -->
                <!-- 
            ----
            ------
            --------
            ----------- -->
    <!-- About Section Start -->
    

    <section class="about" id="about">

        <div class="aboutMain">
            <div class="aboutLeft">
                <img class="img-responsive" src="./img/Person Image.png" alt="">
            </div>

            <div class="aboutRight">
                <h1>About Me</h1>
                <p>Hey I am Arvin.We've rounded up our best, easy dinner recipes! </p>
                <button><a href="">Contact Me</a></button>
            </div>
        </div>

    </section>


    <!-- About Section End -->
              


    
    <!-- Recipies Section Start -->

    <section class="recipies" id="recipies">


        <div class="recipiesMain">


            <div class="recipiesHead">
                <h1 class="text-center" >My Recipies</h1>
                <p class="text-center" >
                    When you need to feed the family or kids, these are the easy dinner<br> recipes you turn to time and time again. With lots of healthy, quick, vegetarian, chicken, and ...</p>
            </div>


            <div class="recipieControl">
                <div class="recipiesBox">
                    <div class="recBox">
                        <img class="img-responsive" src="./img/breakfast.jpg" alt="">

                        <div class="imgDesc">
                            <h2>Breakfast</h2>
                            <p>breakfast recipes - Nothing beats fresh homemade breakfast from your kitchen!! Check out this awesome collection </p>
                        </div>
                    </div>
                    
                </div>

                <div class="recipiesBox">
                    <div class="recBox">
                        <img class="img-responsive"  src="./img/lunch.jpg" alt="">

                        <div class="imgDesc">
                            <h2>Lunch</h2>
                            <p>a meal eaten in the middle of the day, typically one that is lighter or less formal than an evening meal.</p>
                        </div>
                    </div>
                    
                </div>

                <div class="recipiesBox">
                    <div class="recBox">
                        <img class="img-responsive"  src="./img/dinner.jpg" alt="">

                        <div class="imgDesc">
                            <h2>Dinner</h2>
                            <p>Dinner will be ready in 30 minutes or less with these quick and easy recipes from Food Network.</p>
                        </div>
                    </div>
                    
                </div>

            </div>

        </div>
        


    </section>
    <!-- Status Bar Section End -->
                    <!-- 
                ----
                ------
                --------
                ----------- -->

    <!-- Footer Section -->
  <section class="footer">
    <h1 class="text-center"><span>Food</span> Network</h1>
    <h3 class="text-center">@ArvinVeral 2025 |All Rights Reserved</h3>
  </section>

  <!-- JavaScript -->
  <script>
    // Open modal by setting display to block
    function openModal(modalId) {
      document.getElementById(modalId).style.display = 'block';
    }
    // Close modal by setting display to none
    function closeModal(modalId) {
      document.getElementById(modalId).style.display = 'none';
    }

    // When page loads, check if URL contains ?showLogin=true to display the login modal
    document.addEventListener("DOMContentLoaded", function () {
      const params = new URLSearchParams(window.location.search);
      if (params.get("showLogin") === "true") {
        openModal('loginModal');
      }
    });
  </script>
</body>
</html>
</body>
</html>