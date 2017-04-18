
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Hendra Arfiansyah" />
    <meta name="description" content="Coming Soon Dinamik 9" />
    <meta name="robot" content="all" />
    
    <title>Dinamik 9</title>
    
    <script>document.documentElement.className = 'js';</script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <!-- Force latest IE rendering engine & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Make IE recognise HTML5 elements for styling -->
    <!--[if lte IE 8]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <noscript>
        <strong>Warning!</strong>
        Your browser does not support HTML5 so some elements on this page are simulated using JScript. Unfortunately your browser has JScript disabled. Please enable it in order to display this page.
    </noscript>
    <![endif]-->
    <!-- Disable image toolbar in IE6 -->
    <!--[if lte IE 6]><meta http-equiv="imagetoolbar" content="no" /><![endif]-->
    
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
    
    <link rel="stylesheet" href="css/jquery.parallax.css" />

    <style type="text/css" media="screen, projection">

    <?php
        $seconds = time();
        $tanggal = date("Y-m-d");

        $tanggal = strtotime($tanggal);
        $seconds = (18000 + $seconds) - $tanggal;

        if($seconds > 21600 && $seconds < 50400){
            // pagi
            $waktu = "pagi";

            echo "body {
                margin: 0;
                background-color: #95D8E9;
            }";
        }else if($seconds > 50401 && $seconds < 64800){
            // sore
            $waktu = "sore";

            echo "body {
                margin: 0;
                background-color: #E49306;
            }";
        }else{
            // malem
            $waktu = "malem";

            echo "body {
                margin: 0;
                background-color: #5E5872;
            }";
        }
    ?>

    .parallax-viewport {
        position: absolute;
        bottom: 0;
        width: 1366px;
        height: 660px;
        left: 50%;
        margin-left: -683px;
    }

    .parallax-layer {
        opacity: 0;
    }
    
    </style>

</head>

<body>

    <div id="social">
    </div>

    <div style="position:fixed; bottom:0; width:100%; height:40%; background-color:#B6D134;"></div>
  
    <div class="parallax-viewport" id="parallax">


        <!-- parallax layers -->

    <?php
        if($waktu == "malem"){
    ?>

            <div id="layer1" class='parallax-layer' style='width:1290px; height:673px;'>
                <img src='img/moon.png' alt='' style='position:absolute; left:1000px; top:5px;'/>
            </div>
            <div id="layer2" class="parallax-layer" style="width:1260px; height:644px;">
                <img src="img/star.png" alt="" style="position:absolute; left:100px; top:20px;"/>
            </div>
            <div id="layer3" class="parallax-layer" style="width:1420px; height:580px;">
                <img src="img/grass.png" alt="" style="position:absolute; top:480px; left:300px;"/>
            </div>
            <div id="layer4" class="parallax-layer" style="width:1320px; height:640px;">
                <img src="img/carrousel.png" alt="" style="position:absolute; top:120px; left:220px;" />
            </div>
            <div id="layer7" class="parallax-layer" style="width:1240px; height:674px;">
                <img src="img/firework.png" alt="" style="position:absolute; left:300px; top:20px;"/>
            </div>
            <div id="layer6" class="parallax-layer" style="width:1350px; height:590px;">
                <img src="img/light.png" alt="" style="position:absolute; top:40px; left:430px;"/>
            </div>
            <div id="layer5" class="parallax-layer" style="width:1360px; height:620px;">
                <img src="img/tent.png" alt="" style="position:absolute; top:200px; left:387px;"/>
            </div>
            <div id="layer8" class="parallax-layer" style="width:1400px; height:580px;">
                <img src="img/mascot.png" alt="" style="position:absolute; top:420px; left:490px;"/>
            </div>
            <div id="layer10" class="parallax-layer" style="width:1500px; height:544px;">
                <img src="img/banner2.png" alt="" style="position:absolute; left:475px; top:0;"/>
            </div>
            <div id="layer9" class="parallax-layer" style="width:1440px; height:580px;">
                <a href="http://www.facebook.com/DinamikIlkomUPI" title="Dinamik 9 on Facebook" style="position:absolute; top:470px; left:430px;">
                    <img src="img/umbul_facebook.png" alt=""/>
                </a>
                <a href="http://www.twitter.com/dinamikupi" title="Dinamik 9 on Twitter" style="position:absolute; top:470px; left:950px;">
                    <img src="img/umbul_twitter.png" alt=""/>
                </a>
            </div>

    <?php
        }else{
            if($waktu == "pagi")
                echo "<div id='layer1' class='parallax-layer' style='width:1290px; height:673px;'>
                    <img src='img/sun.png' alt='' style='position:absolute; left:1000px; top:5px;'/>
                </div>";
            else
                echo "<div id='layer1' class='parallax-layer' style='width:1290px; height:673px;'>
                    <img src='img/sunset.png' alt='' style='position:absolute; left:1000px; top:5px;'/>
                </div>";
    ?>

            <div id="layer2" class="parallax-layer" style="width:1200px; height:644px;">
                <img src="img/cloud.png" alt="" style="position:absolute; left:100px; top:20px;"/>
            </div>
            <div id="layer3" class="parallax-layer" style="width:1420px; height:580px;">
                <img src="img/grass.png" alt="" style="position:absolute; top:480px; left:300px;"/>
            </div>
            <div id="layer4" class="parallax-layer" style="width:1320px; height:640px;">
                <img src="img/carrousel.png" alt="" style="position:absolute; top:120px; left:220px;" />
            </div>
            <div id="layer5" class="parallax-layer" style="width:1360px; height:620px;">
                <img src="img/tent.png" alt="" style="position:absolute; top:200px; left:387px;"/>
            </div>
            <div id="layer6" class="parallax-layer" style="width:1400px; height:580px;">
                <img src="img/mascot.png" alt="" style="position:absolute; top:420px; left:490px;"/>
            </div>
            <div id="layer8" class="parallax-layer" style="width:1500px; height:544px;">
                <img src="img/banner1.png" alt="" style="position:absolute; left:475px; top:0;"/>
            </div>
            <div id="layer7" class="parallax-layer" style="width:1440px; height:580px;">
                <a href="http://www.facebook.com/DinamikIlkomUPI" title="Dinamik 9 on Facebook" style="position:absolute; top:470px; left:430px;">
                    <img src="img/umbul_facebook.png" alt=""/>
                </a>
                <a href="http://www.twitter.com/dinamikupi" title="Dinamik 9 on Twitter" style="position:absolute; top:470px; left:950px;">
                    <img src="img/umbul_twitter.png" alt=""/>
                </a>
            </div>

    <?php
        }
    ?>

    </div>

    

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.event.frame.js"></script>
  <script src="js/jquery.parallax.min.js"></script>
  <script>
    jQuery(document).ready(function(){
        jQuery("#layer3").animate({opacity:'1'}, "fast");

        <?php
            if($waktu == "malem"){
        ?>

            jQuery("#layer1").animate({opacity:'1'}, 300, function(){
                jQuery("#layer2").animate({opacity:'1'}, 300, function(){
                    jQuery("#layer4").animate({opacity:'1'}, 300, function(){
                        jQuery("#layer5").animate({opacity:'1'}, 300, function(){
                            jQuery("#layer6").animate({opacity:'1'}, 300, function(){
                                jQuery("#layer7").animate({opacity:'1'}, 300, function(){
                                    jQuery("#layer8").animate({opacity:'1'}, 300, function(){
                                        jQuery("#layer9").animate({opacity:'1'}, 300, function(){
                                            jQuery("#layer10").animate({opacity:'1'}, 1000);
                                        });
                                    });
                                });
                            });
                        });
                    });
                });
            });

        <?php
            }else{
        ?>

            jQuery("#layer1").animate({opacity:'1'}, 300, function(){
                jQuery("#layer2").animate({opacity:'1'}, 300, function(){
                    jQuery("#layer4").animate({opacity:'1'}, 300, function(){
                        jQuery("#layer5").animate({opacity:'1'}, 300, function(){
                            jQuery("#layer6").animate({opacity:'1'}, 300, function(){
                                jQuery("#layer7").animate({opacity:'1'}, 300, function(){
                                    jQuery("#layer8").animate({opacity:'1'}, 1000);
                                });
                            });
                        });
                    });
                });
            });

        <?php
            }
        ?>

        jQuery('#parallax .parallax-layer')
        .parallax({
          mouseport: jQuery('#parallax')
        });
      });
  </script>
</body>
</html>
