<?php

/**
 * Template Name: Homepage
 */

use Funderpro\Theme;
Theme\custom_get_header(); 
?>

<div class="homepage">
    <section class="hero">
        <?php
      get_template_part('template-parts/components/hero'); ?>
    </section>
    <section class="cards-section">
        <?php
      get_template_part('template-parts/components/cards'); ?>
    </section>
</div>

<?php
Theme\custom_get_footer();
?>