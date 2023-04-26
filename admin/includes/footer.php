<footer class="text-center bg-light p-lg-3 mt-lg-2">
    <h5 class="line-space">Namungoona Parents' School located 5km away from the capital</h5>
    <h6 class="line-space">Reach us on : 0772 495 436 | 0772 354 564 | 0705 800 199</h6>
    <h6 class="line-space">Also through our email: www.namungoonaparents@gmail.com</h6>
    <h6 class="line-space">Our social handles :
        <a href="#"><i class="bi bi-twitter fs-5"></i></a>
        &nbsp;&nbsp;
        <a href="#"><i class="bi bi-facebook fs-5"></i></a>
        &nbsp;&nbsp;
        <a class="text-success" href="#"><i class="bi bi-whatsapp fs-5"></i></a>
    </h6>
    <h6 class="line-space"><i class="bi bi-c-circle fs-6"></i>
        namungoona parents' school <strong class="text-primary"><?php $year = date('Y');
                                                                echo $year; ?></strong>
    </h6>
</footer>


<!-- custom js file -->
<script src="vendor/custom/main.js"></script>

<!-- external js files -->
<script src="vendor/aos/aos.js"></script>
<!-- initialize aos -->
<script>
    AOS.init();
</script>

<script src="vendor/purecounter/purecounter_vanilla.js"></script>
<!-- initialize purecounter -->
<script>
    new PureCounter();
</script>
<script src="vendor/swiper/swiper-bundle.min.js"></script>

<!-- swiper class initialization -->
<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

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