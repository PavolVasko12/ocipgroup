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
    <ol class="carousel-indicators">
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
                  <div id="watchVideoGarySlideButton"><p>Contact us</p></div>
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
                  <div id="watchVideoGarySlideButton"><p>Contact us</p></div>
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
      <div id="wAwButton"><p>Get in touch</p></div>
      <object>
        <embed id ="wAwArrowDown" src="MEDIA/arrowDown.svg">
      </object>
    </div>
  </div>



      <!-- --------------- LET's GET STARTED - FROM HERE ------- -->
      <div id="letsGetStartedHolder">
            <div id="letsGetStartedHolderInner">
                <h2>Let's get started</h2>
                <h4>Choose from the following services</h4>

                    <div id="firstDivInsideThreeDivs" class="threeDivsInsideLetsGetStarted">
                        <div class="circleForThreeDivs"></div>
                        <div class="textNextToCircle"><p><span class="circleAroundNumber">1</span> &nbsp; . Print</p></div>
                        <object>
                            <embed class="printerIcon" src="MEDIA/printerIcon.svg">
                        </object>
                        <div class="textInsideTheThreeDivs"><p>Make an impression with print that ticks all the boxes when it comes to quality, fantastic design and attention to detail. From original creative artwork through to printed brochures and flyers, we have it covered, using the latest technology to promote innovation. Our aim is to produce expertly crafted products, customised to suit your every need. We link traditional with digital seamlessly, bringing them together to produce outstanding results.</p></div>
                        <div id="buttonForPrint" class="buttonFindOutMoreInThreeDivs"><p>Find out more</p></div>


                    </div>
                    <div id="secondDivInsideThreeDivs" class="threeDivsInsideLetsGetStarted">
                          <div class="circleForThreeDivs"></div>
                         <div class="textNextToCircle"><p><span class="circleAroundNumber">2</span> &nbsp; . Digital</p></div>
                         <object>
                            <embed class="printerIcon" id="brushIcon" src="MEDIA/digitalsIcon.svg">
                        </object>
                        <div class="textInsideTheThreeDivs"><p>We do digital well and in every possible way. Whether you need images adjusted or websites built, we have our finger on the pulse. Our websites are responsive and our online services substantial and intelligent. From full e-commerce through to social media campaigns, whatever you need, we produce it. Clever SEO ensures that you get noticed and that traffic flows one way; towards you.</p></div>
                         <div id="buttonForDigital" class="buttonFindOutMoreInThreeDivs"><p>Find out more</p></div>
                    </div>
                    <div id="thirdDivInsideThreeDivs" class="threeDivsInsideLetsGetStarted">
                          <div class="circleForThreeDivs"></div>
                         <div class="textNextToCircle"><p><span class="circleAroundNumber">3</span> &nbsp; . Development</p></div>
                         <object>
                            <embed class="printerIcon" src="MEDIA/developmentIcon.svg">
                        </object>
                        <div class="textInsideTheThreeDivs"><p>Website development is a fine art and one that only works well when it is done correctly. From our team of committed and passionate developers, you will see your designs and ideas brought to life with websites that are fully responsive, mobile friendly and created to suit your market. Your success is ours which is why we go all out to turn awesome ideas into reality.</p></div>
                         <div id="buttonForDevelopment" class="buttonFindOutMoreInThreeDivs"><p>Find out more</p></div>
                    </div>
            </div>
      </div>



      <!-- ------ THREE DIV, SHOWS ON CLICK, ONE BY ONE, SEE JS ---------- -->

      <div id="hiddenDivForGetStarted">
          <div id="printHiddenDivForGetStarted">
            <div id="innerHolderForHidden">
                <div id="twoThirdsOfTheInnerHolder">
                    <h2>Print</h2>
                    <h4>Service list</h4>
                    <p>From artworking to printed brochures, we can help. We can guide you through every step of the way. Whether its business cards or door drop flyers we can accommodate for all. Get in touch to start your print project. Email us at <b>enquiry@ocip-group.com</b> or you can call us on <b>01296 340890</b>. We would love to hear from you.</p>
                    <ul class="WhereAreWeAndPrintDevDigitalUl">
                        <li class="listInHidenGetStarted">Business Card Design</li>
                        <li class="listInHidenGetStarted">A4 Brochure Design &amp; Artwork, Press Ads etc</li>
                        <li class="listInHidenGetStarted">Flyer Design</li>
                        <li class="listInHidenGetStarted">Roller Banners</li>
                        <li class="listInHidenGetStarted">Vehicle Custom Vinly Design</li>
                        <li class="listInHidenGetStarted">Packaging Design</li>
                        <li class="listInHidenGetStarted">Stationary Design</li>
                        <li class="listInHidenGetStarted">Exhibition Display Stands</li>
                        <li class="listInHidenGetStarted">Research</li>
                        <li class="listInHidenGetStarted">Book/Magazine Front Cover </li>
                        <li class="listInHidenGetStarted">Wobblers POS</li>
                        <li class="listInHidenGetStarted">Retail Display Stands</li>
                        <li class="listInHidenGetStarted">Display Boards</li>
                    </ul>
                <div class="buttonContactUsHiddenDiv"><p>Contact Us</p></div>
                </div>
                <div id="oneThirdOfTheInnerHolder">
                        <div class="closeHiddenDivButton">
                            <span id="x">X&nbsp;&nbsp;&nbsp;CLOSE</span>

                        </div>
                     <object>
                            <embed class="pencilIcon" src="MEDIA/pencilIcon.svg">
                    </object>
                </div>
           </div>
      </div>
       <div id="digitalHiddenDivForGetStarted">
            <div id="innerHolderForHidden">
                <div id="twoThirdsOfTheInnerHolder">
                    <h2>Digital</h2>
                    <h4>Our service list</h4>
                    <p>From website design to photo manipulation. We are here to help. How your website looks is important! But design is not just to look pretty. Underneath this exterior lies a highly detailed plan for your user experience. Everything has a purpose, a reason to help direct your customers to where you want them to go.</p>
                    <ul class="WhereAreWeAndPrintDevDigitalUl">
                        <li class="listInHidenGetStarted">Logo</li>
                        <li class="listInHidenGetStarted">Website Design</li>
                        <li class="listInHidenGetStarted">Landing Page Concepts</li>
                        <li class="listInHidenGetStarted">2D Animations</li>
                        <li class="listInHidenGetStarted">Photo Editing, Re-Touch &amp; Manipulation</li>
                        <li class="listInHidenGetStarted">Advertising Web Banners</li>
                        <li class="listInHidenGetStarted">Website Header Graphic Designs</li>
                        <li class="listInHidenGetStarted">Email Newsletters</li>
                        <li class="listInHidenGetStarted">Social Media Designs</li>
                        <li class="listInHidenGetStarted">Illustrations</li>
                        <li class="listInHidenGetStarted">Brand Guidelines</li>
                        <li class="listInHidenGetStarted">Retail Display Stands</li>
                        <li class="listInHidenGetStarted">Display Boards</li>
                        <li class="listInHidenGetStarted">UI/UX R&amp;D</li>
                    </ul>
                <div class="buttonContactUsHiddenDiv"><p>Contact Us</p></div>
                </div>
                <div id="oneThirdOfTheInnerHolder">
                        <div class="closeHiddenDivButton">
                            <span id="x">X&nbsp;&nbsp;&nbsp;CLOSE</span>

                        </div>
                     <object>
                            <embed class="pencilIcon" src="MEDIA/monitorIcon.svg">
                    </object>
                </div>
           </div>
      </div>


       <div id="developmentHiddenDivForGetStarted">

            <div id="innerHolderForHidden">
                <div id="twoThirdsOfTheInnerHolder">
                    <h2>Development</h2>
                    <h4>Complete service list we offer</h4>
                    <p>With any good website, a well built one will be key to success, utilising semantic HTML and possessing fast load times. Our small team of developers (who poses a multitude of skill set) will ensure to bring your design to function. Your responsive website will be cross browser supportive, mobile &amp; tablet friendly &amp; Seo compliant.</p>
                    <ul class="WhereAreWeAndPrintDevDigitalUl">
                        <li class="listInHidenGetStarted">HTML, CSS, JavaScript, JQuery</li>
                        <li class="listInHidenGetStarted">PHP, ASP.Net</li>
                        <li class="listInHidenGetStarted">Wordpress, Umbraco CMS</li>
                        <li class="listInHidenGetStarted">Woocommerce</li>
                        <li class="listInHidenGetStarted">Ecommerce</li>
                        <li class="listInHidenGetStarted">Responsive Website</li>
                        <li class="listInHidenGetStarted">Mobile &amp; Tablet Responsive</li>
                        <li class="listInHidenGetStarted">W3C Complience</li>
                        <li class="listInHidenGetStarted">SEO</li>
                    </ul>
                <div class="buttonContactUsHiddenDiv"><p>Contact Us</p></div>
                </div>
                <div id="oneThirdOfTheInnerHolder">
                        <div class="closeHiddenDivButton">
                            <span id="x">X&nbsp;&nbsp;&nbsp;CLOSE</span>

                        </div>
                     <object>
                            <embed id="keyboardPencilIcon" class="pencilIcon" src="MEDIA/keyboardIcon.svg">
                    </object>
                </div>
           </div>
      </div>
    </div>


      <!-- --------------- OUR PROCESS - FROM HERE ------- -->
      <div id="ourProcessHolder">
        <div id="contentBoxProcess">
          <div id="topPartProcess">
            <div id="leftSideProcess">
              <h2>Our Process</h2>
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
            <div id="enquireNowButton"><p>Enquire Now</p></div>
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
            <div id="getInTouchButton"><p>Get in touch</p></div>
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
            <div id="ourWorkButton"><p>Our Work</p></div>
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
            <div id="ourWorkButton"><p>Our Work</p></div>
          </div>

          <!-- END Mobile Version MiddlePartWhyUs-->

          <div id="bottomLeftWhyUs">
            <h2>Build to perfection</h2>
            <h4>Our websites use the lastest technology</h4>
            <p>If you’re a start-up business you may have several jobs such as logo design, business cards and website to deal with. This is no problem for us as here at OCIP we love working with multi-faceted projects. We can offer you bigger discounts for larger volume of work, helping with your budget and saving you time.
Have look at our rates section and you will see that we are offering some amazing discounts. So if you’re a start-up business we would love to hear from you. You can email us at <strong>enquiry@ocip-group.com</strong> or you can call us on <strong>01296 340890.</strong></p>
            <div id="enquireWhyUsButton"><p>Enquire now</p></div>
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
                <p>Here at OCIP, we thrive on big projects and that’s why we can offer some great discounts. The more you need, the greater the savings you can make. Listed below are just a few of our costs for the more popular services. If there is a service you require that you cannot see, please get in contact and we will provide a comprehensive quote, free of charge.</p>
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
             <th id="secondColumn"><span id="thFirstRowTopText"><p>Prices</p></span><span id="thFirstRowText"><p>Start from</p></span></th>
              <th id="thirdColumn"><span class="priceHeader"><p>£600.00</p></span><span class="moneySaving"><p>Save From £400</p></span></th>
            <th id="fourthColumn"><span class="priceHeader"><p>£800.00</p></span><span class="moneySaving"><p>Save From £650</p></span></th>
            <th id="fifthColumn"><span class="priceHeader"><p>£1000.00</p></span><span class="moneySaving"><p>Save From £1200</p></span></th>
          </tr>
          <tr>
            <td>Responsive Mobile /Tablet Website Design &amp; Build</td>
            <td>£250.00</td>
            <td><div class="tickInTableData"></div></td>
            <td><div class="tickInTableData"></div></td>
            <td><div class="tickInTableData"></div></td>
          </tr>
            <tr>
            <td>Wordpress Website Design &amp; Build (includes up to 5 pages)</td>
            <td>£500.00</td>
            <td><div class="tickInTableData"></div></td>
            <td></td>
            <td></td>
          </tr>
            <tr>
            <td>Woocomerce Website Design &amp; Build (includes up to 10 pages)</td>
            <td>£750.00</td>
            <td></td>
            <td><div class="tickInTableData"></div></td>
            <td></td>
          </tr>
            <tr>
            <td>E-commerce Website Design &amp; Build (custom build)</td>
            <td>£1500.00</td>
            <td></td>
            <td></td>
            <td><div class="tickInTableData"></div></td>
          </tr>
            <tr>
            <td>Email Newsletter Design &amp; Build</td>
            <td>£200.00</td>
            <td></td>
            <td></td>
            <td><div class="tickInTableData"></div></td>
          </tr>
            <tr>
            <td>Website Header Banner Design (up to 5)</td>
            <td>£250.00</td>
            <td><div class="tickInTableData"></div></td>
            <td><div class="tickInTableData"></div></td>
            <td><div class="tickInTableData"></div></td>
          </tr>
            <tr>
            <td>Photo Re-Touch, Edit, Cut-Out, Manipulation for models, Products etc</td>
            <td>£35.00 ph</td>
            <td><div class="tickInTableData"></div></td>
            <td><div class="tickInTableData"></div></td>
            <td><div class="tickInTableData"></div></td>
          </tr>
            <tr>
            <td>Logo Design</td>
            <td>£350.00</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
            <tr>
            <td>Business Card Design</td>
            <td>£200.00</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
            <tr>
            <td>A4 Brochure Design &amp; Artwork, Press Ads etc</td>
            <td>£250.00</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
            <tr>
            <td>Flyer Design</td>
            <td>£200.00</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
            <tr>
            <td>Roller Banners</td>
            <td>£250.00</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
            <tr>
            <td>Vehicle Custom Vinly Design (please get in contact to get a quote)</td>
            <td>Please Call</td>
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
              <h2>Our Work</h2>
              <h4>See recent examples</h4>
            </div>

            <div id="rightSideWork">
              <p>OCIP Group are specialist in web design and web development within the Aylesbury and Buckinghamshire area. Offering a friendly local service with over 10 years + experience. We have some great examples of website design, print and development below. Scroll on the filters to see some of our recent work.</p>
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



      <!----------------- WHERE ARE WE - FROM HERE --------->
        <?php require_once('./whereAreWe.php'); ?>



    <!----------------- CONTACT US - FROM HERE ---------------->
       <?php include('contact-us.php'); ?>


   <!----------------- FOOTER FROM HERE DESKTOP UNTIL 800PX ---------------->
    <?php require_once('footer.php'); ?>


   <!------------- SCRIPTS FROM HERE ---------------->
    <?php require_once('scripts.php'); ?>

  </body>

</html>
