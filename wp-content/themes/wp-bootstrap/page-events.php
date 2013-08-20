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

				<div class="calendar-container">

					<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=q8pe517khmqr2c4d9qg7ngiha8%40group.calendar.google.com&amp;color=%23B1440E&amp;ctz=America%2FChicago" style=" border-width:0 " width="100%" height="300px" frameborder="0" scrolling="no"></iframe>

				</div>
			</div>
		</div>
	</div>

</div> <!-- end #content -->

<?php get_footer(); ?>

