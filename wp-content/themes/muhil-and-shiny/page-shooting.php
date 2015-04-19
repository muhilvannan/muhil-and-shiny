<?php
/*
	Template Name: Shooting template
*/

global $more;    // Declare global $more (before the loop).


?>



<?php get_header(); ?>
 
 
 	<section id="main">
      
      	<?php query_posts( 'post_type=shooting'); ?>
      
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 		
        
        	<?php $more = 0; // Set (inside the loop) to display content above the more tag. ?>

 
 
        <article>
        
 			<header>
       			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            </header>
           
            <?php the_content("More..."); ?>
			
           	<div class="postmetadata">
				<?php the_tags('Tags: ',' > '); ?>
                <?php the_terms( $post->ID, 'shooting-category', 'Categories: ', '', '' ); ?>
            </div>
            
        </article>
		
		<?php endwhile; ?>
		
		<?php endif; ?>
    </section>
    
    <aside>
    
        
    </aside>
 


	</section>
 

<?php get_footer(); ?>