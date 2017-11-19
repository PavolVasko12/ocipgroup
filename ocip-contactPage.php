<!DOCTYPE html>
<html lang="en">

<!-------------- HEAD FROM HERE --------------->
<?php require_once('head.php'); ?>

<body>
  <!------------------ NAVIGATION FROM HERE ------------------->
  <?php require_once('navigation.php'); ?>

  <!---------------- MAIN HEADER IMAGE/BANNER ---------------->
  <div id="contactHeaderImage">
      <div class="contactHeaderMainTextHolder">
          <h1><span class="contactBoldMainText">Contact</span> <span class="contactRegularMainText">us.</span></h1>
      </div>
  </div>

  <!------------------ CONTACT FORM FROM HERE ------------------->
  <div id="contactPageFormHolder">
    <div id="contactPageContentHolder">
      <h2>Get in touch</h2>
      <h4>Like to start your project?</h4>
      <p><span class="boldText">To make contact simply fill out enquiry form below, but you can also call us on 01296 340890</span> <br><br>
If you would like to enquire into a service we provide or have a question regarding a project you have. Don’t hesitate to get in contact. Simply fill out the enquiry form below and a member of our team will be in contact with you shorlty.
      </p>
      <form id="formBoxes">
        <div id="contactUsLeftBoxes">
          <input type="text" class="contactUsInputPL" id="name" name="firstname" placeholder="Name: * ">
          <input type="text" class="contactUsInputPL" id="cname" name="companyname" placeholder="Company Name: ">
          <input type="text" class="contactUsInputPL" id="email" name="email" placeholder="Email: * ">
        </div>
        <div id="contactUsMiddleBoxes">
          <textarea id="messageContactUsPL" name="messageBox" placeholder="Enquiry: * "></textarea>
        </div>
        <div id="contactUsRightBoxes">
          <div class="contactUsInputPL" id="topEqua">198 + 9 =</div>
          <input type="text" class="contactUsInputPL" id="eqbox" name="equationbox" placeholder="Type equation here: * ">
          <input id="buttonContactUsPL" type="submit" value="Send">
        </div>
      </form>
      <p style="text-align:center;"><strong>Please note: all fields marked * are required</strong></p>
      <div id="contactPageIconsHolder">
        <div class="contactPageIconBox">
          <object>
            <embed src="MEDIA/locationIcon.svg" class="contactPageIcon">
          </object>
          <p><span class="boldText">Address:</span><br>Aylesbury HP19 9LS</p>
        </div>
        <div class="contactPageIconBox">
          <object>
            <embed src="MEDIA/phoneIcon.svg" class="contactPageIcon">
          </object>
          <p><span class="boldText">Telephone:</span><br>01296 340890</p>
        </div>
        <div class="contactPageIconBox">
          <object>
            <embed src="MEDIA/mailIcon.svg" class="contactPageIcon">
          </object>
          <p><span class="boldText">Email:</span><br>enquiry@ocip-group.com</p>
        </div>
      </div>
    </div>
  </div>

  <!----------------- WHERE ARE WE PART HERE ------------------->
  <?php require_once('whereAreWe.php'); ?>

  <!----------------- CONTACT US - FROM HERE ---------------->
     <?php require_once('contact-usPageLink.php'); ?>


  <!------------- FOOTER FROM HERE DESKTOP UNTIL 800PX ------------->
     <?php require_once('footer.php'); ?>


  <!------------- SCRIPTS FROM HERE ---------------->
    <?php require_once('scripts.php'); ?>

</body>
</html>
