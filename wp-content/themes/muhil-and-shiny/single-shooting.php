<?php get_header(); ?>
 
 
     <section id="main" class="blog">
      	
        
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
				<?php the_tags('Tags: ',' > '); ?>
                <?php the_terms( $post->ID, 'shooting-category', 'Categories: ', '', '' ); ?>
            </div>
            
           
            
        </article>
		<?php endwhile; ?>
        
        <div id="pagination">
            <?php previous_post_link('%link'); ?>   <?php next_post_link('%link'); ?>
  		</div> 
		
		<?php endif; ?>
    </section>
 
 
    <aside class="blog">
    
        <?php get_sidebar(); ?>
        
     </aside>

<?php get_footer(); ?>
 
 