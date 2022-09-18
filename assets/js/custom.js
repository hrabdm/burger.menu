
$(function() {


// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();


// isotope js
$(window).on('load', function () {
    $('.filters_menu li').click(function () {
        $('.filters_menu li').removeClass('active');
        $(this).addClass('active');

        var data = $(this).attr('data-filter');
        $grid.isotope({
            filter: data
        })
    });

    var $grid = $(".grid").isotope({
        itemSelector: ".all",
        percentPosition: false,
        masonry: {
            columnWidth: ".all"
        }
    })
});

// nice select
$(document).ready(function () {
    $('select').niceSelect();
});

/** google_map js **/
function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(40.712775, -74.005973),
        zoom: 18,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

// client section owl carousel
$(".client_owl-carousel").owlCarousel({
    loop: true,
    margin: 0,
    dots: false,
    nav: true,
    navText: [],
    autoplay: true,
    autoplayHoverPause: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        1000: {
            items: 2
        }
    }
});

// ajax send book form 
$('#ajaxForm').submit(function () {
    console.log($("#ajaxForm"));

    $.post(
        'modules/book_post.php', // адрес обработчика
        $("#ajaxForm").serialize(), // отправляемые данные  		

        function (msg) { // получен ответ сервера
            $('#ajaxForm').hide('slow');
            $('#my_message').html(msg);
        }
    );

    return false;
});

// ajax send to cart
const cartLinks = $('.product_link_with_id');
let productCount = $('#productCount');

$.each(cartLinks, function() {
    $(this).bind('click', function(e) {
        e.preventDefault();
        let currentId = $(this).attr('data-id');
        $.post('modules/cart_post.php', {"product_id": currentId}).done(function(data) {
            productCount.html(data);
        });
      
    });
});

//delete product from cart





});