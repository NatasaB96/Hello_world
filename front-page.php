<?php get_header(); ?>

      <!-- hero -->
      <?php get_template_part('hero'); ?>

      <!-- gifovi -->
      <?php get_template_part('gifovi'); ?>

      <!-- numbers -->
      <?php get_template_part('numbers'); ?>

      <!-- brand -->
      <?php get_template_part('brand'); ?>

      <!-- blog -->
      <section class="blog">
        <h2><b>Latest</b> posts</h2>
        
        <div class="blog-articles">

          <?php $the_query = new WP_Query( array(
                'post-type' => 'post',
                'posts_per_page' => '3'
              ) ); ?>

                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <article>
                    <div class="slika">
                    <?php the_post_thumbnail(); ?>
                      <div class="kategorija"><span><?php the_category(); ?></span></div>
                    </div>
                    <div class="tekst">
                      <h6><small><a href="<?php echo get_author_posts_url(get_the_author_meta('id')) ?>"><?php the_author(); ?></a></small></h6>
                      <h4><?php the_title();?></h4>
                      <p><?php get_the_date(); ?></p>
                      <?php the_excerpt(); ?>
                      <button><a href="<?php the_permalink();?>">Read more</a></button>
                    </div>
                </article>

              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>

              <?php else : ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
              <?php endif; ?>

        
        </div>
      </section>



<?php get_footer(); ?>