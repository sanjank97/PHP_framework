
<!------ Include the above in your HEAD tag ---------->
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="http://<?php echo $_SERVER['SERVER_NAME']?>/PHP_framework/assets/images/user2.png" id="icon"  alt="User Icon" width="50px" height="50px"/>
            </div>
           <!-- Alert Message-->
           <div class="alert_message"></div>
            <!-- Login Form -->
            <form method="post" id="loginForm" action="http://<?php echo $_SERVER['SERVER_NAME']?>/PHP_framework/login">
                <input type="email" class="fadeIn second" name="email" placeholder="email" required />
                <input type="password" class="fadeIn third" name="password" placeholder="password" required />
                <input type="submit" name="submit"  class="fadeIn fourth" value="Log In">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
            </div>
        </div>
    </div>

    