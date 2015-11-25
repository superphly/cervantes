<?php $background = get_field("footer_background", 'option'); ?>
<?php $image = $background['sizes']['full-width']; ?>

        <footer id="footer" style="background-image: url('<?php echo $image; ?>');">
            <div class="container">
                
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <img src="<?php echo get_template_directory_uri();?>/library/images/rrlogs.png" width="100" height="100">
                        <h5><?php echo get_bloginfo('sitename'); ?></h5>
                    </div>
                </div>

                <div class="row">
                    <div id="footer-left" class="col-xs-12 col-sm-6">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <nav role="navigation">
                                    <?php wp_nav_menu(array(
                                        'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
                                        'container_class' => 'footer-main',             // class of container (should you choose to use it)
                                        'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
                                        'menu_class' => 'nav footer-nav',               // adding custom nav class
                                        'theme_location' => 'footer-links',             // where it's located in the theme
                                        'before' => '',                                 // before the menu
                                        'after' => '',                                  // after the menu
                                        'link_before' => '',                            // before each link
                                        'link_after' => '',                             // after each link
                                        'depth' => 0,                                   // limit the depth of the nav
                                        'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
                                    )); ?>
                                </nav>
                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <?php wp_nav_menu(array(
                                        'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
                                        'container_class' => 'footer-2',                // class of container (should you choose to use it)
                                        'menu' => __( 'Footer Links 2', 'bonestheme' ), // nav name
                                        'menu_class' => 'nav footer-nav',               // adding custom nav class
                                        'theme_location' => 'footer-links2',            // where it's located in the theme
                                        'before' => '',                                 // before the menu
                                        'after' => '',                                  // after the menu
                                        'link_before' => '',                            // before each link
                                        'link_after' => '',                             // after each link
                                        'depth' => 0,                                   // limit the depth of the nav
                                        'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
                                    )); ?>
                                
                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <?php wp_nav_menu(array(
                                        'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
                                        'container_class' => 'footer-3',                // class of container (should you choose to use it)
                                        'menu' => __( 'Footer Links 3', 'bonestheme' ), // nav name
                                        'menu_class' => 'nav footer-nav',               // adding custom nav class
                                        'theme_location' => 'footer-links3',            // where it's located in the theme
                                        'before' => '',                                 // before the menu
                                        'after' => '',                                  // after the menu
                                        'link_before' => '',                            // before each link
                                        'link_after' => '',                             // after each link
                                        'depth' => 0,                                   // limit the depth of the nav
                                        'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
                                    )); ?>
                                
                            </div>
                        </div>
                    </div><!-- end footer left-->

                    <div id="footer-right" class="col-xs-12 col-sm-6">
                        <div class="row">
                            <div class="col-xs-12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'xxx', 'auto');
            ga('send', 'pageview');
        </script>
        <script>
            jQuery(function($) {
              $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                  if (target.length) {
                    $('html,body').animate({
                      scrollTop: target.offset().top
                    }, 1000);
                    return false;
                  }
                }
              });
            });
        </script>
    </body>
</html>