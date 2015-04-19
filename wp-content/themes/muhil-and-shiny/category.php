<?php get_header(); ?>
 
    <section id="main" class="blog">
      	
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
        
        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		  <?php /* If this is a category archive */ if (is_category()) { ?>
            <h1>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category:</h1>
          <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
            <h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
          <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
            <h1>Archive for <?php the_time('F jS, Y'); ?>:</h1>
          <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
            <h1>Archive for <?php the_time('F, Y'); ?>:</h1>
          <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
            <h1>Archive for <?php the_time('Y'); ?>:</h1>
          <?php /* If this is an author archive */ } elseif (is_author()) { ?>
            <h1>Author Archive</h2>
          <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
            <h1>Blog Archives</h1>
        <?php } ?>
        
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
    
    <aside class="blog">
    
        <?php get_sidebar(); ?>
        
    </aside>
   
<?php get_footer(); ?>