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
	<a href="<?php echo esc_url($link);?>" class="c-Card o-Stack">
		<h3 class="o-Stack__item"><?php echo esc_html($title);?></h3>
		<?php if($description): ?>
			<p class="o-Stack__item"><?php echo esc_html($description);?></p>
		<?php endif; ?>
	</a>
</li>