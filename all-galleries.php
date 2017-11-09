<!DOCTYPE html>
<html lang="en">
    
<!-------------- HEAD FROM HERE --------------->  
<?php require_once('head.php'); ?>
    
<!-------------- BODY FROM HERE ------------------>
<body>
   
<!------------------ NAVIGATION FROM HERE ------------------->
<?php  require_once('navigation.php'); ?> 
    
<!---------------- MAIN HEADER IMAGE/BANNER ---------------->
<div id="allHeaderImage">
    <div class="developmentHeaderMainTextHolder">
        <h1><span class="developmentBoldMainText">OUR </span> <span class="developmentRegularMainText">WORK</span></h1>
    </div>
</div>
    
 <!------------------------ OUR WORK GALLERY ------------------------->

<div id="holderForOurWorkTextAndGallery">
    <div id="holderForOurWorkText">
          <div id="leftSideWork">
              <h2>Our Work</h2>
              <h4>See recent examples</h4>
            </div>

            <div id="rightSideWork">
              <p>OCIP Group are specialist in web design and web development within the Aylesbury and Buckinghamshire area. Offering a friendly local service with over 10 years + experience. We have some great examples of website design, print and development below. Scroll on the filters to see some of our recent work.</p>
            </div>
    </div>
    
    <ul id="ulForGalleryImageChanging">
         <li class="leftArrowForChangingTheGalleryImage">&#60;</li>
        <li class="listForChangingTheGalleryImage activeListGallery">All</li>
        <li class="listForChangingTheGalleryImage">Print</li>
        <li class="listForChangingTheGalleryImage">Digital</li>
        <a href="ocip-development.php" alt="OCIP - Development gallery link"><li class="listForChangingTheGalleryImage">Development</li></a>
         <li class="rightArrowForChangingTheGalleryImage">&#62;</li>
    </ul>
    
    <div id="galleryHolder">
        <div id="leftGalleryDiv">  
            <div id="topImageGallery">
                <img class="imagesInLeftGallerClass" src="MEDIA/WorkGallery/packhotsImage.jpg" alt="Pack Hots Direct Image">
                <div class="holderForTextOnImages">
                    <h2 class="textOnAnImageGallery">WEBSITE</h2>
                    <h6 class="websiteLinkGalleryText">Packhotsdirect.com</h6>
                </div>
                
            </div>
             <div id="bottomImageGallery">
                <img class="imagesInLeftGallerClass" src="MEDIA/WorkGallery/brochureImage.jpg" alt="Brochure image OCIP">
                  <div class="holderForTextOnImages">
                      <h2 class="textOnAnImageGallery">BROCHURE</h2>
                      <h6 class="websiteLinkGalleryText">Packhotsdirect.com</h6>
                 </div>
            </div>
        </div>
        <div id="rightGalleryDiv">
            <img id="rightImageGallery" src="MEDIA/WorkGallery/hottubeImage.jpg" alt="Bucks Hot Tube Hire Image">
             <div class="holderForTextOnImages">
                 <h2 class="textOnAnImageGallery">BILLBOARD</h2>
                 <h6 class="websiteLinkGalleryText">Buckshottubhire.co.uk</h6>
            </div>
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