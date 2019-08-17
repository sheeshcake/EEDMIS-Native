<?php
    include "connect.php";
    
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
        
    <div class="container">
    <div class="flat-form">
        <ul class="tabs">
            <li>
                <a href="#login" class="active">Login</a>
            </li>
            <li>
                <a href="#register">Register</a>
            </li>
            <li>
                <a href="#reset">Reset Password</a>
            </li>
        </ul>
        <form method="POST" action="login.php">
                <div id="login" class="form-action show">
                    <h1>Login to EEDMIS!</h1>
                    <p>
                        Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                        Maecenas sed diam eget risus varius bladit sit amet non
                    </p>
                    <form>
                        <ul>
                            <li>
                                <input name="username" type="text" placeholder="Username" />
                            </li>
                            <li>
                                <input name="password" type="password" placeholder="Password" />
                            </li>
                            <li>
                                <input type="submit" value="Login" class="button" />
                            </li>
                        </ul>
                    </form>
                </div>
        </form>
                <!--/#login.form-action-->
        <form method="POST" action="register.php">
                <div id="register" class="form-action hide">
                    <h1>Register</h1>
                    <?php
                        session_start();
                        if(isset($_SESSION["already-registered"])){
                            if($_SESSION["already-registered"] == true){
                                echo "<p>Account is already registered!</p>";
                            }
                        }
                    ?>
                    <form>
                        <ul>
                            <li>
                                <input id="username" name="username" type="text" placeholder="Username" />
                            </li>
                            <li>
                                <input id="password" name="password" type="password" placeholder="Password" />
                            </li>
                            <li>
                                <input type="submit" value="Sign Up" class="button" />
                            </li>
                        </ul>
                    </form>
                </div>
        </form>
                <!--/#login.form-action-->
        <form method="POST" action="forgot_account.php">
                <!--/#register.form-action-->
                <div id="reset" class="form-action hide">
                    <h1>Reset Password</h1>
                    <p>
                        To reset your password enter your email and your birthday
                        and we'll send you a link to reset your password.
                    </p>
                    <form>
                        <ul>
                            <li>
                                <input type="text" placeholder="Email" />
                            </li>
                            <li>
                                <input type="text" placeholder="Birthday" />
                            </li>
                            <li>
                                <input type="submit" value="Send" class="button" />
                            </li>
                        </ul>
                    </form>
                </div>
        </form>
                <!--/#register.form-action-->
        </div>
    </div>
    

    <script id="render-js">
		(function( $ ) {
			// constants
			var SHOW_CLASS = 'show',
			HIDE_CLASS = 'hide',
			ACTIVE_CLASS = 'active';

			$( '.tabs' ).on( 'click', 'li a', function(e){
			e.preventDefault();
			var $tab = $( this ),
			href = $tab.attr( 'href' );

			$( '.active' ).removeClass( ACTIVE_CLASS );
			$tab.addClass( ACTIVE_CLASS );

			$( '.show' )
			.removeClass( SHOW_CLASS )
			.addClass( HIDE_CLASS )
			.hide();

			$(href)
				.removeClass( HIDE_CLASS )
				.addClass( SHOW_CLASS )
				.hide()
				.fadeIn( 550 );
			});
		})(jQuery);
    </script>
    <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</body>
</html>