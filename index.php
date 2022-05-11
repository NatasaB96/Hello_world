<?php get_header(); ?>


<section class="contact">
<h2>Contact us</h2>
<div class="row">
    <div class="col input-form">
        <?php
        if ( is_active_sidebar( 'contact-form' ) ) : ?>
            <?php dynamic_sidebar( 'contact-form' ); ?>     
        <?php endif; ?>
        </div>
    <div class="col company">
        <img src="<?php echo get_template_directory_uri();?>/img/client-1.png" alt="">
        <img src="<?php echo get_template_directory_uri();?>/img/client-2.png" alt="">
        <img src="<?php echo get_template_directory_uri();?>/img/client-3.png" alt="">
        <img src="<?php echo get_template_directory_uri();?>/img/client-4.png" alt="">
    </div>

</div>
</section>


<?php get_footer(); ?>