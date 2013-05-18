<!doctype html>
<!--[if lte IE 8]> <html lang="en" class="ie-lte8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<?php include( "scripts/time.php" ); ?>
<title>Geri Coady &#124; Designer &amp; Illustrator in St. John's, Newfoundland, Canada</title>
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

@media all and (min-width: 57em) {
    body:after {
        content: 'widescreen';
        display: none;
    }
}
</style>

<link rel="alternate" type="application/rss+xml" title="hellogeri.com RSS" href="http://hellogeri.com/rss">

</head>

<body class="work">

<header class="doc-head">
	<nav role="navigation">
		<h1><a href="/" title="Illustration, Design, and Photography in Newfoundland, Canada by Geri Coady">Illustration, Design, and Photography in Newfoundland, Canada by Geri Coady</a></h1>
		<ul id="toggle-nav">
			<li><a class="icon-illustration" href="illustration.php">illustration</a></li>
			<li><a class="icon-design" href="design.php">design</a></li>
			<li><a class="icon-photo" href="photography.php">photography</a></li>
			<li><a class="icon-about" href="about.php">about me</a></li>
			<li><a class="icon-blog" href="blog.php">blog</a></li>
			<li><a class="icon-contact" href="contact.php">get in touch</a></li>
		</ul>
	</nav>
	<div role="banner" class="illustration">
	</div>
</header>

<main role="main" class="clearfix">

	<div data-picture data-alt="#">
        <div data-src="work/illustration/brokersdirect01_sm.jpg"></div>
        <div data-src="work/illustration/brokersdirect01_lg.jpg"     data-media="(min-width: 57em)"></div>
        <noscript>
            <img src="work/illustration/brokersdirect01_sm.jpg" alt="#">
        </noscript>
    </div>
    
    <div data-picture data-alt="#">
        <div data-src="work/illustration/brokersdirect02_sm.jpg"></div>
        <div data-src="work/illustration/brokersdirect02_lg.jpg"     data-media="(min-width: 57em)"></div>
        <noscript>
            <img src="work/illustration/brokersdirect02_sm.jpg" alt="#">
        </noscript>
    </div>
    
</main>


<section role="complementary">
	<div class="sticky">
	<header>
		<h1>Brokers Direct</h1>
		<ul>
			<li>Client: Brokers Direct</li>
			<li>Project: Website Illustration</li>
		</ul>
	</header>

	<p>Cartoon illustration of <a href="http://www.arkells.ca">Arkells</a>, a band from Hamilton, Ontario. Medium: Illustrator, Photoshop.</p>
	<q>I'd like to thank you for the amazing portrait you created of us… it's spot on and so cool!</q>
	<cite>&mdash; Max Kerman, Arkells</cite>

	<footer>
		<ul>
			<li class="navnewer"><a href="/illustration/view/malarkey">Newer</a></li>
			<li class="navolder"><a href="/illustration/view/biker_berry">Older</a></li>
			<li class="navback"><a href="http://hellogeri.com/illustration">Back</a></li>
		</ul>
	</footer>
	</div>
	
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

<script src="scripts/picturefill.js"></script>
<script src="scripts/nav.js"></script>
<script src="scripts/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
		
		var size = window.getComputedStyle(document.body,':after').getPropertyValue('content');
		
		if (size == 'widescreen') {
		
		$(function(){ // document ready

		  if (!!$('.sticky').offset()) { // make sure ".sticky" element exists

		    var stickyTop = $('.sticky').offset().top; // returns number 

		    $(window).scroll(function(){ // scroll event

		      var windowTop = $(window).scrollTop(); // returns number 

		      if (stickyTop < windowTop){
		        $('.sticky').css({ position: 'fixed', top: 30 });
		      }
		      else {
		        $('.sticky').css('position','static');
		      }

		    });

		  }
		
		});
		
		}
		
	</script>

</body>
</html>