<?php $themestek_header_menuarea_height = themestek_header_menuarea_height(); ?>

.headerlogo,
.ts-header-icon{
    height: <?php echo esc_attr($header_height); ?>px;
    line-height: <?php echo esc_attr($header_height); ?>px;
}
/* Header sticky animation */        
@keyframes menu_sticky {
    0%   {margin-top:-120px;opacity: 0;}
    50%  {margin-top: -64px;opacity: 0;}
    100% {margin-top: 0;opacity: 1;}
}

/**
* Responsive Menu
* ----------------------------------------------------------------------------
*/
@media (max-width: <?php echo esc_attr($breakpoint); ?>px){


    body.ts-slider-yes{
        background-image: none;
    }
    .ts-slider-yes .headerlogo .standardlogo{
        display: inline-block;
    }
    .ts-slider-yes .headerlogo .crosslogo{
        display: none;
    }


    .ts-header-text-area,
	.ts-header-icon.ts-header-wc-cart-link{
    	display: none;
    }    
    
	
	/*** Header Section ***/
	.site-header-main.ts-table{
		margin: 0 15px;
		width: auto;
		display: block;
	}	
	.site-header-main.ts-table .ts-table-cell {
		display: block;		
	}	
    .ts-header-icon{
        padding-right: 0px;
        padding-left: 20px;
        position: relative;
    } 
    .site-title{
        width: inherit;        
    }   	

    /*** Navigation ***/
    .main-navigation {
    	clear: both;
    }    
   	.site-branding,

	.menu-themestek-main-menu-container,
	#site-header-menu {
		float: none;	
    }      
	
    /*** Responsive Menu ***/    
    .righticon{
        position: absolute;
        right: 0px;
        z-index: 33;
        top: 15px;
        display: block;
    }    
	.righticon i{
		font-size:20px;
		cursor:pointer;
        display:block;
        line-height: 0px;
	} 
    /*** Default menu box ***/ 
    #site-header-menu #site-navigation div.nav-menu > ul{
    	position: absolute;
        padding: 10px 20px; 
        left: 0px;	
        box-shadow: rgba(0, 0, 0, 0.12) 3px 3px 15px;
        border-top: 3px solid <?php echo esc_attr($skincolor); ?>;	 
        background-color: #333;       
        z-index: 100;
        width: 100%;
        top: <?php echo esc_attr($header_height); ?>px;  
    }  
    
    <?php if($headerbg_color=='custom' && !empty($headerbg_customcolor['rgba']) ) : ?>
       	#site-header-menu #site-navigation div.nav-menu > ul{
            background-color: <?php  echo esc_attr($headerbg_customcolor['rgba']); ?>;
        } 
	<?php endif; ?>
      
    <?php if( !empty($dropmenu_background['color']) ): ?>    	
        #site-header-menu #site-navigation div.nav-menu > ul{
        	background-color: <?php echo esc_attr($dropmenu_background['color']); ?>;
        }    
    <?php endif; ?>      
   
   
    #site-header-menu #site-navigation div.nav-menu > ul,
    #site-header-menu #site-navigation div.nav-menu > ul ul {
        overflow: hidden;
        max-height: 0px;
    }    
    #site-header-menu #site-navigation div.nav-menu > ul ul ul{
    	max-height: none;
    }    
    #site-header-menu #site-navigation div.nav-menu > ul > li{
    	position: relative;
        text-align: left;
    }    
    #site-header-menu #site-navigation.toggled-on div.nav-menu > ul{       
        display: block;
        max-height: 10000px;       
    }
    #site-header-menu #site-navigation.toggled-on div.nav-menu > ul ul.open {
    	max-height: 10000px;
    }   






    #site-header-menu #site-navigation div.nav-menu > ul ul{
    	  background-color: transparent !important;
    }
    #site-header-menu #site-navigation div.nav-menu > ul > li a{
        display: block;
        padding: 15px 0px;        
        text-decoration: none;
        line-height: 18px;
        height: auto;
        line-height: 18px !important;
    }     
    #site-header-menu #site-navigation div.nav-menu > ul ul a{
        margin: 0;
        display: block;
        padding: 15px 15px 15px 0px;
    }
    #site-header-menu #site-navigation div.nav-menu > ul > li li a:before{
        font-family: "FontAwesome";
        font-style: normal;
        font-weight: normal;
        speak: none;
        display: inline-block;
        text-decoration: inherit;
        margin-right: .2em;
        text-align: center;
        opacity: .8;
        font-variant: normal;
        text-transform: none;
        font-size: 13px;
        content: "\f105";
        margin-right: 8px;
        display: none;
    }         


    #site-header-menu #site-navigation div.nav-menu > ul > li a{
    	display: inline-block;
    } 
 	


    

    
    <?php if( !empty($dropdownmenufont['color']) ): ?>
        #site-header-menu #site-navigation div.nav-menu > ul > li > a,
        .righticon i  {
        	color: rgba( <?php echo themestek_hex2rgb($dropdownmenufont['color']); ?> , 1);
        } 
        #site-header-menu #site-navigation div.nav-menu > ul li {
        	border-bottom: 1px solid rgba( <?php echo themestek_hex2rgb($dropdownmenufont['color']); ?> , 0.15);
        }  
        #site-header-menu #site-navigation div.nav-menu > ul li li:last-child{
        	border-bottom: none;
        }     
    <?php endif; ?>    
    

	/* Dynamic main menu color applying to responsive menu link text */           
    .menu-toggle i,     
    .ts-header-icons a{
		color: rgba( <?php echo themestek_hex2rgb($mainMenuFontColor); ?> , 1) ;
	}    

    .ts-labtechco-icon-bars,
    .ts-labtechco-icon-bars:before, 
    .ts-labtechco-icon-bars:after{
        background: rgba( <?php echo themestek_hex2rgb($mainMenuFontColor); ?> , 1);
    }

    .ts-headerstyle-infostack .main-navigation:not(.toggled-on) .ts-labtechco-icon-bars,
    .ts-headerstyle-infostack .main-navigation .ts-labtechco-icon-bars:before, 
    .ts-headerstyle-infostack .main-navigation .ts-labtechco-icon-bars:after{
        background: #031b4e;
    }



    #site-header-menu #site-navigation div.nav-menu > ul{
        padding-right: 15px;
        padding-left: 15px;
    }    
    #site-header-menu #site-navigation div.nav-menu > ul ul{
    	list-style: none;
    }      
    .ts-header-icons{
        position: absolute;
        top: 4px;
        float: none;
        right: 53px;
        margin-right: 0px;
    }   
    
    #site-header-menu #site-navigation div.nav-menu > ul > li ul{       
        display: block !important;
        height: auto !important;  
    }    
   

    #site-header-menu #site-navigation div.nav-menu > ul > li ul{
        background-image: none !important;      
    }   
     

    #site-header-menu #site-navigation div.nav-menu > ul > li ul{
    	background: none;
        background-image: none;
    }    
    .ts-header-overlay .ts-titlebar-wrapper .ts-titlebar-inner-wrapper{
    	padding-top: 0px;
    } 
    

    #site-header-menu #site-navigation .menu-toggle {
        top: <?php echo esc_attr(ceil($header_height/2)-20); ?>px;
        display: block;
        position: absolute; 
        right: 0;       
        width: 40px;       
        background: none;
        z-index: 1;
        outline: none;
        padding: 0;
        line-height: normal;
    }


    
    /* Display None */
    .ts-infostack-right-content,
    #site-header-menu #site-navigation div.nav-menu > ul{
    	display: none;
    }
    .ts-header-style-infostack .ts-stickable-header-w{
    	height: auto !important;
    }
    .ts-header-style-infostack .ts-header-top-wrapper.container{
        width: 100%;
    }



	/* sticky footer bottom margin */	
	body .site-content-wrapper {
		margin-bottom: 0px !important;
	}



    /*** Classic header cross ***/  
    .ts-header-overlay .ts-header-icons,
    .ts-header-overlay .site-header .themestek-social-links-wrapper,
    .ts-headerstyle-classic.ts-slider-yes #ts-home{
        display: none;
    }

    .ts-header-overlay .site-header-main.ts-table{
        margin: 0;
    }
    .ts-header-overlay .site-header .headerlogo{
        display: inline-block;
    }
    .ts-header-overlay #site-header-menu #site-navigation .menu-toggle{
        right: 30px;
    }
    .ts-header-overlay .site-header .headerlogo{
        border-right: 0 !important;
    }



}







@media (min-width: <?php echo esc_attr($breakpoint); ?>px) {
    header #site-header-menu #site-navigation{
        height: <?php echo esc_attr($header_height); ?>px;
        line-height: <?php echo esc_attr($header_height); ?>px;
    }
    .site-header .ts-vc_btn3-container{
        margin-bottom: 0;
    }
    .ts-header-style-classic .ts-header-icons{
        margin-right: 20px;
    }

	/* Header full */
	.site-header-main.container-full {
		padding: 0 50px;
	}
	.ts-stickable-header.is_stuck{    	 
        box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.06);
    } 
    .ts-stickable-header{
        z-index: 12;      
    }
    .ts-header-overlay .site-header .themestek-social-links-wrapper,
    .ts-header-text-area,
    .ts-header-icon,
	.headerlogo, 
    #site-header-menu #site-navigation div.nav-menu > ul,
	#site-header-menu #site-navigation div.nav-menu > ul > li, 
	#site-header-menu #site-navigation div.nav-menu > ul > li > a {
        transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -webkit-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
    }
    .ts-header-icon{       
        position: relative;
    }
    .ts-header-text-area,
    #site-header-menu #site-navigation .nav-menu,  
    #site-header-menu, 
    .ts-header-icons, 
    .ts-header-icon,

    .menu-themestek-main-menu-container{
    	float: right;
    }    
	.navbar{
        vertical-align: top;
    }
    .menu-toggle {
        display: none;
        z-index: 10;	
    }
    .menu-toggle i{
        color:#fff;
        font-size:28px;
    }
    .toggled-on li, 
    .toggled-on .children {
        display: block;
    }		

  
    #site-header-menu #site-navigation .nav-menu-wrapper > ul {
        margin: 0;
        padding: 0; 
    }

	#site-header-menu #site-navigation div.nav-menu > ul{
    	margin: 0px;
    }    
    #site-header-menu #site-navigation div.nav-menu > ul > li{
        height: <?php echo esc_attr($header_height); ?>px;
        line-height: <?php echo esc_attr($header_height); ?>px !important;
    }  
    #site-header-menu #site-navigation div.nav-menu > ul > li {
        margin: 0 0px 0 0;
        display: inline-block;
        position: relative;
        vertical-align: top;
    }    
    #site-header-menu #site-navigation div.nav-menu > ul > li > a{
    	display: block;	
        margin: 0px 18px 0px 18px;
        padding:  0px; 
        text-decoration: none;
        position: relative;
        z-index: 1;       
        height: <?php echo esc_attr($header_height); ?>px;
        line-height: <?php echo esc_attr($header_height); ?>px;        
    }	


    #site-header-menu #site-navigation div.nav-menu > ul{    
        height: <?php echo esc_attr($header_height); ?>px;       
    }

    .is_stuck #site-header-menu #site-navigation div.nav-menu > ul{
        height: <?php echo esc_attr($header_height_sticky); ?>px;  
    }


        



    /*WordPress Dropdown Menu*/
    .ts-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li li.current-menu-ancestor > a,    
    .ts-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li li.current-menu-item > a,    
    .ts-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li li.current_page_item > a,    
    .ts-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li li.current_page_ancestor > a{
        color: <?php echo esc_attr($skincolor); ?> ;
    }



    <?php if( $mainmenu_active_link_color=='custom' && !empty($mainmenu_active_link_custom_color) ){ ?>

        /* Main Menu Active Link Color --------------------------------*/                

        .ts-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_item > a, 
        .ts-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_ancestor > a, 
        .ts-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_parent > a,          
        .ts-mmenu-active-color-custom  #site-header-menu #site-navigation div.nav-menu > ul > li.current-menu-ancestor > a,       
        
        .ts-mmenu-active-color-custom  .ts-mmmenu-override-yes #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_item > a{
            color: <?php echo esc_attr($mainmenu_active_link_custom_color); ?>;
        }
    <?php } ?>



    /*** Defaultsenu ***/      
    .ts-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li li:hover > a,
    .ts-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li li:hover > a{
        color: <?php echo esc_attr($skincolor); ?> ;
    }
    


    .ts-mmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li.current-menu-ancestor > a, 
    .ts-mmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_item > a,     
    .ts-mmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_ancestor > a, 

    .ts-mmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li:hover > a{
        color: <?php echo esc_attr($skincolor); ?> ;
    } 






	<?php if( $mainmenu_active_link_color=='custom' && !empty($mainmenu_active_link_custom_color) ){ ?>
    	.ts-mmenu-active-color-custom .site-header .social-icons li > a:hover, 
        .ts-mmenu-active-color-custom .ts-header-icons .ts-header-search-link a:hover, 
        .ts-mmenu-active-color-custom .ts-header-icons .ts-header-wc-cart-link a:hover,        
        .ts-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li:hover > a{
        	color: <?php echo esc_attr($mainmenu_active_link_custom_color); ?> ;
        }        
        .ts-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li > a:before{
            background-color: <?php echo esc_attr($mainmenu_active_link_custom_color); ?> ;
        }    
        
    <?php } ?>
    
	<?php if( $dropmenu_active_link_color=='custom' && !empty($dropmenu_active_link_custom_color) ){ ?>        
        /* Dropdown Menu Active Link Color -------------------------------- */        
        .ts-dmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li li:hover > a{
            color: <?php echo esc_attr($skincolor); ?> ;
        }
    <?php } ?>   
    
    
         

    #site-header-menu #site-navigation div.nav-menu > ul > li > a{
        margin: 0px 15px 0px 15px;
    }
    .themestek-main-menu-more-than-six #site-header-menu #site-navigation div.nav-menu > ul > li > a{
        margin: 0px 12px 0px 12px;
    }


	.is_stuck .ts-header-icons .ts-header-search-link a,    
    .is_stuck #site-header-menu #site-navigation div.nav-menu > ul > li > a,
    
    #site-header-menu.is_stuck #site-navigation div.nav-menu > ul > li > a{
    	color: <?php echo esc_attr($stickymainmenufontcolor); ?>;
    }   
    .site-header .social-icons li > a,
    .ts-header-icons .ts-header-search-link a{
    	color: rgba( <?php echo themestek_hex2rgb($mainMenuFontColor); ?> , 1) ;
    }
    .site-header .social-icons li > a:hover,
	.ts-header-icons .ts-header-search-link a:hover{
    	color: <?php echo esc_attr($skincolor); ?> ;
    }
    .ts-header-style-classic .site-header.ts-bgcolor-white .ts-header-icons .ts-header-wc-cart-link a:hover span.number-cart{
    	color: #fff;
    } 
    




    /*** Sub Navigation Section ***/     
    #site-header-menu #site-navigation div.nav-menu > ul > li ul{
        box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.20);
    }



    header#masthead #site-header-menu #site-navigation div.nav-menu > ul li.last ul.sub-menu{
        left: auto;
        right: 0px !important;
    }    
    header#masthead #site-header-menu #site-navigation div.nav-menu > ul li.last ul.sub-menu ul.sub-menu, 
    header#masthead #site-header-menu #site-navigation div.nav-menu > ul li.lastsecond ul.sub-menu ul.sub-menu{
    	left: -100%;
    }            
    #site-header-menu #site-navigation div.nav-menu > ul ul {
        width: 250px;
        padding: 0px;
    }
        
    #site-header-menu #site-navigation div.nav-menu > ul ul li > a {
        margin: 0;
        display: block;
        padding: 12px 0px;
        position: relative;         
    }
    #site-header-menu #site-navigation div.nav-menu > ul ul li > a{
        padding: 15px 20px;         
    }
    #site-header-menu #site-navigation div.nav-menu > ul ul li:hover > a{
        background: #fff;
    }






 

    #site-header-menu #site-navigation div.nav-menu > ul ul li > a{
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }

      
    #site-header-menu #site-navigation div.nav-menu > ul li:hover > ul {
        opacity: 1;
        display: block;
        visibility: visible;
        height: auto;
    }     
	#site-header-menu #site-navigation div.nav-menu > ul li > ul ul  {
        border-left: 0;
        left: 100%;
        top: 0;        
    }
    #site-header-menu #site-navigation ul ul li {
    	position: relative;
    }    
    #site-header-menu #site-navigation div.nav-menu > ul ul {
    	text-align: left;
        position: absolute;
        visibility: hidden;
        display: block;
        opacity: 0; 
        line-height: 14px;        
        margin: 0;
        list-style: none;
        left: 0;        
        border-radius: 0;
        -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
        box-shadow: 0 6px 12px rgba(0,0,0,.175);
        background-clip: padding-box;
        transition: all .2s ease;
        z-index: 99;
    }


    /*** Sep Section ***/
 

    #site-header-menu #site-navigation div.nav-menu ul ul > li {
    	border-bottom: 1px solid transparent;
    }

 
    .ts-dmenu-sep-grey #site-header-menu #site-navigation div.nav-menu ul ul > li{
        border-bottom-color: rgba(0, 0, 0, 0.10);
    }


    .ts-dmenu-sep-white #site-header-menu #site-navigation div.nav-menu ul ul > li {
        border-bottom-color: rgba(255, 255, 255, 0.20);
    }

    /*** Sticky Header Height ***/ 
    header .is_stuck #site-header-menu #site-navigation,    
    .is_stuck .headerlogo,
    .is_stuck .ts-header-icon,
    .is_stuck #site-header-menu #site-navigation div.nav-menu > ul > li,
   
    .is_stuck #site-header-menu #site-navigation div.nav-menu > ul > li > a{
        height: <?php echo esc_attr($header_height_sticky); ?>px ;
        line-height: <?php echo esc_attr($header_height_sticky); ?>px;
    }
    
    /*** Sub Navigation menu ***/
    #site-header-menu #site-navigation div.nav-menu > ul > li > ul {
        top: auto; 
        border-top: 3px solid <?php echo esc_attr($skincolor); ?>;       
    }  
 
   
    /*** Sticky Sub Navigation menu ***/
    .is_stuck  #site-header-menu #site-navigation div.nav-menu > ul > li > ul{
        top: <?php echo esc_attr($header_height_sticky); ?>px;
    } 
	
 
    .site-header-main.container-fullwide{
    	padding-left: 30px;
        padding-right: 0px;
    }    
    
	/*** Header Icon border ***/
	.ts-header-icons{	
		position: relative;
        height: <?php echo esc_attr($header_height); ?>px;
    }       
	.is_stuck .ts-header-icons{	
		border-left-color: rgba( <?php echo themestek_hex2rgb($stickymainmenufontcolor); ?> , 0.15) ;
        height: <?php echo esc_attr($header_height_sticky); ?>px;
    }    

	header .is_stuck .site-header:after{
		border-bottom-color: rgba( <?php echo themestek_hex2rgb($stickymainmenufontcolor); ?> , 0.15) ;
	}
	
	/*** Header Text Area ***/
    .ts-header-style-classic:not(.ts-header-invert) .container-fullwide #site-header-menu{
        margin-right:20px;
    }




 
    
    
  
  

    
    /*** ThemeStek Center Menu ***/ 	
	.ts-header-menu-position-center #site-header-menu{
		float: none;
	}
	.ts-header-menu-position-center #site-header-menu #site-navigation{
		text-align: center;
		width: 100%;
	}    
    .ts-header-menu-position-center #site-header-menu  #site-navigation .nav-menu{		
		float: none;
		right: 0;
		left: 0;
		text-align: center;      
	}	

	.ts-header-menu-position-center .site-header-menu.ts-table-cell{
		display: block;
	}
	.ts-header-menu-position-center .headerlogo, 
	.ts-header-menu-position-center .ts-header-icon{
		position: relative;
		z-index: 2;
	}	

	
	/*** ThemeStek Left Menu ***/ 	
	.ts-header-menu-position-left #site-header-menu{
		float: none;
		display: block;
    }
    .ts-header-menu-position-left #site-header-menu #site-navigation .nav-menu{
		float: none;
	}
	.ts-header-menu-position-left .site-branding{	
		padding-right: 25px;
	}	
	

    	
	 /* Header Social link */ 
    .site-header .themestek-social-links-wrapper{
    	float: right;
    }
    .site-header .social-icons {
        padding-top: 0;
        padding-bottom: 0;
    }

    

   

    .site-header.is_stuck {
        position: fixed;
        width:100%;
        top:0;    
        z-index: 999;
        margin:0;
        animation-name: menu_sticky;
        -webkit-box-shadow: 0px 13px 25px -12px rgba(0,0,0,0.25);
        -moz-box-shadow: 0px 13px 25px -12px rgba(0,0,0,0.25);
        box-shadow: 0px 13px 25px -12px rgba(0,0,0,0.25);
        padding: 0;
    }    
   

    .ts-header-icons .ts-header-icon{
        margin-left: 24px;
    }
    .ts-header-icons .ts-header-icon:last-child{
        margin-left: 10px;
    }

   

    .ts-header-style-infostack:not(.ts-header-invert) .ts-header-top-wrapper.container-fullwide{
        padding-left: 15px;
        padding-right: 15px;
    }     

	.ts-header-style-infostack .ts-stickable-header:not(.is_stuck) .container-fullwide .site-header-menu-middle{
		top: <?php echo esc_attr($header_height) ?>px;
	}
    
    #site-header-menu #site-navigation div.nav-menu ul ul > li:last-child{
        border-bottom: none !important;
    }

    
    /***  Tm Header Style Infostack ***/   
    .ts-header-style-infostack #site-header-menu #site-navigation .nav-menu ul,
    .ts-header-style-infostack #site-header-menu #site-navigation .nav-menu{
        float: left;
        height: auto;
    }  
    .ts-header-style-infostack #site-header-menu #site-navigation .nav-menu{
        margin-left: 20px;       
    }
    .ts-header-style-infostack #site-header-menu #site-navigation{
        position: relative;
    }
    .ts-header-style-infostack #site-header-menu #site-navigation:after{
        content: "";
        position: absolute;
        z-index: 1;
        width: 55px;
        height: 55px;
        font-size: 30px;
        line-height: 55px;
        text-align: center;
        width: 0;
        height: 0;
        border-top: 30px solid #fff;
        border-right: 30px solid transparent;
        left: 5px;
        top: 5px;
    }




    .ts-header-style-infostack  #site-header-menu{
        float: none; 
        padding: 0;
    }
    .ts-header-style-infostack #site-header-menu #site-navigation div.nav-menu > ul > li{
        vertical-align: top;
    }
    .ts-header-style-infostack #site-header-menu #site-navigation div.nav-menu > ul > li > a{ 
        padding: 0px 25px 0px 25px;
        margin: 0;
    }
    .ts-header-style-infostack #site-header-menu #site-navigation div.nav-menu > ul > li > a:before{
        bottom: <?php echo (themestek_header_menuarea_height() / 2 - 12); ?>px;
    }  
    .ts-header-style-infostack .ts-header-widgets-tableper{
        position: relative;
        float: right;
        z-index: 112;
        height: <?php echo esc_attr($header_height); ?>px;
        margin-bottom: 35px;
        text-align: right;
        vertical-align: middle;
        display: table;
    }
    .ts-header-style-infostack .ts-header-widgets-tableper .header-widget{
        display: table-cell;       
        padding: 0 24px;
        position: relative;
        vertical-align: middle;
        height: 100%;
        margin: 0;
        text-align: left;
        padding-right: 0;
    }

    .ts-header-style-infostack .header-content-main .header-content,
    .ts-header-style-infostack .header-content-main .header-icon{
        display: table-cell;
        vertical-align: middle;
    }
    .ts-header-style-infostack .ts-vc_icon_element {
        margin-bottom: 0px;
    }    
    .ts-header-style-infostack .ts-bgcolor-grey .header-content-main .header-content,
    .ts-header-style-infostack .ts-bgcolor-white .header-content-main .header-content{
        color: rgba(0, 0, 0, 0.8);
    }       
    .ts-header-style-infostack .ts-bgcolor-skincolor .header-content-main .header-content,
    .ts-header-style-infostack .ts-bgcolor-darkgrey .header-content-main .header-content {
        color: rgba( 255,255,255,0.7);
    } 
    .ts-header-style-infostack .ts-bgcolor-skincolor .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner,
    .ts-header-style-infostack .ts-bgcolor-darkgrey .ts-vc_icon_element.ts-vc_icon_element-outer .ts-vc_icon_element-inner{ 
        color: #fff;
    }      
    header.ts-header-style-infostack .site-header:after{
        display: none;       
    }
    .ts-header-style-infostack .ts-header-icons{
        padding-left: 0px;
    }
  
    .ts-header-style-infostack .ts-header-icon.ts-header-btn-w{
        padding-right: 0px;
        display: block;
        text-align: center;
        color: #fff;        
        width: auto;
    }
    .ts-header-style-infostack #site-header-menu #site-navigation .ts-header-icon.ts-header-btn-w a{
        color: #fff; 
        font-size: 14px;
        padding: 0px 35px;
        display: block;
        letter-spacing: 1px;      
        background-color: rgba( <?php echo themestek_hex2rgb($skincolor); ?> , 1);
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }    

    .ts-header-style-infostack #site-header-menu #site-navigation div.nav-menu > ul > li,      
    .ts-header-style-infostack #site-header-menu #site-navigation div.nav-menu > ul > li > a, 
    .ts-header-style-infostack .ts-phone .ts-header-icon, 
    .ts-header-style-infostack .ts-phone .ts-header-icons,  
    .ts-header-style-infostack #site-header-menu #site-navigation,
    .ts-header-style-infostack .ts-header-block .ts-vc_btn3{
        height: <?php echo esc_attr($themestek_header_menuarea_height); ?>px;
        line-height: <?php echo esc_attr($themestek_header_menuarea_height); ?>px !important;
    }

    .ts-header-style-infostack .ts-stickable-header-w{
        height: auto !important;
        position: relative;
    }
  
    
    .ts-header-style-infostack .headerlogo{
        height: <?php echo esc_attr($header_height)?>px; 
    }
    .ts-header-style-infostack .site-header-menu-middle .container {        
        position: relative;        
        padding: 0px;
    }
    .ts-header-style-infostack .is_stuck .site-header-menu-middle{
        padding: 0px;
    }
    .ts-header-style-infostack #site-header-menu .is_stuck .container,
    .ts-header-style-infostack .site-header-menu-inner{
        background-color: transparent;
    }
    .ts-header-style-infostack .ts-phone .ts-header-icons .ts-header-icon a {
        padding: 0px;
        color: #fff;  
    }
    .ts-header-style-infostack  .ts-phone .ts-header-icons .ts-header-icon:last-child {
        margin-left: 24px;
    }
    .ts-header-style-infostack .ts-phone .ts-header-icons .ts-header-icon a{
        color: #fff;  
    }
    .ts-header-style-infostack .site-header-menu .is_stuck .ts-sticky-bgcolor-skincolor{
        background-color: <?php echo esc_attr($skincolor); ?>; 
    }
    


    .ts-header-style-infostack .ts-phone {
        position: absolute;
        right: -1px;
        top: 0;
        font-size: 18px;
        color: #fff;
        padding: 0;
        height: 60px;
        line-height: 60px;
    }

    .ts-header-style-infostack .ts-infostack-right-content {
        float: right;
        position: relative;
        z-index: 3;
        text-align: right;
        height: <?php echo esc_attr($header_height)?>px; 
        display: table;
    }
    .ts-header-style-infostack .ts-infostack-right-content .info-widget{
        vertical-align: middle;
        display: table-cell;
        text-align: left;
    }
    .ts-infostack-right-content .info-widget *{
        margin-bottom: 0;
    }
    .ts-infostack-right-content .info-widget h3{
        font-size: 15px;
        line-height: 25px;
        font-weight: normal;
        color: #999;
    }
    .ts-infostack-right-content .info-widget i{
        font-size: 25px;
        color: <?php echo esc_attr($skincolor); ?>;
    }
    .ts-infostack-right-content .info-widget .media-right,
    .ts-infostack-right-content .info-widget .media-left{
        padding: 0;
    }

    .ts-infostack-right-content .info-widget .media-left .icon{
        margin-right: 15px;
        background-color: #f6faff;
        width: 55px;
        height: 55px;
        line-height: 55px;
        text-align: center;
        border-radius: 50%;
    }
    .ts-infostack-right-content .info-widget h6{
        font-size: 19px;
        font-weight: 500;
        line-height: 29px;
        color: #09162a;
        letter-spacing: 1px;
    }
    .ts-header-style-infostack .ts-infostack-right-content .info-widget .info-widget-inner{
        margin-right: 40px;
    }
    .ts-header-style-infostack .ts-infostack-right-content .info-widget:last-child .info-widget-inner{
        margin-right: 0px;
    }
    .ts-header-style-infostack .ts-header-text-area.ts-header-button-w{
        margin-left: 15px;
    }
    .ts-header-style-infostack .ts-header-block .ts-vc_btn3{
        padding: 0 24px;
        display: block;
        font-weight: bold !important; 
    }
    .ts-header-style-infostack .ts-header-block .ts-vc_btn3,
    .ts-header-style-infostack .ts-header-block .ts-vc_btn3:hover{
        background-color: #031b4e  !important;
    }
    .ts-header-style-infostack .ts-header-block .ts-vc_btn3:hover{
        color: #fff !important;
    }

    .ts-header-style-infostack div.ts-titlebar-wrapper,
    .ts-header-style-infostack .themestek-slider-wrapper{
        margin-top: -30px;
    }
    .ts-header-style-infostack .site-header{
        z-index: 11;
    }







}




    /*** Overlay Header ***/  
    .ts-header-overlay .ts-stickable-header-w-main{
        position: absolute;
        z-index: 21;
        width: 100%;
        box-shadow: none;
        -khtml-box-shadow: none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        -ms-box-shadow: none;
        -o-box-shadow: none;
    }
    .ts-header-overlay .themestek-pre-header-wrapper{
        background-color: transparent;
    } 
    .ts-header-overlay .ts-stickable-header-w{
        background-color: transparent;
    }   
    .ts-header-overlay .site-header-menu.ts-bgcolor-darkgrey,   
    .ts-header-overlay .site-header.ts-bgcolor-darkgrey{
        background-color: rgba(0, 0, 0, 0.40);
    }    
    .ts-header-overlay .site-header-menu.ts-bgcolor-grey, 
    .ts-header-overlay .site-header.ts-bgcolor-grey{
        background-color: rgba(235, 235, 235, 0.38);
    }   
    .ts-header-overlay .site-header-menu.ts-bgcolor-white,
    .ts-header-overlay .site-header.ts-bgcolor-white{
        background-color: rgba(255, 255, 255, 0.38);
    }   
    .ts-header-overlay .site-header-menu.ts-bgcolor-skincolor,
    .ts-header-overlay .site-header.ts-bgcolor-skincolor{
        background-color: rgba( <?php echo themestek_hex2rgb($skincolor); ?> , 0.30);
    }    
    .ts-header-overlay .site-header-menu.ts-sticky-bgcolor-darkgrey.is_stuck{
        background-color: #151515;
    }    
    .ts-header-overlay .site-header-menu.ts-sticky-bgcolor-grey.is_stuck{
        background-color: #f5f5f5;
    }
    .ts-header-overlay .site-header-menu.ts-sticky-bgcolor-white.is_stuck{
        background-color: #fff;
    }
    .ts-header-overlay .site-header-menu.ts-sticky-bgcolor-skincolor.is_stuck{
        background-color: rgba( <?php echo themestek_hex2rgb($skincolor); ?> , 1);
    }    
    .ts-header-overlay .themestek-pre-header-wrapper.ts-bgcolor-darkgrey{
        border-bottom-color: rgba(0, 0, 0, 0.13);
    }  


    .ts-header-overlay .ts-vc_general.ts-vc_btn3{
        background-color: #fff !important;
        color: #09162a !important;
    }
    .ts-header-overlay .is_stuck .ts-vc_general.ts-vc_btn3:hover,
    .ts-header-overlay .ts-vc_general.ts-vc_btn3:hover{
        background-color: <?php echo esc_attr($skincolor); ?> !important;
        color: #fff !important;
    }


    .ts-header-overlay .is_stuck .ts-vc_general.ts-vc_btn3{
        background-color: #09162a !important;
        color: #fff !important;
    }
    

    .ts-header-overlay .site-header-main.container{
        width: 100%;
        border-bottom: 1px solid rgba( <?php echo themestek_hex2rgb($mainMenuFontColor); ?> , 0.25);
    }
    .ts-header-overlay .site-header .themestek-social-links-wrapper{
        border-left: 1px solid rgba( <?php echo themestek_hex2rgb($mainMenuFontColor); ?> , 0.25);
        padding-left: 30px;
        padding-right: 20px;
        margin-left: 15px;
    }
    .ts-header-overlay .site-header .headerlogo{
        border-right: 1px solid rgba( <?php echo themestek_hex2rgb($mainMenuFontColor); ?> , 0.25);
        padding-right: 50px;
        padding-left: 30px;
    }


    .ts-header-overlay .site-header.is_stuck .social-icons li > a{
        color: rgba( <?php echo themestek_hex2rgb($stickymainmenufontcolor); ?> , 1) !important;
    }
    .ts-header-overlay .site-header.is_stuck .site-header-main.container{
        border-bottom-color: rgba( <?php echo themestek_hex2rgb($stickymainmenufontcolor); ?> , 0.15);
    }
    .ts-header-overlay .site-header.is_stuck .themestek-social-links-wrapper{
        border-left-color: rgba( <?php echo themestek_hex2rgb($stickymainmenufontcolor); ?> , 0.15);
    }
    .ts-header-overlay .site-header.is_stuck .headerlogo{
        border-right-color: rgba( <?php echo themestek_hex2rgb($stickymainmenufontcolor); ?> , 0.15);
    }

    .ts-header-overlay .site-header .themestek-social-links-wrapper{
        height: <?php echo esc_attr($header_height); ?>px;
        line-height: <?php echo esc_attr($header_height); ?>px;
    }
    .ts-header-overlay .site-header.is_stuck .themestek-social-links-wrapper{
        height: <?php echo esc_attr($header_height_sticky); ?>px ;
        line-height: <?php echo esc_attr($header_height_sticky); ?>px;
    }


    .ts-header-overlay #site-header-menu #site-navigation div.nav-menu > ul > li:hover > a,
    .ts-header-overlay .site-header.is_stuck #site-header-menu #site-navigation div.nav-menu > ul > li.current-menu-ancestor > a{
        color: rgba( <?php echo themestek_hex2rgb($skincolor); ?> , 1);
    }