<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <nav class="<%= @item[:navclass] %>">
      <div class="navigation_inner">
        <div class="storrington_logo">
          <a href="/"><img src="<?php echo get_theme_file_uri('/assets/images/storringtonpr_logo.png'); ?>"/></a>
        </div>
		<?php if ( has_nav_menu( 'top' ) ) : ?>
        <div class="navigation_hamburger">
          <div class="bun top"></div><div class="bun mid"></div><div class="bun bottom"></div>
        </div>
		<?php wp_nav_menu( array(
			'theme_location' => 'top',
			'menu_id'        => 'top-menu',
			'menu_class'     => 'navigation_links',
		) ); ?>
		<?php endif; ?>
      </div>
    </nav>

	<div class="site-content-contain">
		<div id="content" class="site-content">
