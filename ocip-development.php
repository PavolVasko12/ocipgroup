<!DOCTYPE html>
<html lang="en">
    
<!-------------- HEAD FROM HERE --------------->  
<?php require_once('head.php'); ?>
    
<!-------------- BODY FROM HERE ------------------>
<body>
   
<!------------------ NAVIGATION FROM HERE ------------------->
<?php  require_once('navigation.php'); ?> 
    
<!---------------- MAIN HEADER IMAGE/BANNER ---------------->
<div id="developmentHeaderImage">
    <div class="developmentHeaderMainTextHolder">
        <h1><span class="developmentBoldMainText">OUR WORK</span> <span class="developmentRegularMainText">DEVELOPMENT</span></h1>
    </div>
</div>
    
 <!------------------------ OUR WORK GALLERY ------------------------->

<div id="holderForOurWorkTextAndGallery">
    <div id="holderForOurWorkText">
          <div id="leftSideWork">
              <h2>Our Work</h2>
              <h4>Development</h4>
            </div>

            <div id="rightSideWork">
              <p><strong>OCIP Group have dedicated in-house development with all-round knowledge of not just coding, but planning, building &emp; after-launch expertise.</strong> Using comprehensive back-end &emp; front-end skills, OCIP can take your ideas &emp; using their years of experience in the industry, produce accessible &emp; beautiful websites with superior functionality.</p>
            </div>
    </div>
    
    <ul id="ulForGalleryImageChanging">
         <li class="leftArrowForChangingTheGalleryImage">&#60;</li>
        <a href="all-galleries.php" alt="OCIP - All galleries link"><li class="listForChangingTheGalleryImage">All</li></a>
        <li class="listForChangingTheGalleryImage">Print</li>
        <li class="listForChangingTheGalleryImage">Digital</li>
        <li class="listForChangingTheGalleryImage activeListGallery">Development</li>
         <li class="rightArrowForChangingTheGalleryImage">&#62;</li>
    </ul>
    
    <div id="galleryHolder">
        <div id="topGalleryHolder">
            <div id="topLeftHolder">
                <h2>Overview</h2>
                <h4>Online calculator app</h4>
                
                <p>We encourage the development team to get involved in all stages of website creation from the brief through to the launch, in that way we fully understand the clients’ requirements when it comes to building their website or application.</p>
                
                <p>We sat down with the client and made sure to explain simply the processes involved, we encourage feedback and conversation throughout all stages. Design and build go hand in hand when it comes to the OCIP group, we ensured the creatives were delivered with excellent clean code. We know it’s not just about turning designs into websites, but making the user experience even better.</p>
                
                 <div id="visitWebsiteButton"><p>Visit Website</p></div>
            </div>
             <div id="topRightHolder">
                <img src="MEDIA/digitalPrintDevelopmentSections/development-calculator-illustration.jpg" alt="OcipGroup - Development calculator example">
             </div>
        </div>
        <div id="bottomGalleryHolder">
             <div id="bottomLeftHolder">
                 <img src="MEDIA/digitalPrintDevelopmentSections/development-screenshot-image.jpg" alt="OcipGroup - Development LivePreview example">
             </div>
             <div id="bottomRightHolder">
                 <img src="MEDIA/digitalPrintDevelopmentSections/development-iMac-image.jpg" alt="OcipGroup - Development Photo example">
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