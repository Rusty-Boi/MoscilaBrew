/* 
    redirect to link
*/
function redirectToLink(url, value) {
    var urlWithParam = url + '?value=' + encodeURIComponent(value);
    window.location.href = urlWithParam;

    location.href = "{{ route('order.add', $item['coffee_id']) }}"
}

/* 
    Order input
*/
function orderInput(e, val){
    coffee_id = e.value;
    if (val == 'item'){
        // jika checkbutton di check
        if ($(e).is(':checked')) {
            location.href = "/"+e.value+"/addToOrderList";
        }
        // jika checkbutton di check
        else {
            location.href = "/"+e.value+"/removeItemOrderList";
        }
    }else{
        // jika checkbutton di check
        if ($(e).is(':checked')) {
            location.href = "/"+e.value+"/addItemsToOrderList";
        }
        // jika checkbutton di check
        else {
            location.href = "/"+e.value+"/removeItemsOrderList";
        }
    }
}

/* 
    generate currency
*/
function generateIdr(amount) {
    var formatter = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR'
    });
        
    // console.log(formatter.format(amount));    
    alert('hehe')
}

// Tooltip
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

/* 
    confirmain custom coffee blend
*/

$(document).ready(function() {
    $('body.confirmationBuyCoffeeBlendPage .percentage-group').each(function() {
        var percentageText = $(this).find('.percentage-text').text();
        var percentageValue = parseFloat(percentageText);
        var percentageBar = $(this).find('.percentage-bar');

        percentageBar.css('width', percentageValue + '%');

        if (percentageValue === 100) {
            percentageBar.addClass('rounded-end-pill');
        }
    });
});


/* 
 =================== 
 */

$('.plus-minus-sign .center .btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $(".plus-minus-sign .center input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.plus-minus-sign .center .input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.plus-minus-sign .center .input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".plus-minus-sign .center .btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".plus-minus-sign .center .btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".plus-minus-sign .center .input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });


/* 
    reviews bar bar on PRODUCT PAGE
*/
let reviews_count = 200;
let e = $(".rating-progress_bar");

e.each(function () { 
    $(this).find('.progress-bar').css("width", $(this).find('.progress-bar').attr("aria-valuenow") / reviews_count * 100 + '%');
 })


/* 
 Coffee Blend Page 
*/
function getRatioBlend(sliders) {
    var blend_ratio = 0;
    $(sliders).each(function (index, element) {
        // element == this
        blend_ratio += parseInt($(element).find('p').html());
    });

    return blend_ratio;
}

$(document).ready(function () {
    var bodyCoffeeBlend = $('body.coffeeBlendPage');
    // var value = bodyCoffeeBlend.find('input#primarySlider').attr('value')*10 + "%";

    // $("p#primarySliderText").html(value);

    // Multiple Elements:
    var sliders = document.querySelectorAll('body.coffeeBlendPage .slider');
    var sliders_ratio = document.querySelectorAll('body.coffeeBlendPage .sliderRatio');
    
    var blend_ratio = 0;
    $(sliders).each(function (index, element) {
        // element == this
        // munculkan range value slider
        $(element).find('p').html($(element).find('input').attr('value'));
        $(sliders_ratio[index]).html($(element).find('input').attr('value'));
       
        $(element).find('input').on('input', function() {
            var value = $(this).val();
            $(element).find('p').html(value);
            $(sliders_ratio[index]).html(value);
            
            var ratio_blend = getRatioBlend(sliders);
            // memastikan bahwa base ratio lebih tinggi dari primary ratio
            var base_ratio = parseInt($(sliders[0]).find('p').html());
            var primary_ratio = parseInt($(sliders[1]).find('p').html());
            var secondary_ratio = parseInt($(sliders[2]).find('p').html());
            if (ratio_blend > 10) {
                $("body.coffeeBlendPage div.ratio_sum_status").html('The total ratio cannot exceed 10!');
                $("body.coffeeBlendPage div.ratio_sum_status").removeClass('d-none');
                $("body.coffeeBlendPage button[type='submit']").addClass('disabled');
                
            }
            // memastikan bahwa base ratio lebih tinggi dari primary ratio
            else if (base_ratio < primary_ratio){
                $("body.coffeeBlendPage div.ratio_sum_status").html('The base ratio cannot be less than the primary ratio!');
                $("body.coffeeBlendPage div.ratio_sum_status").removeClass('d-none');
                $("body.coffeeBlendPage button[type='submit']").addClass('disabled');
            }
            // memastikan bahwa base ratio lebih tinggi dari secondary ratio
            else if (base_ratio < secondary_ratio){
                $("body.coffeeBlendPage div.ratio_sum_status").html('The base ratio cannot be less than the secondary ratio!');
                $("body.coffeeBlendPage div.ratio_sum_status").removeClass('d-none');
                $("body.coffeeBlendPage button[type='submit']").addClass('disabled');
            }
            // memastikan jumlah blend ratio harus 10
            else if (ratio_blend < 10){
                $("body.coffeeBlendPage div.ratio_sum_status").html('The total ratio must be 10!');
                $("body.coffeeBlendPage div.ratio_sum_status").removeClass('d-none');
                $("body.coffeeBlendPage button[type='submit']").addClass('disabled');
            }
            else{
                $("body.coffeeBlendPage div.ratio_sum_status").addClass('d-none');
                $("body.coffeeBlendPage button[type='submit']").removeClass('disabled');
            }
        });     
    });

    getRatioBlend(sliders);
});