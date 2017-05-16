 <header class="page-header">
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
            <a href="#" class="logo-link"><img src="images/logo.png" alt="Archetype" class="logo"></a>
 
            <div class="nav-container">
                <img src="images/power-button.png" alt="" class="power-button">
 
                <nav class="main-nav clearfix">
                    <ul>           
                         <?php
         
                                $links = [
                                    ['text' => 'Home', 'url' => 'index.php'],
                                    ['text' => 'About', 'url' => 'about.php'],
                                    ['text' => 'Gallery', 'url' => 'gallery.php'],
                                    ['text' => 'Contact', 'url' => 'contact.php'],
                                    ['text' => 'Clients', 'url' => 'clients.php'],
                                    ['text' => 'Services', 'url' => 'services.php'],
                                    // add the other pages here...
                                ];
                 
                                foreach($links as $link) {
                                    $text = "<li";

                                    if ($link['text'] === $current) {
                                        $text .= " class=\"active\"";
                                    }

                                    $text .= '><a href="'. $link['url'] .'">'. $link['text'] .'</a></li>';

                                    echo $text;
                                }
                        ?>  
                    </ul>
                </nav>
 
            </div>
        </header>
<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/databusinessmeeting.jpg" alt="data-business-meeting" title="data-business-meeting" id="wows1_0"/></li>
		<li><a href="http://wowslider.net"><img src="data1/images/firstimagev2.png" alt="http://wowslider.net/" title="firstimagev2" id="wows1_1"/></a></li>
		<li><img src="data1/images/importanceofhiringandroiddevelopmentcompaniesforyourbusiness1.jpg" alt="Importance-of-Hiring-Android-Development-Companies-for-Your-Business-1" title="Importance-of-Hiring-Android-Development-Companies-for-Your-Business-1" id="wows1_2"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="data-business-meeting"><span><img src="data1/tooltips/databusinessmeeting.jpg" alt="data-business-meeting"/>1</span></a>
		<a href="#" title="firstimagev2"><span><img src="data1/tooltips/firstimagev2.png" alt="firstimagev2"/>2</span></a>
		<a href="#" title="Importance-of-Hiring-Android-Development-Companies-for-Your-Business-1"><span><img src="data1/tooltips/importanceofhiringandroiddevelopmentcompaniesforyourbusiness1.jpg" alt="Importance-of-Hiring-Android-Development-Companies-for-Your-Business-1"/>3</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">wowslider.com</a> by WOWSlider.com v8.7</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
<div class="banner-footer">
            <img src="images/banner-footer-background.jpg" alt="" class="flexible-image banner-image">

            <div class="content">
                <div class="content-left">
                    ArcheWare
                </div>

                 <div class="content-right">

                    <a href="#" class="image-button"><img src="images/demo-now.png" alt="Demo Now"></a>
                </div>

                <div class="content-center">
                    At vero eos et accusamus et iusto odio dignissimos.
                </div>
            </div>
        </div>
     <div class="loginColor" style=" color: #fff;">
   <?php
           if($session->logged_in) {
                            if(isset($_COOKIE['last_login'])) {
                            $login = date('d/m/y H:i:s A', $_COOKIE['last_login']);
                            } else {
                                $login = "never";
                            }
                            echo "Welcome <strong>".$session->userinfo['name']." ".$session->userinfo['surname'] ."</strong>, your last visit was ".$login.".<a href='includes/process.php'>
                            <button>Logout</button></a>";

                        }  
            ?>
  </div>