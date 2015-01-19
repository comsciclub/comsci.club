<?php
	/*
		NOTE
		do enable use of <? & ?> short open & close 
		tags in /etc/php5/apache2

		<?php echo BLAH; ?> is so inelegant
		it could be <?=BLAH?>
	*/

	require_once 'includes/includes.php';

	//definitely need shiv's design input
	$colours = array("#4375EF","#35B0E8","#5BF048","#F5B141","#F53E3B");
?>
<html>
	<head>
		<?php 
			echo META_STUFF; 
			echo BOOTSTRAP_CSS;
		?>
		<style>
			.window{
			    width:100%;
			    height:100%;
			    position:absolute;
			    text-align:center;
			    color:#fff;
			}
			.window h1{
			    font-size: 5em;
			}
			.window img{
			    margin-top:25px;
			    height:50%;
			}
	<?php
		$window_no = 5; //no. of windows
		for($i = 1;$i<=$window_no;$i++){
			$kinsung = $i-1;
			$colour = $colours[$kinsung];
			echo "
			.window:nth-child($i){
				top:{$kinsung}00%;
				background-color:$colour;
			}";
		}
	?>
		</style>
	</head>

	<body>
		<div class="window">
			<h1>Raffles Technology Federation</h1>
		</div>

		<div class="window">
			<h1>Featuring Our Main Man</h1>
			<img src="img/daGuan.jpg">
		</div>

		<div class="window">
			<h1>Here Be Dragons</h1>
			<img src="img/guan2.jpg">
		</div>

		<div class="window">
			<h1>Abandon all hope ye who venture forth</h1>
			<img src="img/guan3.jpg">
		</div>

		<div class="window">
			<h1>our condolences</h1>
			<video src="img/guanDance.mp4" height="50%" autoplay loop muted></video>
		</div>

<!--		<div class="window">
			<h1><?php echo htmlspecialchars("question = 2*b || !(2*b)"); ?></h1>
		</div>   -->

		<?php echo JS.WINDOWS_PLUGIN; ?>
		<script>
			$(document).ready(function(){
			    $('.window').windows({
			        snapping: true,
			        snapSpeed: 500,
			        snapInterval: 1100
			    });
			    centerise();
			});
			$(window).resize(function(){centerise();});

			function centerise(){
				/*
			                        CENTERISE!
			                       /
			                  ___
			          D>=G==='   '.
			                |======|
			                |======|
			            )--/]IIIIII]
			               |_______|
			               C O O O D
			              C O  O  O D
			             C  O  O  O  D
			             C__O__O__O__D
			            [_____________]
 			*/
				$(".window").each(function(){
			    	var contentHeight = 0;
			    	$(this).children(".window>*").each(function(){
			    		contentHeight += $(this).height();
			    	});
			    	$(this).children(".window>*:first").css("margin-top",($(this).height() - contentHeight)/2);
			    });
			}

  			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  			ga('create', 'UA-57000907-1', 'auto');
  			ga('send', 'pageview');

			</script>
	</body>
</html>
