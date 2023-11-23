document.addEventListener("DOMContentLoaded", function (event) {
    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId);

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener("click", () => {
                // show navbar
                nav.classList.toggle("show");
                // change icon
                toggle.classList.toggle("bx-x");
                // add padding to body
                bodypd.classList.toggle("body-pd");
                // add padding to header
                headerpd.classList.toggle("body-pd");
            });
        }
    };

    showNavbar("header-toggle", "nav-bar", "body-pd", "header");

    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll(".nav_link");

    function colorLink() {
        if (linkColor) {
            linkColor.forEach((l) => l.classList.remove("active"));
            this.classList.add("active");
        }
    }
    linkColor.forEach((l) => l.addEventListener("click", colorLink));

    // Your code to run since DOM is loaded and ready
});

// buat carousel event
const multipleItemCarousel = document.querySelector("#carouselExampleControls");

if (window.matchMedia("(min-width: 576px)").matches) {
    var carouselWidth = $(".carousel-inner")[0].scrollWidth;
    var cardWidth = $(".carousel-item").width();
    var scrollPosition = 0;

    $(".carousel-control-next").on("click", function () {
        if (scrollPosition < carouselWidth - cardWidth * 4) {
            scrollPosition += cardWidth;
            $(".carousel-inner").animate({ scrollLeft: scrollPosition }, 600);
        }
    });

    $(".carousel-control-prev").on("click", function () {
        if (scrollPosition > 0) {
            scrollPosition -= cardWidth;
            $(".carousel-inner").animate({ scrollLeft: scrollPosition }, 600);
        }
    });
} else {
    $(multipleItemCarousel).addClass("slide");
}
