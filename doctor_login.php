<html>
    <head>
        <link href="css/login.css" rel="stylesheet"/>
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/login.js"></script>
    </head>
    <body>
        <div id="box">
            <div id="main"></div>
            
            <div id="loginform">
                <form action="doctor_signup.php" method="GET">
                    <h1>LOGIN</h1>
                    <input name="email" type="email" placeholder="Email"/><br>
                    <input name="password" type="password" placeholder="Password"/><br>
                    <button name="login" value="login">LOGIN</button>
                </form>
            </div>
            
            <div id="signupform">
                <form action="doctor_signup.php" method="GET">
                    <h1>SIGN UP</h1>
                    <input  name="name" type="text" placeholder="Full Name"/><br>
                    <input  name="mobile" type="text" placeholder="Mobile"/><br>
                    <input name="email" type="email" placeholder="Email"/><br>
                    <input name="password" type="password" placeholder="Password"/><br>
                    <button name="signup" value="signup">SIGN UP</button>
                </form>
            </div>
            
            <div id="login_msg">Have an account?</div>
            <div id="signup_msg">Don't have an account?</div>
            
            <button id="login_btn">LOGIN</button>
            <button id="signup_btn">SIGN UP</button>
            
            
        </div>
    </body>
</html>
