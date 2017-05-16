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


<body class="body homepage">

  <div class="page">
	
	
	<?php
		$current = "Home";
		include('slider.php');
         
                     
                  
                        

	?>
    
    <div class="logIn">
         
    </div>
       

        <div class="main-container">


            <main class="clearfix">
                <div class="left-col">
                    <article class="lead clearfix">
                        <h2 class="heading"><span>Lorem Magnum</span> Ipto Dolos At </h2>
                        
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. 
                        </p>

                        <a href="#" class="image-button float-right"><img src="images/read-more.png" alt=""></a>
                    </article>

                    <article class="clearfix">
                        <h2 class="heading">Ipto Dolos At <span>Lorem Magnum</span></h2>

                        <a href="#" class="thumbnail"><img src="images/article-thumbnail.jpg" alt=""></a>
                        
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.
                        </p>
                    </article>
                </div>


                <div class="right-col">
                    <aside>
                        <h2 class="heading">
                            <span>Featured</span> links 
                            <img src="images/play-icon.png" alt="" class="play-icon">
                        </h2>

                        <ul class="featured-links-list">
                            <li><a href="#"><img src="images/icon-1.png" alt="" class="item-icon">Forum ellis sed</a></li>
                            <li><a href="#"><img src="images/icon-2.png" alt="" class="item-icon">Magnus dolor sed</a></li>
                            <li><a href="#"><img src="images/icon-3.png" alt="" class="item-icon">Sed dolor aestic</a></li>
                            <li><a href="#"><img src="images/icon-4.png" alt="" class="item-icon">Dolor sed menit</a></li>
                            <li><a href="#"><img src="images/icon-5.png" alt="" class="item-icon">Mag et dolor at</a></li>
                        </ul>
                    </aside>

					<?php
						if($session->logged_in) {
							if(isset($_COOKIE['last_login'])) {
							$login = date('d/m/y H:i:s A', $_COOKIE['last_login']);
							} else {
								$login = "never";
							}
							
						} else {
					?>
						<form action="includes/process.php" method="POST">
							<h3 class="heading"><span>Login:</span></h3>

							<label for="username">Username:</label>
							<input type="text" id="username" name="username">
							<span class="error-message" data-for="username">Please enter your username.</span>

							<label for="password">Password:</label>
							<input type="password" id="password" name="password">
							<span class="error-message" data-for="password">Please enter your password.</span>

							<button type="submit" id="loginButton" name="login" style=" min-width: 95px;">Login</button>
							<a href="signup.php"><button type="button" id="signUpButton" style="min-width: 95px;  margin-left: 15px;">Sign up</button></a>	
						</form>
					<?php
						}
					?>
                </div>
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