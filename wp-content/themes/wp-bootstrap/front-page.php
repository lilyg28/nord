<?php get_header() ?>

<div id="content" class="clearfix">

	<div class="main-feature-container">
		<div class="container-fluid">
			<div id="myCarousel" class="carousel slide">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
					<!-- Carousel items -->
				<div class="carousel-inner">
					<div class="active item"><img src="http://lorempixel.com/g/1200/600/people/9" alt="image0"></div>
					<div class="item"><img src="http://lorempixel.com/g/1200/600/people/6" alt="image1"></div>
					<div class="item"><img src="http://lorempixel.com/g/1200/600/people/5" alt="image2"></div>
				</div>
				<!-- Carousel nav -->
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
			<!-- <div class="row-fluid">
				<div class="span6">
					<img src="http://placehold.it/500x400" alt="">
				</div>
				<div class="span6">
					<header class="postHeader">
						<h1>NORD</h1>
					</header>
					<p>
						provides critical and preventive medical, educational, health
						screenings and research information to under-insured,
						under-served adults at high risk of developing
						renal (kidney) disease and its precursors.
					</p>
					<button class="btn btn-large btn-success"><b>Donate. Save People.</b></button>
				</div>
			</div> -->
		</div>
	</div>

	<section class="content-container container-fluid">

		<hr>

		<div class="row-fluid">

			<div class="span8 offset2">
				<header class="text-center">
					<h1>OUR MISSION</h1>
				</header>
				<div class="spacer30"></div>
				<article class="story">
					<p>Our mission is to change the face of kidney disease by aggressively promoting good health through education, disease prevention, and follow up.</p>
					<p>National Organization for Renal Disease strives to provide the latest  preventive and critical medical information to populations at high risk for developing renal disease and its precursors through their programs of awareness, prevention, education and research. In addition, we seek to transform the remedies and delivery systems in which these illnesses are treated for the betterment of individuals and their communities.</p>
					<p>NORD promotes organ and tissue transplantation and other progressive therapies in treatment modalities through innovative, cutting edge, research and permanent testing sites until we find an effective way to treat these chronic diseases.</p>
				</article>
			</div>

		</div>

		<hr>

		<div class="row-fluid">

			<div class="span8 offset2">
				<header class="text-center">
					<h1>OUR PROGRAM</h1>
				</header>
				<div class="spacer30"></div>
				<article class="story">
					<p>Prevention Program (A.P.E.R.)</p>
					<p>A.P.E.R. FECT solution for controlling kidney disease... prolonging health and life</p>
					<p>APER is a simple four-phase program, the promotion of which will inevitably improve therapies and remedies and will prevent medical precursors from developing into renal disease.</p>
					<p><i class="icon-heart"></i> Awareness - Inform people about the warning signs of renal disease. What should they look for? What tests are available?</p>
					<p><i class="icon-heart"></i> Prevention - Show individuals how to reduce the risk of getting renal disease from one of its precursors.</p>
					<p><i class="icon-heart"></i> Education - Give people the information they need. They will share it with other members of the community. When they know what to look for, the likelihood of actually developing renal disease decreases.</p>
					<p><i class="icon-heart"></i> Research - Support and fund genetic research. Please volunteer and be a part of clinical or medical studies if you suffer from renal disease. Ask for government funding for research projects.</p>
				</article>
			</div>

		</div>

		<hr>

		<div class="row-fluid">

			<div class="span6">

				<header>
					<h2>Screening &amp; Diagnostic Center</h2>
				</header>

				<img src="http://placehold.it/450x300" alt="">

				<p>
					You can get screened for renal disease for FREE! Do not hesitate to contact
					us or click the button below for more information.
				</p>

				<a href="<?php echo get_site_url() ?>/get-screened" class="btn btn-info">Get Screened</a>

			</div>

			<div class="span6">

				<header>
					<h2>Education Center with Library</h2>
				</header>

				<img src="http://placehold.it/450x300" alt="">

				<p>
					Get to know more about Renal Disease on our Library page. We also have
					in-house books in our own Library. Come visit us.
				</p>

				<a href="<?php echo get_site_url() ?>/renal-disease-library" class="btn btn-info">Visit Library</a>

			</div>

		</div>

		<hr>

		<div class="row-fluid">

			<div class="span4">

				<header>
					<h3>Volunteer</h3>
				</header>

				<img src="http://placehold.it/250x200" alt="">

				<p>
					Get involved with NORD by volunteering for a great opportunity.
				</p>

				<a href="<?php echo get_site_url() ?>/volunteer" class="btn btn-info">Become Volunteer</a>

			</div>

			<div class="span4">

				<header>
					<h3>Media</h3>
				</header>

				<img src="http://placehold.it/250x200" alt="">

				<p>
					We have great media. Come visit our media page.
				</p>

				<a href="<?php echo get_site_url() ?>/media" class="btn btn-info">Media Library</a>

			</div>

			<div class="span4">

				<header>
					<h3>Donate</h3>
				</header>

				<img src="http://placehold.it/250x200" alt="">

				<p>
					Many people are suffering from Renal Disease because of lack of funding.
					Donate your care. Save people.
				</p>

				<a href="<?php echo get_site_url() ?>/donate" class="btn btn-warning">Donate. Save people.</a>

			</div>

		</div>

		<hr>

		<header class="pageHeader">
			<h3>Our Partners</h3>
		</header>
		<div class="row-fluid">

			<div class="span10 offset1">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/library/img/partner_logos.png">
			</div>
<!--
			<div class="span3">
				<?php $img_dir = get_stylesheet_directory_uri() ?>
				<ul class="partners-list no-list-style">
					<li>
						<a href="http://www.fmcna.com" target="_blank"><img src="<?php echo $img_dir ?>/library/img/partners/fresenius-medical-care.jpg" ></a>
					</li>
					<li>
						<a href="http://www.bms.com" target="_blank"><img src="<?php echo $img_dir ?>/library/img/partners/bristol-myers-squibb.jpg" ></a>
					</li>
					<li>
						<a href="http://www.fmcna.com" target="_blank"><img src="<?php echo $img_dir ?>/library/img/partners/fresenius-medical-care.jpg" ></a>
					</li>
					<li>
						<a href="http://www.fmcna.com" target="_blank"><img src="<?php echo $img_dir ?>/library/img/partners/fresenius-medical-care.jpg" ></a>
					</li>
				</ul>
							<a class="regularText" href="/pages/default.aspx" target="_blank">
									Bristol-Myers Squibb</a><br>


<a class="regularText" href="http://www.sanofi.us/l/us/en/index.jsp" target="_blank">
									Sanofi</a><br>

<a class="regularText" href="http://www.genzyme.com/" target="_blank">
									Genzyme</a><br>

								<a class="regularText" href="http://www.amgen.com/" target="_blank">
									Amgen Corporation</a><br>

								<a class="regularText" href="http://www.bayerusa.com/" target="_blank">Bayer
									HealthCare</a><br>
								<a class="regularText" href="http://www.bd.com/" target="_blank">BD&nbsp;(Becton,
									Dickinson and Company)</a><br>
									<a class="regularText" href="http://www.mylifepath.com/" target="_blank">
									Blue Shield of California</a><br>

								<a class="regularText" href="http://www.gsk.com/" target="_blank">GlaxoSmithKline</a><br>
								<a class="regularText" href="http://www.lifescan.com/" target="_blank">LifeScan,
									Inc.</a><br>
								<a class="regularText" href="http://www.omronhealthcare.com/" target="_blank">Omron
									Healthcare, Inc.</a><br>
								<a class="regularText" href="http://www.onelegacy.org" target="_blank">OneLegacy
									(Organ Transplant Network)</a><br>
								<a class="regularText" href="http://www.stjosephscares.org/" target="_blank">St.
									Joseph Medical Center</a><br>
								<a class="regularText" href="http://www.stvincentmedicalcenter.com/" target="_blank">
									St. Vincent Medical Center</a><br>
								<a class="regularText" href="http://www.abbott.com" target="_blank">Abbott
									Laboratories</a><br>
								<a class="regularText" href="http://www.transplantation.com/" target="_blank">National
									Institute of Transplantation</a><br>
								<a class="regularText" href="http://www.roche-diagnostics.com" target="_blank">Roche
									Diagnostics</a><br>
								<a class="regularText" href="http://www.calendow.com" target="_blank">The
									California Endowment</a><br>
								<a class="regularText" href="http://www.durfee.org" target="_blank">The Durfee
									Foundation</a><br>
								Stern Family Trust<br>
								<a class="regularText" href="http://www.citibank.com" target="_blank">Citibank</a><br>
								<a class="regularText" href="http://www.donsuemor.com" target="_blank">Donsuemor,
									Inc</a><br>
									<a class="regularText" href="http://www.gelsons.com/" target="_blank">
									Gelson's</a><br>
								<a class="regularText" href="http://www.officedepot.com" target="_blank">Office
									Depot</a><br>
								<a class="regularText" href="http://www.ralphs.com" target="_blank">Ralphs</a><br>
								<a class="regularText" href="http://www.papermate.com/" target="_blank">Stanford
									Paper Mate</a><br>
								<a class="regularText" href="http://www.target.com/" target="_blank">Target Stores</a><br>
								<a class="regularText" href="http://www.traderjoes.com/" target="_blank">Trader
									Joe's</a><br>
									<a class="regularText" href="http://www.vons.com/" target="_blank">
									Von's</a><br>

								<a class="regularText" href="http://www.walmartstores.com" target="_blank">Wal-Mart
									Stores</a><br>
										<a class="regularText" href="http://www.csun.edu/" target="_blank">California State
									University, Northridge</a><br>
									<a class="regularText" href="http://www.calpoly.edu" target="_blank">
									Cal Poly Tech</a><br>
									<a class="regularText" href="http://www.scba.com" target="_blank">
									Southern California Broadcasters Association</a><br>
									<a class="regularText" href="http://www.stanford.edu" target="_blank">
									Stanford University</a><br>
									<a class="regularText" href="http://www.ucla.edu" target="_blank">
									UCLA</a><br>
								<a class="regularText" href="http://www.usc.edu/" target="_blank">University of
									Southern California</a><br>
								<a class="regularText" href="http://www.monstertrak.com/" target="_blank">Monstertrak.com</a><br>
								<a class="regularText" href="http://www.volunteermatch.com/" target="_blank">Volunteermatch.com</a><br>
								Volunteer Centers of Southern California<br>
								<a class="regularText" href="http://www.universalstudios.com" target="_blank">
									Universal Studios</a><br>
									Burbank Parks and Recreation</p>
																<p style="margin-top: 0; margin-bottom: 0">
																<a href="http://www.energyforothers.org/index.htm" style="text-decoration: none">
																<font color="#003163">Energy for others</font></a></p>
																<p style="margin-top: 0; margin-bottom: 0">
																<a href="http://www.healthnet.com" style="text-decoration: none">
																<font color="#003163">HealthNet Inc</font></a> </p>
																<p style="margin-top: 0; margin-bottom: 0">
																<a href="http://www.donatelifecalifornia.org/" style="text-decoration: none">
																<font color="#003163">Donate Life California</font></a></p>

<p><a href="https://www.donatelifecalifornia.org/register" target="_blank" border="0">
<img src="http://stop-esrd.org/donations/donateLogo.gif" border="0" width="120" height="124"></a></p>

																<p style="margin-top: 0; margin-bottom: 0">
																<a href="http://www.onelegacy.org/prod/components/" style="text-decoration: none">
																<font color="#003163">One Legacy</font></a></p>
																<p style="margin-top: 0; margin-bottom: 0">
																Siemens Diagnositics</p>
																<p style="margin-top: 0; margin-bottom: 0">
																Astellas Pharma US</p>
																<p style="margin-top: 0; margin-bottom: 0">
																Beckman Coulter, Inc</p>
																<p style="margin-top: 0; margin-bottom: 0">RSN Hope</p>
																<p style="margin-top: 0; margin-bottom: 0">
																Medtronic Foundation</p>
																<p style="margin-top: 0; margin-bottom: 0">
																99cents Only Stores</p>
																<p style="margin-top: 0; margin-bottom: 0">Walmart</p>
																<p style="margin-top: 0; margin-bottom: 0">
																<a href="http://www.universalstudioshollywood.com/" style="text-decoration: none">
																<font color="#003163">Universal Studios Hollywood</font></a></p>
																<p style="margin-top: 0; margin-bottom: 0">
																General Mills</p>
																<p style="margin-top: 0; margin-bottom: 0">
																Original Tommy's Famous Burgers</p>
																<p style="margin-top: 0; margin-bottom: 0">7 UP
																Bottling Company</p>
																<p style="margin-top: 0; margin-bottom: 0">MOCA</p>
																<p style="margin-top: 0; margin-bottom: 0">
																<a style="text-decoration: none" href="http://www.donatelife.org/">
																<font color="#003163">DonateLife.org</font></a></p>
																<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
																<p style="margin-top: 0; margin-bottom: 0">
																<a href="http://www.cvs.com">
																<img border="0" src="images/FATWYCwithsm.jpg" width="183" height="38"></a></p>
			</div>
 -->
		</div>

	</section>

</div> <!-- end #content -->

<?php get_footer() ?>