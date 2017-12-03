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
        <h4>Providing services to Manchester</h4>
        <p id="paragAboveListWawp"><span class="boldText paddingTitleParagWawp">We are within Aylesbury (Buckinghamshire) area but we provide digital &amp; print services to whole of the North West UK</span><br>
We are a small friendly internet company within easy reach of Milton Keynes. With over 10 years’ experience, we work with businesses of all sizes, with start-ups being our speciality. So if your looking for website design service near Manchester then look no further. You can browse all the areas we cover by clicking on the ‘areas we cover’ below:</p>
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

        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Are you looking for a new website near Manchester?</span><br>
We provide professional web and print services at a low cost rate. If your looking for a cheap e-comerce, wordpress or static website near Manchester then look no further. We offer amazing pricing. No need to visit, we can arrange video or telephone call to discuss your project requirements. Once we have your information and requirements we will begin the process of producing your online/offline product.</p>
        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Low cost graphic designer in Bury</span><br>
We don’t just design and build websites. If you are near Stockport then we can produce business card’s, banners, flyers, magazines, artworking services and much, much more. So if your near Sale, Urmston, Hyde, Radcliffe, Oldham, Wigan or Bolton then don’t hesitate to call us on: 01296 340890 to see how we can help.</p>
        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Cheap website design Salford and surrounding area</span><br>
We offer extremely cheap web services to the Greater Manchester area. We offer a satisfaction guarantee, so what have you got to lose? If your based near Stretford let’s start your new website today, email us at enquiry@ocip-group.com. We cover the following postcodes within the Greater Manchester area: BL0, BL1, BL2, BL3, BL4, BL5, BL6, BL7, BL8, BL9, M1, M12, M13, M17, M18, M19, M2, M20, M21, M22, M23, M24, M25, M26, M27, M28, M29, M3, M30, M31, M32, M33, M34, M35, M38, M41, M43, M44, M45, M46, M5, M60, M7, M8, M9, OL1, OL10, OL11, OL12, OL15, OL16, OL2, OL3, OL4, OL5, OL6, OL7, OL8, OL9, SK1, SK14, SK15, SK16, SK2, SK4, SK5, SK6, SK7, SK8, WA13, WA14, WA15, WA3, WN1, WN2, WN3, WN4, WN5, WN6, WN7.</p>
        <p id="textBottomWamp">Why not have a look at ‘Our work’ page? <a id="textButtonWamp"href="../all-galleries.php">Click here to view</a></p>
      </div>
      <div id="rightSideWawpContent">
          <div id="roundMap" class="asideWamp"></div>
          <h2 id="titleUnderMapWawp">We provide services to<br> <span class="underTitleWamp">the whole of Manchester area</span></h2>
          <p>Here at Ocip we not only provide website services to Manchester but also to the entire Greater Manchester area. If you are in or near any of the below towns we can help.<br>Call us today on: <span class="boldText">01296 340890</span> to discuss your online/offline marketing.</p>
          <ul id="listRightContentWamp">
            <li>Wigan</li>
            <li>Rochdale</li>
            <li>Oldham</li>
            <li>Stockport</li>
            <li>Bolton</li>
            <li>Stalybridge</li>
            <li>Urmston</li>
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
     <script src="../JS/googleMapsManchester.js" type="text/javascript"></script>

  <!------------------ CALLING JS ------------------->
  <?php  require_once('../scriptsWhereAreWe.php'); ?>
</body>
</html>
