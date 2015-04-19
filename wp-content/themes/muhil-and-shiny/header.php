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
    $('#map1').dialog({
        autoOpen: false,
        width:850,
        height:700,
        dialogClass: 'fixed-dialog',
        modal: true,
        });
        $('#map2').dialog({
        autoOpen: false,
         width:850,
        height:700,
        dialogClass: 'fixed-dialog',
        modal: true,
            });
        $('#map3').dialog({
        autoOpen: false,
        width:850,
        height:700,
        dialogClass: 'fixed-dialog',
        modal: true,
        });
    
    $('#mapButton1').click(function(e){
        e.preventDefault();
    
        $('#map1').empty();
        $('#map1').dialog( "open" );
        
        $('#map1').append('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.7714316264137!2d78.15409392348087!3d8.807531538526538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b03ef9ddd80826b%3A0xbf580de3f3f492e9!2sSt.Patrick&#39;s+Church!5e0!3m2!1sen!2suk!4v1394489696063" frameborder="0" style="border:0"></iframe>');
        $('#map1').css('position','fixed !important');
    
    });
    
    $('#mapButton2').click(function(e){
        e.preventDefault();
        $('#map2').empty();
        $('#map2').dialog( "open" );
        $('#map2').append('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15771.124489661774!2d78.13909604836257!3d8.8066226072386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b03ef924e8349c9%3A0xddd3c369efb30bd6!2sTuticorin+New+Bus+Station!5e0!3m2!1sen!2suk!4v1394490819157"  frameborder="0" style="border:0"></iframe>  ');
    });
    
    $('#mapButton3').click(function(e){
        e.preventDefault();
        $('#map3').empty();
        $('#map3').dialog( "open" );
        $('#map3').append('<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3886.814805900237!2d80.2398859!3d13.047457150000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52665a5bc3c20d%3A0x5951b9a3c02131e9!2sQuality+Inn+Sabari!5e0!3m2!1sen!2suk!4v1394490934853" frameborder="0" style="border:0"></iframe>');
    
    });
    
    
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
        <div class="headerImageContainer">        
            
            <img src="<?php bloginfo( 'template_url' ); ?>/images/MS5.jpg">
            
        </div>
        
    </header>
   
       
    
   		
        
    
    