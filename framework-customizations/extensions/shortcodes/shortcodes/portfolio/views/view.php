<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>
<div class="portfolio">
    <ul class="portfolio-cats nav">
	<li><a href="#all" class="active">All</a></li>
	<?php
	$terms = get_terms([
	    'taxonomy' => 'projectcat'
	]);
	if ($terms && !is_wp_error($terms)) {
	    foreach ($terms as $term) {
		echo '<li><a href="#tax-' . $term->term_id . '">' . $term->name . '</a></li>';
	    }
	}
	?>
    </ul>
    <div class="row g-0">
	<?php
	$args = array(
	    'posts_per_page' => -1,
	    'post_type' => 'project',
	);

	$query = new WP_Query($args);

	if ($query->have_posts()) {
	    while ($query->have_posts()) {
		$query->the_post();
		get_template_part('loop-templates/content', 'project');
	    }
	} else {
	    get_template_part('loop-templates/content', 'none');
	}
	wp_reset_postdata();
	?>
    </div>
</div>