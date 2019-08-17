<?php

    include "connect.php";
    
    session_start();
    echo "<script>alert('" . $_POST["username"] . " " . $_POST["password"] . "');</script>";
    if(isset($_POST["username"]) && isset($_POST["password"])){
            $sql = "SELECT * FROM users WHERE username='" . $_POST["username"]. "' AND password='" . $_POST["password"] . "'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) == 1){
                $_SESSION["already-registered"] = true;
                header("Location: index.php");
            }
            else{
                $_SESSION["username"] = $_POST["username"];
                $_SESSION["password"] = $_POST["password"];
            }

    }



?>

<!DOCTYPE html>


<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Flat Login</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="style-js.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- CSS
  ================================================== -->

    <!--[if lt IE 9]>
		<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div class="form-action" id="title">
		<center>
			<h1>Welcome to EEDMIS!</h1>
		</center>
	</div>
    <form method="POST" action="registration_controller.php">
        <div class="container">
            <div class="flat-form">
                <div id="register" class="form-action show">
                    <h1>Register</h1>
                    <p>
                        You should totally sign up for our super awesome service.
                        It's what all the cool kids are doing nowadays.
                    </p>
                    <form>
                        <ul>
                            <li>
                                <input type="text" name="firstname" placeholder="First Name" />
                            </li>
                            <li>
                                <input type="text" name="lastname" placeholder="Last Name" />
                            </li>
                            <li>
                                <input type="text" name="email" placeholder="Email(Optional)" />
                            </li>
                            <li>
                                <input type="submit" name="submit" value="Sign Up" class="button" />
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </form>



    <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</body>
</html>