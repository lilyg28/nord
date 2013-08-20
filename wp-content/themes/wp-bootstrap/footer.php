	</div><!-- end #main -->
</div><!-- end #wrap -->
<footer class="footer-main" role="contentinfo">
	<div class="container-fluid">
		<div class="footer-top">
			<div class="row-fluid">
				<div class="span3">
					<ul>
						<li class="title">get to know us</li>
						<li><a href="#"><i class="icon-facebook-sign icon-white"></i> facebook</a></li>
						<li><a href="#"><i class="icon-twitter icon-white"></i> twitter</a></li>
					</ul>
				</div>
				<div class="span3">
					<ul>
						<li class="title">connect</li>
						<li><a href="<?php echo get_site_url() 	?>/contact-us">contact info</a></li>
						<li>+1.818.445.9792</li>
						<li>nord4kidneydisease@yahoo.com</li>
					</ul>
				</div>
				<div class="span3">
					<ul>
						<li class="title">about us</li>
						<li><a href="<?php echo get_site_url() ?>/who-we-are">who we are</a></li>
						<li><a href="<?php echo get_site_url() ?>/what-we-do">what we do</a></li>
						<li><a href="<?php echo get_site_url() ?>/media">media</a></li>
					</ul>
				</div>
				<div class="span3">
					<ul>
						<li class="title">get involved</li>
						<li><a href="<?php echo get_site_url() ?>/donate" class="text-emphasize">donate</a></li>
						<li><a href="<?php echo get_site_url() ?>/volunteer">volunteer</a></li>
						<li><a href="<?php echo get_site_url() ?>/links">links</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="row-fluid">
				<a href="<?php echo get_site_url() ?>/sponsors">Sponsors</a>
				<span class="divider"></span>
				<a href="#">Disclaimer</a>
				<span class="divider"></span>
				<a href="#">Service mark</a>
				<span class="divider"></span>
				<a href="#">&copy; <?php echo date('Y') ?> <?php bloginfo('name'); ?></a>
			</div>
		</div>
	</div>
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$('form.subscribe').submit(function(e){
	e.preventDefault();

	var name  = $('input[name=name]', this).val();
	var email = $('input[name=email]', this).val();
	var url   = $(this).attr('action');

	$.post(url, {name: name, email: email}, function(html)
	{
		console.log(html);
		if (html.length > 0)
		{
			alert('success');
		}
	});
});

$('.subscription-form-container a.no').click(function(e){
	e.preventDefault();
	$('.subscription-form-container').toggle(1000);
});

$('.topic').on('click', 'h4', function(){
	var topic = $(this).closest('.topic');

	// toggle topic sub-list
	topic.find('ul').toggle('fast');

	// toggle caret icon
	var icon = topic.find('i');
	if (icon.hasClass('icon-caret-right'))
	{
		icon.removeClass('icon-caret-right').addClass('icon-caret-down');
	}
	else
	{
		icon.removeClass('icon-caret-down').addClass('icon-caret-right');
	}

});
</script>
<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

<?php wp_footer(); // js scripts are inserted using this function ?>

</body>

</html>