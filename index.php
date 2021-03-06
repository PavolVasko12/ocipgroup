<?php include "processContactForm.php"; ?>

<!DOCTYPE html>
<html lang="en">

<!-------------- HEAD FROM HERE --------------->
<?php require_once('head.php'); ?>

<!-------------- BODY FROM HERE ------------------>
<body>

<!------------------ NAVIGATION FROM HERE ------------------->
<?php  require_once('navigation.php'); ?>


<!------------------ HEADER FROM HERE - 4 IMAGES - COURSEL --------------->
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol id="olHeader" class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
          <div id="headerOneImage" class="item active">
              <div class="holderOnHeader">
                  <img id="imageOnSLideOne" src="MEDIA/HEADERIMAGES/headingImageForFirstSlide.png" alt="Gary's story heading image">
                  <p id="pOnHeaderIMageONe">Is your website looking sad, neglected and in need of some TLC?  Then you need us to take care of it. Our website rescue service provides your site with a detailed ‘medical’ and then gets it back up and running again as it should; full of life, pizzazz and ready to provide your clients with plenty of pleasure. Our new video see’s Gary six months before we found him. Have a watch below</p>
                  <div id="watchVideoGarySlideButton"><p>Watch Video</p></div>
              </div>
          </div>

          <div id="headerTwoImage" class="item">
              <div class="holderOnHeader">
                  <h1 id="skyLimitText">anywhere, anyhow</h1>
                    <h1 id="startupText">Practical <span id="textOnBusiness">solutions</span></h1>
                  <p id="pOnHeaderIMageONe">Our starter webpack incudes a mobile version of your website. So, whether your at home or on the move you know your customers can easily access your site on any device.</p>
                  <a href="ocip-contactPage.php" alt="Ocip-Group contact us Page"><div id="watchVideoGarySlideButton"><p>Contact us</p></div></a>
              </div>
          </div>

          <div id="headerThreeImage" class="item">
             <div class="holderOnHeader">
                    <h1 id="skyLimitText">sky's the limit</h1>
                    <h1 id="startupText">Startup <span id="textOnBusiness">businesses</span></h1>
                  <p id="pOnHeaderIMageONe">Start-up? Then you need to get it right first time! Launch your website with a bang and dazzle your audience with an impressive on-line presence that showcases your talents and knocks competitors for six. Why settle for anything less?</p>
              </div>
          </div>

            <div id="headerFourImage" class="item">
                <div class="holderOnHeader">
                <h1 id="skyLimitText">leave a</h1>
                    <h1 id="startupText">lasting <span id="textOnBusiness">Impression</span></h1>
                  <p id="pOnHeaderIMageONe">Design isn’t great if it doesn’t empathise with viewers and attract and intrigue, making them want to find out more. Stand out from the rest with a site built by us that engages with a ‘Wow’ factor, is utterly compelling and memorable and leaves your clients wanting to communicate.</p>
                    <a href="ocip-contactPage.php" alt="Ocip-Group contact us Page"><div id="watchVideoGarySlideButton"><p>Contact us</p></div></a>
              </div>
          </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!----------------- WHO ARE WE - FROM HERE --------->
  <div id="wAwHolder">
    <div id="wAwContentHolder">
      <h2 id="whoAreWeh2Desktop">So, Who are we?</h2>
        <h2 id="whoAreWeh2Phone">who</br>are we?</h2>
      <h4>We provide digital and print services</h4>
      <p id="pOnThewAw"><strong>If you have a web or print project that needs attention, then you have come to the right place.<br><br></strong>
We are a small friendly digital marketing agency based in Buckinghamshire. With over 10 years’ experience, we work with businesses of all sizes, with start-ups being our speciality. We provide a variety of services including the creation of bespoke artwork and the printing of business cards, A4 flyers, adverts and roller banners. We can also provide photo re-touch & manipulation services, website design and development (from WordPress themes through to e-commerce), logo design and brand development. If you have a project that you would like to know more, please get in contact using the button below. We’re always on hand to help.
</p>
      <a href="#" alt="Internal link to the contact form"><div id="wAwButton"><p>Get in touch</p></div></a>

      <!--<a href="ocip-contactPage.php"><img id ="wAwArrowDown" src="MEDIA/arrowDown.svg"></a>-->
       <div id ="wAwArrowDown"></div>
    </div>
  </div>

  <!-- --------------- LET'S GET STARTED PHONE - FROM HERE ------- -->
<?php include "letGetStartedPhone.php"; ?>

  <!-- --------------- LET'S GET STARTED DESKTOP - FROM HERE ------- -->
<?php include "letGetStartedDesktop.php"; ?>



      <!-- --------------- OUR PROCESS - FROM HERE ------- -->
      <div id="ourProcessHolder">
        <div id="contentBoxProcess">
          <div id="topPartProcess">
            <div id="leftSideProcess">
              <h2>Our process</h2>
              <h4>6 steps from start to finish</h4>
            </div>

            <div id="rightSideProcess">
              <p>Our process is sleek and finely tuned; we adjust our services to best suit your needs whether we are working on simple website content changes, getting your site up and running, logo or brand designs or intricate campaigns. It works like this:</p>
            </div>
          </div>
          <div id="middlePartProcess">
            <div id="meetingBox">
              <img src="MEDIA/CalenderIcon.png" alt="Meeting Icon">
              <p><span class="numberProcess">1.</span><span class="titleBoxProcess">Meeting</span><br>We meet  – this is where we all get our heads together.  As we find out exactly what you need, feel free to ask lots of questions. Once we have a firm understanding of your company and your needs, the process can begin.</p>
            </div>
            <div id="researchBox">
              <img src="MEDIA/lightBulbIcon.png" alt="Research Icon">
              <p><span class="numberProcess">2.</span> <span class="titleBoxProcess">Research</span><br>Research – this is vital as we need inside knowledge on your industry and competitors. Only when this is done can the design stage be initiated.</p>
            </div>
            <div id="designBox">
              <img src="MEDIA/BrushIcon.png" alt="Design Icon">
              <p><span class="numberProcess">3.</span> <span class="titleBoxProcess">Design</span><br>Design – now we can begin to create and develop ideas for your website, taking into account your precise requirements to produce something truly unique.</p>
            </div>
            <div id="reviewBox">
              <img src="MEDIA/magnifyIcon.png" alt="Review Icon">
              <p><span class="numberProcess">4.</span> <span class="titleBoxProcess">Review</span><br>Review – now is when we get feedback from you, analyse it and make any changes, fine-tuning ready to test the layout and design.</p>
            </div>
            <div id="buildBox">
              <img src="MEDIA/spannerIcon.png" alt="Build Icon">
              <p><span class="numberProcess">5.</span> <span class="titleBoxProcess">Build</span><br>Build– we can begin to fill your website with content and ensure that it is fully primed to be SEO ready. After this, we will ask for your input once again.</p>
            </div>
            <div id="launchSiteBox">
              <img src="MEDIA/launchIcon.png" alt="Launch Site Icon">
              <p><span class="numberProcess">6.</span> <span class="titleBoxProcess">Launch site</span><br>Launch – the final step and your website is complete and ready to go live.  We will liaise with you in detail, showing you how your site works and illustrating the many benefits available to your customers.</p>
            </div>
          </div>
          <div id="bottomPartProcess">
              <a href="#" alt="Internal link to the contact form"><div id="enquireNowButton"><p>Enquire Now</p></div></a>
          </div>
        </div>
      </div>

      <!-- --------------- WHY CHOOSE US? - FROM HERE ------- -->
      <div id="whyUsHolder">
        <div id="contentHolderWhyUs">
          <div id="topLeftWhyUs">
            <h2>Why choose us?</h2>
            <h4>Mobile websites come as standard</h4>
            <p><strong>You cannot afford to ignore the stats;</strong> mobile devices and phones are now fast becoming the chosen choice for browsing the internet. That’s why it’s so important that your website looks and functions as good on the desktop as it does on a mobile device. We take care of this, as well as providing you with a bespoke design, tailored to suit your audience and your needs.
In addition, our websites are optimised to be as Google friendly as possible, ensuring that you have the very best chance of increasing your page ranking. To find out more on how we can help you, get in touch today. We would love to hear from you.</p>
            <a href="ocip-contactPage.php" alt="OCip-Group Contact us page"><div id="getInTouchButton"><p>Get in touch</p></div></a>
            <img src="MEDIA/arrowRightDown.png" alt="Arrow">
          </div>
          <div id="topRightWhyUs">
            <img src="MEDIA/howItWorks.jpg" class="desktopImage" alt="how it works image">
            <img src="MEDIA/howItWorksMobile.jpg" class="mobileImage" alt="how it works image">
          </div>

          <!-- START Desktop Version MiddlePartWhyUs -->

          <div id="middleLeftWhyUs" class="desktopImage">
            <img src="MEDIA/tailoredDesign.jpg" alt="Tailored design">
          </div>
          <div id="middleRightWhyUs" class="desktopImage">
            <h2>Bespoke designs</h2>
            <h4>Our websites are created just for you</h4>
            <p>Unlike many cheaper based agencies, none of our designs are bought templates (although we can provide them if needed). We will talk you through the whole process, advising and discussing your exact needs so that when we come to creating your design - whether it’s a website, logo, banners, animated videos, flyers or brochures - you will receive a hand-crafted tailor-made design that will ‘Wow’ your audience and be the envy of your competitors.
There are so many benefits to having a bespoke design; from getting key information to your audience whilst maintaining interest, to helping customers navigate and browse the right information to suit them. Get in touch today to see how we can help. You can email us at <strong>enquiry@ocip-group.com</strong> or you can call us on <strong>01296 340890</strong>.</p>
            <img src="MEDIA/arrowLeftDown.png" alt="Arrow Left Down">
            <a href="all-galleries.php" alt="Ocip-Group our work"><div id="ourWorkButton"><p>Our Work</p></div></a>
          </div>

          <!-- END Desktop Version MiddlePartWhyUs -->

          <!-- START Mobile Version MiddlePartWhyUs-->

          <div id="middleLeftWhyUs" class="mobileImage">
            <h2>Bespoke designs</h2>
            <h4>Our websites are created just for you</h4>
            <p>Unlike many cheaper based agencies, none of our designs are bought templates (although we can provide them if needed). We will talk you through the whole process, advising and discussing your exact needs so that when we come to creating your design - whether it’s a website, logo, banners, animated videos, flyers or brochures - you will receive a hand-crafted tailor-made design that will ‘Wow’ your audience and be the envy of your competitors.
There are so many benefits to having a bespoke design; from getting key information to your audience whilst maintaining interest, to helping customers navigate and browse the right information to suit them. Get in touch today to see how we can help. You can email us at <strong>enquiry@ocip-group.com</strong> or you can call us on <strong>01296 340890</strong>.</p>
          </div>
          <div id="middleRightWhyUs" class="mobileImage">
            <img src="MEDIA/tailoredDesign.jpg" alt="Tailored design">
            <a href="all-galleries.php" alt="Ocip-Group our work"><div id="ourWorkButton"><p>Our Work</p></div></a>
          </div>

          <!-- END Mobile Version MiddlePartWhyUs-->

          <div id="bottomLeftWhyUs">
            <h2>Built to perfection</h2>
            <h4>Our websites use the lastest technology</h4>
            <p>If you’re a start-up business you may have several jobs such as logo design, business cards and website to deal with. This is no problem for us as here at OCIP we love working with multi-faceted projects. We can offer you bigger discounts for larger volume of work, helping with your budget and saving you time.
Have look at our rates section and you will see that we are offering some amazing discounts. So if you’re a start-up business we would love to hear from you. You can email us at <strong>enquiry@ocip-group.com</strong> or you can call us on <strong>01296 340890.</strong></p>
              <a href="#" alt="Internal link to the contact form"><div id="enquireWhyUsButton"><p>Enquire now</p></div></a>
          </div>
          <div id="bottomRightWhyUs" class="desktopImage">
            <img src="MEDIA/tablet.jpg" alt="Tablet">
          </div>
        </div>
      </div>




<!------------------ RECENT FEEDBACK - FROM HERE ------------->
      <?php require_once('recent-feedback.php'); ?>



<!-- --------------------- OUR RATES FROM HERE ------------------->
    <div id="holderForOurRates">
        <div id="innerHolderForOurRates">
        <div id="holderOurRatesLeftSideHeader">
           <div id="ourRatesHeaderHolder">
                <h2>Our rates</h2>
                <p>Price list for services</p>
            </div>
            <div id="priceTag"></div>
                <p id="textUnderPriceTag">Here at OCIP, we thrive on big projects and that’s why we can offer some great discounts. The more you need, the greater the savings you can make. Listed below are just a few of our costs for the more popular services. If there is a service you require that you cannot see, please get in contact and we will provide a comprehensive quote, free of charge.</p>
                <p class="mobileImage"><br> <br>Due to the screen size your viewing on. We are unable to display our full price list. You can view our full price list by downloading our pricelist.pdf below.</p>
        </div>
          <a href="MEDIA/price.pdf" class="mobileImage" id="downloadButton" target="_blank"><p>Download</p></a>
        <div id="holderOurRatesRightSideHeader">
            <div id="firstPack" class="outerPackHolder">
                <div class="holderForStartedBusinessProPack">
                <h3>Starter</br>Pack</h3>
                <p><span class="circleInPacks">i</span> Perfect for beginners</p>
            </div>
            </div>
             <div id="businessPack" class="outerPackHolder">
                <div class="holderForStartedBusinessProPack">
                <h3>Business</br>Pack</h3>
                <p><span class="circleInPacks">i</span> For startup business</p>
            </div>
            </div>
             <div id="proPack" class="outerPackHolder">
                <div  class="holderForStartedBusinessProPack">
                <h3>Pro</br>Pack</h3>
                <p><span class="circleInPacks">i</span> For the web veterans</p>
            </div>
            </div>
        </div>
      </div>


     <div id="tableHolder">
        <table>
          <tr>
            <th id="firstColumn"><span id="thFirstRowTopText"><p>Our most popular services</p></span><span id="thFirstRowText"><p>if you cannot see a price listed below, get in touch</p></span></th>
             <th id="secondColumn"><span id="thFirstRowTopText"><p>Prices</p></span><span id="thFirstRowText" class="boldText"><p>Start from</p></span></th>
              <th id="thirdColumn"><span class="priceHeader"><p>£600.00</p></span><span class="moneySaving boldText"><p>Save From £400</p></span></th>
            <th id="fourthColumn"><span class="priceHeader"><p>£800.00</p></span><span class="moneySaving boldText"><p>Save From £650</p></span></th>
            <th id="fifthColumn"><span class="priceHeader"><p>£1000.00</p></span><span class="moneySaving boldText"><p>Save From £1200</p></span></th>
          </tr>
          <tr>
            <td>Responsive Mobile /Tablet Website Design &amp; Build</td>
            <td class="boldText">£250.00</td>
            <td><div class="tickInTableData"></div></td>
            <td><div class="tickInTableData"></div></td>
            <td><div class="tickInTableData"></div></td>
          </tr>
            <tr>
            <td>Wordpress Website Design &amp; Build (includes up to 5 pages)</td>
            <td class="boldText">£500.00</td>
            <td><div class="tickInTableData"></div></td>
            <td></td>
            <td></td>
          </tr>
            <tr>
            <td>Woocomerce Website Design &amp; Build (includes up to 10 pages)</td>
            <td class="boldText">£750.00</td>
            <td></td>
            <td><div class="tickInTableData"></div></td>
            <td></td>
          </tr>
            <tr>
            <td>E-commerce Website Design &amp; Build (custom build)</td>
            <td class="boldText">£1500.00</td>
            <td></td>
            <td></td>
            <td><div class="tickInTableData"></div></td>
          </tr>
            <tr>
            <td>Email Newsletter Design &amp; Build</td>
            <td class="boldText">£200.00</td>
            <td></td>
            <td></td>
            <td><div class="tickInTableData"></div></td>
          </tr>
            <tr>
            <td>Website Header Banner Design (up to 5)</td>
            <td class="boldText">£250.00</td>
            <td><div class="tickInTableData"></div></td>
            <td><div class="tickInTableData"></div></td>
            <td><div class="tickInTableData"></div></td>
          </tr>
            <tr>
            <td>Photo Re-Touch, Edit, Cut-Out, Manipulation for models, Products etc</td>
            <td class="boldText">£35.00 ph</td>
            <td></td>
            <td><div class="tickInTableData"></div></td>
            <td><div class="tickInTableData"></div></td>
          </tr>
            <tr>
            <td>Logo Design</td>
            <td class="boldText">£350.00</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
            <tr>
            <td>Business Card Design</td>
            <td class="boldText">£200.00</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
            <tr>
            <td>A4 Brochure Design &amp; Artwork, Press Ads etc</td>
            <td class="boldText">£250.00</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
            <tr>
            <td>Flyer Design</td>
            <td class="boldText">£200.00</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
            <tr>
            <td>Roller Banners</td>
            <td class="boldText">£250.00</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
            <tr id="lastRowOurRate">
            <td>Vehicle Custom Vinly Design (please get in contact to get a quote)</td>
            <td class="boldText">Please Call</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
    </div>

    <div id="holderForThreeSectionWithCircles">
        <div class="sectionWithCircle">
            <object>
                <embed src="MEDIA/guranteeIcon.svg" class="circleSatisfactionQuickPremium">
            </object>
            <div class="textNextToTheThreeCircles">
                <h5>WE OFFER A 100%</h5>
                <h6>SATISFACTION GUARANTEE</h6>
                <p>We pride ourselves on providing great work. As such, we will not rest until you are completely, 100% satisfied. What have you got to lose? Speak to us today to see how we can improve your online space.</p>
            </div>
        </div>
        <div id="middleSectionWithCircel" class="sectionWithCircle">
            <object>
                <embed src="MEDIA/turnaroundIcon.svg" class="circleSatisfactionQuickPremium">
            </object>
             <div class="textNextToTheThreeCircles">
                <h5>PROJECT NEEDING</h5>
                <h6>COMPLETION URGENTLY?</h6>
                <p>We understand those moments when you need some work doing ASAP. That’s why we offer a 24hr quick turnaround. Contact us for more details. Subject to additional charges and terms &amp; conditions apply.</p>
            </div>
        </div>
        <div class="sectionWithCircle">
            <object>
                <embed src="MEDIA/premiumServicesIcon.svg" class="circleSatisfactionQuickPremium">
            </object>
             <div class="textNextToTheThreeCircles">
                <h5>PREMIUM SERVICE</h5>
                <h6>AT A LOW COST RATE</h6>
                <p>No matter how big or small your project is, you can be sure that you will receive the same great, dedicated expertise across all of our services.</p>
            </div>
        </div>
    </div>
</div>

<!------------------------ OUR WORK GALLERY ------------------------->

<div id="holderForOurWorkTextAndGallery">
    <div id="holderForOurWorkText">
          <div id="leftSideWork">
              <h2>Our work</h2>
              <h4>See recent examples</h4>
            </div>

            <div id="rightSideWork">
              <p><span class="boldText">OCIP Group are specialist in web design and web development within the Aylesbury and Buckinghamshire area. Offering a friendly local service with over 10 years + experience.</span> We have some great examples of website design, print and development below. Scroll on the filters to see some of our recent work.</p>
            </div>
    </div>

    <ul id="ulForGalleryImageChanging">
         <li class="leftArrowForChangingTheGalleryImage">&#60;</li>
        <a href="all-galleries.php" alt="Link to OCIP gallery"><li class="listForChangingTheGalleryImage activeListGallery">All</li></a>
         <a href="ocip-print.php" alt="OCIP - Our Work Print"><li class="listForChangingTheGalleryImage">Print</li></a>
        <a href="ocip-digital.php" alt="OCIP - Our Work Digital"><li class="listForChangingTheGalleryImage">Digital</li></a>
        <a href="ocip-development.php" alt="OCIP - Development gallery"><li class="listForChangingTheGalleryImage">Development</li></a>
         <li class="rightArrowForChangingTheGalleryImage">&#62;</li>
    </ul>

    <div id="galleryHolder">
        <div id="leftGalleryDiv">
            <a href="ocip-development.php" alt="Packhotsdirect.com website redirect">
                <div id="topImageGallery">
                    <img class="imagesInLeftGallerClass" src="MEDIA/WorkGallery/packhotsImage.jpg" alt="Pack Hots Direct Image">
                    <div class="holderForTextOnImages">
                        <h2 class="textOnAnImageGallery">WEBSITE</h2>
                        <h6 class="websiteLinkGalleryText">Packhotsdirect.com</h6>
                    </div>
                </div>
            </a>
             <a href="ocip-digital.php" alt="Packhotsdirect.com website redirect">
                 <div id="bottomImageGallery">
                    <img class="imagesInLeftGallerClass" src="MEDIA/WorkGallery/brochureImage.jpg" alt="Brochure image OCIP">
                      <div class="holderForTextOnImages">
                          <h2 class="textOnAnImageGallery">BROCHURE</h2>
                          <h6 class="websiteLinkGalleryText">Packhotsdirect.com</h6>
                     </div>
                </div>
            </a>
        </div>
        <a href="ocip-print.php" alt="Buckshottubhire redirect link">
            <div id="rightGalleryDiv">
                <img id="rightImageGallery" src="MEDIA/WorkGallery/hottubeImage.jpg" alt="Bucks Hot Tube Hire Image">
                 <div class="holderForTextOnImages">
                     <h2 class="textOnAnImageGallery">BILLBOARD</h2>
                     <h6 class="websiteLinkGalleryText">Buckshottubhire.co.uk</h6>
                </div>
            </div>
        </a>
    </div>
</div>

    <!-------------------- LOGOS COURSEL SLIDER FROM HERE ------------->
    <?php require_once('accreditation-slider.php'); ?>



    <!----------------- WHERE ARE WE - FROM HERE --------->
    <?php require_once('./whereAreWe.php'); ?>



    <!----------------- CONTACT US - FROM HERE ---------------->
    <?php include('contact-us.php'); ?>


   <!----------------- FOOTER FROM HERE DESKTOP UNTIL 800PX ---------------->
    <?php require_once('footer.php'); ?>



    <!------------- Google Maps JavaScript ------------->
    <script src="JS/googleMapsMainPage.js" type="text/javascript"></script>

   <!------------- SCRIPTS FROM HERE ---------------->
    <?php include 'scripts.php'; ?>

  </body>

</html>
