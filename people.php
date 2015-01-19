<?php
  require_once 'includes/includes.php';
  
  $stainedGlassCraftsPeople = ["Alyssa Low", "Wang Jiayi", "Hu Yi Guo", "Cham Zek Min", "Jeremy Ngo"];
  $buddingSpellcasters = ["Jackson Huang", "Lee Rui Zhe", "Sim Sheng Qin", "Sim Sheng Xue", "Kelvin Yap", "Ong Cheng Geng", "Sun Xiuqi"];
  $secretOraclesofSpellcasting = ["Justin Hou", "Mohideen Khan"];
?>
<html>
    <head>
      <title>The Magic Community</title>
      <?php echo META_STUFF; ?>
      <?php echo CSS.FONTAWESOME_CSS; ?>
      <style>
        img.responsive-img.circle{
            width: 50%;
        }
      </style>
    </head>

    <body>
      
      <?php echo NAVBAR; ?>
      <!--
      <div class="white row" style="margin-bottom:0">
          <div class="col s12">
              <ul class="tabs">
                  <li class="tab col s12">
                    <a class="blue-text text-darken-2" href="#2014">2014</a>
                  </li>
                  <li class="tab col s12">
                    <a class="blue-text text-darken-2 active" href="#2015">2015</a>
                  </li>
              </ul>
          </div>
      </div>
      -->
      
      <div class="container main" style="padding-top:20px" id="2015">
        <div class="row center">
            <div class="col s12 m6">
                <div class="card-panel">
                    <img class="responsive-img circle" src="img/people/dhar.jpg">
                    <p class="flow-text">Grandmaster Wizard King Neil Dhar</p>
                    <p>Incumbent Chieftain</p>
                    <p class="flow-text blue-text no-margin">
                        <a href="mailto:neil@comsci.club" title="neil@comsci.club">
                            <i class="mdi-communication-email"></i>
                        </a>
                        <a href="https://twitter.com/neildhar" title="@neildhar">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </p>
                </div>
            </div>
            
            <div class="col s12 m6">
                <div class="card-panel">
                    <img class="responsive-img circle" src="img/people/huey1.jpg" alt="img/people/huey2.jpg">
                    <p class="flow-text">Exalted Sorcerer of the Cosmos Huey</p>
                    <p>creator of this mystical world</p>
                    <p class="flow-text blue-text no-margin">
                        <a href="mailto:huey@comsci.club" title="huey@comsci.club">
                            <i class="mdi-communication-email"></i>
                        </a>
                        <a href="https://twitter.com/hueyhueylee" title="@hueyhueylee">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="row center">
            <div class="col s12 m4">
                <div class="card-panel" id="spellcaster">
                    <img class="responsive-img circle" src="img/people/desmond2.jpg">
                    <p class="flow-text">Desmond Cheong</p>
                    <p>Soulful Spellcaster</p>
                </div>
            </div>
            
            <div class="col s12 m4">
                <div class="card-panel">
                    <img class="responsive-img circle" src="img/people/junyi.jpg">
                    <p class="flow-text">Yue Junyi</p>
                    <p>Scribe/Saikang Warrior</p>
                </div>
            </div>
            
            <div class="col s12 m4">
                <div class="card-panel">
                    <img class="responsive-img circle" src="img/people/gunter.jpg">
                    <p class="flow-text">Shiv Gunter</p>
                    <p>Rogue Graffiti Artist</p>
                </div>
            </div>
        </div>
        
        <div class="row center">
            <div class="col s12 m6">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <p class="flow-text">Calligraphists and Artisans</p>
                    </li>
                    <?php
                        foreach($stainedGlassCraftsPeople as $designer){
                            echo "<li class='collection-item'>$designer</li>";
                        }
                    ?>
                </ul>
            </div>
            
            <div class="col s12 m6">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <p class="flow-text">Spellcasters</p>
                    </li>
                    <?php
                        foreach($buddingSpellcasters as $programmer){
                            echo "<li class='collection-item'>$programmer</li>";
                        }
                    ?>
            </div>
        </div>
        
        <div class="row center">
            <div class="col s12 m4">
                <div class="card-panel">
                    <img class="responsive-img circle" src="img/people/guanDance.gif">
                    <p class="flow-text">Guan</p>
                    <p>Disgraced Spellcaster</p>
                </div>
            </div>
            <div class="col s12 m8">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <p class="flow-text">Secret Oracles of Spellcasting</p>
                    </li>
                    <?php
                        foreach($secretOraclesofSpellcasting as $advanced){
                            echo "<li class='collection-item'>$advanced</li>";      
                        }
                    ?>
                </ul>
            </div>
        </div>
      </div>
      <!--
      <div class="container main" style="padding-top:20px" id="2015">
        <div class="row center">
            <div class="col s12 m6">
                <div class="card-panel">
                    <img class="responsive-img circle" src="img/people/yilei.jpg">
                    <p class="flow-text">Cheong Yilei</p>
                    <p>Most Esteemed Chairperson</p>
                </div>
            </div>
            <div class="col s12 m6">
                <div class="card-panel">
                    <img class="responsive-img circle" src="img/people/codecla.ws.jpg">
                    <p class="flow-text">Ranald Lam</p>
                    <p>Resident Clairvoyant Archmage Talent (CAT)</p>
                </div>
            </div>
        </div>
      </div>-->

      <?php echo JS; ?>
      <script>
        $( document ).ready(function(){
          <?php echo NAVBAR_JS; ?>
          //$('ul.tabs').tabs();
        });
        /*$("#spellcaster").hover(function(){
            $(this).children("img").attr("src","img/photos/guan.gif");
            $(this).children("p.flow-text").text("Guan");
            $(this).children("p").text("Disgraced Spellcaster");
        });*/
      </script>
    </body>
  </html>
