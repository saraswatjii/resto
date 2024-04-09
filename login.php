<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel='stylesheet' href='css/login.css'>
    <style>
        .error{
            color: black;
            font-size: 20px;
            font-weight: bold ;
        }
        </style>
</head>

<body>

    <body>
        <section>
            
            <div class="form-box">
                <div class="form-value">
                    <form action="loginpro.php" method="post">
                        <h2>Login</h2>
                        <?php if(isset($_GET['error'])){ ?>
          <p class="error"><?php echo  $_GET['error'];?></p>
                                <?php } ?>
                        <div class="inputbox"> <ion-icon name="mail-outline"></ion-icon> <input type="text"
                                name="username" required>
                            <label>Email</label>
                        </div>
                        <div class="inputbox"> <ion-icon name="lock-closed-outline"></ion-icon> <input type="password"
                                name="password" required> <label>Password</label> </div>
                        <div class="forget"> <label><input type="checkbox">Remember Me</label> <a href="#">Forgot
                                Password</a> </div> <input type="submit" class="button" value="login">
                        <div class="register">
                            <p>Don't have an account? <a href="#">Sign Up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</body>

</html>