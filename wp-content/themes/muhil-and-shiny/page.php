<?php get_header(); ?>
 
 
 	<section id="main">
      
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 
        <article>
        
 			<header>
       			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            </header>
           
            <?php the_content(); ?>
           
        </article>
    </section>
    
    <aside>
    
        <?php 
			$item = get_post_meta($post->ID, 'support', false);
			foreach ($item as $value) {
				echo do_shortcode($value);
			}
		?>
    </aside>
 
<?php endwhile; ?>
	
 
 
<?php endif; ?>
	</section>
 

<?php get_footer(); ?>