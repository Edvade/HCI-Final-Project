<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			$user_id = random_num(20);
			$query = "INSERT into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body{
        background-image: url(backgrounddashboard.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: fixed;
        height: 100vh;
    }

    .container{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 90vh;

    }

    .box{
        background-color: beige;
        display: flex;
        flex-direction: column;
        padding: 25px 25px;
        border-radius: 20px;

    }

    .form-box{
        width: 450px;
        margin: 0px 10px;
    }

    .form-box header{
        font-size: 30px;
        padding-bottom: 10px;
        border-bottom: 1px solid #000000;
        margin-bottom: 10px;
        letter-spacing: 2px;
        font-family: 'Montserrat', sans-serif;
        text-align: center;
    }
    .form-box .field{
        display:flex;
        margin-bottom: 10px;
        flex-direction: column;
    }
    #username, #password{
        height: 40px;
        width: 100%;
        font-size: 16px;
        padding: 0 16px;
    }
    input{
        border: none;
        width: 100%;
        height: 36px;
        margin-top: 10px;
        margin-right: auto;
        margin-left: auto;
        margin-bottom: 10px;
    }

</style>
</head>
<body>
<div class="container">
        <div class="box form-box">
            <header>SOULSHARE</header>
            <form method="post">
                <div class="username">
                    <input type="text"autocomplete="off" name="user_name" id="username" placeholder="User Name">
                </div>

                <div class="password">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>

                <div class="submit">
                    <input type="submit" name="submit" id="submit" value="Signup" required>
                </div>      
                
                <div class="signup">
                    Already Have an Account? <a href="login.php">Click Here</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
