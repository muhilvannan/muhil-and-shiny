<?php get_header(); ?>
 
 	
    <section id="main" class="blog">
      	
        <?php if ( ! have_posts() ) : ?>
            <article>
                <h1>Nothing Here</h1>
                <p>Please try again later or visit some of the other sections.</p>
             </article>
        <?php endif; ?>

        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
        <article>
        
 			<header>
       			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-date">
                    <div class="day"><?php the_time('d') ?></div>
                    <div class="month"><?php the_time('M') ?></div>
                </div>
            </header>
           
            <?php the_content(); ?>
           
            <div class="postmetadata">
            	 Category: <?php the_category(',') ?> &bull; <?php the_tags(); ?>
            </div>
            
            
            
            
        </article>
		<?php endwhile; ?>
        
        <div id="pagination">
			<?php posts_nav_link(); ?>
  		</div> 
		
		<?php endif; ?>
    </section>
 
 
    
   <?php get_sidebar(); ?>
        

<?php get_footer(); ?>