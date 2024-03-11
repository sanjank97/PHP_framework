<!------ Include the above in your HEAD tag ---------->
<div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                 <h4>Sign Up</h4>
            </div>
            <!-- Alert Message-->
            <div class="alert_message"></div>
            <!-- Login Form -->
            <form method="post" action="http://<?php echo $_SERVER['SERVER_NAME']?>/PHP_framework/register" id="registerForm">
              <input type="text" class="fadeIn second" name="name" placeholder="Name" required>
              <input type="email"  class="fadeIn second" name="email" placeholder="Email id" required>
              <input type="password" class="fadeIn third" name="password" placeholder=" Password" required>
              <input type="submit" name="submit"  class="fadeIn fourth" id="regsubmit-btn" value="Sign Up">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
            <a class="underlineHover" href="http://<?php echo $_SERVER['SERVER_NAME']?>/PHP_framework/login">Login</a>
            </div>
        </div>
    </div>