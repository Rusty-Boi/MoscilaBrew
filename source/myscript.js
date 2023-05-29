// process active default
// element.querySelector("a").classList.add("active")
// element.querySelector("a").onclick = function () { 
//     this.classList.toggle("active")
//  }
// munculkan green-check
// tebalkan garis process

// delivery process
// $(".delivery_option input").css({"background-color": "red !important"});
// $(".delivery_option input").toggleClass("bg-krim");
// $(".delivery_option input").toggle("click", function () { 
//     $(this).css({"background-color": "red"});
//  });

//  $(".delivery_option input").on("click", function () {
//     $(this).toggle();
//  });

$(".delivery_option input").click(function (e) { 
    // e.preventDefault();
    $(this).toggleClass("bg-brown");    
});

// $(".delivery_option input").toggle(function () { 
//     $(this).css({"display": "inline"})
//     $(this).css({"background-color": "red"})
//  });
/* 
var add_product_process = document.querySelector(".add_product_process")
var process_list = add_product_process.getElementsByClassName("process_link")

// memulai proces dengan menambahkan class active
process_list[0].querySelector("a").classList.add("active")

document.querySelector("button[name = 'next']").addEventListener("click", function (e) {  
    e.preventDefault()
    // jika tombol next diklik dan semua input telah divalidasi
        // maka proses pindah ke proses selanjutnya
            // garis line ditebalkan
            process_list[parseInt(this.getAttribute("value"))-1].querySelector(".process_line").style.opacity = 1        
            // class active pindah ke proses selanjutnya
                // menghapus class active pada process_link yang lama
                process_list[parseInt(this.getAttribute("value"))-1].querySelector(".eclipse").classList.remove("active")
                // kemudian menambahkan class active pada process selanjutnya
                process_list[parseInt(this.getAttribute("value"))].querySelector("a").classList.add("active")
            // munculkan centang hijau
                process_list[parseInt(this.getAttribute("value"))-1].querySelector(".green_check").classList.remove("d-none")
                parseInt(this.getAttribute("value"))+=1
        // jika proses selanjutnya tidak ada 
            // maka kirim semua jawaban
        // memulai proces dengan menambahkan class active
        process_list[parseInt(this.getAttribute("value"))-1].querySelector("a").classList.add("active")
})
 */



