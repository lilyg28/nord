<?php get_header(); ?>
<div id="content" class="clearfix">

	<div class="content-container container-fluid">

		<ul class="breadcrumb">
			<li><a href="<?php echo get_site_url() ?>">Home</a> <span class="divider">/</span></li>
			<li><a href="<?php echo get_site_url() ?>/get-involved">Get Involved</a> <span class="divider">/</span></li>
			<li class="active"><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></li>
		</ul>

		<div class="row-fluid">

			<!-- navigation -->
			<div class="span2 offset1">

				<?php include('sidebar-get-involved.php') ?>

			</div><!-- end span -->

			<div class="span7 offset1">

				<?php if (have_posts()) : while (have_posts()) : the_post() ?>

				<article id="post-<?php the_ID() ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<header class="pageHeader">
						<h1 itemprop="headline"><?php the_title() ?></h1>
					</header>

					<section class="post_content clearfix" itemprop="articleBody">

						<?php the_content() ?>

					</section>

				</article> <!-- end article -->

				<?php endwhile ?>

				<?php endif ?>

			</div>
		</div>
	</div>

</div> <!-- end #content -->

<?php get_footer(); ?>

