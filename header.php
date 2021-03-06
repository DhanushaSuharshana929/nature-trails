<?php 
$PAGES = new Page(5);
?>
<header id="masthead" class="header-overlay affix-top sticky-header header_v2">
    <div class="container">
        <div class="row">
            <div class="header-menu   tm-table">
                <div class="menu-mobile-effect navbar-toggle" data-effect="mobile-effect">
                    <div class="icon-wrap">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                </div>


                <div class="width-navigation navigation table-cell">
                    <ul class="nav main-menu">
                        <li class="menu-item  ">
                            <a href="<?php echo actual_link(); ?>home/"> 
                                    Home 
                            </a>                             
                        </li>
                        <li class="menu-item  ">
                            <a href="<?php echo actual_link(); ?>about-us/">About Us</a>                             
                        </li>
                        <li class="menu-item  " >
                            <a href="<?php echo actual_link(); ?>accommodation-in-unawatuna/">Accommodation</a>                             
                        </li>
                        <li class="menu-item"  >
                            <a href="<?php echo actual_link(); ?>restaurants-in-unawatuna/">Dining</a>                             
                        </li>
                        <li class="menu-item  "  >
                            <div class="width-logo sm-logo table-cell">
                                <a href="<?php echo actual_link(); ?>home/" class="no-sticky-logo" title="Nature Trails Unawatuna">
                                    <img class="logo" src="<?php echo actual_link(); ?>images/logo3.png" alt=""> 
                                    <img class="mobile-logo" src="<?php echo actual_link(); ?>images/logo3.png" alt="">
                                </a>
                                <a href="<?php echo actual_link(); ?>home/" class="sticky-logo">
                                    <img src="<?php echo actual_link(); ?>images/logo3.png" alt="">
                                </a>
                            </div>                       
                        </li>

                        <li class="menu-item">
                            <a href="<?php echo actual_link(); ?>things-to-do-in-unawatuna/">Excursions</a>                             
                        </li>
                        <li class="menu-item"  >
                            <a href="<?php echo actual_link(); ?>blog/">Blog</a>                             
                        </li> 
                        <li class="menu-item"  >
                            <a href="<?php echo actual_link(); ?>photo-gallery/">Gallery</a>                             
                        </li> 
                        <li class=" "  style="margin-right: 18px;">
                            <div class="language">
                                <div class="dropdown translation-links">
                                    <a href="#" style="color: white;" class="dropdown-toggle select united kingdom n" data-lang="English" data-hover="dropdown" data-toggle="dropdown" aria-expanded="false">
                                        <img src="<?php echo actual_link(); ?>images/english.png" class="img-responsive" alt="english"/>
                                         <span class="fa fa-caret-down"></span>
                                    </a>
                                    <ul class="dropdown-language ">
                                        <li>
                                            <a href="#" class="chinese" data-lang="Chinese">
                                                <img src="<?php echo actual_link(); ?>images/Chinese.png" class="img-responsive" alt="chinese"/>
                                                 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="german" data-lang="German">
                                                <img src="<?php echo actual_link(); ?>images/germany.png" class="img-responsive" alt="germany"/>                                                
                                                
                                            </a>
                                        </li> 
                                        <li>
                                            <a href="#" class="russian" data-lang="Russian">
                                                <img src="<?php echo actual_link(); ?>images/russian.png" class="img-responsive" alt="russian"/>
                                           
                                            </a>
                                        </li> 
                                    </ul>
                                </div>
                            </div>                            
                        </li> 
                        <li class=" header-right">
                            <div class="  uk-width-auto uk-position-relative" style="margin-top: -12px;">
                                <div class="ribbon">
                                    <i><span><span class="upto">UP TO</span> <?php echo substr(substr($PAGES->description, 3), 0, -4) ?>% <s></s></span></i>
                                </div>
                            </div>                        
                        </li> 
                    </ul>  
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Mobile menu -->
<nav class="visible-xs mobile-menu-container mobile-effect" itemscope itemtype="http://schema.org/SiteNavigationElement">
    <div class="inner-off-canvas">
        <div class="menu-mobile-effect navbar-toggle">Close <i class="fa fa-times"></i></div>
        <ul class="nav main-menu">
            <li class="menu-item ">
                <a href="<?php echo actual_link(); ?>home/" class="no-sticky-logo" title="Nature Trails Unawatuna">                   
                    <img class="mobile-logo" src="<?php echo actual_link(); ?>images/mobile-logo.png" alt="">
                </a>           
            </li>
            <li class="menu-item ">
                <a href="<?php echo actual_link(); ?>home/">Home</a>              
            </li>
            <li class="menu-item  ">
                <a href="<?php echo actual_link(); ?>about-us/">About us</a> 
            </li>
            <li class="menu-item  ">
                <a href="<?php echo actual_link(); ?>accommodation-in-unawatuna/">Accommodation</a> 
            </li>
            <li class="menu-item  ">
                <a href="<?php echo actual_link(); ?>restaurants-in-unawatuna/">Dining</a> 
            </li>
            <li class="menu-item  ">
                <a href="<?php echo actual_link(); ?>things-to-do-in-unawatuna/">Excursions</a> 
            </li>
            <li class="menu-item  ">
                <a href="<?php echo actual_link(); ?>blog/">Blog</a> 
            </li> 
        </ul>
    </div>
</nav>