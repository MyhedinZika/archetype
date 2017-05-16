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


    <style>
        .thumbnail {
            margin: 0 15px 12px 15px;
        }
        .thumbnail-left .thumbnail {
            float: left;
            margin-left: 0;
        }
        .thumbnail-right .thumbnail {
            float: right;
            margin-right: 0;
        }


        .third-row {
            text-align: center;
        }
        .third-row .first {
            float: left; 
            width: 38%; 
            text-align: left;
        }
        .third-row .third {
            float: right; 
            width: 38%; 
            text-align: left;
        }
        .third-row .second {
             float: none; 
             display: inline-block; 
             width:auto;
        }

    </style>
</head>


<body class="body about">
    <div class="page">

        <?php 
			$current="About";
			include('header.php');
		?>


        <div class="main-container">
            <main class="clearfix">
                <h1 class="heading"><span>About us</span></h1>
               <div class="rows">
                <div class="first-row">
                    <article class="heading thumbnail-left">
                        <p>
                              <a href="#" class="thumbnail"><img src="images/article-about.png" alt="" ></a>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus bibendum porttitor felis, quis molestie leo. Donec euismod porta nibh id commodo. Ut sit amet nulla quam. Morbi vitae interdum lectus, non tristique diam. Suspendisse felis arcu, volutpat sed ante vel, scelerisque auctor nulla. Nullam lobortis eros augue, nec egestas orci tristique id. Praesent at lectus eget nisl porta sagittis iaculis id justo. Vestibulum ligula quam, tincidunt ullamcorper purus eget, pellentesque lacinia quam. Aenean sed magna vestibulum erat ultricies eleifend ut nec mi. Curabitur finibus tincidunt risus, ultricies aliquam tellus consequat ut. Mauris ac augue nisl. Duis venenatis nibh eget nulla mattis venenatis.
                        </p>
                    </article>
                </div>


                <div class="second-row">
                    <article class="heading thumbnail-right">
                        <p>
                              <a href="#" class="thumbnail"><img src="images/article-about.png" alt="" ></a>
                            Proin varius convallis orci et bibendum. Praesent commodo ultricies suscipit. Phasellus pulvinar felis ac mi euismod accumsan. Aliquam vel ex ligula. Donec feugiat eu nibh vel tempus. Curabitur venenatis pulvinar aliquet. Pellentesque ut finibus ex, eget lacinia metus. Mauris eu nulla vitae ante ullamcorper viverra. Sed tincidunt finibus lacus ac luctus. Suspendisse potenti. Fusce cursus et sapien eu sodales. Aliquam vitae risus a mi euismod tincidunt non quis lacus. Integer non scelerisque velit. Ut tortor dui, euismod condimentum nulla at, bibendum molestie neque. Proin tincidunt dui a semper molestie.
                        </p>
                    </article>

                </div>
              
                <div class="third-row thumbnail-center">
                    <div class="first">
                        <article class="heading">
                            <p>
                                 
                                Praesent efficitur libero sed viverra facilisis. Curabitur tellus libero, fermentum id gravida id, ullamcorper vitae leo. Cras cursus mattis eros, ac finibus massa pharetra eget. Cras iaculis bibendum nunc.
                            </p>
                        </article>
                    </div>

                    <div class="third">
                        <article class="heading">
                            <p>
                             
                                Donec sed sodales purus. Phasellus mollis elit non justo tempus, eget lobortis felis sodales. Mauris elementum commodo ultricies.
                            </p>
                        </article>
                    </div>

                    <div class="second">
                        <a href="#" class="thumbnail"><img src="images/article-about.png" alt="" ></a>
                    </div> 

                    

                </div>
            </main>



           <?php 
			include('footer.php');
			?>
		   
        </div>
    </div>
</body>
</html>