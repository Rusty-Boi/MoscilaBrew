/* 
=== add product page ===
*/

// default process link
$(document).ready(function () {
    $(".process-link-eclipse[href = '#prod-desc']").click()
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
$("section.add-product-inputs button[name = 'next']").click(function (e) { 
    e.preventDefault();
    
    $(".process-link-eclipse[href='"+$(this).attr('value')+"'").click()
});