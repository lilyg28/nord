<?php get_header(); ?>
<div id="content" class="clearfix">

	<div class="content-container container-fluid">

		<ul class="breadcrumb">
			<li><a href="<?php echo get_site_url() ?>">Home</a> <span class="divider">/</span></li>
			<li class="active"><a href="<?php echo get_site_url() ?>/get-involved">Get Involved</a></li>
		</ul>

		<div class="row-fluid">

			<!-- navigation -->
			<div class="span2 offset1">

				<?php include('sidebar-get-involved.php') ?>

			</div><!-- end span -->

			<div class="span7 offset1">

				<hr>

				<!-- Events -->
				<article id="events">

					<header class="postHeader">
						<h2>Our Events</h2>
					</header>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

					<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=q8pe517khmqr2c4d9qg7ngiha8%40group.calendar.google.com&amp;color=%23B1440E&amp;ctz=America%2FChicago" style=" border-width:0 " width="100%" height="300px" frameborder="0" scrolling="no"></iframe>

				</article>

				<hr>

				<!-- Meetings -->
				<article id="meetings">

					<div class="row-fluid">

						<div class="span6">
							<header class="postHeader">
								<h2>Our Meetings</h2>
							</header>
							<div class="spacer10"></div>
							<p>
								Are you interested in learning more about renal disease and how to aid in its prevention?
								Please join us for an informative meeting.
								Please contact the office to confirm all meeting dates and times.
							</p>
							<a href="<?php echo get_site_url() ?>/contact-us">
								<i class="icon-external-link-sign"></i> Contact Us for more information
							</a>
						</div>

						<div class="span6 left-border">
							<header>
								<h5><i class="icon-time"></i> Meeting Time</h5>
							</header>
							<p>Wednesdays 6:30 - 8:30 PM</p>

							<div class="spacer20"></div>

							<header>
								<h5><i class="icon-map-marker"></i> Meeting Location</h5>
							</header>
							<p>
								St. Vincent Medical Center<br>
								2131 W. 3rd St. (3rd.& Alvarado)<br>
								Conference Rm. "A", 2nd. Fl.
							</p>

							<div class="spacer20"></div>

							<header>
								<h5><i class="icon-file-text-alt"></i> Note</h5>
							</header>
							<p>
								<i class="icon-caret-right"></i> Park at 201 Prof. Office Bldg. 201 S. Alvarado St.<br>
								<i class="icon-caret-right"></i> Must enter before 7:30 pm<br>
								<i class="icon-caret-right"></i> Use the rear hospital entrance &amp; follow signs.
							</p>
						</div>

					</div>

				</article>

			</div>

		</div><!-- end .row-fluid -->

	</div><!-- end .content-container -->

</div> <!-- end #content -->

<?php get_footer(); ?>