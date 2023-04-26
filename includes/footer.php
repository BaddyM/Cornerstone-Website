<?php
$date_today = date('Y');

?>

<div id="footer-content" class="text-center bg-light rounded">
    <p>CORNERSTONE HIGH SCHOOL located at Nangabo-Kasangati, Wakiso District</p>
    <hr class="footer-horizantal-line">
    <p>P.O.Box 104240, Kampala. Office Lines: 0783-237-698, HM: 0776-431-552, D.O.S: 0773-056-259</p>
    <hr class="footer-horizantal-line">
    <p>Email: www.cornerstonehighschool.ac.ug © <?php print($date_today); ?> Copyright </p>

</div>

<!-- jquery file for the loader -->






<script>
    /*
    document.onreadystatechange = function() {
            if (document.readyState !== "complete") {
                document.querySelector(
                  "body").style.visibility = "hidden";
                document.querySelector(
                  "#loader").style.visibility = "visible";
            } else {
                document.querySelector(
                  "#loader").style.display = "none";
                document.querySelector(
                  "body").style.visibility = "visible";
            }
        };
        */
    /*
        $(window).on('load', function(){
            $(".loader-bg").fadeout(1000);
        });
        */
</script>

<script>
    $(window).load(function() {
        $(".loader-container").fadeOut(1000);
    });
</script>

<!--  aos script here -->
<script src="assets/vendor/aos/aos.js"></script>
<script>
    AOS.init();
</script>

<!--  purecounter script here -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script>
    new PureCounter();
</script>

<!--  swiper script here -->
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        effect: 'coverflow',
        grabCursor: true,
        cubeEffect: {
            shadow: true,
            slideShadows: true,
            shadowOffset: 40,
            shadowScale: 0.94,
        },
        loop: true,
        speed: 1500,

        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>

</body>

</html>