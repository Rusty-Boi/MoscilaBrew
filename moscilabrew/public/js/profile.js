$(document).ready(function () {
    $("a.menu_link").click(function (e) { 
        e.preventDefault();

        // e.addClass('active');
        // // jika ada menu yang active
        // var link_menu_active = $("a.menu_link:has(button.active)")
        // if (link_menu_active){

        // }
        // var id_active = link_menu_active.attr('href');            
        // $(id_active).removeClass('d-none');    


        content_id_active = $('a.menu_link:has("button.active")');
        content_id_clicked = $(this).attr('href');
        
        if (content_id_active) {
            content_id_active.find('button.active').removeClass('active');
            $(content_id_active.attr('href')).addClass('d-none');
        }

        $(this).find("button").addClass('active');
        $(content_id_clicked).removeClass('d-none');    
        
    });
});

