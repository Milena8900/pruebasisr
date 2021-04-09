<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 */
?>
<?php
$footerHideBlog = false;
$footerHidePost = false;
$pagePost = is_single();
$pageBlog = is_home();
$footerHideProducts = false;
$footerHideProduct = false;
$footerHideCart = false;
$pageProducts = false;
$pageProduct = false;
$pageCart = false;
if (function_exists('wc_get_product')) {
    $pageProducts = is_shop() || is_product_category();
    $pageProduct = is_product();
    $pageCart = is_cart();
} ?>
		</div><!-- #content -->
<?php if (!$pageBlog && !$pagePost && !$pageProducts && !$pageProduct && !$pageCart ||
    $pageBlog && !$footerHideBlog ||
    $pagePost && !$pageProduct && !$footerHidePost ||
    $pageProducts && !$footerHideProducts ||
    $pageProduct && !$footerHideProduct ||
    $pageCart && !$footerHideCart) { ?>
        <footer class="u-align-center u-clearfix u-custom-color-1 u-footer u-footer" id="sec-9b11">
  <div class="u-clearfix u-sheet u-sheet-1">
    <img src="<?php echo get_template_directory_uri(); ?>/images/Grupo1305.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-1" data-image-width="200" data-image-height="53">
    <p class="u-custom-font u-heading-font u-small-text u-text u-text-variant u-text-1">Contáctanos&nbsp;<br>Trabaja con nosotros&nbsp;<br>Política de privacidad&nbsp;<br>Política de cookies 
    </p>
    <img src="<?php echo get_template_directory_uri(); ?>/images/Grupo1600.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-2" data-image-width="45" data-image-height="45">
    <img src="<?php echo get_template_directory_uri(); ?>/images/Grupo1598.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-3" data-image-width="45" data-image-height="45">
    <img src="<?php echo get_template_directory_uri(); ?>/images/Grupo1599.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-4" data-image-width="45" data-image-height="45">
    <div class="u-border-1 u-border-white u-line u-line-horizontal u-line-1"></div>
    <div class="u-border-1 u-border-white u-line u-line-horizontal u-line-2"></div>
    <p class="u-custom-font u-heading-font u-text u-text-2">2020 | Todos los derechos Reservados</p>
  </div>
</footer>
        
<?php } ?>
        <?php $showBackLink = get_option('np_hide_backlink') ? false : true; ?>
<?php if ($showBackLink) : $GLOBALS['theme_backlink'] = true; ?>
<section class="u-backlink u-clearfix u-grey-80">
            <a class="u-link" href="https://nicepage.com/Best WordPress Theme" target="_blank">
        <span>wordpress-themes</span>
            </a>
        <p class="u-text"><span>created with</span></p>
        <a class="u-link" href="https://nicepage.com/wordpress-website-builder" target="_blank"><span>WordPress Website Builder</span></a>.
    </section>
<?php endif; ?>
        
	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php back_to_top(); ?>
</body>
</html>
