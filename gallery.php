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
			$current="Gallery";
			include('header.php');
            
		?>


        <div class="main-container">
            <main class="clearfix">

            <div class="gallery-first clearfix">
                <h2 class="heading"><span>Gallery</span></h2>
                <img src="images/gallery-1.jpg" alt="" class="gallery-1">
                <img src="images/gallery-2.jpeg" alt="" class="gallery-2">
                <img src="images/gallery-3.jpg" alt="" class="gallery-3">
                <img src="images/gallery-4.jpg" alt="" class="gallery-4">
            </div>
            <div class="gallery-second clearfix">
              <img src="images/gallery-5.jpg" alt="" class="gallery-5">
              <img src="images/gallery-6.jpg" alt="" class="gallery-6">
            </div>
            <div class="gallery-third clearfix">
                <img src="images/gallery-7.jpg" alt="" class="gallery-7">
                <img src="images/gallery-8.png" alt="" class="gallery-8">
                <img src="images/gallery-9.png" alt="" class="gallery-9">
                <img src="images/gallery-10.gif" alt="" class="gallery-10">
            </div>
            
            
            </main>


		<?php
			include('footer.php');
		
		?>

        </div>
    </div>
</body>
</html>