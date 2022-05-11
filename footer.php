 <!-- footer -->
 <footer>

    <?php
    if ( is_active_sidebar( 'footer-1' ) ) : ?>
        <?php dynamic_sidebar( 'footer-1' ); ?>     
    <?php endif; ?>

    <?php
    if ( is_active_sidebar( 'footer-2' ) ) : ?>
        <?php dynamic_sidebar( 'footer-2' ); ?>     
    <?php endif; ?>

    <?php
    if ( is_active_sidebar( 'footer-3' ) ) : ?>
        <?php dynamic_sidebar( 'footer-3' ); ?>     
    <?php endif; ?>

 </footer>
    
  <section class="bottom-bar">
    <p>&copy;&nbsp;<small>All rights reserved</small></p>
  </section>

    </main>

    <?php wp_footer();?>
  </body>
</html>