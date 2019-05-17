<div id="sidebar">
    <?php if (is_page('contact')) : ?>
    <div id="contact-form">
        <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="74" title="Contact Form"]');
            } else {
                echo do_shortcode('[contact-form-7 id="74" title="Contact Form"]');
            }
            ?>
    </div>
</div>
<?php endif; ?>

<?php if (is_single()) : ?>
	<h5>Follow Us</h5>    
    <ul class="list-inline social-media sm">
	<li><a href="https://www.facebook.com/Quality-Iron-Maid-829855534071607/" class="facebook-button social-media-button sm square lighten external" target="_blank"><i class="fab fa-facebook-f fa-fw "><span>Facebook</span></i></a></li>
	<li><a href="https://twitter.com/YouWashWeIron" class="twitter-button social-media-button sm square lighten external" target="_blank"><i class="fab fa-twitter fa-fw "><span>Twitter</span></i></a></li>
	</ul>
<?php endif; ?>

<?php if (!is_page('contact')) : ?>
<section class="home-module-2">
    <section class="icon-row">
        <?php echo get_template_part('template-parts/icon', 'row'); ?>
    </section>
</section>
<?php endif; ?>

<?php if (is_single()) : ?>
<?php the_widget( 'WP_Widget_Archives' ); ?> 
<?php the_widget( 'WP_Widget_Recent_Posts' ); ?> 
<?php endif; ?>

<?php if (!is_page('contact')) : ?>
<section class="home-module-3">
    <div class="card">
        <div class="card-top">
            <span>You wash it,</span> we iron it!
        </div>

        <div class="card-bottom">
            <a href="<?=SITEURL?>/contact/" class="header-button"><button class="btn btn-primary my-2 my-sm-0" type="submit">Contact
                    Us Today</button></a>
        </div>
    </div>

    <div class="card card-secondary">
        Iron a piece of clothing in
        <img src="<?=IMGURL?>iron-time.svg" alt="15-20 minutes">
    </div>
</section>
<?php endif; ?>
</div>