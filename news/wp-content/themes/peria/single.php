<?php get_header(); ?>

			<div id="detail">
                <p><a href="<?php bloginfo('url'); ?>/category/news/">Archives</a></p>
            </div>
			<div id="largeimage"><!-- LARGE IMAGE FLASH --></div>
			<div id="main">
				<div id="contentarea">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_date('','<h4>','</h4>'); ?>
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                        <?php the_content(__('(more...)')); ?>
                    <?php endwhile; endif; ?>
				</div>
			</div>
			<div id="dock">&nbsp;</div>
			<div class="clear"></div>

<?php get_footer(); ?>
