<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Funderpro
 *
 */

use Funderpro\Theme;

?>

<footer id="main-footer" class="site-footer">
    <div class="footer-body">
        <div class="container">

            <?php
      if (has_nav_menu('main')) : ?>
            <nav class="footer-navigation nav-footer-menu"
                aria-label="<?php esc_attr_e('Footer menu', TEXT_DOMAIN); ?>">
                <?php
          wp_nav_menu(
            array(
              'theme_location' => 'secondary-menu',
              'menu_class'     => 'footer-menu footer-links',
              'link_before'    => '<span>',
              'link_after'     => '</span>',
              'walker'         => new Custom_Menu_Walker()
            )
          ); ?>
            </nav>
            <?php
      endif; ?>


            <div class="footer-footer">
                <div class="socials">
                    <a href="#"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/social/ig.svg"
                            alt="instagram"></a>
                    <a href="#"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/social/twitter.svg"
                            alt="twitter"></a>
                    <a href="#"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/social/fb.svg"
                            alt="facebook"></a>
                    <a href="#"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/social/linkedin.svg"
                            alt="linkedin"></a>
                </div>
                <div class="copyright">
                    RISK DISCLOSURE:*The services and information provided by The Bored Traders Club are not directed at
                    citizens or residents in the USA. Additionally, they are not intended for distribution to or used by
                    any individual in any jurisdiction where such distribution would be contrary to local law or
                    regulation.
                </div>

                <div class="policies">
                    <a href="#">Risk Discolusre</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Privacy Policy</a>
                </div>

            </div>
        </div>
    </div>

</footer><!-- #main-footer -->

</div><!-- #page -->
<?php wp_footer(); ?>
</body>

</html>