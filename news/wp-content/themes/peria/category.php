<?php get_header(); ?>
			<div id="largeimage"><!-- LARGE IMAGE FLASH --></div>
			<div id="main">
				<div id="contentarea" class="full">
                	<h2>Peria News Archive</h2>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    	<div class="entry">
                        <?php the_date('','<h4>','</h4>'); ?>
                        <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                        <?php the_excerpt(); ?>
                        </div>
                    <?php endwhile; endif; ?>
				</div>
			</div>
			<div id="dock">&nbsp;</div>
			<div class="clear"></div>

<?php get_footer(); ?>
