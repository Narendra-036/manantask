<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>    
</head>
<body>
    <div class="container d-flex justify-content-center min-vh-100 align-items-center">
        <div class="card-container">
            <div class="heading">Login</div>
            <?php if (isset($validation)): ?>
                <div>
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif; ?>

            <?php if (isset($error)): ?>
                <p class="text-danger text-center pb-0 mb-0"><?= esc($error) ?></p>
            <?php endif; ?>
            <form action="/login" method="post" class="form">
                <?= csrf_field() ?>
                <input required="" class="input" type="email" name="email" id="email" placeholder="E-mail">
                <input required="" class="input" type="password" name="password" id="password" placeholder="Password">
                <span class="forgot-password">Dont have an account? <a href="/signup">Sign Up</a></span>
                <input class="login-button" type="submit" value="Sign In">
            
            </form>
            <span class="agreement"><a href="#">Learn user licence agreement</a></span>
        </div>
    </div>

    <style>
        .card-container {
    max-width: 350px;
    background: #F8F9FD;
    background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
    border-radius: 40px;
    padding: 25px 35px;
    border: 5px solid rgb(255, 255, 255);
    box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;
    margin: 20px;
    }

    .heading {
    text-align: center;
    font-weight: 900;
    font-size: 30px;
    color: rgb(16, 137, 211);
    }

    .form {
    margin-top: 20px;
    }

    .form .input {
    width: 100%;
    background: white;
    border: none;
    padding: 15px 20px;
    border-radius: 20px;
    margin-top: 15px;
    box-shadow: #cff0ff 0px 10px 10px -5px;
    border-inline: 2px solid transparent;
    }

    .form .input::-moz-placeholder {
    color: rgb(170, 170, 170);
    }

    .form .input::placeholder {
    color: rgb(170, 170, 170);
    }

    .form .input:focus {
    outline: none;
    border-inline: 2px solid #12B1D1;
    }

    .form .forgot-password {
    display: block;
    margin-top: 10px;
    margin-left: 10px;
    }

    .form .forgot-password a {
    font-size: 11px;
    color: #0099ff;
    text-decoration: none;
    }

    .form .login-button {
    display: block;
    width: 100%;
    font-weight: bold;
    background: linear-gradient(45deg, rgb(16, 137, 211) 0%, rgb(18, 177, 209) 100%);
    color: white;
    padding-block: 15px;
    margin: 20px auto;
    border-radius: 20px;
    box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 20px 10px -15px;
    border: none;
    transition: all 0.2s ease-in-out;
    }

    .form .login-button:hover {
    transform: scale(1.03);
    box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
    }

    .form .login-button:active {
    transform: scale(0.95);
    box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 15px 10px -10px;
    }

    .agreement {
    display: block;
    text-align: center;
    margin-top: 15px;
    }

    .agreement a {
    text-decoration: none;
    color: #0099ff;
    font-size: 9px;
    }
    </style>
</body>
</html>


