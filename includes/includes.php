<?php
	define("BOOTSTRAP_CSS",'<link rel="stylesheet" href="/css/bootstrap.min.css">');
	define("MATERIALIZE_CSS",'<link type="text/css" rel="stylesheet" href="/css/materialize.min.css" media="screen,projection">');
	define("ONEPAGE_CSS",'<link type="text/css" rel="stylesheet" href="/css/onepage-scroll.css">');
	define("FONTAWESOME_CSS",'<link type="text/css" rel="stylesheet" href="/css/font-awesome.min.css">');
	define("CUSTOM_CSS","<link type='text/css' rel='stylesheet' href='/css/custom.css'>");
	define("OLDTEXT_CSS","<link type='text/css' rel='stylesheet' href='/css/old-text.css'>");

	define("META_STUFF",'
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">');

	define("JQUERY",'<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>');
	define("BOOTSTRAP_JS",'<script src="/js/bootstrap.min.js"></script>');
	define("MATERIALIZE_JS", '<script type="text/javascript" src="/js/materialize.min.js"></script>');
	define("WINDOWS_PLUGIN",'<script src="/js/jquery.windows.js"></script>');
	define("ONEPAGE_PLUGIN",'<script src="/js/jquery.onepage-scroll.min.js"></script>');
	define("FITTEXT_PLUGIN",'<script src="/js/jquery.fittext.js"></script>');

	define("GOOGLE_ANALYTICS","<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-57000907-1', 'auto');
		  ga('send', 'pageview');

		</script>");

	define("CSS",MATERIALIZE_CSS.CUSTOM_CSS);
	define("JS",JQUERY.MATERIALIZE_JS.GOOGLE_ANALYTICS);

	define("NAVBAR",'
		<nav class="blue darken-2">
        <div class="container">
          <div class="nav-wrapper">
            <a href="http://comsci.club" class="brand-logo">RCSC</a>
            <ul id="nav-mobile" class="right side-nav">
              <li><a href="/about" title="about us"><i class="mdi-av-new-releases left"></i>What Floats Your Boat?</a></li>
              <li><a href="/people" title="who we are"><i class="mdi-social-group left"></i>CAPTCHA Slaves</a></li>
              <li><a href="/work" title="what we do"><i class="mdi-file-cloud-done left"></i>Here be Dragons</a></li>
            </ul>
            <a class="button-collapse" href="#" data-activates="nav-mobile"><i class="mdi-navigation-menu"></i></a>
          </div>
        </div>
      </nav>
	');
	define("NAVBAR_JS",'$(".button-collapse").sideNav({menuWidth: 300});');

	define("FOOTER",'
		<footer class="blue">
	      <div class="container">
	        <div class="row">
	          <div class="col l6 s12">
	            <h5 class="white-text">Raffles Computer Science Club</h5>
	            <p class="white-text">soon to be known as Raffles Technology Federation Matrix (RTFM)</p>
	          </div>
	          <div class="col l4 offset-l2 s12">
	            <h5 class="white-text">Nice Places</h5>
	            <li>
	                <a class="white-text" href="http://c.xkcd.com/random/comic/">xkcd</a>
	            </li>
	            <li>
	                <a class="white-text" href="http://www.html5rocks.com/">Holy Tempest of Mystical Light</a>
                </li>
                <li>
                    <a class="white-text" href="http://css-tricks.com/">Complex Styling Spells</a>
                </li>
                <li>
                    <a class="white-text" href="http://stackexchange.com">Know-It-Alls</a>
                </li>
	          </div>
	        </div>
	      </div>
	      <div class="footer-copyright blue darken-1 white-text">
	        <div class="container">
	        © 2014 Raffles Computer Science Club
	        </div>
	      </div>
	    </footer>
    ');
?>
