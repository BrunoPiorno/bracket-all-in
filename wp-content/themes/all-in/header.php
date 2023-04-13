<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $favicon = get_field('favicon','option');	?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon['url']; ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<?php
if(is_page()) {
	$parent = get_post($post->post_parent); $page_slug = 'page-'.$post->post_name;
	if($parent): $parent_slug = 'parent-'.$parent->post_name; endif;
} else {
	if(is_single()) { $class=''; $category = get_the_category(); $class .= $category[0]->slug; }
}
?>
<body <?php body_class($page_slug ." ". $parent_slug ." ". $class ." ". $newsbar); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<header class="header">
		<div class="container">
			<div class="header__top">
				<div class="header__top__left">				
					<?php get_template_part('modules/components/site-logo'); ?>
				</div>
				<div class="header__top__right">
					<div tabindex="0" data-block="menu" class="js-open-block responsive__btn" title="Open Menu">
						<span></span><span></span><span></span><span></span>
					</div>
					<?php get_template_part('modules/components/menu'); ?>
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
