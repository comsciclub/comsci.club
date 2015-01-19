<?php
  require_once 'includes/includes.php';
?>
<html>
    <head>
      <title>An Unexpected Description</title>
      <?php 
          echo META_STUFF.CSS.OLDTEXT_CSS; 
          $useragent = $_SERVER['HTTP_USER_AGENT'];
          if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
              echo ONEPAGE_CSS;
          }
      ?>
      <style>
        nav{
            position: fixed;
            z-index:999;
        }
      </style>
    </head>

    <body>
      <?php echo NAVBAR; ?>
      <div class="main">
      	<section id="history-of-the-time-war" class="lime lighten-5" style="padding-top:64px">
      		<div class="container">
            <i class="mdi-action-turned-in large" id="old-book-thing"></i>
      			<h2 class="old-text">Encyclopedia Tekhnologia</h2>
      			<h4 class="old-text"><em>a brief foreword on the illustrous history of the RCSC</em></h4>
      		</div>
      	</section>

        <section id="this-is-an-abstract" class="lime lighten-5">
          <div class="container">
            <h4 class="old-text must-not-overflow" id="hail-guan">IN SERVICE OF HIS ROYAL MAJESTY GUAN</h4>
            <p class="flow-text old-text">The Raffles Institution Computer Science Club was founded in 1823 and is, despite being one of the most fascinating, one of the least understood CCAs in the school. The CCA is in fact an underground organisation that promotes a thorough and rigorous understanding of black magic and its practical applications in everyday life. This short write-up seeks to clear misconceptions about the club and give a brief overview of what it aims to achieve and what each mystical session is like.</p>
          </div>
        </section>

      	<section id="things-to-boast-about" style="text-align:center">
      		<div class="container row">
      		    <div class="col s12 m8 offset-m2">
    			    <img class="responsive-img" width="100%" src="img/photos/timelords.jpg">
    				<p class="grey-text">the likeness of magic-folk captured on a mystic glass box</p>
    			</div>
		    </div>
      	</section>
      	
      	<section id="our-founder-randolf" class="cyan white-text">
      	    <div class="container">
      	        <h4>Etymology</h4>
      	        <p class="flow-text">The Raffles Council of Sorcery and the Cosmos (RCSC) gets its name from a magical box first invented by The Right Honourable Grandmaster Wizard Sir Randolf the Fabulous, a pioneering wizard and one of the most controversial practitioners of black magic to ever walk this earth.</p>
      	    </div>
      	</section>

        <section id="from-humble-beginnings" class="black">
          <div class="container">
            <p class="flow-text">Commonfolk understand little about these magical boxes, often going to extensive lengths to avoid interacting directly with them. For example, some resort to making use of prefabricated automagical blogging platforms such as WordPress, Joomla and Ghost to stay away from the InterWeb Magic known as the Holy Tempest of Mystic Light (HTML).</p>
        </section>

        <section id="let-the-force-be-your-guide" class="grey lighten-4">
          <div class="container">
            <p class="flow-text">Despite making use of the enchantments laid upon their portable magical boxes on a daily basis, few can be said to have more than a cursory understanding of the darker and deeper works behind these spells. Many an unwise wizard or witch have sadly fallen prey to the Abyss of Four-O-Four and become separated from the InterWeb pipes that bind our magical community together.</p>
          </div>
        </section>

        <section id="on-the-fields-of-pelennor">
          <div class="container">
            <div class="row">
              <div class="col m6 s12">
                 <img class="responsive-img" width="100%" src="img/photos/hackatron.jpg">
                 <p class="grey-text">magic box likeness of some CCA members at 2014 Hackatron Asia magic box wizardry contest</p>
              </div>

              <div class="col m6 s12">
                <p class='flow-text'>To address this lack of understanding, the CCA tries its very best to study further the magical box and seeks to find new and novel applications for it in the lives of commonfolk. </p>
              </div>
            </div>
          </div>
        </section>

        <section id="christmas-in-trenzalore" style="text-align:center">
          <div class="container row">
              <div class="col s12 m8 offset-m2">
                <img class="responsive-img" width="100%" src="img/photos/hackroll.jpg">
                <p class="grey-text">stained glass depicting members with prizes from the Hack and Roll black box wizardry tournament held by the National United Spellcasters (NUS)</p>
              </div>
          </div>
        </section>
        
        <section id="ranald-is-a-cat" class="green darken-1 white-text">
            <div class="container">
                <h4>Great Success</h4>
                <p class="flow-text">Prominent CCA members compete in and win big at professional level wizardry contests, placing this CCA amongst the top Magic Box Organisations in the country.</p>
            </div>
        </section>

        <section id="progesigners" class="blue white-text">
          <div class="container">
            <h4>Sessions</h4>
            <p class="flow-text">The average session is split into 2 sections: “design” and “programming”. The former seeks to find ways to use magic boxes to create digital art. On the other hand, the latter seeks to fully understand and build on the magic boxes themselves.</p>

          </div>
        </section>

        <section id="there-be-dragons" class="orange white-text">
          <div class="container">
            <h4>Mandatory Warnings</h4>
            <p class="flow-text">As with any CCA as intense as this, there are inherent dangers. It is not uncommon for members to find themselves uncontrollably addicted to games that they themselves made. In such situations, trained personnel administer electroshock therapy and employ a bouncer to physically separate the offending member from his/her magic box.</p>
          </div>
        </section>

        <section id="fraught-with-danger" class="orange darken-4 white-text">
          <div class="container">
            <p class="flow-text">Another serious threat is that of electrocution. These magic boxes are powered by magical energy that flows in our walls. This magical energy is unfortunately unsafe for commonfolk and wizards alike. Due to the high density of magic boxes, members may find themselves jolted by 240V RMS AC.</p>
          </div>
        </section>

        <section id="thanks-for-all-the-fish">
          <div class="container">
            <p class="flow-text">The magical nature of black-box-work makes for flexible CCA sessions and content. However, necessary requirements for magic-work and wand-wielding include hands, optical light portals, and interest in the dark and mysterious world of black boxes.</p>

            <p class="flow-text">It is our sincere hope that you now have a solid understanding of the CSC. Should you have any questions, feel free to email us at <a href="mailto:exco@comsci.club">exco@comsci.club</a>.</p>
          </div>
        </section>
      </div>
      <?php echo JS.ONEPAGE_PLUGIN.FITTEXT_PLUGIN; ?>
      <script>
      	$(document).ready(function(){
            $(window).resize();
            <?php echo NAVBAR_JS; ?>
      	});
        if($(window).width() >= 992){
          	$(".main").onepage_scroll({
    		   sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
    		   easing: "ease",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
    		                                    // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
    		   animationTime: 600,             // AnimationTime let you define how long each section takes to animate
    		   pagination: true,                // You can either show or hide the pagination. Toggle true for show, false for hide.
    		   updateURL: true,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
    		   beforeMove: function(index) {},  // This option accepts a callback function. The function will be called before the page moves.
    		   afterMove: function(index) {/*shouldNavStay()*/$(window).resize();},   // This option accepts a callback function. The function will be called after the page moves.
    		   loop: true,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
    		   keyboard: true,                  // You can activate the keyboard controls
    		   responsiveFallback: 992,        // You can fallback to normal page scroll by defining the width of the browser in which
    		                                    // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
    		                                    // the browser's width is less than 600, the fallback will kick in.
    		   direction: "vertical"            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".  
    		});
    		
    		$(window).resize(function(){
              $("section").each(function (i){
                container = $(this).children("div.container:not(nav div)");
                container.css('margin-top',($(window).height()-container.outerHeight())/2);
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
              });
            });
        } else {
            $("div.main section").css("padding","20px 0 20px 0");
            $("div.main section:first").css("padding-top","64px");
        }
    	/*
		$(document).on("scroll click hover touchstart touchmove",function(){
		    if($(window).width() >= 992){
		        shouldNavStay();
		    } else {
		        $(nav).fadeIn();
		    }
		});
		function shouldNavStay(){
            if($("#history-of-the-time-war").offset().top == 0 || $("#thanks-for-all-the-fish").offset().top == 0){
                $("nav").fadeIn();
            } else {
                $("nav").fadeOut();
            }
		}*/
	</script>
    </body>
  </html>