
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="./css/register.css">
    <style>
        body{
            background-image:url("./image/fruit.jpg")
        }
        .error{
            color:red;
        }
        .wrapper .but .reg{
            width: 60%;
            height: 30px;
            font-size: 20px;
            border-radius: 10px;
        }
        .wrapper .but .reg:hover{
            background-color: blue;
            color: white;
            
        }
        .wrapper .but .res{
            width: 30%;
            height: 30px;
            font-size: 20px;
            border-radius:10px ;
        }
        .wrapper .but .res:hover{
            background-color: red;
            color: white;
        }
        .wrapper .log{
            text-align: center;
            margin: 10px;
        }
        .log a{
            color: rgb(255, 255, 255);
        }
        .log a:hover{
            color: rgb(70, 70, 217);
        }
    </style>
</head>
<body>
    <div>
        <form class="wrapper" action="signup.php" method ="post" onsubmit="formvalidation()">
            <h1>Registration</h1>
            <div class="input-box">
                <input type="text" id="name" placeholder="Enter your Name"  name="name">
                <i class='bx bxs-user' ></i>
                <span class="error" id="nameError"></span>
            </div>
            <div class="input-box">
                
                <input type="email" id="email" placeholder="Enter your Email" name="email">
                <i class='bx bxl-gmail'></i>
                <span class="error" id="emailError"></span>
                
            </div>
            <div class="input-box">
                <input type="password" id="password" placeholder="Enter your Password" name="password">
                <i class='bx bxs-lock'></i>
                <span class="error" id="passwordError"></span>
            </div>
            <div class="input-box">
                <input type="password" id="repassword" placeholder="Confirm Password">
                <i class='bx bxs-lock'></i>
                <span class="error" id="repasswordError"></span>
            </div>
            <div class="but">
                <input type="submit" class="reg"  value="Register">
                <input type="reset" class="res" value="Reset">
            </div>
            <div class="log"><a href="#"> I already have an account?</a></div>
        </form>
    </div>
    <script>
        function formvalidation() {
            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;
            let repassword = document.getElementById('repassword').value;

            let nameError = document.getElementById('nameError');
            let emailError = document.getElementById('emailError');
            let passwordError = document.getElementById('passwordError');
            let repasswordError = document.getElementById('repasswordError');

            let phonePattern = /^\d{10}$/;
            let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            let passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;

            if (name) {
                nameError.textContent = '';
            } else {
                nameError.textContent = 'Please enter your username.';
            }

            if (email) {
                if (emailPattern.test(email)) {
                    emailError.textContent = '';
                } else {
                    emailError.textContent = 'Please enter a valid email address.';
                }
            } else {
                emailError.textContent = 'Please enter your email address.';
            }

            if (password) {
                if (passwordPattern.test(password)) {
                    passwordError.textContent = '';
                } else {
                    passwordError.textContent = 'Password must have at least one uppercase letter, one lowercase letter, one digit, and be at least 6 characters long.';
                }
            } else {
                passwordError.textContent = 'Please enter a password.';
            }

            if (repassword) {
                if (password === repassword) {
                    repasswordError.textContent = '';
                } else {
                    repasswordError.textContent = 'Passwords do not match.';
                }
            } else {
                repasswordError.textContent = 'Please re-enter your password.';
            }


            return !(nameError.textContent || phoneError.textContent || emailError.textContent || passwordError.textContent || repasswordError.textContent);
        }
    </script>
</body>
</html>
