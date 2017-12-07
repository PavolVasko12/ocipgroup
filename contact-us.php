 <div id="contactUsHolder">
          <object>
            <embed id="topLineContact" src="MEDIA/topLineContactUs.svg">
          </object>
          <div id="contactUsContentHolder">
            <div id="contactUsLeftBlock">
              <h2>CONTACT DETAILS</h2>
              <p>We are based in Aylesbury, but provide website design and internet marketing services to the surrounding towns that include: Marlow, Slough, High Wycombe, Bourne End, Oxford, Luton &amp; Watford. <span class="boldText">Opening Hours:</span> Mon-Friday, 9am-5:30pm.</p>
              <p style="font-size:15px;"><span class="boldText">a: </span> Aylesbury, <span class="boldText">HP19 9LS</span> <br>
                <span class="boldText">e: </span> enquiry@ocip-group.com <br>
                <span class="boldText">t: </span>  01296 340890</p>
                <div id="contactUsSocialBlock">
                  <object>
                    <embed class="contactUsSocialMedia" src="MEDIA/facebookLogoBlack.svg">
                  </object>
                  <object>
                    <embed class="contactUsSocialMedia" src="MEDIA/twitterIconBlack.svg">
                  </object>
                  <object>
                    <embed class="contactUsSocialMedia" src="MEDIA/googleIconBlack.svg">
                  </object>
                  <object>
                    <embed class="contactUsSocialMedia" src="MEDIA/youtubeIcon.svg">
                  </object>
                  <object>
                    <embed class="contactUsSocialMedia" src="MEDIA/vimeoIcon.svg">
                  </object>
                  <object>
                    <embed class="contactUsSocialMedia" src="MEDIA/linkedinIcon.svg">
                  </object>
                </div>
            </div>
            <div id="contactUsRightBlock">
              <div id="haveAProjectHolder"><h2>HAVE A PROJECT?<h2></div>
              <p id="contactMessage">To discuss your website design or print project, however large or small, submit a mesage using the ‘Enquiry’ form below. Alternatively, you can email us at <span class="boldText">enquiry@ocip-group.com</span> or phone us on <span class="boldText">01296 340890</span>.</p>
              <p id="requiredFieldsMessage" class="boldText"><strong>Please check required fields</strong></p>

            <!--------- CONTACT FORM FROM HERE ---->
              <p id="successFormMessage">Thank you for taking the time to message us. We will be in contact shortly</p>
              <?php if (isset($successMsg)) { echo '<p id="successFormMessagePHP">', $successMsg , '</p>'; } ?>
              <?php if (isset($errorMsg)) { echo '<div id="errorMessage"><p>', $errorMsg , '</p></div>'; } ?>
              <?php if (isset($emailInvalid)) { echo '<div id="requiredFieldsMessage" class="boldText">Please check required fields</div>'; } ?>
              <form id="formBoxes" name="theform" action="#formBoxes" method="POST" autocomplete="off">
                <div id="contactUsLeftBoxes">
                  <input type="text" class="contactUsInput" id="name" name="firstName" placeholder="Name: *">
                     <?php if (isset($nameRequired)) { echo $nameRequired; } ?>
                  <input type="text" class="contactUsInput" id="cname" name="companyName" placeholder="Company Name: ">
                  <input type="text" class="contactUsInput" id="email" name="email" placeholder="Email: *">
                     <?php if (isset($emailInvalid)) { echo $emailInvalid; } ?>
                </div>
                <div id="contactUsMiddleBoxes">
                     <?php if (isset($enquiryRequired)) { echo $enquiryRequired; } ?>
                  <textarea id="messageContactUs" name="messageBox" placeholder="Enquiry: *"></textarea>
                </div>
                <div id="contactUsRightBoxes">
                  <div class="contactUsInput" id="topEqua">198 + 9 =</div>
                  <input type="text" class="contactUsInput" required id="eqbox" name="equationBox" placeholder="Type equation here: *">
                    <input id="buttonContactUsHome" name="action" type="submit" value="Send">
                </div>
              </form>
              <p style="text-align:center;"><strong>Please note: all fields marked * are required</strong></p>
            </div>
          </div>
        </div>
