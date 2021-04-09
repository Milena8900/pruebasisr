<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */

?>
<?php
$metaGeneratorContent = 'Nicepage 3.11.0, nicepage.com';
$meta_generator = '';
if ($metaGeneratorContent) {
    remove_action('wp_head', 'wp_generator');
    $meta_generator = '<meta name="generator" content="' . $metaGeneratorContent . '" />' . "\n";
    $GLOBALS['meta_generator'] = true;
}
$headerHideBlog = false;
$headerHidePost = false;
$pagePost = is_single();
$pageBlog = is_home();
$headerHideProducts = false;
$headerHideProduct = false;
$headerHideCart = false;
$pageProducts = false;
$pageProduct = false;
$pageCart = false;
if (function_exists('wc_get_product')) {
    $pageProducts = is_shop() || is_product_category();
    $pageProduct = is_product();
    $pageCart = is_cart();
} ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" style="font-size:<?php echo apply_filters('theme_base_font_size', '16'); ?>px">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $meta_generator; ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
    
    
    
</head>

<body <?php body_class(); ?><?php body_style_attribute(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'pruebasisr' ); ?></a>
    <?php if (!$pageBlog && !$pagePost && !$pageProducts && !$pageProduct && !$pageCart ||
        $pageBlog && !$headerHideBlog ||
        $pagePost && !$pageProduct && !$headerHidePost ||
        $pageProducts && !$headerHideProducts ||
        $pageProduct && !$headerHideProduct ||
        $pageCart && !$headerHideCart) { ?>
    <header class="u-border-2 u-border-grey-75 u-clearfix u-custom-color-1 u-header u-header" id="sec-ca56">
  <?php $logo = theme_get_logo(array(
            'default_src' => "/images/Grupo1305.png",
            'default_url' => home_url('/'),
            'default_width' => '245'
        )); ?><a <?php if (is_customize_preview()) echo 'data-default-src="' . esc_url($logo['default_src']) . '" '; ?>href="<?php echo esc_url($logo['url']); ?>" class="u-image u-logo u-image-1 custom-logo-link" data-image-width="200" data-image-height="53">
    <img <?php if ($logo['svg']) {echo 'style="width:'.$logo['width'].'px"';} else {echo 'style="width:auto"';}?>src="<?php echo esc_url($logo['src']); ?>" class="u-logo-image u-logo-image-1" data-image-width="245.5386">
  </a>
  <?php
            ob_start();
            ?><nav class="u-align-center u-menu u-menu-dropdown u-offcanvas u-menu-1">
    <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 100;">
      <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-border-radius u-custom-borders u-custom-color u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
        <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
      </a>
    </div>
    <div class="u-custom-menu u-nav-container">
      {menu}
    </div>
    <div class="u-custom-menu u-nav-container-collapse">
      <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
        <div class="u-sidenav-overflow">
          <div class="u-menu-close u-menu-close-1"></div>
          {responsive_menu}
        </div>
      </div>
      <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
    </div>
  </nav><?php
            $menu_template = ob_get_clean();
            echo Theme_NavMenu::getMenuHtml(array(
                'container_class' => 'u-align-center u-menu u-menu-dropdown u-offcanvas u-menu-1',
                'menu' => array(
                    'menu_class' => 'u-custom-font u-heading-font u-nav u-spacing-15 u-unstyled u-nav-1',
                    'item_class' => 'u-nav-item',
                    'link_class' => 'u-border-2 u-border-active-custom-color-2 u-border-hover-custom-color-2 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-body-alt-color u-text-hover-custom-color-2',
                    'link_style' => 'padding: 10px 0px;',
                    'submenu_class' => 'u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-block-7c79-22',
                    'submenu_item_class' => 'u-nav-item',
                    'submenu_link_class' => 'u-button-style u-nav-link u-white',
                    'submenu_link_style' => '',
                ),
                'responsive_menu' => array(
                    'menu_class' => 'u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2',
                    'item_class' => 'u-nav-item',
                    'link_class' => 'u-button-style u-nav-link',
                    'link_style' => 'padding: 10px 0px;',
                    'submenu_class' => 'u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-block-7c79-23',
                    'submenu_item_class' => 'u-nav-item',
                    'submenu_link_class' => 'u-button-style u-nav-link',
                    'submenu_link_style' => '',
                ),
                'theme_location' => 'primary-navigation-1',
                'template' => $menu_template,
            )); ?>
  <a href="https://nicepage.com/k/portfolio-html-templates" class="u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-2 u-radius-6 u-btn-1">¡Cotizar ahora!</a>
  <p class="u-custom-font u-heading-font u-text u-text-1">Es </p>
  <div class="u-rotation-parent u-rotation-parent-1">
    <div class="u-expanded-width u-rotate-180 u-shape u-shape-svg u-text-white u-shape-1">
      <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 140" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-692d"></use></svg>
      <svg class="u-svg-content" viewBox="0 0 160 140" x="0px" y="0px" id="svg-692d"><path d="M80,0l80,140H0L80,0z"></path></svg>
    </div>
  </div>
</header>
    
    <?php } ?>
    <div id="content">