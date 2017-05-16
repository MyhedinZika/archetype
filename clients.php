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


<body class="body clients">
    <div class="page">

        <?php
			$current="Clients";
			include('header.php');
		?>



        <div class="main-container">
            <main class="clearfix">
                <h2 class="heading"><span>Our Clients</span></h2>
                <div class = "clients-first-row clearfix">
                    <div class="client-fb">
                        <img src="images/clients-1.jpg" alt="" class="clients-1">
                        <p class="p_client_fb">Facebook is a corporation and an online social networking service headquartered in Menlo Park, California, in the United States. Its website was launched on February 4, 2004, by Mark Zuckerberg with his Harvard College roommates and fellow students Eduardo Saverin, Andrew McCollum, Dustin Moskovitz and Chris Hughes.</p>
                    </div>
                    <div class="client-google">
                        <img src="images/clients-2.jpg" alt="" class="clients-2">
                        <p class="p_client_g">Google is an American multinational technology company specializing in Internet-related services and products. These include online advertising technologies, search, cloud computing, and software.[6] Most of its profits are derived from AdWords, an online advertising service that places advertising near the list of search results.</p>
                    </div>
                    <div class="client-twitter">
                        <img src="images/clients-3.gif" alt="" class="clients-3">
                        <p class="p_client_t">
                        Twitter (/ˈtwɪtər/) is an online social networking service that enables users to send and read short 140-character messages called "tweets".
                        </p>
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