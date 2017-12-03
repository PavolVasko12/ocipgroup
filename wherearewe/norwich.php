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
        <h4>Providing services to Norwich</h4>
        <p id="paragAboveListWawp"><span class="boldText paddingTitleParagWawp">We are in the county of Buckinghamshire but we provide digital &amp; print services to Norfolk.</span><br>
We are a small friendly internet company within easy reach of London. With over 10 years’ experience, we work with businesses of all sizes, with start-ups being our speciality. So if your looking for website services near Norwich then look no further. You can browse all the areas we cover by clicking on the ‘areas we cover’ below:</p>
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

        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Are you looking for web designer near Norwich?</span><br>
We provide professional web and print services at a low cost rate. If your looking for a cheap e-comerce, wordpress or static website near Great Yarmouth then look no further. We offer amazing pricing. No need to visit, we can arrange video or telephone call to discuss your project requirements. Once we have your information and requirements we will begin the process of producing your online/offline product.</p>
        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Low cost wordpress website near you</span><br>
We don’t just design and build websites. If you are near Glasgow then we can produce business card’s, banners, flyers, magazines, artworking services and much, much more. So if you are in or near Great Yarmouth, Kings Lynn, Thetford, Dereham, Wymondham, Attleborough or Fakenham then call us today on: 01296 340890 to see how we can help.</p>
        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Cheap graphic designer in Norwich and surrounding area</span><br>
Ocip offer extremely cheap website services to the Yorkshire area. We offer a satisfaction guarantee, so what have you got to lose? If your based near Norwich let’s start your new website today, email us at enquiry@ocip-group.com. We cover the following postcodes within Norfolk: IP20, IP21, IP22, IP24, IP25, IP26, IP27, NR1, NR10, NR11, NR12, NR13, NR14, NR15, NR16, NR17, NR18, NR19, NR2, NR20, NR21, NR22, NR23, NR24, NR25, NR26, NR27, NR28, NR29, NR30, NR31, NR34, NR35, NR4, NR5, NR6, NR7, NR8, NR9, PE14, PE30, PE31, PE32, PE33, PE34, PE35, PE36, PE37, PE38.</p>
        <p id="textBottomWamp">Why not have a look at ‘Our work’ page? <a id="textButtonWamp"href="../all-galleries.php">Click here to view</a></p>
      </div>
      <div id="rightSideWawpContent">
          <div id="roundMap" class="asideWamp"></div>
          <h2 id="titleUnderMapWawp">We provide services to<br> <span class="underTitleWamp">Norfolk</span></h2>
          <p>Here at Ocip we not only provide website services to Norwich but to the whole of Norfolk. If you are in or near any of the below towns we can help.<br>Call us today on: <span class="boldText">01296 340890</span> to discuss your online/offline marketing.</p>
          <ul id="listRightContentWamp">
            <li>Great Yarmouth</li>
            <li>Kings Lynn</li>
            <li>Thetford</li>
            <li>Dereham</li>
            <li>Wymondham</li>
            <li>Attleborough</li>
            <li>Fakenham</li>
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
     <script src="../JS/googleMapsNorwich.js" type="text/javascript"></script>

  <!------------------ CALLING JS ------------------->
  <?php  require_once('../scriptsWhereAreWe.php'); ?>
</body>
</html>
