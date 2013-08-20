<?php get_header() ?>
<div id="content" class="clearfix">

	<div class="content-container container-fluid">

		<ul class="breadcrumb">
			<li><a href="<?php echo get_site_url() ?>">Home</a> <span class="divider">/</span></li>
			<li class="active"><a href="<?php echo get_permalink() ?>">About Us</a></li>
		</ul>

		<div class="row-fluid">

			<!-- navigation -->
			<div class="span2 offset1">

				<?php include 'sidebar-about-us.php' ?>

			</div><!-- end span -->

			<div class="span7 offset1">

				<?php $post_ids = array(86, 84, 90, 88, 92) ?>
				<?php foreach ($post_ids as $id): ?>
				<?php $post = get_post($id) ?>

				<article id="post-<?php the_ID() ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<header class="pageHeader">
						<h1 itemprop="headline"><?php echo $post->post_title ?></h1>
					</header>

					<section class="post_content clearfix" itemprop="articleBody">

						<?php echo $post->post_content ?>

					</section>

				</article> <!-- end article -->

				<hr>

				<?php endforeach ?>

			</div><!-- end span -->

		</div><!-- end row-fluid -->

	</div><!-- end container-fluid -->

</div> <!-- end #content -->

<?php get_footer(); ?>