<!DOCTYPE html>
<html lang="en">
    
<!-------------- HEAD FROM HERE --------------->  
<?php require_once('head.php'); ?>
    
<!-------------- BODY FROM HERE ----------------->
<body> 
    
<!------------------ NAVIGATION FROM HERE ------------------->
<?php  require_once('navigation.php'); ?> 
    
<!---------------- MAIN HEADER IMAGE/BANNER ---------------->
<div id="digitalHeaderImage">
    <div class="developmentHeaderMainTextHolder">
        <h1><span class="developmentBoldMainText">Our work</span> <span class="developmentRegularMainText">digital</span></h1>
    </div>
</div>
    
 <!------------------------ OUR WORK GALLERY ------------------------->

<div id="holderForOurWorkTextAndGallery">
    <div id="holderForOurWorkText">
          <div id="leftSideWork">
              <h2>Our Work</h2>
              <h4>Digital examples</h4>
            </div>

            <div id="rightSideWork">
                <p><strong>OCIP Group produce modern &amp; stylish websites that deliver the results you need tailored to your specific requirements.</strong> Driving traffic &amp; increasing your customer base as well as creating conversions &amp; sales for your products &amp; services. The OCIP design team successfully work with clients to create print &amp; web projects that get you the best results.</p>
            </div>
    </div>
    
    <ul id="ulForGalleryImageChanging">
         <li class="leftArrowForChangingTheGalleryImage">&#60;</li>
        <a href="all-galleries.php" alt="OCIP - All galleries link"><li class="listForChangingTheGalleryImage">All</li></a>
         <a href="ocip-print.php" alt="OCIP - Our Work Print"><li class="listForChangingTheGalleryImage">Print</li></a>
        <li class="listForChangingTheGalleryImage activeListGallery">Digital</li>
        <a href="ocip-development.php" alt="OCIP - Development gallery link"><li class="listForChangingTheGalleryImage">Development</li></a>
         <li class="rightArrowForChangingTheGalleryImage">&#62;</li>
    </ul>
    
    <div id="galleryHolder">
        <div class="topGalleryHolderClass" id="topGalleryHolder">
            <div class="digitalTopLeftHolder" id="topLeftHolder">
                <h2>Overview</h2>
                <h4>Branding &amp; website</h4>
                
                <p class="pOnDigital">After we sat down with the client and formed a plan, we were ready to establish a creative direction. When it came to focussing on the digital process, we made sure that their requirements delivered results that created not only a smooth, but a friendly user experience. </p>
                
                <p class="pOnDigital">Early on in the process, we gathered as much insight on their users as possible, we then created something that reflected the brands image. We know that content is key, good content can not only enhance the company or service, but also balanced with great design, creates excellent user interaction &amp; journey.</p>
                
                 <div id="visitWebsiteButton"><p>Visit Website</p></div>
            </div>
             <div class="digitalTopRightHolder" id="topRightHolder">
               
             </div>
        </div>
        <div id="bottomGalleryHolder">
             <div id="digitalBottomLeftHolder">
                 <img src="MEDIA/digitalPrintDevelopmentSections/digital-ipad-image.png" alt="OcipGroup - Development LivePreview example">
             </div>
             <div id="bottomRightHolder">
                 <img src="MEDIA/digitalPrintDevelopmentSections/Digital-logos-examplesjpg.jpg" alt="OcipGroup - Development Photo example">
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