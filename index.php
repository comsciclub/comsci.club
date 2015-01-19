<?php
  require_once 'includes/includes.php';
?>
<html>
    <head>
      <title>Raffles Council of Sorcery and the Cosmos</title>
      <?php echo META_STUFF; ?>
      <?php echo CSS; ?>
    </head>

    <body>
      
      <?php echo NAVBAR; ?>

      <div class="container main">

        <div class="row center">
            <h1 class="header center blue-text">Raffles Council of Sorcery and the Cosmos</h1>
            <div class="row center">
                <h5 class="header center col s12 light">it's not rocket science: it's black magic</h5>
            </div>
            <div class="row center">
                <a href="/about" class="waves-effect waves-light btn-large grey darken-2" id="darkside">come to the dark side</a>
            </div>

            <div class="row">
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-content">
                            <h2 class="center light-blue-text">
                                <i class="mdi-action-polymer"></i>
                            </h2>
                            <h5 class="header center">Buzzwords</h5>
                            <p class="light">we know what we're doing</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-content">
                            <h2 class="center light-blue-text">
                                <i class="mdi-editor-format-align-left"></i>
                            </h2>
                            <h5 class="header center">Disorganised Code</h5>
                            <p class="light">unrelated iconography</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-content">
                            <h2 class="center light-blue-text">
                                <i class="mdi-notification-event-note"></i>
                            </h2>
                            <h5 class="header center">Serious Stuff</h5>
                            <p class="light">no funny business here</p>
                        </div>
                    </div>
	            </div>
            </div>
       	</div>
      </div>

      <?php echo FOOTER; ?>

      <?php echo JS; ?>
      <script>
        $("#darkside").hover(function(){
          $(this).fadeOut(function(){
            $(this).text("we have cookies").fadeIn();
          });
        }, function(){
          $(this).fadeOut(function(){
            $(this).text("come to the dark side").fadeIn();
          })
        });

        $( document ).ready(function(){
          <?php echo NAVBAR_JS; ?>
        });
      </script>
    </body>
  </html>
