<?php 

if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):

if(isset($_POST['firstName'])) { $name = $_POST['firstName'];}
if(isset($_POST['email'])) { $email = $_POST['email'];}
if(isset($_POST['messageBox'])) { $enquiry = $_POST['messageBox'];}
$formErrors = false;
$headers = 'From: enquiry@ocip-group.com' . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$to = "pavol.vasko.sk@gmail.com";
$subject = "OCIP - Online form";
$message = $enquiry;

    if($name === '') :
        $nameRequired = '<div class="errorMessage">Name is required</div>';
        $formErrors = true;
        endif;

    if($enquiry === '') :
        $enquiryRequired = '<div class="errorMessage">Enquiry is required</div>';
        $formErrors = true;
        endif;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
        $emailInvalid = '<div class="errorMessage">Invalid email address</div>';
        $formErrors = true;
        endif;
    
    if(!($formErrors)) :
     
    
        if(mail('pavol.vasko.sk@gmail.com', $subject, $message, $headers)):
            $successMsg = "Message send successfully!";
            else:
            $errorMsg = "Error sending message!";
      endif;
    endif;
endif;
//form submitted
?>