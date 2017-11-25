<!DOCTYPE html>
<html lang="en">

<!-------------- HEAD FROM HERE --------------->
<?php require_once('head.php'); ?>


<body>
  <!------------------ NAVIGATION FROM HERE ------------------->
  <?php  require_once('navigation.php'); ?>

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
        <h4>Providing services to Aylesbury</h4>
        <p id="paragAboveListWawp"><span class="boldText paddingTitleParagWawp">We are based in Aylesbury (Buckinghamshire) but we provide web services to whole of the UK</span><br>
We are a small friendly digital marketing agency within easy reach of London. With over 10 years’ experience, we work with businesses of all sizes, with start-ups being our speciality. So if your looking for website design service near Aylesbury then look no further. You can browse all the areas we cover by clicking on the ‘area’s we cover’ below:</p>
        <ul id="listCitiesWamp">
          <li>Oxford</li>
          <li>Portsmouth</li>
          <li>London</li>
          <li>Birmingham</li>
          <li>Leeds</li>
          <li>Manchester</li>
          <li>Edinburgh</li>
          <li>Norwich</li>
          <li>Cardiff</li>
          <li>York</li>
          <li>Bath</li>
          <li>Plymouth</li>
        </ul>

        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Are you looking for a new website near Aylesbury?</span><br>
We provide professional web and print services at a low cost rate. If your looking for a cheap e-comerce, wordpress or static website near Aylesbury then look no further. We offer amazing pricing. No need to visit, we can arrange video call to discuss you project requirements. Once we have your information and requirements we begin the process of producing your online/offline product.</p>
        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Professional graphic designer in Aylesbury</span><br>
We don’t just design and build websites. If your local to Aylesbury then we can produce business card’s, banners, flyers, magazines, artworking services and much, much more. So if your near Milton Keynes, Amersham, Holmer Green, High Wycombe, Hazelmere, Marlow or Bourne End then don’t hesitate to call us on: 01296 340890 to see how we can help.</p>
        <p class="paragWawp"><span class="boldText paddingTitleParagWawp">Cheap website design Aylesbury and surrounding area</span><br>
We offer extremely cheap web services to the Aylesbury/Buckinghamshire vicinity. We offer a satisfaction guarantee, so what have you got to lose? If your based near Aylesbury let’s start your new website today, email us at enquiry@ocip-group.com. We cover the following postcodes within the Buckinghamshire area: HP27, HP23, HP22, HP21, HP20, HP18, HP17, HP16, HP15, HP14, HP13, HP12, HP11, HP10, HP9, HP7, HP6, HP5, HP4, HP3, SL9, SL8, SL7, SL6, SL4, SL3, SL2, SL1, SL0, WD3, UB9, UB8, RG9, MK19, MK18, MK17, OX39, OX9, LU7, LU6, NN13.</p>
        <p id="textBottomWamp">Why not have a look at ‘Our work’ page? <a id="textButtonWamp"href="#">Click here to view</a></p>
      </div>
      <div id="rightSideWawpContent">
          <div id="roundMap" class="asideWamp"></div>
      </div>
    </div>
  </div>

  <!----------------- CONTACT US - FROM HERE ---------------->
     <?php require_once('contact-us.php'); ?>

  <!------------------ CALLING JS ------------------->
  <?php  require_once('./scripts.php'); ?>
</body>
</html>
