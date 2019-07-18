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
            <div id="login" class="form-action show">
                <h1>Login to EEDMIS!</h1>
                <p>
                    Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    Maecenas sed diam eget risus varius bladit sit amet non
                </p>
                <form>
                    <ul>
                        <li>
                            <input type="text" placeholder="Username" />
                        </li>
                        <li>
                            <input type="password" placeholder="Password" />
                        </li>
                        <li>
                            <input type="submit" value="Login" class="button" />
                        </li>
                    </ul>
                </form>
            </div>
            <!--/#login.form-action-->
            <div id="register" class="form-action hide">
                <h1>Register</h1>
                <p>
                    You should totally sign up for our super awesome service.
                    It's what all the cool kids are doing nowadays.
                </p>
                <form>
                    <ul>
                        <li>
                            <input type="text" placeholder="Username" />
                        </li>
                        <li>
                            <input type="password" placeholder="Password" />
                        </li>
                        <li>
                            <input type="submit" value="Sign Up" class="button" />
                        </li>
                    </ul>
                </form>
            </div>
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