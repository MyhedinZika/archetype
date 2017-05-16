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


<body class="body userPosts">
    <div class="page" style="color: #fff;">
		<?php
			$current = "Services";
			include('header.php');
		?>
        
    


        <div class="main-container">
           <h1 class="heading"><span>Users Posts</span></h1></div>
           <input type="button" id="writePost" onclick="location.href='writePost.php';" value="Write a Post" style="float: right;  background-color: #f44336;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 15px;border-radius: 20px;margin-right: 33px;margin-top: -48px;">
           
           <?php
             $posts = $session->getUserPosts(); 
             foreach($posts as $key=>$value) {
               /* echo $value['Titulli'].' '.$value['NenTitulli'].$value['Pershkrimi'].'<br>'.'<img src="'.$value['Foto'].'/>'.'<br/><br/><br/>';*/
                echo '<h2 style=color:yellow;>'.$value['Titulli'].'</h2>'.'<h4 style=color:gray;>'.$value['NenTitulli'].'</h4>'.
                '<img src='.$value['Foto'].'/>'.$value['Pershkrimi'].'<br/><br/>';
             }
           ?>


		<?php
            include('footer.php');
        ?>
		
        </div>
    </div>
</body>
</html>