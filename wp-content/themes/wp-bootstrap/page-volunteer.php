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

				<div class="volunteer-form-container">

					<p>Please fill out following form to volunteer.</p>

					<form>
						<label>Name</label>
						<input type="text" name="name" placeholder="Name">
						<label>E-mail</label>
						<input type="text" name="email" placeholder="E-mail">
						<label>Phone Number</label>
						<input type="text" name="email" placeholder="Phone Number">
						<div class="clearfix"></div>
						<button class="btn btn-info">Become Volunteer</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</div> <!-- end #content -->

<?php get_footer(); ?>

