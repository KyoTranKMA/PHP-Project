<?

use App\Controllers\UserController;

    if(UserController::isLoggedIn()){
        if ($_SESSION['level'] == 1){
            header("Location: /manager/user");
        } else {
            header("Location: /index");
        }
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/vendor/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Public/css/login-style.css">
</head>

<body>
    <div class="container" id="container">
        
        <div class="form-container sign-up">
            <form id="sign-up-form" name="frmPOST" method="POST" action="/registery">
                <h1>Create account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa fa-google"></i></a>
                    <a href="#" class="icon"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="icon"><i class="fa fa-github"></i></a>
                </div>
                <p style="font-weight: bolder; margin: 10px 0;">OR</p>
                <span>Register with your email</span>
                <input type="text" name="username" id="username" placeholder="Enter your username.">
                    <span style="color: red;"><?= $errors['username'] ?? ''?></span>
                <input type="email" name="email" id="email" placeholder="Enter your email.">
                    <span style="color: red;"><?= $errors['email'] ?? ''?></span>
                <input type="password" name="password" id="password" placeholder="Enter your password.">
                    <span style="color: red;"><?= $errors['password'] ?? ''?></span>
                <input type="password" name="repassword" id="repassword" placeholder="Re-enter your password.">
                <span style="color: red;"><?= $errors['repassword'] ?? ''?></span>
                <button>Sign up</button>
            </form>
            <form action="" class="show" id="forgot-form">
                <h1>Forgot Password?</h1>
                <p>Enter your email to reset your password.</p>
                <input type="email" placeholder="Your email">
                <button>Reset Password</button>
            </form>
        </div>

        <div class="form-container sign-in">
            <form form name="frmPOST" method="POST" action="/login">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa fa-google"></i></a>
                    <a href="#" class="icon"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="icon"><i class="fa fa-github"></i></a>
                </div>
                <p style="font-weight: bolder;margin: 10px 0;">OR</p>
                <span>Sign in with your username</span>
                <input type="text" name="username" id="username" placeholder="Enter your username.">
                    <span style="color: red;"><?= $errors['username'] ?? ''?></span>
                <input type="password" name="password" id="password" placeholder="Enter your password.">
                <span style="color: red;"><?= $errors['password'] ?? ''?></span>
                <p style="cursor: pointer;" id="forgot">Forgot your password?</p>
                <button type="submit" name="login">Sign in</button>
            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right"> 
                    <h1>Welcome Back!</h1>
                    <img src="/Public/images/logo.png" alt="" style="height:100px" >
                    <h3>PaPals - Enjoy your meals</h3>
                <p>Sign in to your account to continue.</p>
                <button class="hidden" id="register">Sign up</button>
            </div>
            
            <div class="toggle-panel toggle-left"> 
                <h1>Welcome to Palpals!</h1>
                <img src="/Public/images/logo.png" alt="" style="height:100px" >
                <p>Register to be a part of us for much more site features.</p>
                <button class="hidden" id="login">Sign in</button>
                </div>
            </div>
        </div>
    </div>

    <script src="/Public/js/login-page.js"></script>
</body>
</html> 
