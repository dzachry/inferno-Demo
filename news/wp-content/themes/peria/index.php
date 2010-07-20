<?php get_header(); ?>

			<div id="detail">
				<dl>
					<dt>Recent News:</dt>
				</dl>
				<?php
					wp_reset_query();
					query_posts('cat=3&posts_per_page=2');
                ?> 
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<p style="border-top:1px #e44b98 dotted; padding: 10px 5px;">
					<em><?php the_date(); ?></em><br />
                    <strong style="font-size:1.15em; color:#915c3e;"><?php the_title(); ?></strong><br />
                    <a href="<?php the_permalink(); ?>">Read More</a><br />
				</p>
				<?php endwhile; endif; ?>
                <p style="border-top:1px #e44b98 dotted; padding: 5px;"><a href="<?php bloginfo('url'); ?>/category/news/">Archives</a></p>
            </div>
			<div id="largeimage"><!-- LARGE IMAGE FLASH --></div>
			<div id="main">
				<div id="contentarea">
                	<h2>The latest at Peria.</h2>
                    <?php
					wp_reset_query();
					query_posts('cat=3&posts_per_page=1');
					?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    	<div class="entry">
                        <?php the_date('','<h4>','</h4>'); ?>
                        <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                        <?php the_content(__('(more...)')); ?>
                        </div>
                    <?php endwhile; endif; ?>
				</div>
			</div>
			<div id="dock">&nbsp;</div>
			<div class="clear"></div>

<?php get_footer(); ?>
