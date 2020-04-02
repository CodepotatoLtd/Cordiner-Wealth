export default {
  init() {
    // JavaScript to be fired on all pages
      jQuery('#calcMortgage').click(function (e) {
          event.preventDefault();
          var amount = jQuery('#MortgageAmount').val();
          var rate = jQuery('#MortgageRate').val();
          var term = jQuery('#Term').val();

          //check amount is a float
          if (parseFloat(amount)){
              jQuery("#MortgageAmount").removeClass("error");
              jQuery('#MortgageAmount').removeClass('pulse animated');
          } else {
              jQuery('#MortgageAmount').addClass('pulse animated');
              jQuery("#MortgageAmount").addClass("error");
              return;
          }

          //check amount is a float
          if (parseFloat(rate)){
              jQuery("#MortgageRate").removeClass("error");
              jQuery('#MortgageRate').removeClass('pulse animated');
          }else{
              jQuery('#MortgageRate').addClass('pulse animated');
              jQuery("#MortgageRate").addClass("error");
              return;
          }

          //check amount is a float
          if (parseInt(term)) {
              jQuery("#Term").removeClass("error");
              jQuery('#Term').removeClass('pulse animated');
          } else {
              jQuery('#Term').addClass('pulse animated');
              jQuery("#Term").addClass("error");
              return;
          }

          //copy it so the maths works without to much hassle (refactor later)
          var P = parseFloat(amount);
          var r = parseFloat(rate);
          var y = parseFloat(term);

          var i = (r/100) / 12;
          var n = y * 12;//number of months

          var ipow = Math.pow(1+i,n);//=(1+i)^n
          var M = P * (i * ipow) / (ipow - 1);//monthly rate
          var interestOnly = P * (r/100) / 12;//interest only rate

          var finm = M.toFixed(2);
          var fini = interestOnly.toFixed(2);
          //hide the class

          jQuery('#mio').text(fini);
          jQuery('#mr').text(finm);
          jQuery('#calcscreen1').addClass('hide');
          jQuery('#calcscreen2').removeClass('hide');

      });

      jQuery('#closephase2').on('click', function(){
        jQuery('#calcscreen1').removeClass('hide');
        jQuery('#calcscreen2').addClass('hide');
      });

  },
  finalize() {
  },
};
