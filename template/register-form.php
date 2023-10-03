<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!--CSS-->
    <link href="../css/template-style.css" rel="stylesheet" href="text/css">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/a849a4f756.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="layout">
        <div class="header">
            <div class="brand">
                <div class="first_name">Test</div>
                <div class="second_name">Application</div>
            </div>
            <div class="navigation">
                <li class="scroll-to-section" id="login"><a id="login" href="login-form.php">Login</a></li>
                <li class="scroll-to-section" id="register"><a id="register" href="register-form.php">Register</a></li>
            </div>
        </div>
        <div class="container">
            <form action="" method="POST">
                <b><p id="sign_up">Sign Up</p></b>
                <div clas="input_name_with_icon_register">
                    <input class="input_field" name="name" id="input_name_register" type="text" placeholder="Name">
                    <i class="fa-solid fa-user" id="user_icon_register"></i>
                </div>
                <div class="input_email_with_icon_register">
                    <input class="input_field" name="email"  id="input_email_register" type="email" placeholder="Email">
                    <i class="fa-solid fa-envelope" id="email_icon_register"></i>
                </div>
                <div class="input_password_with_icon_register">
                    <input class="input_field" id="input_password_register" name="password" type="password" placeholder="Password">
                    <i class="fa-solid fa-lock" id="lock_icon_register"></i>
                    <button id="toggle_pwd" onclick="togglePassword()" type="button">
                        <i class="fas fa-eye" id="see_pwd"></i>
                    </button>
                </div>
                <div class="terms_conditon">
                    <input type="checkbox" id="checkbox" required>
                    <p id="t&c"> I agree to Terms & Conditions</p>
                </div>
                <div>
                    <button type="submit" id="register_button" name="register_button" value="Register"> Register </button>
                </div>
                <div class="ask_to_login">
                    <p>Already have an account?</p>
                    <a id="login_2" href="login-form.php">Sign In</a>
                </div>
            </form>
        </div>
        <div class="footer">
            <div class="id">
                <p id="idpertama">
                    Copyright © 2023 PBL Well Architecture, Politeknik Negeri Batam.
                </p>
                <p id="idkedua">
                    design by RKS a malam
                </p>
            </div>
        </div>
    </div>
</body>

<script>
    function togglePassword() {
        var passwordField = document.getElementById("input_password_register");
        var toggleButton = document.getElementById("toggle_pwd");
        var seePwdIcon = document.getElementById("see_pwd");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            seePwdIcon.className = "fas fa-eye-slash";
        } else {
            passwordField.type = "password";
            seePwdIcon.className = "fas fa-eye";
        }
    }
</script>
<?php
require_once "../register.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = new RegisterUser();

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = $user->register($name, $email, $password);

}
?>
</html>