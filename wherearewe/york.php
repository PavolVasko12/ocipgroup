<!DOCTYPE html>
<html lang="en">

<!-------------- HEAD FROM HERE --------------->
<?php require_once('../headWhereAreWe.php'); ?>


<body>
  <!------------------ NAVIGATION FROM HERE ------------------->
  <?php  require_once('../navigationWhereAreWe.php'); ?>

  <!---------------- MAIN HEADER IMAGE/BANNER ---------------->
  <div id="whereAreWeHeaderHolder">
    <div id="map" class="mapWhereAreWe"></div>
    <!-- <img id="gradientOverWhereAreWe" src="MEDIA/gradientOverMap.png" alt=""> -->
    <div id="whereAreWeTitle" class="developmentHeaderMainTextHolder">
        <h1><span class="developmentBoldMainText">Area</span> <span class="developmentRegularMainText"> we cover.</span></h1>
    </div>
  </div>

  <!----------- WHERE ARE WE CONTENT FROM HERE ------------>

  <div id="wawpHolder">
    <div id="wawpContent">
      <div id="leftSideWawpContent">
        <h2>Where are we?</h2>
        <h4>Providing services to York</h4>
        <p id="paragAboveListWawp"><span class="boldText paddingTitleParagWawp">We are based in Aylesbury (Buckinghamshire) but we provide web services to whole of the UK</span><br>
We are a small friendly digital marketing agency within easy reach of London. With over 10 years’ experience, we work with businesses of all sizes, with start-ups being our speciality. So if your looking for website design service near Aylesbury then look no further. You can browse all the areas we cover by clicking on the ‘area’s we cover’ below:</p>
        <ul id="listCitiesWamp">
          <a href="oxford.php"><li>Oxford</li></a>
          <a href="portsmouth.php"><li>Portsmouth</li></a>
          <a href="london.php"><li>London</li></a>
          <a href="birmingham.php"><li>Birmingham</li></a>
          <a href="leeds.php"><li>Leeds</li></a>
          <a href="manchester.php"><li>Manchester</li></a>
          <a href="edinburgh.php"><li>Edinburgh</li></a>
          <a href="norwich.php"><li>Norwich</li></a>
          <a href="cardiff.php"><li>Cardiff</li></a>
          <a href="york.php"><li>York</li></a>
          <a href="bath.php"><li>Bath</li></a>
          <a href="plymouth.php"><li>Plymouth</li></a>
        </ul>

        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Are you looking for a new website near York?</span><br>
We provide professional web and print services at a low cost rate. If your looking for a cheap e-comerce, wordpress or static website near Aylesbury then look no further. We offer amazing pricing. No need to visit, we can arrange video call to discuss you project requirements. Once we have your information and requirements we begin the process of producing your online/offline product.</p>
        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Professional graphic designer in Aylesbury</span><br>
We don’t just design and build websites. If your local to Aylesbury then we can produce business card’s, banners, flyers, magazines, artworking services and much, much more. So if your near Milton Keynes, Amersham, Holmer Green, High Wycombe, Hazelmere, Marlow or Bourne End then don’t hesitate to call us on: 01296 340890 to see how we can help.</p>
        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Cheap website design Bath and surrounding area</span><br>
We offer extremely cheap web services to the Bath vicinity. We offer a satisfaction guarantee, so what have you got to lose? If your based near Bath let’s start your new website today, email us at enquiry@ocip-group.com. We cover the following postcodes within the Buckinghamshire area: HP27, HP23, HP22, HP21, HP20, HP18, HP17, HP16, HP15, HP14, HP13, HP12, HP11, HP10, HP9, HP7, HP6, HP5, HP4, HP3, SL9, SL8, SL7, SL6, SL4, SL3, SL2, SL1, SL0, WD3, UB9, UB8, RG9, MK19, MK18, MK17, OX39, OX9, LU7, LU6, NN13.</p>
        <p id="textBottomWamp">Why not have a look at ‘Our work’ page? <a id="textButtonWamp"href="../all-galleries.php">Click here to view</a></p>
      </div>
      <div id="rightSideWawpContent">
          <div id="roundMap" class="asideWamp"></div>
          <h2 id="titleUnderMapWawp">We provide services to<br> <span class="underTitleWamp">the whole of the Bath area</span></h2>
          <p>Here at Ocip we not only provide website services to Aylesbury but also to the enitre Buckinghamshire area. If your in or near any of the below towns we can help.<br>Call us today on: <span class="boldText">01296 340890</span> to discuss your online/offline marketing.</p>
          <ul id="listRightContentWamp">
            <li>Milton Keynes</li>
            <li>Amersham</li>
            <li>Holmer Green</li>
            <li>High Wycombe</li>
            <li>Hazelmere</li>
            <li>Marlow</li>
            <li>Bourne End</li>
          </ul>
          <h3 class="boldText">Would you like to know more?</h3>
          <p id="finalTextRightContentWawP">If your looking for info or have a question about your website or print project email us today at <span class="boldText" >enquiry@ocip-group.com</span></p>

      </div>
    </div>
  </div>

  <!----------------- CONTACT US - FROM HERE ---------------->
     <?php require_once('../contact-usWhereAreWe.php'); ?>

  <!----------------- FOOTER FROM HERE DESKTOP UNTIL 800PX ---------------->
    <?php require_once('../footerWhereAreWe.php'); ?>

  <!------------- Google Maps JavaScript ------------->
     <script src="../JS/googleMapsYork.js" type="text/javascript"></script>

  <!------------------ CALLING JS ------------------->
  <?php  require_once('../scriptsWhereAreWe.php'); ?>
</body>
</html>
