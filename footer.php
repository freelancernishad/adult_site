
        <footer class="footer mt-7">
            <div class="container">
                <div class="flexFooterwigetContainer">
                    <div class="flexFooterwigetItem">
                        <div class="footerWigetHeader"><h2 class="footerfontColor">Escorts </h2></div>
                        <div class="footerWigetaddress">
                            <ul>
                                <li><a href="terms.php">TERMS & CONDITIONS</a></li>
                                <li><a href="privacy.php">PRIVACY</a></li>
                                <li><a href="contact.php">CONTACT US</a></li>
                           
                            </ul>
                        </div>
                    </div>

      

                    <div class="flexFooterwigetItem">
                        <div class="footerWigetHeader"><h2 class="footerfontColor">Subscribe newsletter</h2></div>
                        <div class="footerWigetaddress">
                            <ul>
                                <li><span>Keep updated for new releases and freebies. Enter your e-mail and subscribe to our newsletter.</span></li>
                                <li>
                                    <form action="#"><input class="email" type="email" /><input class="submit" type="submit" value="SUBSCRIBE" /></form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copywritesection">
                <div class="container">
                    <div class="copywriteFlexContainer">
                        <div class="copywriteFlexItem"><span></span></div>
                        <div class="copywriteFlexItem">
                            <ul>
                                <li><a href="#" class="fab fa-facebook"></a></li>
                                <li><a href="#" class="fab fa-youtube"></a></li>
                                <li><a href="#" class="fab fa-linkedin"></a></li>
                                <li><a href="#" class="fab fa-twitter"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="developsection">
                <div class="container">
                    <div class="develop copywriteFlexContainer">
                        <div class="develop copywriteFlexItem"><span>© Copyright South Coast Global Ads | Developed by Freelancer Nishad.</span></div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.js"></script>

        <script src="assets/js/c42e809f4e.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <script src="assets/js/jquery.bxslider.min.js"></script>
        <script src="assets/js/animate.js"></script>

        <script defer src="assets/js/jquery.flexslider.js"></script>

        <script type="text/javascript" src="assets/js/jquery.mobile.customized.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="assets/js/camera.min.js"></script>
        <script type="text/javascript" src="assets/js/cameras.js"></script>

        <script>
            jQuery(function () {
                jQuery("#camera_wrap_1").camera({
                    height: "500px",
                    loader: "bar",
                    pagination: false,
                });
            });
        </script>

        <script type="text/javascript">
            $(window).load(function () {
                $(".flexslider1").flexslider({
                    animation: "slide",
                    animationLoop: false,
                    itemWidth: 174,
                    itemMargin: 20,
                    pausePlay: true,
                    start: function (slider) {
                        $("body").removeClass("loading");
                    },
                });
            });
        </script>

        <script>
            var TestiSlide = $(".bxslider");
            TestiSlide.bxSlider({
                auto: true,
                pager: false,
                controls: false,
                useCSS: false,
                speed: 2000,
                easing: "easeOutElastic",
                mode: "horizontal",
                controlDirections: true,
            });
        </script>

        <script>
            $(window).scroll(function () {
                if ($(window).scrollTop() >= $(".sectionTitle").offset().top - 100 || $(window).scrollTop() >= $(".sectionTitle").offset().top - 100) $("#service1").addClass("animate__animated animate__backInLeft");
                else $("#service1").removeClass("animate__animated");
            });
            $(window).scroll(function () {
                if ($(window).scrollTop() >= $(".sectionTitle").offset().top + -100 || $(window).scrollTop() >= $(".sectionTitle").offset().top - 100) $("#service2").addClass("animate__animated animate__fadeInDown");
                else $("#service2").removeClass("animate__animated");
            });
            $(window).scroll(function () {
                if ($(window).scrollTop() >= $(".sectionTitle").offset().top + -100 || $(window).scrollTop() >= $(".sectionTitle").offset().top - 100) $("#service3").addClass("animate__animated animate__fadeInUp");
                else $("#service3").removeClass("animate__animated");
            });
            $(window).scroll(function () {
                if ($(window).scrollTop() >= $(".sectionTitle").offset().top + -100 || $(window).scrollTop() >= $(".sectionTitle").offset().top - 100) $("#service4").addClass("animate__animated animate__backInRight");
                else $("#service4").removeClass("animate__animated");
            });
        </script>

        <script>
            function onClick() {
                var element = document.getElementById("image").src;

                document.getElementById("img01").src = element;
                document.getElementById("modal01").style.display = "block";
            }
        </script>
    </body>
</html>