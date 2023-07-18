$(window).scroll(function () {
    let position = $(this).scrollTop();
    if (position >= 100) {
        $(".nav-menu").addClass("costum-navbar");
    } else {
        $(".nav-menu").removeClass("costum-navbar");
    }
});

$(document).ready(function () {
    $(".nav-button").click(function () {
        $(".nav-button").toggleClass("change");
    });
});

setTimeout(hideNotif, 4000);

function hideNotif() {
    $(document).ready(function () {
        $("#notif").slideUp();
        $(".notif").slideUp();
    });
}
