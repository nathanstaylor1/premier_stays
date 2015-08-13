<?php include 'global/nav.php' ?>

<section class="flexbox" id="header">
	<div class="background-image background-fixed" id="header-image">
		<div id="scroll-down">
			<i class="fa fa-angle-down"></i>
			<i class="fa fa-angle-down"></i>
			<i class="fa fa-angle-down"></i>
		</div>
	</div>
	<div class="content-wrap">
		<h1 class="tagline">The<br>Premier<br>Location<br>in<br>Melbourne</h1>
	</div>
</section>


<section class="flexbox min-full-height" id="intro">
	<div class="content-wrap">
		<div class="flexbox">
			<div class="flex--1 flex-responsive flex-slim">
				<h2 class="section-heading" >ABOUT</h2>
				<p> "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?" </p>
			</div>
			<div class="flex--1 flexbox flex-center flex-responsive flex-slim">
				<div class="small-image" id="about-image"></div>
			</div>
		</div>
	</div>
</section>


<section class="flexbox flex-center min-full-height" id="melbourne">
	<div class="background-image" id="melbourne-image"></div>
	<div class="content-wrap postcard flex-slim">
		<h2 class="section-heading" >MELBOURNE</h2>
		<p> "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?" </p>
	</div>
</section>


<section class="flexbox min-full-height" id="locations">
	<div class="content-wrap">
		<h2 class="section-heading" >LOCATIONS</h2>

		<p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicab </p>

		<div class="location-wrap">
			<div class="flexbox">
				<div class="flex--1 flex-responsive flex-slim">
					<h4 class="location-name">Location Name</h4>
					<p class="location-description">  iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicab Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaqu</p>
				</div>
				<div class="flex--1 flex-responsive flex-slim">
					<img src="assets/images/apartment2.jpg">
				</div>
			</div>
			<a class="btn btn-cta">Check Availability</a>
			<a class="btn btn-cta">Book Now</a>
		</div>

		<div class="location-wrap">
			<h4 class="location-name">More coming soon!</h4>
		</div>
	</div>
</section>


<section class="flexbox min-half-height" id="cta">
	<div class="content-wrap">
		<h2 class="section-heading" >YOUR PERFECT ROOM IS WAITING</h2>
		<p> "Sesunt explicaboquia consequuntur magni dolores eos qui rtationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?" </p>
		<a class="btn btn-cta">Check Availability</a>
		<a class="btn btn-cta">Book Now</a>
</section>


<section class="flexbox min-half-height" id="contact">
	<div class="content-wrap">
		<h2 class="section-heading" >CONTACT</h2>	
		<br>
		<p><span class="glyphicon glyphicon-earphone"></span> 03 0000 0000 </p>
		<p><span class="glyphicon glyphicon-envelope"></span> enqiries@premierstay.com.au </p>
		<br>
		<p> Still have some questions? Write us a message and we'll get back to you as soon as possible! </p>
		<form id="contact-form">
			<input type="text" name="name" placeholder="Name">
			<input type="email" name="email" placeholder ="Email">
			<textarea placeholder="Message"></textarea>
			<input class="btn-cta" type="submit" value="Send Message">
	</div>
</section>


<?php include 'global/footer.php' ?>