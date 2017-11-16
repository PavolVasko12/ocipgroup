<!DOCTYPE html>
<html lang="en">
    
<!-------------- HEAD FROM HERE --------------->  
<?php require_once('head.php'); ?>
    
<!-------------- BODY FROM HERE ----------------->
<body> 
    
<!------------------ NAVIGATION FROM HERE ------------------->
<?php  require_once('navigation.php'); ?> 
    
<!---------------- MAIN HEADER IMAGE/BANNER ---------------->
<div id="printHeaderImage">
    <div class="developmentHeaderMainTextHolder">
        <h1><span class="developmentBoldMainText">Our work</span> <span class="developmentRegularMainText">print</span></h1>
    </div>
</div>
    
 <!------------------------ OUR WORK GALLERY ------------------------->

<div id="holderForOurWorkTextAndGallery">
    <div id="holderForOurWorkText">
          <div id="leftSideWork">
              <h2>Our Work</h2>
              <h4>Print recent examples</h4>
            </div>

            <div id="rightSideWork">
                <p><strong>OCIP Group has a wealth of expertise in the area of offline &amp; print design.</strong> We have achieved some truly spectacular results for our clients, delivering on visuals, style, cost effectiveness &amp; specifically return on investment. We listen to our clients’ specific needs &amp; create attention grabbing designs specifically for your target markets.</p>
            </div>
    </div>
    
    <ul id="ulForGalleryImageChanging">
         <li class="leftArrowForChangingTheGalleryImage">&#60;</li>
        <a href="all-galleries.php" alt="OCIP - All galleries link"><li class="listForChangingTheGalleryImage">All</li></a>
        <li class="listForChangingTheGalleryImage activeListGallery">Print</li>
        <a href="ocip-digital.php" alt="OCIP - Our Work Digital"><li class="listForChangingTheGalleryImage">Digital</li></a>
        <a href="ocip-development.php" alt="OCIP - Development gallery link"><li class="listForChangingTheGalleryImage">Development</li></a>
         <li class="rightArrowForChangingTheGalleryImage">&#62;</li>
    </ul>
    
    <div id="printGalleryHolder">
        <div class="printTopGalleryHolderClass" id="topGalleryHolder">
            <div class="digitalTopLeftHolder" id="topLeftHolder">
                <h2>Overview</h2>
                <h4>Commerical van livery</h4>
                
                <p class="pOnDigital">Everything we send to print will be expertly designed by our team so that all requirements &amp; key features are at the forefront of our designs. With our print work, they got to see how easy it is to create something really special that will impress their customers.</p>
                
                <p class="pOnDigital">Understanding how the print industry operates and how it will work going forward form part of our specialist skills. The print requirements will always vary from job to job, so our understanding of each process and relevant cost implications is our strength. We helped them every step of the way along this road, so when building the brand with or without printed elements, we ensured every bit of work we did delivered return on investment.</p>
                
                 <div id="visitWebsiteButton"><p>Visit Website</p></div>
            </div>
             <div class="printTopRigthHolder" id="topRightHolder">
                <img src="MEDIA/digitalPrintDevelopmentSections/print-logo.png" alt="OcipGroup - Print - Bucks hot tube hire image">
             </div>
        </div>
        <div id="printBottomGalleryHolder">
        </div>
        <div id="printCarImageFloatedInTheMiddle">
            
        </div>
    </div>
</div>

<!-------------------- LOGOS COURSEL SLIDER FROM HERE ------------->

<?php require_once('accreditation-slider.php'); ?>

<!------------------ RECENT FEEDBACK - FROM HERE ------------->
<?php require_once('recent-feedback.php'); ?>
    

<!----------------- CONTACT US - FROM HERE ---------------->
   <?php require_once('contact-us.php'); ?>


<!------------- FOOTER FROM HERE DESKTOP UNTIL 800PX ------------->
   <?php require_once('footer.php'); ?>


<!------------- SCRIPTS FROM HERE ---------------->
<?php require_once('scripts.php'); ?>
    
</body>
</html>