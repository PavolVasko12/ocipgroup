


$j(window).load(function() {
  $("#flexiselDemo3").flexisel({
        visibleItems: 4,
        itemsToScroll: 1,         
        autoPlay: {
            enable: true,
            interval: 5000,
            pauseOnHover: true
        }        
    });
});


$(document).ready(function(){
    /*=======================================
                 NAV MENU
    ========================================*/
    
    $('#burgerLogoHolder, #navTextInTheListPlusCloseIcon').on('click', function(){
        $('#navMenuOpoUpWindowId').toggleClass("navMenuPopUpWindowClosed");
        $('#burgerLogoHolder').toggleClass("burgerLogoHolderClassWhenCLicked");
        $('#triangleDownIcon').toggleClass("triangleDisplayWHenClicked");
    });
     
    /*=======================================
                SMOOTH SLIDER
    ========================================*/
    
    $("#priceNavigationLink, #priceFooterLink").on('click', function(){
       $('html,body').animate({
           scrollTop: $('#holderForOurRates').offset().top
       },1000);
    });
    
      $("#servicesNavListId, #servicesFooterListId").on('click', function(){
       $('html,body').animate({
           scrollTop: $('#letsGetStartedHolder').offset().top
       },1000);
    });
    
    /*=======================================
           MAKE THE SLIDER FULL HEIGHT
    ========================================*/
    if($(window).width() > 600)
        {
            $(".item").css("height", $(window).height()+2);     

            function Resizefunction(){
              var height = window.innerHeight+2;
                $(".item").css("height", height);
            };

            window.addEventListener('resize', Resizefunction);
        }
    
   
    
    /* ===========================================
                SCROLL TO ANCHOR ON CLICK
    ============================================ */
    
    $("#servicesNavListId").on('click', function(){
       $('html', 'body').animate({scrollTop: $("#letsGetStartedHolder").offset().top},1000);
    });   
    
    
     /*================================================
          PRINT, DIGITAL, DEVELOPMNET HIDDEN DIVS
    ===================================================*/
if($(window).width() > 600){
   $('#buttonForPrint').on('click', function(){
        console.log("print");
        $('#printHiddenDivForGetStarted, #hiddenDivForGetStarted').css('display', 'block');
       $('#digitalHiddenDivForGetStarted').css('display', 'none');
       $('#developmentHiddenDivForGetStarted').css('display', 'none');
   });
    
    $('#buttonForDigital').on('click', function(){
        console.log("digital");
         $('#digitalHiddenDivForGetStarted, #hiddenDivForGetStarted').css('display', 'block');
        $('#developmentHiddenDivForGetStarted').css('display', 'none');
        $('#printHiddenDivForGetStarted').css('display', 'none');
    });
    
    $('#buttonForDevelopment').on('click', function(){
         console.log("dev");
         $('#developmentHiddenDivForGetStarted, #hiddenDivForGetStarted').css('display', 'block');
        $('#digitalHiddenDivForGetStarted').css('display', 'none');
        $('#printHiddenDivForGetStarted').css('display', 'none');
    });
    
   
}
    else{
       $('#buttonForPrintPhone').on('click', function(){
            console.log("print phone");     
            $('#printHiddenDivForGetStartedPhone, #hiddenDivForGetStartedPrintPhone').css('display', 'block');
            $('#digitalHiddenDivForGetStartedPhone').css('display', 'none');
            $('#developmentHiddenDivForGetStartedPhone').css('display', 'none');
            $('#hiddenDivForGetStartedDigitalPhone, #hiddenDivForGetStartedDevelopmentPhone').css('disply','none');
       });
        
        $('#buttonForDigitalPhone').on('click', function(){
        console.log("digital phone");
         $('#digitalHiddenDivForGetStartedPhone, #hiddenDivForGetStartedDigitalPhone').css('display', 'block');
        $('#developmentHiddenDivForGetStartedPhone').css('display', 'none');
        $('#printHiddenDivForGetStartedPhone').css('display', 'none');
        $('#hiddenDivForGetStartedPrintPhone, #hiddenDivForGetStartedDevelopmentPhone').css('disply','none');
    });
         $('#buttonForDevelopmentPhone').on('click', function(){
         console.log("dev phone");
         $('#developmentHiddenDivForGetStartedPhone, #hiddenDivForGetStartedDevelopmentPhone').css('display', 'block');
        $('#digitalHiddenDivForGetStartedPhone').css('display', 'none');
        $('#printHiddenDivForGetStartedPhone').css('display', 'none');
        $('#hiddenDivForGetStartedPrintPhone, #hiddenDivForGetStartedDigitalPhone').css('disply','none');
        
    });
    }
   
    
    /*=======================================
                CLOSE SECTIONS BUTTON
    =======================================*/
     $('.closeHiddenDivButton').on('click', function(){
        $('#printHiddenDivForGetStarted, #digitalHiddenDivForGetStarted, #developmentHiddenDivForGetStarted, #hiddenDivForGetStarted, #hiddenDivForGetStartedPrintPhone, #hiddenDivForGetStartedDigitalPhone, #hiddenDivForGetStartedDevelopmentPhone').css('display', 'none');
    })
    
    /*================================================
                EQUATIONS FROM HERE
    ===================================================*/
    var result;
    
    var equation = function(){
       var firstNumber = Math.round((Math.random()*100));
       var secondNumber = Math.round((Math.random()*50));
       result = firstNumber + secondNumber;
        
        $('#topEqua').html(firstNumber + ' + ' + secondNumber );
    };
    
    equation();
    
    
    
    
    /*================================================
               VALIDATION FORM FROM HERE
    ===================================================*/
    
    
    $('#name,#messageContactUs,#eqbox,#email').on('input',function(){
        var nameFromForm = $('#name').val();
        var messageForm = $('#messageContactUs').val();
        var resultFromForm = $('#eqbox').val();
        var userInput = $('#email').val();
        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        if(nameFromForm != "")
            {
               //$('div.nameError').remove();
                $('#name').css('border', '2px solid black');
               $(':input[type="submit"]').prop('disabled', false);
            }
        if(messageForm != "")
            {
               //$('div.enquiryError').remove();
                $('#messageContactUs').css('border', '2px solid black');
               $(':input[type="submit"]').prop('disabled', false);
            }
        if(result == resultFromForm )
            {
                 $(':input[type="submit"]').prop('disabled', false);
                 $('#eqbox').css('border', '2px solid black');
                 //$('div.equationError').remove();
            }
         if(pattern.test(userInput))
            {
                 $(':input[type="submit"]').prop('disabled', false);
                 //$('div.emailError').remove();
                $('#email').css('border', '2px solid black');
            } 
    });
     
    
    /*============ SUBMIT BUTTON ============ */
    
    $('#buttonContactUs, #buttonContactUsHome').on('click', function(){
        $('div.enquiryError').remove();
        $('div.nameError').remove();
        $('div.equationError').remove();
        $('div.emailError').remove();
        var name = $('#name').val();
        var enquiry = $('#messageContactUs').val();
        var resultFromForm = $('#eqbox').val();
        var userInput = $('#email').val();
        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        if(name == "")
            {
                 $('#name').css('border', '2px solid white');
                 $(':input[type="submit"]').prop('disabled', true);
                 $('#name').css('display', 'block');
            }
        
        if(enquiry == "")
            {
                $('#messageContactUs').css('border', '2px solid white');
                //$('#messageContactUs').before('<div class="enquiryError">Fill the enquiry field</div>');
                $(':input[type="submit"]').prop('disabled', true);
                $('#requiredFieldsMessage').css('display', 'block');
            }

        
        if(result != resultFromForm)
            {
                 $('#eqbox').css('border', '2px solid white');
                 //$('#eqbox').after('<div class="equationError">Incorrect equation</div>');
                 $(':input[type="submit"]').prop('disabled', true);
                 $('#requiredFieldsMessage').css('display', 'block');
            }
        
        if(!pattern.test(userInput))
        {
                $('#email').css('border', '2px solid white');
                //$('#email').after('<div class="emailError">Incorrect Email</div>');
                 $(':input[type="submit"]').prop('disabled', true);
                 $('#requiredFieldsMessage').css('display', 'block');
        } 
        
        if(name != "" && enquiry != "")
        {
            if(result == resultFromForm && pattern.test(userInput))
                {
                    
                    $(':input[type="submit"]').prop('disabled', false);
                    $('#requiredFieldsMessage').css('display', 'none');
                }
        }
        
    });
    
    
    
    
    
});