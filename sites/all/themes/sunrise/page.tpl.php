

<!-- header-banner-wrapper --> 
<div id="header-banner-wrapper">
    <div id="header-wrapper">
    
    <?php if ($page['header_top_left'] || $page['header_top_right']) :?>
        
    <!-- #header-top -->
    <div id="header-top" class="clearfix" >
        <!--<div class="container">-->

            <!-- #header-top-inside -->
            <div id="header-top-inside" class="clearfix">
                    <div class="col-md-6">                 
                        <?php if ($page['header_top_left']) :?>
                        <!-- #header-top-left -->
                        <div id="header-top-left" class="clearfix">
                            <?php print render($page['header_top_left']); ?>
                        </div>
                        <!-- EOF:#header-top-left -->
                        <?php endif; ?>
                    </div>

                    <div class="col-md-6">    
                        <?php if ($page['header_top_right']) :?>
                        <!-- #header-top-right -->
                        <div id="header-top-right" class="clearfix">
                            <?php print render($page['header_top_right']); ?>
                        </div>
                        <!-- EOF:#header-top-right -->
                        <?php endif; ?>
                    </div>
            </div>
            <!-- EOF: #header-top-inside -->

        <!--</div>-->
    </div>
    <!-- EOF: #header-top -->    

    <?php endif; ?>

    
    <!-- header -->
    <header id="header" class="clearfix">
      <!--  <div class="container"> -->

            <!-- #header-inside -->
            <div id="header-inside" class="clearfix">
                <div class="col-md-12">
                    
                    <?php if ($logo):?>
                    <div id="logo">
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> 
                        <img src="https://equal-ist.eu/eq-uploads/2016/11/EQUALIST_logo2.png" width="269" height="112" alt="<?php print t('Home'); ?>" /> 
                        </a>
                    </div>
                    <?php endif; ?> 

                    <?php if ($site_name):?>
                    <div id="site-name">
                    <!--<a href="<?php print $front_page; ?>" title="<?php print t('EQUAL-IST'); ?>"><?php print $site_name; ?></a>-->
                    </div>
                    <?php endif; ?>

                    <?php if ($slogan):?>
                    <div id="slogan">
                    <!--<?php print t('This is a crowdsourcing platform!'); ?>-->
                    </div>
                    <?php endif; ?>

                    <div class="content" >
                        <div class="social">                             <ul class="social">
                            <li><a href="https://twitter.com/equalistproject" title="Twitter" class="twitter" target="_blank"></a></li>
                            <li><a href="https://www.facebook.com/EQUALISTproject/?fref=ts" title="Facebook" class="facebook" target="_blank"></a></li>
                            <li><a href="https://de.linkedin.com/" title="Linkedin" class="gplus" target="_blank"></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <?php if ($page['header']) :?>
                        <?php print render($page['header']); ?>
                    <?php endif; ?>
                                    
                </div>
             </div>
            <!-- EOF: #header-inside -->
        
        <!--</div>-->
    </header>
    <!-- EOF: #header --> 
        

    <!-- #main-navigation --> 
    <div id="main-navigation" class="clearfix">
        
            <!-- #main-navigation-inside -->
            <div id="main-navigation-inside" class="clearfix">
                        <nav>
                            <?php if ($page['navigation']) :?>
                            <?php print drupal_render($page['navigation']); ?>
                            
                            <?php else : ?>

                            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('main-menu', 'menu'), ), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'), ), )); ?>

                            <?php endif; ?>
                        </nav>
            </div>
            <!-- EOF: #main-navigation-inside -->
    
    </div>
    <!-- EOF: #main-navigation -->
        
    <div id="social2" class="clearfix" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">                 
                    <?php if ($page['social']) :?>
                            <?php print render($page['social']); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
        
        
    </div> <!-- #header-wrapper -->

    <?php if ($page['banner']) : ?>
    <!-- #banner -->
    <div id="banner" class="clearfix">
        <div class="container">
            <!-- #banner-inside -->
            <div id="banner-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-12">
                    <?php print render($page['banner']); ?>
                    </div>
                </div>
            </div>
            <!-- EOF: #banner-inside -->      
        </div>
    </div>
    <?php endif; ?> 
    
</div> 
<!-- EOF: #header-banner-wrapper -->



<!-- #page -->
<div id="page" class="clearfix">
    
    <?php if ($page['highlighted']):?>
    <!-- #top-content -->
    <div id="top-content" class="clearfix">
        <div class="container">
            <!-- #top-content-inside -->
            <div id="top-content-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-12">
                   <?php print render($page['highlighted']); ?>

                    </div>
                </div>
            </div>
            <!-- EOF:#top-content-inside -->

        </div>
    </div>
    <!-- EOF: #top-content -->
    <?php endif; ?>
    
    <?php if ($page['promoted']):?>
    <!-- #promoted -->
    <div id="promoted" class="clearfix">
        <div id="promoted-inside" class="clearfix">
            <div class="row">
                <div class="col-md-12">
                    <?php print render($page['promoted']); ?>
                </div>
            </div>
        </div>

    </div>
    <!-- EOF: #promoted -->
    <?php endif; ?>
    


    <!-- #main-content -->
    <div id="main-content">
        <div class="container">
        
            <!-- #messages-console -->
            <?php if ($messages):?>
            <div id="messages-console" class="clearfix">
                <div class="row">
                    <div class="col-md-12">
                    <?php print $messages; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <!-- EOF: #messages-console -->
            
            <div class="row">

                <?php if ($page['sidebar_first']):?>
                <aside class="<?php print $sidebar_grid_class; ?>">  
                    <!--#sidebar-first-->
                    <section id="sidebar-first" class="sidebar clearfix">
                    <?php print render($page['sidebar_first']); ?>
                    </section>
                    <!--EOF:#sidebar-first-->
                </aside>
                <?php endif; ?>


                <section class="<?php print $main_grid_class; ?>">

                    <!-- #main -->
                    <div id="main" class="clearfix">

                        <!-- EOF:#content-wrapper -->
                        <div id="content-wrapper">
                            <?php print render($title_prefix); ?>
                            <?php if ($title):?>
                            <h1 class="page-title"><?php print $title; ?></h1>
                            <?php endif; ?>
                            <?php print render($title_suffix); ?>

                            <?php print render($page['help']); ?>
                      
                            <!-- #tabs -->
                            <?php if ($tabs):?>
                                <div class="tabs">
                                <?php print render($tabs); ?>
                                </div>
                            <?php endif; ?>
                            <!-- EOF: #tabs -->

                            <!-- #action links -->
                            <?php if ($action_links):?>
                                <ul class="action-links">
                                <?php print render($action_links); ?>
                                </ul>
                            <?php endif; ?>
                            <!-- EOF: #action links -->

                            <?php print render($page['content']); ?>
                            <?php print $feed_icons; ?>
                        </div>
                        <!-- EOF:#content-wrapper -->

                    </div>
                    <!-- EOF:#main -->

                </section>

                <?php if ($page['sidebar_second']):?>
                <aside class="<?php print $sidebar_grid_class; ?>">
                    <!--#sidebar-second-->
                    <section id="sidebar-second" class="sidebar clearfix">
                    <?php print render($page['sidebar_second']); ?>
                    </section>
                    <!--EOF:#sidebar-second-->
                </aside>
                <?php endif; ?>
        
            </div>

        </div>
    </div>
    <!-- EOF:#main-content -->

</div>
<!-- EOF:#page -->

<a href="#header-wrapper" class="smoothScroll">
<img src="http://www.crowdequality.eu/sites/default/files/HochScrollButton.jpg" title= "Get back to the top of the page" alt="Button to scroll up!">
</a>
        <br>
        <br>

    

<!-- #footer -->
<footer id="footer" class="clearfix">
<div class="container">
    
<!-- #footer-inside -->
<div id="footer-inside" class="clearfix">
<div class="row">

<div class="col-md-3">       
<div class="region region-footer-first">

<div id="block-block-18" class="block block-block clearfix">    
<h2>Contact Us</h2>

    <div class="content">
<ul>
    <li><a href="https://equal-ist.eu/" target="_blank">www.equal-ist.eu</a></li>
    <li><a href="mailto:info@equal-ist.eu?Subject=General%20Information" target="_top">info@equal-ist.eu</a></li>
    
</ul> 
    </div>    

</div>
    
</div>
</div>

<div class="col-md-3">
<div class="region region-footer-second">
    
<div id="block-block-19" class="block block-block clearfix">
<h2>Get Social</h2>

<div class="content"> <!--warum wurde hier der Text entfernt?>-->
<ul>
    <li><a href="https://www.facebook.com/EQUALISTproject/?fref=ts" target="_blank" title="Like us on Facebook" class="facebook"><img src="http://www.crowdequality.eu/sites/default/files/online_social_media_facebook-128.png" width="50" height="50" alt="Facebook Picture" /></a></li>
    <li><a href="https://twitter.com/equalistproject" target="_blank" title="Follow us on Twitter" class="twitter"><img src="http://www.crowdequality.eu/sites/default/files/twitter_online_social_media-128.png" width="50" height="50" alt="Twitter Picture"/></a></li>
    <li><a href="https://www.linkedin.com/groups/8559876" target="_blank" title="Join the Linkedin Group" class="linkedin"><img src="http://www.crowdequality.eu/sites/default/files/linked_in_online_social_media-128.png" width="50" height="50" alt="Linkedin Picture"/></a></li>
</ul>  
</div>

    
</div>
    
</div>
</div>

<div class="col-md-3">
<div class="region region-footer-third">

<div id="block-block-20" class="block block-block clearfix">
<h2>Partners</h2>
    
<div class="content">
<ul>
    <li><a href="https://www.uni-muenster.de/en/" target="_blank">The University of Münster (WWU)</a></li>  
    <li><a href="http://www.unimore.it/" target="_blank">University of Modena and Reggio Emilia (UNIMORE)</a></li>
    <li><a href="https://www.uminho.pt/EN" target="_blank">The University of Minho (UMINHO)</a></li>
    <li><a href="http://www.hneu.edu.ua/" target="_blank">Simon Kuznets Kharkiv National University of Economics (KhNUE)</a></li>    
         
</ul>
</div>
    
</div>
    
</div>
</div>
    
    
<div class="col-md-3">
<div class="region region-footer-third">

<div id="block-block-21" class="block block-block clearfix">
<h2> <br> </h2>
    
<div class="content">
<ul>
    <li><a href="http://www.unive.it/pag/13526/" target="_blank">Ca' Foscari University of Venice (UNIVE)</a></li>
    <li><a href="https://www.uni.li/en" target="_blank">The University of Liechtenstein (UNILI)</a></li>
    <li><a href="http://www.utu.fi/en/Pages/home.aspx" target="_blank">The University of Turku (UTU)</a></li>
    <li><a href="http://ktu.edu/en" target="_blank">Kaunas University of Technology (KTU)</a></li>
</ul>
</div>
    
</div>
    
</div>
</div>
    
</div>
</div>
<!-- EOF: #footer-inside -->
    
</div>
</footer>
                
<footer id="subfooter" class="clearfix">
    <div class="container">
        
        <!-- #subfooter-inside -->
        <div id="subfooter-inside" class="clearfix">
            <div class="row">
                <div class="col-md-12">
                    <!-- #subfooter-left -->
                    <div class="subfooter-area">                  
                    <p> 
                    ©2016 EQUAL-IST All rights reserved.<br>
                    <a href="/node/82">Terms and Conditions</a> <br>
					<a href="/node/83"> House Rules </a>
                    </p>
                    </div>
                    <!-- EOF: #subfooter-left -->
                </div>
            </div>
        </div>
        <!-- EOF: #subfooter-inside -->
    
    </div>
</footer>
<!-- EOF:#subfooter -->
                    
       