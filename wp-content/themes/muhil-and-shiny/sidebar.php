<?php /*dynamic_sidebar( 'sidebar2' );*/ ?>

<aside>
<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
 
<?php endif; ?>
</ul>

</aside>