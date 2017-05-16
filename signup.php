<?php
    include('includes/session.php');
?>
<!doctype html>
<html>
<head>
    <title>Projekti Web - Myhedin Zika</title>
    <meta charset="utf-8">
   
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body class="body">

  <div class="page">
	
	
	<?php
		$current = "Home";
		include('header.php');
	?>


        <div class="signup-container">
            <main class="clearfix">
                    <form action="includes/process.php" method="POST">
                        <h3 class="heading"><span>Sign up:</span></h3>

                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username">
                        <span class="error-message" data-for="username">Please enter your username.</span>
						<label for="name">Name:</label>
						<input type="text" id="name" name="name">
						<span class="error-message" data-for="name">Please enter your name.</span>
						<label for="surname">Surname:</label>
						<input type="text" id="surname" name="surname">
						<span class="error-message" data-for="surname">Please enter your surname</span>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password"><br/>
                        <span class="error-message" data-for="password">Please enter your password.</span>

                         <input type="submit" class="formButoni" value="Sign up"  name="register" id="register" />
						<br/>
						<br/>
						
						
                    </form>
            </main>
		<?PHP     
			INCLUDE('footer.php');
		?>

        </div>
    </div>
    
    <script src="js/formHelpers.js"></script>
    <script>
        window.onload = function () {
            var loginButton = document.getElementById('loginButton')
            loginButton.addEventListener('click', function (e) {
                var formIsValid = true
                
                if (!form_checkRequired('username') && formIsValid) {
                    formIsValid = false
                }
                if (!form_checkRequired('password') && formIsValid) {
                    formIsValid = false
                }
                
                if (!formIsValid) {
                    e.preventDefault()
                }
            })
            
            var usernameInput = document.getElementById('username')
            usernameInput.addEventListener('keyup', function (e) {
                form_checkRequired('username')
            })
            
            var passwordInput = document.getElementById('password')
            passwordInput.addEventListener('keyup', function (e) {
                form_checkRequired('password')
            })
        }
    </script>
	
</body>
</html>