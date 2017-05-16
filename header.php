       
<header class="page-header">
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
         <div class="banner-main">
            <img src="images/banner-main-background.jpg" alt="" class="flexible-image banner-image">

            <img src="images/banner-ribbon.png" alt="" class="banner-ribbon">

            <img src="images/banner-text.png" alt="Get organized.  We specialize in connecting your world" class="banner-text">
        </div>

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
  
