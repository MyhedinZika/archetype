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
            <h2 class="heading"><span>Services</span>
				<input type="button" id="seeUsersPostButton" onclick="location.href='usersPosts.php';" value="See users posts" >
			</h2>
              <?php
             $posts = $session->getServices(); 
             foreach($posts as $key=>$value) {
               /* echo $value['Titulli'].' '.$value['NenTitulli'].$value['Pershkrimi'].'<br>'.'<img src="'.$value['Foto'].'/>'.'<br/><br/><br/>';*/
                echo '<h2 style=color:yellow;>'.$value['Titulli'].'</h2>'.$value['Permbajtja'].'<br/><br/>';
             }
           ?>

           
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
</body>
</html>