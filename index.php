<?php include ( './data.php' ); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>CV | <?php echo $general[ Author ] ?></title>
<!--960 Grid System ==============================================================-->
<link rel="stylesheet" href="/css/reset.css" />
<link rel="stylesheet" href="/css/960.css" />
<!--Fogli di Stile ==============================================================-->
<link rel="stylesheet" href="/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />
<!--JQUERY ==============================================================-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<!--CONTACT FORM ==============================================================-->
<script type="text/javascript" src="/js/jquery_mail.js"></script>
<!--SCROLL BOTTOM ==============================================================-->
<script type="text/javascript" src="/js/scroll.js"></script>
<!--SCROLL FOLLOW ==============================================================-->
<script type="text/javascript" src="/js/ui.core.js"></script>
<script type="text/javascript" src="/js/scroll-follow.js"></script>
<script type="text/javascript">
        $( document ).ready( function ()
            {
                $( '#social' ).scrollFollow();
            }
        );
    </script>

<!--COLORS ==============================================================-->
<?php include("colors/silver_gray.php"); ?>  <!-- change your color here -->


<!--CUFON ==============================================================-->
<script type="text/javascript" charset="utf-8" src="js/cufon_yui.js"></script>
<script type="text/javascript" charset="utf-8" src="js/Delicious_500-Delicious_700-Delicious_italic_500-Delicious_italic_700.font.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
      Cufon.replace('h1',{ textShadow: '0px -1px ' +dark });
      Cufon.replace('h2',{ textShadow: '0px 2px #fff' });
      Cufon.replace('h3',{ textShadow: '0px 1px' +light });
      Cufon.replace('h4, h5',{ textShadow: '0px 1px #fff' });
      Cufon.replace('span',{ textShadow: '0px -1px' +dark });
      Cufon.replace('h6',{ textShadow: '0px -1px' +dark });
      Cufon.replace('p.p_big',{ textShadow: '0px 1px #fff' });
      Cufon.now();
     });
</script>
</head>
<body>
<div class="container_12" >
<div id="content" class="grid_12">

<!--===HEADER==============================================================================-->
<div id="header" class="grid_10 push_1 alpha omega">
    <ul>
    <li id="bigtitle"><h1><?php echo $general[ Author ] ?></h1></li>
    <li id="subtitle"><h3><?php echo $general[ Subtitle ] ?></h3></li>
    </ul>

</div><div class="clear"></div>
<!--=======================================================================================-->




<!--===INTRODUCTION==============================================================================-->
<div id="title" class="grid_10 push_1 alpha omega section">

    <div class="grid_10 alpha omega section_title">
        <h2>Personal Details</h2>
    </div><div class="clear"></div>

    <div id="title_sx" class="grid_4 alpha">
        <div id="photo"><img src="photo/avatar.png" alt="myphoto"/></div>
    </div>

    <div id="title_center" class="grid_2 alpha">
    <ul>
    <li><h4>DOB</h4></li>
    <li><h4>Address</h4></li>
    <li><h4>Tel</h4></li>
    <li><h4>Email</h4></li>
    </ul>
    </div>

    <div id="title_dx" class="grid_4">
    <ul>
    <li><p class="p_big"><?php echo $general[ DOB ] ?></p></li>
    <li><p class="p_big"><?php echo $general[ Address ] ?></p></li>
    <li><p class="p_big"><?php echo $general[ Phone ] ?></p></li>
    <li><p class="p_big"><?php echo $general[ Email ] ?></p></li>
    </ul>
    </div><div class="clear"></div>

    <div class="grid_10 alpha omega section_title">
    <div id="social_button"><h6 class="nav_down" id="nav_down"><a href="#" style="color: #fff;">Contact Me</a></h6></div>
    </div><div class="clear"></div>

</div><div class="clear"></div>
<!--=======================================================================================-->





<!--===WORK==============================================================================-->
  <div class="grid_10 push_1 alpha omega section">

      <div class="grid_10 alpha omega section_title">
          <h2>Work Experience</h2>
      </div><div class="clear"></div>

  <?php foreach ( $jobs as $job ) if (isset( $job )) { ?>

  <div class="grid_10 alpha omega section_list">
      <ul>
        <li><h4><?php echo $job[ Title ]; ?></h4></li>
        <li><h5><?php echo $job[ Employer ]; ?></h5></li>
        <li class="section_content"><p><?php echo $job[ Description ]; ?></p>
          <div class="date"><span><?php echo $job[ StartDate ] . $job[ EndDate ] ?></span></div></li>
      </ul>
  </div><div class="clear"></div>

  <?php } end ?>

  </div><div class="clear"></div>
<!--=======================================================================================-->

<!--===EDUCATION==============================================================================-->
  <div class="grid_10 push_1 alpha omega section">

      <div class="grid_10 alpha omega section_title">
          <h2>Education</h2>
      </div><div class="clear"></div>

  <?php foreach ( $educations as $education ) if ( isset( $education )) { ?>

  <div class="grid_10 alpha omega section_list">
      <ul>
      <li><h4><?php echo $education[ TheSchool ]; ?></h4></li>
          <li><h5><?php echo $education[ Degree ]; ?></h5></li>
          <li class="section_content">
          <div class="date"><span><?php echo $education[ DateRange ]; ?></span></div></li>
      </ul>
  </div><div class="clear"></div>
  <?php } end ?>

<!--===CERTIFICATIONS==============================================================================-->

  <div class="grid_10 alpha omega section_list">
      <ul>
        <li><h4>Certifications:</h4></li>
          <li class="section_content">
            <p>
  <?php foreach ( $certifications as $certification ) if ( isset( $certification )) { ?>
              <strong><?php echo $certification[ Title ]; ?></strong> &ndash; Exp: <?php echo $certification[ Expiration ]; ?><br>
  <?php } end ?>
            </p>
          </li>
      </ul>
  </div>
  <div class="clear"></div>

<!--===LANGUAGES==============================================================================-->

  <div class="grid_10 alpha omega section_list">
      <ul>
        <li><h4>Languages:</h4></li>
        <li class="section_content">
          <p>
            LANGUAGES
  <?php foreach ( $Languages as $language) if ( isset( $language )) { ?>
              <strong><?php echo $language[ Name ]; ?></strong> : <?php echo $language[ Expertise ] ?><br>
  <?php } end ?>
          </p>
        </li>
      </ul>
  </div>
  <div class="clear"></div>

<!--===MISCELLANEOUS==============================================================================-->

  <div class="grid_10 alpha omega section_list">
      <ul>
        <li><h4>Miscellaneous</h4></li>
        <li class="section_content">
          <p>
  <?php foreach ( $miscellaneous as $misc )if ( isset( $misc )) { ?>
              <strong><?php echo $misc[ Name ]; ?></strong> : <?php echo $misc[ Description ] ?><br>
  <?php } end ?>
          </p>
        </li>
      </ul>
  </div>
  <div class="clear"></div>

<!--===VISAS==============================================================================-->

  <div class="grid_10 alpha omega section_list">
      <ul>
        <li><h4>Visas</h4></li>
        <li class="section_content">
          <p>
  <?php foreach ( $Visas as $visa )if ( isset( $visa )) { ?>
              <strong><?php echo $visa[ Country ]; ?></strong> EXP: <?php echo $visa[ Expiration ] ?><br>
  <?php } end ?>
          </p>
        </li>
      </ul>
  </div>
  <div class="clear"></div>

  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  -->

  </div><div class="clear"></div>
  <!--=======================================================================================-->



<!--===CONTACT FORM==============================================================================-->
<div id="contact" class="grid_10 push_1 alpha omega section">

    <div class="grid_10 alpha omega section_title">
        <h2>Contact Me</h2>
    </div><div class="clear"></div>

    <div class="grid_5 alpha contact_sx">
      <form id="formail" method="post" action="">
        <ul>
            <li><h4>Name</h4><div class="border"><input type="text" id="nome" name="nome"  value="" /></div></li>
            <li><h4>Email</h4><div class="border"><input type="text" id="email" name="email"  value="" /></div></li>
            <li><h4>Subject</h4><div class="border"><input type="text" id="oggetto" name="ogggetto"  value="" /></div></li>
            <li><h4></h4><input type="submit" id="invia" name="invia" value="" /></li>
        </ul>
      </form>
    </div>
    <div class="grid_5 omega contact_dx">
      <ul>
        <li><div class="border"><textarea id="messaggio" name="messaggio" rows="4" cols="20"></textarea></div></li>
      </ul>
    </div>
    <div class="clear"></div>

    <div class="grid_10 alpha omega">
      <div class="border"><div id="risposta"></div></div>
    </div><div class="clear"></div>

</div><div class="clear"></div>
<!--=======================================================================================-->



<!--===FOOTER==============================================================================-->
<div id="footer" class="grid_10 push_1 alpha omega">
</div><div class="clear"></div>
<!--=======================================================================================-->

<div id="social">
  <ul>
    <li id="social_top"></li>
    <li><a href="https://www.facebook.com/<?php echo $general[ Facebook ] ?>" target="_blank"><img src="/img/social/facebook.png" alt="facebook" /></a></li>
    <li><a href="https://twitter.com/<?php echo $general[ Twitter ] ?>" target="_blank"><img src="img/social/twitter.png" alt="twitter"/></a></li>
    <li><a href="https://www.linkedin.com/in/<?php echo $general[ LinkedIn ] ?>" target="_blank"><img src="img/social/linkedin.png" alt="linkedin"/></a></li>
    <li><a href="mailto:<?php echo $general[ Email ] ?>"><img src="img/social/email.png" alt="email"/></a></li>
    <li><a href="https://www.flickr.com/photos/<?php echo $general[ Flickr ] ?>/" target="_blank" ><img src="img/social/flickr.png" /></a></li>
    <!--
    <li><a href="#"><img src="img/social/friendfeed.png" /></a></li>
    <li><a href="#"><img src="img/social/google.png" /></a></li>
    <li><a href="#"><img src="img/social/msn.png" /></a></li>
    <li><a href="#"><img src="img/social/myspace.png" /></a></li>
    <li><a href="#"><img src="img/social/skype.png" /></a></li>
    <li><a href="#"><img src="img/social/yahoo.png" /></a></li>
    <li><a href="#"><img src="img/social/youtube.png" /></a></li>
    -->
    <li><a href="/JamesZambon_cv-resume.pdf"><img src="/img/social/download.png" alt="download"/></a></li>
    <li id="social_bottom"></li>
  </ul>
</div>

</div><div class="clear"></div><!-- close content-->
</div><!-- close container-->

<script type="text/javascript">
            $(function() {
                var $elem = $('#content');

                $('#nav_down').click(
                    function (e) {
                        $('html, body').animate({scrollTop: $elem.height()}, 800);
                    }
                );
            });
</script>
</body>
</html>
