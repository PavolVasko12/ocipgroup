<?php 

if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):

if(isset($_POST['firstName'])) { $name = $_POST['firstName'];}
if(isset($_POST['email'])) { $email = $_POST['email'];}
if(isset($_POST['messageBox'])) { $enquiry = $_POST['messageBox'];}
if(isset($_POST['messageBox'])) { $companyName = $_POST['companyName'];}
$formErrors = false;
$headers = 'From: enquiry@ocip-group.com' . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$to = "pavol.vasko.sk@gmail.com";
$subject = "OCIP - Online form";
$message = "Name: " . $name . "\n\nCompany Name: " . $companyName . "\n\nEnquiry: \n" . $enquiry;

    if($name === '') :
        $nameRequired = '<div class="nameError">Name is required</div>';
        $formErrors = true;
        endif;

    if($enquiry === '') :
        $enquiryRequired = '<div class="enquiryError">Enquiry is required</div>';
        $formErrors = true;
        endif;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
        $emailInvalid = '<div class="emailError">Invalid email address</div>';
        $formErrors = true;
        endif;
    
    if(!($formErrors)) :
     
    
        if(mail('enquiry@ocip-group.com', $subject, $message, $headers)):
            $successMsg = "Thank you for taking the time to message us. We will be in contact shortly";
            else:
            $errorMsg = "Error sending message!";
      endif;
    endif;
endif;
//form submitted
?>