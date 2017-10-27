$(document).ready(function(){
   
   
   $('#buttonForPrint').on('click', function(){
        $('#printHiddenDivForGetStarted').css('display', 'block');
       $('#digitalHiddenDivForGetStarted').css('display', 'none');
       $('#developmentHiddenDivForGetStarted').css('display', 'none');
   });
    
    $('#buttonForDigital').on('click', function(){
         $('#digitalHiddenDivForGetStarted').css('display', 'block');
        $('#developmentHiddenDivForGetStarted').css('display', 'none');
        $('#printHiddenDivForGetStarted').css('display', 'none');
    });
    
    $('#buttonForDevelopment').on('click', function(){
         $('#developmentHiddenDivForGetStarted').css('display', 'block');
        $('#digitalHiddenDivForGetStarted').css('display', 'none');
        $('#printHiddenDivForGetStarted').css('display', 'none');
    });
    
    $('.closeHiddenDivButton').on('click', function(){
        $('#printHiddenDivForGetStarted, #digitalHiddenDivForGetStarted, #developmentHiddenDivForGetStarted').css('display', 'none');
    })
     
});