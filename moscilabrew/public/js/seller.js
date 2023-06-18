/* 
=== add product page ===
*/

// default process link
$(document).ready(function () {
    // if () {
        
    // }
    // $(".process-link-eclipse[href = '#prod-desc']").click()

    var process_link_active = $('.process-link.active');
    var href = $(process_link_active).find('a.process-link-eclipse').attr('href');

    $(href).removeClass('d-none');

});

// process link di klik 
$(".process-link-eclipse").click(function (e) { 
    e.preventDefault();

    if ($(".process-link.active").length != 0) {
        let process_link_active = $(".process-link.active");
        let href_active = $(process_link_active).find('.process-link-eclipse').attr('href');      
        $(href_active).addClass("d-none");
        $(process_link_active).removeClass("active");
    }

    let href_clicked = $(this).attr("href");
    let process_link_clicked = $(this).parent();
    
    $(process_link_clicked).addClass('active');
    $(href_clicked).removeClass("d-none");
});

// ketika button next ditekan | add product page
$("section.add-product-inputs button[aria-btn-name='next']").click(function (e) { 
    // e.preventDefault();
    
    // $(".process-link-eclipse[href='"+$(this).attr('value')+"'").click()
});