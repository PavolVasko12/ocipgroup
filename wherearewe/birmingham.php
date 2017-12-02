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
        <h4>Providing services to Birmingham</h4>
        <p id="paragAboveListWawp"><span class="boldText paddingTitleParagWawp">WWe are near Hazelmere (Buckinghamshire) area but we provide digital & print services to the West Midlands.</span><br>
We are a small friendly internet company within easy reach of Wolverhampton. With over 10 years’ experience, we work with businesses of all sizes, with start-ups being our speciality. So if your looking for website services near Birmingham then look no further. You can browse all the areas we cover by clicking on the ‘areas we cover’ below:</p>
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

        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Are you looking for website update near Birmingham?</span><br>
We provide professional web and print services at a low cost rate. If your looking for a cheap e-comerce, wordpress or static website near Coventry then look no further. We offer amazing pricing. No need to visit, we can arrange video or telephone call to discuss your project requirements. Once we have your information and requirements we will begin the process of producing your online/offline product.</p>
        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Low cost website maintenance near you</span><br>
We don’t just design and build websites. If you are near Holborn then we can produce business card’s, banners, flyers, magazines, artworking services and much, much more. So if you are in or near Coventry, Wolverhampton, Dudley, Standwell, Sutton Coldfield, Halesowen or Aston then call us today on: 01296 340890 to see how we can help.</p>
        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Cheap logo design in Birmingham and surrounding area</span><br>
Your find we offer extremely cheap website services to the West Midlands area. Offering a satisfaction guarantee, what have you got to lose? If your based near Birmingham let’s start your new website today, email us at enquiry@ocip-group.com. We cover the following postcodes within the West Midlands area: B1, B13, B14, B15, B17, B2, B21, B23, B24, B25, B26, B27, B28, B29, B3, B30, B31, B32, B33, B36, B37, B38, B4, B42, B43, B44, B45, B5, B6, B62, B63, B64, B65, B66, B68, B69, B70, B71, B72, B74, B75, B76, B8, B90, B91, B92, B93, CV1, CV2, CV3, CV4, CV5, CV6, CV7, CV8, DY1, DY2, DY3, DY4, DY5, DY6, DY8, DY9, WS1, WS10, WS3, WS4, WS8, WS9, WV1, WV10, WV11, WV12, WV13, WV14, WV2, WV3, WV4, WV6.</p>
        <p id="textBottomWamp">Why not have a look at ‘Our work’ page? <a id="textButtonWamp"href="../all-galleries.php">Click here to view</a></p>
      </div>
      <div id="rightSideWawpContent">
          <div id="roundMap" class="asideWamp"></div>
          <h2 id="titleUnderMapWawp">We provide services to<br> <span class="underTitleWamp">the whole of the West Midlands area</span></h2>
          <p>Here at Ocip we not only provide website services to Birmingham but to the whole West Midlands area. If you are in or near any of the below towns we can help.<br>Call us today on: <span class="boldText">01296 340890</span> to discuss your online/offline marketing.</p>
          <ul id="listRightContentWamp">
            <li>Wolverhampton</li>
            <li>Coventry</li>
            <li>Dudley</li>
            <li>Walsall</li>
            <li>West Bromwich</li>
            <li>Sandwell</li>
            <li>Stourbridge</li>
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
     <script src="../JS/googleMapsBirmingham.js" type="text/javascript"></script>

  <!------------------ CALLING JS ------------------->
  <?php  require_once('../scriptsWhereAreWe.php'); ?>
</body>
</html>
