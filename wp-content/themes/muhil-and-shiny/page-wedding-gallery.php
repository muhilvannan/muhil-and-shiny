<?php
/*
	Template Name: Gallery Page
*/

global $more;    // Declare global $more (before the loop).


?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>Muhil & Shiny</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.ico" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <script src="<?php bloginfo( 'template_url' ); ?>/js/modernizr-2.0.6.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-ui.min.js"></script>
<?php
    wp_head();
    wp_get_archives('type=monthly&format=link');
?>

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/style.css">
   
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/jquery-ui.css">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48897354-1', 'muhilandshiny.com');
  ga('send', 'pageview');

</script>
    
<script type="text/javascript">

$(document).ready(function(){
   
    
    var previousScroll = 0;

    $(window).scroll(function(){
      
       
    });
    
    
$(window).scroll(function(){
        var scrollTop = 90;
     var currentScroll = $(this).scrollTop();
    
    
        if($(window).scrollTop() >= scrollTop){
            $('.nav').css({
                position : 'fixed',
                top : '0',
                width:'100%',
                background:'#7D1920 url("<?php bloginfo( 'template_url' ); ?>/images/bg2.png")',
                "box-shadow": '0px 1px 8px #333',
                "opacity":'0.05'
            });
            $('.nav').hover(
            function() {
                $( this ).addClass( "hover" );
              }, function() {
                $( this ).removeClass( "hover" );
              }
            );
            
            if (currentScroll > previousScroll){
               $('.nav').css({
                    position : 'fixed',
                    top : '0',
                    width:'100%',
                    background:'#7D1920 url("<?php bloginfo( 'template_url' ); ?>/images/bg2.png")',
                    "box-shadow": '0px 1px 8px #333',
                    "opacity":'0'
                });
             } 
             else {
                 $('.nav').css({
                    position : 'fixed',
                    top : '0',
                    width:'100%',
                    background:'#7D1920 url("<?php bloginfo( 'template_url' ); ?>/images/bg2.png")',
                    "box-shadow": '0px 1px 8px #333',
                    "opacity":'1'
                }); 
              }
               previousScroll = currentScroll;
            
            
        }
        if($(window).scrollTop() < scrollTop){
            $('.nav').removeAttr('style');  
        }
    }) 
})</script>

</head>
<body>
 <div id="page-wrapper">
    <header>
        <div class="logo">
            
            <a href="/">Muhil & Shiny</a>
        
        </div>
        <div class="nav nav-down" id="menu" >        
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#ItzUs">Itz Us</a></li>
                <li><a href="#Marriage">Marriage</a></li>
                <li><a href="#Comments">Leave a Message</a></li>
            </ul>
        </div>
        
    </header>
     

     
     <?php get_footer(); ?>
   