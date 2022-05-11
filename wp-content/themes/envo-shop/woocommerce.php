<?php get_header(); ?>

<!-- start content container -->
<div class="mx-auto">
    <article class="container ">
        <?php woocommerce_content(); ?>
    </article>       
    <?php 
    // get_sidebar('right'); 
    ?>
</div>
<!-- end content container -->

<?php
get_footer();
