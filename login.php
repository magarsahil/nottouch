<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        *{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: "Poppins", sans-serif;
	}

	body{
		display: flex;
		justify-content: center;
		align-items: center;
		min-height: 100vh;
		background: url('image/fruit.jpg');
		background: cover;
		background-position:center;
	}

	.wrapper{
		width: 420px;
		background: transparent;
		border: 2px solid ;
		color: #fff;
		border-radius: 10px;
		backdrop-filter: blur(10px);
		padding: 30px 40px;
	}
	.wrapper h1{
		font-size: 36px;
		text-align: center;
	}
	.wrapper .input-box{
		position: relative;
		width: 100%;
		height: 50px;
		background: transparent;
		margin: 30px 0;
	}
	.input-box input{
		width: 100%;
		height: 100%;
		background: transparent;
		border: none;
		outline: none;
		border: 2px solid rgba(225,225, 225, .2);
		border-radius:40px ;
		font-size: 16px;
		color: #fff;
		padding: 20px 45px 20px 20px;
	}
	.input-box input::placeholder{
		color: #fff;
	}
	.input-box i{
		position: absolute;
		right: 20px;
		top: 35%;
		transform: translate(-50%);
		font-size: 20px;
	}
	.wrapper .btn{
		width: 100%;
		height: 45px;
		background: #ffffff;
		border: none;
		outline: none;
		border-radius: 40px;
		box-shadow: 0 0 10px rgba(0, 0, 0, .1);
		cursor: pointer;
		font-size: 16px;
		color: #333;
		font-weight: 600;
	}
	.wrapper .register-link{
		font-size: 14.5px;
		text-align: center;
		padding: 15px;
	}
	.register-link p a{
		color: #fff;
		text-decoration: none; 
		font-weight: 600;
	}
	.register-link p a{
		text-decoration: underline;
	}
	.register-link a:hover{
		color: red;
		text-decoration: strong;
	}

	@media (max-width:991px){
		*{
			padding:7px;
		}
		body{
			min-height: 85vh;
		}
	}

    </style>
</head>

<body>
    <div class="wrapper">
        <form action="log.php" method="post">
            <h1>Log in</h1>
            <div class="input-box">
                <input type="text" placeholder="Enter your email" name="email">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password">
                <i class='bx bxs-lock'></i>
            </div>
            <div>
                <button type="submit" class="btn">Log In</button></div>
            <div class="register-link">
                <p>Don't have an account?
                    <a href="register.html">Register</a>
                </p>
            </div>

        </form>
    </div>
</body>
</html>