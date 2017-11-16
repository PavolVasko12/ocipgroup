


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
    
    $("#priceNavigationLink").on('click', function(){
        console.log("PRICE CLICK");
       $('html,body').animate({
           scrollTop: $('#holderForOurRates').offset().top
       },1000);
    });
    
      $("#servicesNavListId").on('click', function(){
        console.log("PRICE CLICK");
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
     
});