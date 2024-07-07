<?php
/**
 * Template part for displaying bucket list teasers
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package www
 */

?>

<li class="o-Grid__item">
	<a href="<?php echo esc_url($category_link);?>" class="c-Card o-Stack">
		<h2 class="o-Stack__item"><?php echo esc_html($category_name);?></h2>
		<?php if(!empty($category_description)): ?>
			<p class="o-Stack__item"><?php echo esc_html($category_description);?></p>
		<?php endif; ?>
	</a>
</li>