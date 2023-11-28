<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        *{
            padding: 0;
            margin: 0;
            font-family: sans-serif;
        }
        header{
            background-color:#2c2929;
        }
        nav {
            display: flex;
        }
        nav .logo{
            padding: 20px;
            display: inline;
        }
        .logo a{
            text-decoration: none;
            font-size: 30px;
            text-transform: uppercase;
            color: #fff;
        }
        center ul{
            list-style: none;
        }
        center ul li {
            display: inline-flex;
            margin: 30px;
            font-size: 20px;
        }
        center ul li a{
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo"><a href="#">Farmer Market</a></div>
            <center>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="login.php" >Log in</a></li>
                    <li><a href="sign_up.php">Register</a></li>
                </ul>
            </center>
        </nav>
    </header>
</body>
</html>