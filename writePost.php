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


<body class="body services">
    <div class="page">
		<?php
			$current = "Services";
			include('header.php');
		?>
        


        <div class="main-container">
            <main class="clearfix">
			<?php 
				if($session->logged_in) { 
			?>
            <h2 class="heading"><span>Write a post</span>
				
			</h2>
                    <form action="includes/process.php" method="POST">

                            <label for="Titulli">Titulli:</label>
                            <input type="text" id="Titulli" name="Titulli">
                            <span class="error-message" data-for="Titulli">Please enter your Title.</span>
                            <label for="Nentitulli">Nentitulli:</label>
                            <input type="text" id="NenTitulli" name="NenTitulli">
                            <label for="Pershkrimi">Pershkrimi:</label>
                            <textarea  id="Permbajtja" name="Pershkrimi" placeholder="Your thoughts"></textarea>
                            <span class="error-message" data-for="Pershkrimi">Please enter some content</span>
                            <label for="Foto">Foto:</label>
                            <input type="text" id="Foto" name="Foto">
                            <span class="error-message" data-for="Foto">Please enter your content.</span></br/><br/>

                            <button type="submit" id="addPost" name="addPost" style=" min-width: 95px;">Add Post</button>
                        </form>
                           
			<?php
				} else {
					echo "You must be logged in to view this content.<br>";
				}
			?>
            </main>


		<?php
			include('footer.php');
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