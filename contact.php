<!doctype html>
<!--[if lte IE 8]> <html lang="en" class="ie-lte8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<?php include( "scripts/time.php" ); ?>
<title>Geri Coady &#124; Designer &amp; Illustrator in St. John's, Newfoundland, Canada &#124; Contact</title>
<meta charset="utf-8">
<meta name="description" content="Geri Coady is a colour-obsessed freelance designer and illustrator living and working in St. John's, Newfoundland, Canada.">
<meta name="keywords" content="illustration, web design, graphic design, branding, logo design, speaking, speaker, front end design, photography, photographer, colour, color, accessibility, st. john's, newfoundland, atlantic, canada">
<meta name="viewport" content="width=device-width,initial-scale=1">

<!--[if lt IE 9]>
<script src="https://github.com/aFarkas/html5shiv/blob/master/dist/html5shiv.js"></script>
<![endif]-->

<!--[if !lte IE 6]>
<!-->
<link rel="stylesheet" href="css/screen.css">
<link rel="stylesheet" href="css/print.css" media="print">
<!--<![endif]-->

<!--[if lte IE 6]>
<link rel="stylesheet" href="http://universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
<![endif]-->

<script src="scripts/modernizr.js"></script>

<style>
.sel {
    <?php print $small; ?>  
}

@media screen and (min-width: 57em) {
    .sel {
        <?php print $large; ?>
    }
}
</style>

<link rel="alternate" type="application/rss+xml" title="hellogeri.com RSS" href="http://hellogeri.com/rss">

</head>

<body class="contact">

<div id="page">

<header class="doc-head">
	<nav role="navigation">
		<a href="/" class="logo" title="Illustration, Design, and Photography in Newfoundland, Canada by Geri Coady"><h1>Illustration, Design, and Photography in Newfoundland, Canada by Geri Coady</h1></a>
		<ul id="toggle-nav">
			<li><a class="icon-illustration" href="illustration.php">illustration</a></li>
			<li><a class="icon-design" href="design.php">design</a></li>
			<li><a class="icon-photo" href="photography.php">photography</a></li>
			<li><a class="icon-about" href="about.php">about me</a></li>
			<li><a class="icon-blog" href="blog.php">blog</a></li>
			<li><a class="icon-contact" href="contact.php">get in touch</a></li>
		</ul>
	</nav>
	<div role="banner" class="basicheader">
	</div>
</header>

<main role="main" class="clearfix">
	<h1>Get in Touch</h1>
	<p>Whether it's illustration, design, or photography — I'd love to work with you. Please use the form below to get in touch. Don't forget to include as many details as you can about your project — it will help me get back to you sooner.</p>

	<section class="contact_box">
	<form role="form" id="contact_form" method="post" action="http://hellogeri.com/">
	<fieldset>
		<ul>
			<li>
				<label for="contact_name">Your Name:</label>
				<input id="contact_name" name="name" type="text" placeholder="Enter your first name and last name here" required>
			</li>
			<li>
				<label for="contact_company">Your Company:</label>
				<input id="contact_company" name="company" type="text" placeholder="Enter your company name here" required>
			</li>
			<li>
				<label for="contact_email">Your E-mail:</label>
				<input id="contact_email" name="from" type="email" placeholder="name@domain.com" required>
			</li>
		</ul>
	</fieldset>

	<fieldset>
		<ul>
			<li>
				<label for="contact_subject">Subject:</label>
				<input id="contact_subject" name="subject" type="text" placeholder="Subject of message" required>
			</li>
		</ul>
	</fieldset>

	<fieldset>
			<label for="contact_comment" class="textarea">How can I help you?</label>
			<textarea id="contact_comment" name="message" rows="5" required></textarea>
	</fieldset>

	<fieldset>
		<button type="submit" name="submit" value="Submit Form">Send</button>
	</fieldset>

	</form>
	</section>


</main>


<section role="complementary">
	
	<section class="newfoundland">
		<h2>Location</h2>
		<img src="img/nl_map.png" alt="Map of Newfoundland, Canada">
		<p>I'm located in St. John's, Newfoundland, Canada — the most easterly (and oldest!) city in North America. It doesn't matter where you're located — I'd love to work with you.</p>
	</section>
	
</section>

<footer role="contentinfo">
	<nav class="doc-foot">
		<ul>
			<li><a href="#">illustration</a></li>
			<li><a href="#">design</a></li>
			<li><a href="#">photography</a></li>
			<li><a href="#">about me</a></li>
			<li><a href="#">blog</a></li>
			<li><a href="#">get in touch</a></li>
		</ul>
	</nav>
	<nav class="social">
		<ul>
			<li><a class="twitter" href="http://twitter.com/hellogeri">twitter</a></li>
			<li><a class="dribbble" href="http://dribbble.com/hellogeri">dribbble</a></li>
			<li><a class="flickr" href="http://www.flickr.com/photos/hellogeri">flickr</a></li>
			<li><a class="lanyrd" href="http://lanyrd.com/profile/hellogeri">lanyrd</a></li>
			<li><a class="rdio" href="http://www.rdio.com/people/hellogeri">rdio</a></li>
			<li><a class="zerply" href="http://zerply.com/hellogeri">zerply</a></li>
		</ul>
	</nav>
</footer>

</div>

<script src="scripts/picturefill.js"></script>
<script src="scripts/nav.js"></script>

</body>
</html>