$(document).ready(function(){
    

    $(".item").css("height", $(window).height()+2);     

    function Resizefunction(){
         var height = window.innerHeight+2;
        $(".item").css("height", height);
    };
    
    window.addEventListener('resize', Resizefunction);
    
    
     
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