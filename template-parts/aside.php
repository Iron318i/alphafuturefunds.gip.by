<div class="aside col-md-4 col-lg-3">
    <div class="widget">
	<h5 class="widget-title">Blog Categories</h5>
	<?php
	$args = array(
	    'title_li' => __(''),
	    'hide_empty' => 0,
	    'show_count' => 1,
	    'use_desc_for_title' => 0
	);
	?>
	<ul>
	    <?php
	    wp_list_categories($args);
	    ?>
	</ul>
    </div>
    <div class="widget">
	<h5 class="widget-title">Recent News</h5>
	<?php
	$args = array(
	    'posts_per_page' => 3,
	    'post_type' => 'post'
	);

	$query = new WP_Query($args);

	if ($query->have_posts()) :
	    while ($query->have_posts()) :
		$query->the_post();
		get_template_part('loop-templates/content-recent');
	    endwhile;
	    ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
    </div>
</div>