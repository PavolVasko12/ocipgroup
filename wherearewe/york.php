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
        <h4>Providing services to Newcastle</h4>
        <p id="paragAboveListWawp"><span class="boldText paddingTitleParagWawp">We are in the county of Buckinghamshire but we provide digital & print services to Newcastle.</span><br>
We are a small friendly internet company within easy reach of London. With over 10 years’ experience, we work with businesses of all sizes, with start-ups being our speciality. So if your looking for website services near Newcastle then look no further. You can browse all the areas we cover by clicking on the ‘areas we cover’ below:</p>
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

        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Are you looking for web designer near Newcastle?</span><br>
We provide professional web and print services at a low cost rate. If your looking for a cheap e-comerce, wordpress or static website near Newcastle then look no further. We offer amazing pricing. No need to visit, we can arrange video or telephone call to discuss your project requirements. Once we have your information and requirements we will begin the process of producing your online/offline product.</p>
        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Low cost wordpress website near you</span><br>
We don’t just design and build websites. If you are near Newcastle then we can produce business card’s, banners, flyers, magazines, artworking services and much, much more. So if you are in or near South Shields, Sunderland, Darlington, Durham, Middlesbrough, Alnwick or Gateshead then call us today on: 01296 340890 to see how we can help.</p>
        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Cheap print designer in Newcastle and surrounding area</span><br>
Ocip offer extremely cheap website services to the Newcastle area. We offer a satisfaction guarantee, so what have you got to lose? If your based near Newcastle let’s start your new website today, email us at enquiry@ocip-group.com. We cover the following postcodes within the North East: NE1, NE2, NE3, NE4, NE5, NE6, NE7, NE8, NE9, NE10, NE11, NE12, NE13, NE15, NE16, NE17, NE18, NE19, NE20, NE21, NE22, NE23, NE24, NE25, NE26, NE27, NE28, NE29, NE30, NE31, NE32, NE33, NE34, NE35, NE36, NE37, NE38, NE39, NE40, NE41, NE42, NE43, NE44, NE45, NE46, NE47, NE48, NE49, NE61, NE62, NE63, NE64, NE65, NE66, NE67, NE68, NE69, NE70, NE71, NE82, NE83, NE85, NE88, NE89, NE92, NE98, NE99.</p>
        <p id="textBottomWamp">Why not have a look at ‘Our work’ page? <a id="textButtonWamp"href="../all-galleries.php">Click here to view</a></p>
      </div>
      <div id="rightSideWawpContent">
          <div id="roundMap" class="asideWamp"></div>
          <h2 id="titleUnderMapWawp">We provide services to<br> <span class="underTitleWamp">the North East</span></h2>
          <p>Here at Ocip we not only provide website services to Newcastle but to the whole North East England. If you are in or near any of the below towns we can help.<br>Call us today on: <span class="boldText">01296 340890</span> to discuss your online/offline marketing.</p>
          <ul id="listRightContentWamp">
            <li>South Shields</li>
            <li>Sunderland</li>
            <li>Darlington</li>
            <li>Durham</li>
            <li>Middlesbrough</li>
            <li>Alnwick</li>
            <li>Gateshead</li>
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
