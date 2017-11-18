<!DOCTYPE html>
<html lang="en">
    
<!-------------- HEAD FROM HERE --------------->  
<?php require_once('head.php'); ?>
    
<!-------------- BODY FROM HERE ------------------>
<body> 
    
<!------------------ NAVIGATION FROM HERE ------------------->
<?php require_once('navigation.php'); ?>
 
    
<!------------------ HOLDER FOR 404  ------------------->

    <div id="holderForFourZeroFour">
        <div id="innerHolderFourZeroFour">
            <h1>404, page not found</h1>
            <h3>The page you’ve requested seems to be unavailable or non-exisitant.<h3>
            <h3>Please visit another page or click the button below to go back.</h3>
            <a href="index.php" alt="OcipGroup - Home Page"><div id="buttonFourZeroFour"><p>Back home</p></div></a>
        </div>
    </div>
    
<!----------------- CONTACT US - FROM HERE ---------------->
   <?php require_once('contact-us.php'); ?>


<!------------- FOOTER FROM HERE DESKTOP UNTIL 800PX ------------->
   <?php require_once('footer.php'); ?>


<!------------- SCRIPTS FROM HERE ---------------->
<?php require_once('scripts.php'); ?>
    
</body>
</html>