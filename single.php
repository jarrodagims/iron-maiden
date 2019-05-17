<?php get_header(); ?>
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <?php get_template_part('template-parts/content/content', 'single'); ?>
            </div>
			<div class="col-xs-12 col-md-4" id="sidebar">
				<?php get_sidebar('main-sidebar'); ?>
			</div>
        </div>
    </div>
</section>

<?php get_footer(); ?>