<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Ryan Maskell</title>
  <meta name="description" content="All about Ryan Maskell">
  <meta name="author" content="Ryan Maskell">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">
  <link rel="stylesheet" href="assets/fonts/stylesheet.css">
  <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <script src="assets/js/libs/modernizr-2.0.6.min.js"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="assets/js/jquery.fancybox.js"></script>
  <script type="text/javascript" src="assets/js/plax.js"></script>

</head>

<body>
<div id="landing">
  <div id="parallax-frame">
    <img id="clouds" class="paraimg" src="assets/img/clouds.png" />
    <img id="seattle" class="paraimg" src="assets/img/seattle.png" />
    <img id="ryan" class="paraimg" src="assets/img/Ryan.png" />
    <div id="greeting">
      <h1>Salutations...</h1>
      <p>I'm Ryan, and this site is under construction.
           <br> <em>Come back later! Or email me: <a href="mailto:maskellryan@me.com">MaskellRyan@me.com</a></em>
      </p>
    </div>
  </div>
</div>
<h1 class="full-header">Three things about me</h1>
<div class="wrap">
  <div class="row-fluid">
    <div class="span4">
      <img class="img-polaroid" src="http://placehold.it/330x200" />
      <h2>Enthusiast</h2>
      <p>Explain how I love everything and how I become passionate about things that I think are cool and then try and tell everyone about them.</p>
    </div>
    <div class="span4">
      <img class="img-polaroid" src="http://placehold.it/330x200" />
      <h2>Optimist</h2>
      <p>Words on how I view the world, my philosophies, and why I get out of bed in the morning. Basically what I care about most.</p>
    </div>
    <div class="span4">
      <img class="img-polaroid" src="http://placehold.it/330x200" />
      <h2>Designer</h2>
      <p>Things about my education, training, and how I became a graphic & web designer. How it is my passion and my true calling.</p>
    </div>
  </div>
  <div class="row-fluid">
    <div class="media">
      <a class="pull-right" href="#">
        <img class="media-object img-polaroid" src="http://placehold.it/420x220">
      </a>
      <div class="media-body">
        <h2 class="media-heading">MaskellMedia</h2>
        <p>Stuff about my Career, goals, links to MaskellMedia, and a brief overview of my accomplishments and current status.</p>
      </div>
    </div>
  </div>
</div>

<footer>
  <img class="bg-img" src="assets/img/chicago-predark.jpg">
  <img class="bg-img bg-hover" src="assets/img/chicago-dark3.jpg">
  <h3 class="full-header">Lets Get Social!</h3>

  <div class="wrap">

    <div class="row-fluid">

      <div class="span4 clearfix">

      <h3>Facebook</h3>
      <a href="http://www.facebook.com/maskellryan"><img class="avatar img-polaroid" src="https://graph.facebook.com/maskellryan/picture?type=large"></a>
      <p>Have you met me? In person? Then chances are I'll add you back.</p>
      <form action="http://www.facebook.com/addfriend.php?id=maskellryan"><input type="hidden" name="id" value="100000296041161" /><input type="submit" value="Friend Me" /></form>
    </div>
    <div class="span8 clearfix">

      <h3>Tumblr</h3>
      <a href="http://www.passionatemeandering.tumblr.com"><img class="avatar img-polaroid" src="http://api.tumblr.com/v2/blog/passionatemeandering.tumblr.com/avatar/512"></a>
      <p>The content you will see in my blog will be an amalgamation of beautiful art, ridiculous memes, heartfelt gifs, Anti-Religious posts, and pictures of Hayley Williams from the band Paramore. </p> 
      <iframe class="btn" frameborder="0" border="0" scrolling="no" allowtransparency="true" height="25" width="115" src="http://platform.tumblr.com/v1/follow_button.html?button_type=2&tumblelog=passionatemeandering&color_scheme=light"></iframe>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span4">

      <h3>Twitter</h3>
      <a href="http://www.twitter.com/maskellryan"><img class="avatar img-polaroid" src="https://api.twitter.com/1/users/profile_image/maskellryan?size=original"></a>

      <p>I tweet a lot of random stuff, personal life things, & some design related tweets too.</p>

      <a href="https://twitter.com/MaskellRyan" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @MaskellRyan</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      <div id="twitterfeed">
          <div id="tweets"></div>
      </div>

      </div>

      <div class="span8">

        <h3>Instagram</h3>
        <p>I love photography, and Instagram is the perfect outlet that is always at my fingertips, check out my photos, or go straight to <a href="http://www.instagram.com/maskellryan">my profile here</a>.</p>
        <?php
          // Supply a user id and an access token
          $userid = "30961079";
          $accessToken = "30961079.ab103e5.20ff5b5201fc4e3ba2d21c8c6b38eb3e";

          // Gets our data
          function fetchData($url){
               $ch = curl_init();
               curl_setopt($ch, CURLOPT_URL, $url);
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
               curl_setopt($ch, CURLOPT_TIMEOUT, 20);
               $result = curl_exec($ch);
               curl_close($ch); 
               return $result;
          }

          // Pulls and parses data.
          $result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}");
          $result = json_decode($result);
        ?>


        <?php foreach ($result->data as $post): ?>
          <!-- Renders images. @Options (thumbnail,low_resoulution, high_resolution) -->
          <a class="group" rel="group1" href="<?= $post->images->standard_resolution->url ?>"><img src="<?= $post->images->thumbnail->url ?>"></a>
        <?php endforeach ?>

      </div>

    </div>
    <div class="row-fluid">
      <div class="span12"> 
        <h3>Music I'm Listening to</h3>
        <p>Follow me on Last.FM to get a taste of my eclectic stylings.</p>
        <div id="lastfm">
          <dl class="lastplay">
            <dt class="lfm_art"></dt>
            <dd class="lfm_song"> </dd>
            <dd class="lfm_artist"><i class="icon-user"></i> </dd>
            <dd class="lfm_album"><i class="icon-picture"></i> </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
</footer>

</div>

  <!-- JavaScript at the bottom for fast page loading -->

  
  <script src="assets/js/bootstrap.js"></script>
  <script defer src="assets/js/plugins.js"></script>
  <script src="assets/js/hashgrid.js"></script>
  <script src="assets/js/lastfm.js"></script>
  <script src="assets/js/jquery.tweetable.js"></script>
  <script defer src="assets/js/script.js"></script>

  <script type="text/javascript">
  $(function(){
    $('#tweets').tweetable({username: 'MaskellRyan', time: true, limit: 4, replies: true, position: 'append'});
  });
</script>

  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
</body>
</html>
