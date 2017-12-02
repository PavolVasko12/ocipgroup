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
        <h4>Providing services to Portsmouth</h4>
        <p id="paragAboveListWawp"><span class="boldText paddingTitleParagWawp">We are near Amersham (Buckinghamshire) area but we provide digital & print services to whole of the South.</span><br>
We are a small friendly internet company within easy reach of London. With over 10 years’ experience, we work with businesses of all sizes, with start-ups being our speciality. So if your looking for website services near Portsmouth then look no further. You can browse all the areas we cover by clicking on the ‘areas we cover’ below:</p>
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

        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Are you looking for business card design near Portsmouth?</span><br>
We provide professional web and print services at a low cost rate. If your looking for a cheap e-comerce, wordpress or static website near Hampshire then look no further. We offer amazing pricing. No need to visit, we can arrange video or telephone call to discuss your project requirements. Once we have your information and requirements we will begin the process of producing your online/offline product.</p>
        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Low cost web development near you</span><br>
We don’t just design and build websites. If your local to Aylesbury then we can produce business card’s, banners, flyers, magazines, artworking services and much, much more. So if your near Milton Keynes, Amersham, Holmer Green, High Wycombe, Hazelmere, Marlow or Bourne End then don’t hesitate to call us on: 01296 340890 to see how we can help.</p>
        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Cheap website design Portsmouth and surrounding area</span><br>
We offer extremely cheap website services to the Hampshire area. We offer a satisfaction guarantee, so what have you got to lose? If your based near Portsmouth let’s start your new website today, email us at enquiry@ocip-group.com. We cover the following postcodes within the Hampshire area: BH23, BH24, BH25, GU10, GU11, GU12, GU13, GU14, GU17, GU26, GU30, GU31, GU32, GU33, GU34, GU35, GU46, PO10, PO11, PO12, PO13, PO14, PO15, PO16, PO17, PO7, PO8, PO9, RG19, RG20, RG21, RG22, RG23, RG24, RG25, RG26, RG27, RG28, RG29, RG7, SO16, SO20, SO21, SO22, SO23, SO24, SO30, SO31, SO32, SO40, SO41, SO42, SO43, SO45, SO50, SO51, SO52, SO53, SP10, SP11, SP5, SP6, SP9.</p>
        <p id="textBottomWamp">Why not have a look at ‘Our work’ page? <a id="textButtonWamp"href="../all-galleries.php">Click here to view</a></p>
      </div>
      <div id="rightSideWawpContent">
          <div id="roundMap" class="asideWamp"></div>
          <h2 id="titleUnderMapWawp">We provide services to<br> <span class="underTitleWamp">the whole of the Hampshire area</span></h2>
          <p>Here at Ocip we not only provide website services to Portsmouth but also to the entire Hampshire area. If you are in or near any of the below towns we can help.<br>Call us today on: <span class="boldText">01296 340890</span> to discuss your online/offline marketing.</p>
          <ul id="listRightContentWamp">
            <li>Winchester</li>
            <li>Andover</li>
            <li>Basingstoke</li>
            <li>Alton</li>
            <li>Petersfield</li>
            <li>Fleet</li>
            <li>Gosport</li>
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
     <script src="../JS/googleMapsPortsmouth.js" type="text/javascript"></script>

  <!------------------ CALLING JS ------------------->
  <?php  require_once('../scriptsWhereAreWe.php'); ?>
</body>
</html>
