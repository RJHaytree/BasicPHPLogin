<html>
    <head>
        <style>
            @import url(https://fonts.googleapis.com/css?family=Roboto:300);

            .loginPage {
                width: 360px;
                padding: 7% 0 0;
                margin: auto;
            }
            .form {
                position: relative;
                z-index: 1;
                background: #ffffff;
                max-width: 360px;
                margin: 0 auto 100px;
                padding: 45px;
                text-align: center;
                box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            }
            .form input {
                font-family: "Roboto", sans-serif;
                outline: 0;
                background: #f2f2f2;
                width: 100%;
                border: 0;
                margin: 0 0 15px;
                padding: 15px;
                box-sizing: border-box;
                font-size: 14px;
            }
            .form button {
                font-family: "Roboto", sans-serif;
                text-transform: uppercase;
                outline: 0;
                background: #4caf50;
                width: 100%;
                border: 0;
                padding: 15px;
                color: #ffffff;
                font-size: 14px;
                -webkit-transition: all 0.3 ease;
                transition: all 0.3 ease;
                cursor: pointer;
            }
            .form button:hover,.form button:active,.form button:focus {
                background-color: #43a047;
            }
            .form .message {
                margin: 15px 0 0;
                font-family: "Roboto", sans-serif;
                color: #b3b3b3;
                font-size: 12px;
            }
            .form .message a {
                color: #4caf50;
                text-decoration: none;
            }
            h2 {
                font-size: 20px;
                font-family: "Roboto", sans-serif;
                padding-bottom: 10px;
            }
            body {
                background: #10529f;
            }
        </style>
    </head>

    <body>

        <div class="loginPage">
            <div class="form">
                <form class="registerForm" action="register.php" method="POST">
                    <h2>Basic Staff Manager</h2>
                    <input type="text" name="employeeKey" placeholder="employee key" required autocomplete="off"/>
                    <input type="text" name="regEmail" placeholder="email address"/ required>
                    <input type="password" name="regPassword" placeholder="password" required autocomplete="off"/>
                    <input type="password" name="regPasswordRepeat" placeholder="repeat password" required autocomplete="off"/>
                    <submit>
                        <button>create</button>
                    </submit>
                    <p class="message">Already have an account? 
                        <a href="public/log_in.php">Sign in</a>
                    </p>
                </form>
            </div>
        </div>
    </body>

</html>