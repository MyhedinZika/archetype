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


<body class="body contact">
    <div class="page">
    <?php
		$current = "Contact";
		include('header.php');
	?>



        <div class="main-container">
			<?php
				$message = $session->getMessage();
				if($message != '') {
					echo '<p style="color: #fff">'.$message.'</p>';
				}
			?>
            <main class="clearfix">
            
            <fieldset class="contactForm">
                <legend>Contact us</legend>
                    <form action="includes/process.php" method="POST">

                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name">
                        <span class="error-message" data-for="name">Please enter your name.</span>

                        <label for="surname">Surname:</label>
                        <input type="text" id="surname" name="surname">
                        <span class="error-message" data-for="surname">Please enter your surname.</span>

                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email">
                        <span class="error-message" data-for="email">Please enter your email.</span>
                        <br/>
                        <br/>
                        <label for="gender">Gender: </label>
                        <input type="radio" name="gender" value="male" />Male
                        <input type="radio" name="gender" value="female" />Female
                        <span class="error-message" data-for="gender">Please select your gender.</span>
                        <br/>
                        <br/>
                        <label for="games">Select games which you like: </label>
                        <input type="checkbox" name="games[]" value="CSGO"/>Counter Strike Global Offensive
                        <input type="checkbox" name="games[]" value="DOTA"/>DOTA 
                        <input type="checkbox" name="games[]" value="LOL"/>League of Legends
                       

                        <br/>
                        <br/>

                        <label for="rating">Select a rating for our website:</label>
                        <select name="ratingOption">
                            <option value="Excellent">Excellent</option>
                            <option value="Very good">Very good</option>
                            <option value="Good">Good</option>
                            <option value="Bad">Bad</option>
                            <option value="Very Bad">Very Bad</option>
                        </select>
                        <br/>
                        <br/>
                        <button type="submit" id="submitButton" name="addContact">Submit</button>
                        <button type="cancel">Cancel</button>
                    </form>
                    <br/><br/>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.658633572922!2d21.15067451500783!3d42.64739632490048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549e8d5d607f25%3A0xa31dd05b21bd09de!2sUniversity+for+Business+and+Technology!5e0!3m2!1sen!2s!4v1462963927093" width="600" height="450" frameborder="0" style="border:1" allowfullscreen></iframe>
            </fieldset>
            </main>

            

           <?php 
				include('footer.php');
		   ?>
            
            <script src="js/formHelpers.js"></script>
            <script>
                window.onload = function () {
                    var submitButton = document.getElementById('submitButton')
                    submitButton.addEventListener('click', function (e) {
                        var formIsValid = true
                        
                        if (!form_checkRequired('name') && formIsValid) {
                            formIsValid = false
                        }
                        if (!form_checkRequired('surname') && formIsValid) {
                            formIsValid = false
                        }
                        if (!form_checkRequired('email') && formIsValid) {
                            formIsValid = false
                        }
                        if (!form_checkRequiredRadio('gender') && formIsValid) {
                            formIsValid = false
                        }
                        
                        if (!formIsValid) {
                            e.preventDefault()
                        }
                    })
                    
                    var nameInput = document.getElementById('name')
                    nameInput.addEventListener('keyup', function (e) {
                        form_checkRequired('name')
                    })
                    
                    var surnameInput = document.getElementById('surname')
                    surnameInput.addEventListener('keyup', function (e) {
                        form_checkRequired('surname')
                    })
                    
                    var emailInput = document.getElementById('email')
                    emailInput.addEventListener('keyup', function (e) {
                        form_checkRequired('email')
                        // todo check pattern
                    })
                    
                    var genderRadiosList = document.querySelectorAll('input[name=gender][type=radio]')
                    var genderRadiosArray = Array.from(genderRadiosList)
                    var radio = null
                    for (radio of genderRadiosArray) {
                        radio.addEventListener('change', function (e) {
                            form_checkRequiredRadio('gender')
                        })
                    }
                    
                }
            </script>

        </div>
    </div>
</body>
</html>