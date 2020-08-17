<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include ( './data.php' ); ?>
<html>
<head>

  <title>James Zambon | Flight Paramedic</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <meta name="keywords" content="" />
  <meta name="description" content="" />

  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
  <link rel="stylesheet" type="text/css" href="resume.css" media="all" />

</head>
<body>

  <div id="doc2" class="yui-t7">
    <div id="inner">
      
      <div id="hd"><!-- This is the info header -->
        <div class="yui-gc">
          <div class="yui-u first">
            <h1><?php echo $general[ Author ]; ?></h1>
            <h2><?php echo $general[ Subtitle ]; ?></h2>
          </div>

          <div class="yui-u">
            <div class="contact-info">
              <h3><a id="pdf" href="<?php echo $general[ PDFLink ]; ?>">Download PDF</a></h3>
              <h3><a href="mailto:<?php echo $general[ Email ]; ?>"><?php echo $general[ Email ]; ?></a></h3>
              <h3><?php echo $general[ Phone ]; ?></h3>
            </div><!--// .contact-info -->
          </div>
        </div><!--// .yui-gc -->
      </div><!--// hd -->

      <div id="bd">
        <div id="yui-main">
          <div class="yui-b"><!-- This is the info Profile area -->

            <div class="yui-gf">
              <div class="yui-u first">
                <h2>Profile</h2>
              </div>
              <div class="yui-u">
                <p class="enlarge">
                  <?php echo $general[ Tagline ]; ?> 
                </p>
              </div>
            </div><!--// .yui-gf -->

<!--            
            <div class="yui-gf">
              <div class="yui-u first">
                <h2>Skills</h2>
              </div>
              <div class="yui-u">

                <div class="talent">
                  <h2>Languages</h2>
                  <p>Some stuff here...</p>
                </div>

                <div class="talent">
                  <h2>Stuff</h2>
                  <p>Words.. Words.. Words.. Words.. Words.. Words.. Words.. Words.. </p>
                </div>

                <div class="talent">
                  <h2>Things</h2>
                  <p>Words.. Words.. Words.. Words.. Words.. Words.. Words.. Words.. </p>
                </div>
              </div>
            </div>--!><!--// .yui-gf -->


            <!--=== TECHNICAL ==============================================================================-->    
<!--
            <div class="yui-gf">
              <div class="yui-u first">
                <h2>Visas</h2>
              </div>
              <div class="yui-u">
                <ul class="talent">
              <?php
                    $i = 0; $numItems = count($visas); 
                    foreach ( $visas as $visa )if ( isset( $visa )) { 
              ?>

              <li class="<?php if(++$i === $numItems) { echo "last"; } ?>"><?php echo $visa[ Country ]; ?> &ndash; <?php echo $visa[ Expiration ]; ?></li>
              <?php } end ?>
                </ul>

                <ul class="talent">
                  <li>Jquery</li>
                  <li>PHP</li>
                  <li class="last">CVS / Subversion</li>
                </ul>

                <ul class="talent">
                  <li>OS X</li>
                  <li>Windows XP/Vista</li>
                  <li class="last">Linux</li>
                </ul>
              </div>
            </div>--> <!--// .yui-gf-->

            <div class="yui-gf">
              <!--=== Experience ==============================================================================-->    
              
              <div class="yui-u first">
                <h2>Experience</h2>
              </div><!--// .yui-u -->

              <div class="yui-u">
                <?php 
                    $i = 0; 
                    $numItems = count($jobs);
                    foreach ( $jobs as $job ) if (isset( $job )) { 
                ?>

                <div class="job <?php if(++$i === $numItems) { echo "last"; } ?>">
                  <h2><?php echo $job[ Employer ]; ?></h2>
                  <h3><?php echo $job[ Title ]; ?></h3>
                  <h4><?php echo $job[ StartDate ]; ?>&mdash;<?php echo $job[ EndDate ]; ?></h4>
                  <p><?php echo $job[ Description ]; ?></p>
                </div>
                <?php } end ?>
              </div><!--// .yui-u -->
            </div><!--// .yui-gf -->

            <!--=== EDUCATION ==============================================================================-->    

            <div class="yui-gf last">
              <div class="yui-u first">
                <h2>Education</h2>
              </div>
              <?php
                    $i = 0; 
                    $numItems = count($educations); 
                    foreach ( $educations as $education ) if ( isset( $education )) { 
              ?>
              <div class="yui-u job <?php if(++$i === $numItems) { echo "last"; } ?>">
                <h2><?php echo $education[ TheSchool ]; ?></h2>
                <h3><?php echo $education[ Degree ]; ?> <strong><?php echo $education[ DateRange ]; ?></strong> </h3>
              </div>
              <?php } end ?>
            </div><!--// .yui-gf -->

            <!--=== CERTIFICATIONS ==============================================================================-->    
            <div class="yui-gf last">
              <div class="yui-u first">
                <h2>Certifications</h2>
              </div>
              <?php 
                    $i = 0; 
                    $numItems = count($certifications); 
                    foreach ( $certifications as $certification )if ( isset( $certification )) { 
              ?>

              <div class="yui-u job <?php if(++$i === $numItems) { echo "last"; } ?>">
                <h2><?php echo $certification[ Title ]; ?></h2>
                <h3>Expiration: <?php echo $certification[ Expiration ]; ?></h3>
              </div>
              <?php } end ?>
            </div><!--// .yui-gf -->

            <!--=== LANGUAGES ==============================================================================-->    
            <div class="yui-gf last">
              <div class="yui-u first">
                <h2>Languages</h2>
              </div>
              <?php
                    $i = 0; 
                    $numItems = count($languages); 
                    foreach ( $languages as $language )if ( isset( $language )) { 
              ?>

              <div class="yui-u job <?php if(++$i === $numItems) { echo "last"; } ?>">
                <h2><?php echo $language[ Name ]; ?></h2>
                <h3>EXP: <?php echo $language[ Expertise ]; ?></h3>
              </div>
              <?php } end ?>
            </div><!--// .yui-gf -->


            <!--=== VISAS ==============================================================================-->    
            <div class="yui-gf last">
              <div class="yui-u first">
                <h2>Visas</h2>
              </div>
              <?php
                    $i = 0; 
                    $numItems = count($visas); 
                    foreach ( $visas as $visa )if ( isset( $visa )) { 
              ?>

              <div class="yui-u job <?php if(++$i === $numItems) { echo "last"; } ?>">
                <h2><?php echo $visa[ Country ]; ?></h2>
                <h3>Expiration: <?php echo $visa[ Expiration ]; ?></h3>
              </div>
              <?php } end ?>
            </div><!--// .yui-gf -->
   
            <!--=== MISCELLANEOUS ==============================================================================-->    
            <div class="yui-gf last">
              <div class="yui-u first">
                <h2>Miscellaneous</h2>
              </div>
              <?php
                    $i = 0; 
                    $numItems = count($miscellaneous); 
                    foreach ( $miscellaneous as $miscellaneou )if ( isset( $miscellaneou )) {  
              ?> 
             
              <div class="yui-u job <?php if(++$i === $numItems) { echo "last"; } ?>">
                <h2><?php echo $miscellaneou[ Name ]; ?></h2>
                <h3>&mdash; <?php echo $miscellaneou[ Description ]; ?></h3>
              </div>
              
              <?php } end ?>
            </div><!--// .yui-gf -->


          </div><!--// .yui-b -->
        </div><!--// yui-main -->
      </div><!--// bd -->

      <div id="ft">
        <p><?php echo $general[ Author ]; ?> &mdash; <?php echo $general[ Address ]; ?>  &mdash; <a href="mailto:<?php echo $general[ Email ]; ?>"><?php echo $general[ Email ]; ?></a> &mdash; <?php echo $general[ Phone ]; ?></p>
      </div><!--// footer -->

    </div><!-- // inner -->

  </div><!--// doc -->

</body>
</html>


