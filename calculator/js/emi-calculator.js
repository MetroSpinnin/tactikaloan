(function($) {

    $("#amount-slide").slider({
        range: "min",
        min: 5000,      // set minimun amount
        max: 2500000,   // set maximum amount
        value: 50000,   // set default amount value
        step: 1000,     // set amount step
        slide: function(event, ui) {
            $("#amount").text(ui.value);
            emicalculate();
        }
    });
    $("#amount").text($("#amount-slide").slider("value"));

    $("#duration-slide").slider({
        range: "min",
        min: 1,    // set minimun month
        max: 12,   // set maximum month
        step: 1,    // set month step
        value: 1,  // set default month value
        slide: function(event, ui) {
            $("#duration").text(ui.value);
            emicalculate();
        }
    });
    $("#duration").text($("#duration-slide").slider("value"));

    $("#intrest-slide").slider({
        range: "min",
        min: 4.50,      // set minimun rate of interest
        max: 4.50,     // set maximum rate of interest
        step: 0.01,     // set rate of interest step
        value: 3,      // set default rate of interest
        slide: function(event, ui) {
            $("#intrest").text(ui.value);
            emicalculate();
        }
    });
    $("#intrest").text($("#intrest-slide").slider("value"));

    emicalculate();
})(jQuery);

function emicalculate()
{
    var loanAmount =$("#amount").text();
    var numberOfMonths =$("#duration").text();
    var rateOfInterest=$("#intrest").text();
    var monthlyInterestRatio = (rateOfInterest/100)/12;
    var top = Math.pow((1+monthlyInterestRatio),numberOfMonths);
    var bottom = top -1;
    var sp = top / bottom;
    var emi = ((loanAmount * monthlyInterestRatio) * sp);
    var full = numberOfMonths * emi;
    var interest = full - loanAmount;
    var int_pge =  (interest / full) * 100;
    var emi_str = emi.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    var loanAmount_str = loanAmount.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    var full_str = full.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    var int_str = interest.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    $("#emi").html(emi_str);
    $("#tbl_emi").html(int_str);
    $("#tbl_la").html(full_str);
}