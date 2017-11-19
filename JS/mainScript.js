


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
         console.log("deve");
         $('#developmentHiddenDivForGetStarted, #hiddenDivForGetStarted').css('display', 'block');
        $('#digitalHiddenDivForGetStarted').css('display', 'none');
        $('#printHiddenDivForGetStarted').css('display', 'none');
    });
    
    $('.closeHiddenDivButton').on('click', function(){
        $('#printHiddenDivForGetStarted, #digitalHiddenDivForGetStarted, #developmentHiddenDivForGetStarted, #hiddenDivForGetStarted').css('display', 'none');
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
               $('div.nameError').remove();
               $(':input[type="submit"]').prop('disabled', false);
            }
        if(messageForm != "")
            {
               $('div.enquiryError').remove();
               $(':input[type="submit"]').prop('disabled', false);
            }
        if(result == resultFromForm )
            {
                 $(':input[type="submit"]').prop('disabled', false);
                 $('div.equationError').remove();
            }
         if(pattern.test(userInput))
            {
                 $(':input[type="submit"]').prop('disabled', false);
                 $('div.emailError').remove();
            } 
    });
     
    
    /*============ SUBMIT BUTTON ============ */
    
    $('#buttonContactUs').on('click', function(){
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
                $('#name').before('<div class="nameError">Fill the name</div>');
                 $(':input[type="submit"]').prop('disabled', true);
            }
        
        if(enquiry == "")
            {
                $('#messageContactUs').before('<div class="enquiryError">Fill the enquiry field</div>');
                $(':input[type="submit"]').prop('disabled', true);
            }

        
        if(result != resultFromForm)
            {
                 $('#eqbox').after('<div class="equationError">Incorrect equation</div>');
                 $(':input[type="submit"]').prop('disabled', true);
            }
        
        if(!pattern.test(userInput))
        {
                $('#email').after('<div class="emailError">Incorrect Email</div>');
                 $(':input[type="submit"]').prop('disabled', true);
        } 
        
        if(name != "" && enquiry != "")
        {
            if(result == resultFromForm && pattern.test(userInput))
                {
                    $(':input[type="submit"]').prop('disabled', false);
                }
        }
        
    });
    
    
    
    
    
});