/**
 * Created by Anu Ganesh
 */

// Date Picker - Change Format
$

var winWidth = $(window).width();

$(document).ready(function () {
    sliderInit();
    addClassInit();
    navInit();
    mcustomInit();
    matchHeight();
    changeDateFormat();
});


/*------------------------------- Functions Starts -------------------------------*/
function sliderInit() {
    /*$('.common-banner-slider').slick({
        arrows: false,
        dots: true,
        autoplay: false,
        speed: 500,
        fade: true,
        pauseOnHover: false,
        cssEase: 'linear',
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 667,
                settings: {
                    arrows: true,
                    dots: false
                }
            }
        ]
    });*/

}

function addClassInit() {

}

function navInit() {

}

function mcustomInit() {

}
function changeDateFormat() {
    $('#datepicker').datepicker({
        dateFormat: "YYYY-MM-DD"
    });
}



/*-------------------------------- Functions Ends --------------------------------*/
