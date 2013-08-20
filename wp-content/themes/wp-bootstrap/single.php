<?php get_header() ?>
<div id="content" class="clearfix">

	<div class="content-container container-fluid">

		<div class="row-fluid">

			<!-- navigation -->
			<div class="span4">

				<?php include('library-sidebar.php') ?>

			</div><!-- end span -->

			<div class="span8">

				<?php if (have_posts()) : while (have_posts()) : the_post() ?>

				<article id="post-<?php the_ID() ?>" <?php post_class('clearfix') ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<header class="pageHeader">
						<h1 itemprop="headline"><?php the_title() ?></h1>
					</header>

					<section class="post_content clearfix" itemprop="articleBody">

						<?php the_content() ?>

					</section>

					<footer>


					</footer> <!-- end article footer -->

					<?php // comments_template('',true) ?>

				</article> <!-- end article -->

				<?php endwhile ?>

				<?php else : ?>

				<article id="post-not-found">
						<header>
							<h1><?php _e("Not Found", "bonestheme") ?></h1>
						</header>
						<section class="post_content">
							<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme") ?></p>
						</section>
						<footer>
						</footer>
				</article>

				<?php endif ?>

			</div>
		</div>
	</div>

</div> <!-- end #content -->

<?php get_footer() ?>