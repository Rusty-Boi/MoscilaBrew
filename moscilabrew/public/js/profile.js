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

/* 
    Personal Details | profile page
*/

function editProfile(element) {
    $(element).find('button.edit-btn').on('click', function () {
        var original_e = $(element).html();
        var input = $(element).find('input, textarea')
        input.removeAttr('disabled');
        input.focus();

        $(element).find('.btn-group').html(
            `<button type="button" class="btn btn-editCancel rounded-2 btn-primary border border-2 border-black p-0 px-1 bg-danger text-white mx-2">
            <i class="fa-solid fa-xmark"></i>
           </button>
            <button type="submit" class="btn btn-update rounded-2 btn-primary border border-2 border-black p-0 px-1 bg-success text-white">
                <i class="fa-solid fa-check"></i>
            </button>`
        );

        $(element).find('.btn-editCancel').click(function () {
            $(element).html(original_e);
            editProfile(element);
        });

        var a_btn_update = $(element).find('.btn-group a:has(.btn-update)');
        var btn_update = a_btn_update.find('.btn-update');
        var old_val = input.val();
    });    
}

$(document).ready(function () {
    $("body.profilePage button[data-bs-target='#exampleModal']").click();

    $("body.profilePage div#profileDetails .personalInfo .data-changable").each(function (index, element) {
        // element == this
        editProfile(element) ;
    });
});

$(document).ready(function () {
    // klik semua element yang punya kelas e
    $(".eb").click();
});