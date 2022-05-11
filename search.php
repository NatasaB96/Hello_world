<?php get_header(); ?>
    

      <!-- blog -->
      <section class="blog postMatch">
        <h2>Posts that match your criteria</h2>
        <p><b>Your keyword: <?php echo get_search_query(); ?></b></p>
        
        <div class="blog-articles">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article>
            <div class="slika">
             <?php the_post_thumbnail(); ?>
              <div class="kategorija"><span><?php the_category(); ?></span></div>
            </div>
            <div class="tekst">
            <h6><a href="<?php echo get_author_posts_url(get_the_author_meta('id')) ?>"><?php the_author(); ?></a></h6>
            <h4><?php the_title(); ?></h4>
            <p><?php get_the_date(); ?></p>
            <?php the_excerpt(); ?>
            <button><a href="<?php the_permalink();?>">Read more</a></button>
            </div>
          </article>

          <?php endwhile; else : ?>
	        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
          
        </div>
      </section>

<?php get_footer(); ?>