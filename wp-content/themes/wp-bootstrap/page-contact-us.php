<?php
// contact form submission handling
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	// @TODO Implement contact form logic
	// detect spam bot
	$bot = $_POST['bot'] ? $_POST['bot'] : false;
}
?>
<?php get_header(); ?>
<div id="content" class="clearfix">

	<div class="content-container container-fluid">

		<ul class="breadcrumb">
			<li><a href="<?php echo get_site_url() ?>">Home</a> <span class="divider">/</span></li>
			<li class="active"><a href="<?php echo get_permalink() ?>">Contact</a></li>
		</ul>

		<div class="row-fluid">
			<!-- Contact Us -->
			<div class="span5 offset1">

				<header class="pageHeader">
					<h1>Contact Us</h1>
				</header>

				<article class="contact-us">
					<p>
						Questions? Issues? We'd love to hear from you.
					</p>
					<form method="post" action="<?php echo the_permalink() ?>">
						<input type="hidden" name="email"><!-- prevent spam bot -->
						<label>Name<span class="text-error">*</span></label>
						<input type="text" class="input-large" name="name">
						<label>E-mail<span class="text-error">*</span></label>
						<input type="text" class="input-large" name="real">
						<label>Message<span class="text-error">*</span></label>
						<textarea name="message" class="input-block-level" rows="10"></textarea>
						<div class="spaner20"></div>
						<div class="pull-left">
							<button class="btn btn-primary ">Send Message</button>
						</div>
						<div class="pull-right">
							<small><span class="text-error">*</span> Required</small>
						</div>
					</form>
				</article>

			</div>

			<div class="span5 address-direction">

				<!-- Phone Number -->
				<article>
					<header>
						<h5><i class="icon-phone"></i> PHONE &amp; FAX</h5>
					</header>
					<p>+1.818.769.6245</p>
				</article>

				<div class="spacer10"></div>

				<!-- E-mail -->
				<article>
					<header>
						<h5><i class="icon-mail-forward"></i> E-MAIL</h5>
					</header>
					<p>nord4kidneydisease@yahoo.com</p>
				</article>

				<div class="spacer10"></div>

				<!-- Mailing Address -->
				<article>
					<header>
						<h5><i class="icon-envelope"></i> MAILING ADDRESS</h5>
					</header>
					<p>National Organization for Renal Disease<br>
					   11018 Aqua Vista Street #19<br>
					   Studio City, CA 91602
					</p>
					<iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=11018+Aqua+Vista+Street+%2319+Studio+City,+CA+91602&amp;aq=&amp;sll=41.895112,-87.94369&amp;sspn=0.070662,0.169086&amp;ie=UTF8&amp;hq=&amp;hnear=11018+Aqua+Vista+St+%2319,+North+Hollywood,+California+91602&amp;t=m&amp;ll=34.144487,-118.370819&amp;spn=0.021311,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=11018+Aqua+Vista+Street+%2319+Studio+City,+CA+91602&amp;aq=&amp;sll=41.895112,-87.94369&amp;sspn=0.070662,0.169086&amp;ie=UTF8&amp;hq=&amp;hnear=11018+Aqua+Vista+St+%2319,+North+Hollywood,+California+91602&amp;t=m&amp;ll=34.144487,-118.370819&amp;spn=0.021311,0.025663&amp;z=14&amp;iwloc=A" style="color:#8158B0;text-align:left" target="_blank">View Larger Map</a></small>
				</article>

			</div><!-- end .address-direction -->

		</div><!-- end .row-fluid -->

	</div><!-- end .content-container -->

</div> <!-- end #content -->

<?php get_footer(); ?>