<?php
/*
	Template Name: Home Page
*/

global $more;    // Declare global $more (before the loop).


?>

<?php get_header(); ?>
 
 
 	<section id="main">
        
        <div class="messageContainer" >
            <a id="ItzUs"></a>
            <div class="messageBoxLeft written rotateLeft">
                <div class="muhil"></div>
                <h2> First Meet </h2>
                <img src="<?php bloginfo( 'template_url' ); ?>/images/muhil-loves.JPG" width="140">
                I first met shiny in my University. She was easy to talk to and was as naughty as me. Though we were from very different backgrounds, we instantly hit it off with each other. Little did I know I will fall for her or get Married to her. I remember the first time we went shopping with a group of friends to the City Center in Norwich and the visit to the lake in a slight drizzle. We became really close friends that day.
                <img src="" />
            </div>

        </div>
        
        <div class="messageContainer">
            <div class="messageBoxRight written rotateRight">
                <div class="shiny"></div>
                
                <h2>Buddies for life </h2>
                <img src="<?php bloginfo( 'template_url' ); ?>/images/Shiny-loves.jpg" width="200">
                “I love my name very much” is Muhil’s first conversation on Facebook. A person who I hoped never to meet in uni turned out to be my best friend. We had our own secret jokes and he visits my flat for food, terrible tho it was at that point of time he was my Guinea pig. We had many differences even as friends, but trust me “A way to a mans heart is good food” in my case tho just “food”.              
                
            </div>
            
        </div>
        
        
        <div class="messageContainer">
            
            <div class="messageBoxLeft written rotateRight">
                <div class="muhil"></div>
                <h2> &#9825 Falling in Love &#9825</h2>
                <img src="<?php bloginfo( 'template_url' ); ?>/images/Muhil-Shiny-Lovey-Dovey.jpg" width="200">
                
                I can't pinpoint any particular time when I fell for her. It was gradual. We became really close friends, and we realized we can't call what we had between as friendship anymore. I had gone travelling to Brighton without Shiny, and there I realized how much I missed her and couldn't be without her. I did not know if she shared the same feelings towards me. Imagine my surprise when I came back to see she was crying (she still maintains she was not crying, I know what I saw :P )and asking me to promise her never to leave her alone like that. I did. I knew then that we were meant to be.
            </div>

        </div>
        <div class="messageContainer">
            <div class="messageBoxRight written rotateLeft">
                <div class="shiny"></div>
                <h2> &#9829 Falling in Love &#9829</h2>
                <img src="<?php bloginfo( 'template_url' ); ?>/images/Love.jpg
                          " width="200">                
                There was no start date when I fell for him. But till today he hasn’t proposed to me officially but here we are, planning our wedding. We just knew we wanted to be together forever but never got to putting into words. I did miss him when he left to Brighton without me but not as dramatic as he put it. (I dint cry he just wishes it was that way). Muhil is someone who respects and loves me for who I am and thats something I like very much about him.
                
            </div>
            
        </div>
        
    
        
        
        <div class="messageContainerLarge" >
            <a id="Marriage"></a>
            <div class="date">24 April, 2014</div>
            <h2>The BIG Day</h2>
                Well, the date is set. The BIG Day. The Day we start our journey together. We cordially Invite you to be a part of this Day and share our happiness :). The location is St.Patrick's Church, Tuticorin, India. The time is 10.00 AM . See you all there.
               
            <div class="button map" id="mapButton1">MAP</div>
            
            
        </div>
        
        <div class="messageContainerLarge">
            
            <h2>Reception</h2>
            <div class="date">24 April, 2014</div>
                A time to meet the bride and groom, share stories and have fun. Tamil Traditional is the theme and everyone is invited. The location is AVM Kamalavel Mahal, Tuticorin, India. The timing is 11.00 AM. See you all there.
           
             
            <div class="button map" id="mapButton2">MAP</div>
        </div>
       
        <div class="messageContainerLarge">
            <div class="date">26 April, 2014</div>
            <h2>Evening Reception</h2>
            
                Come join us in celebration of our Marriage. The location is Hotel Quality Inn Sabari, Chennai, India. Casual and Fun is the theme. Its in the evening (6.00 PM) with music and fun. 
            
            <!-- <div class="button rsvp">RSVP</div> -->
            
            <div class="button map" id="mapButton3">MAP</div>
        </div>
        
        <div class="commentsContainer">
        <?php comments_template(); ?> 
        </div>
    </section>
<div id="map1">
</div> 
<div id="map2">
</div> 
<div id="map3">
</div> 
<?php get_footer(); ?>