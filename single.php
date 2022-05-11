<?php get_header(); ?>

      <!-- blog -->
      <section class="blog">
        <h2><?php the_title(); ?></h2>
        
        <div class="blog-articles">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="single-post">
            <div class="slika">
             <?php the_post_thumbnail(); ?>
            </div>
            <div class="tekst">
              <?php the_content(); ?>
              <h6 class="author-single"><a href="<?php echo get_author_posts_url(get_the_author_meta('id')) ?>"><?php the_author(); ?></a></h6>
              <h6 class="kategorija-single"><?php the_category();?></h6>
            </div>
          </article>
 
        <?php endwhile ?>

        <?php else: ?>
            <p><?php esc_html_e( 'Sorry, there are no posts that match your criteria.' ); ?></p>
        <?php endif; ?>
       
        
        </div>
      </section>

<?php get_footer(); ?>