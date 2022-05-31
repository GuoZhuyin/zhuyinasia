<?php 
	include("db.php"); 
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<!-- head -->
<head>
	<?php include("head.php"); ?>
</head>
<!-- /head -->

<body>
    <!-- top header -->
	<?php include("topheader.php"); ?>
    <!-- //top header -->
    <!--header-->
	<?php include("header1.php"); ?>	
	    <li class="nav-item">
            <a class="nav-link" href="index.php">首頁 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="about.php">關於我們</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="courses.php">課程</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.php">聯繫我們</a>
        </li>
	<?php include("header2.php"); ?>	
    <!--//header-->

    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">關於我們</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">首頁</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>關於我們</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->

    <!-- about section -->
    <section class="video-section py-5">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-lg-6 about-right-faq align-self pr-lg-5">
                    <h3 class="title-big">我們的使命是提供一流的世界教育</h3>
                    <p class="mt-3">我們擁有需多優良的師資，與一流的教育資源
                    </p>
                </div>
                <div class="col-lg-6 left-wthree-img-video text-righ pr-lg-5 mt-lg-0 mt-5">
                    <div class="position-relative text-center">
                        <img src="photos/bn1.jpg" alt="" class="img-fluid">
                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>

                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe width="1280" height="720" src="https://www.youtube.com/embed/grHHRVba39o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about section -->

    <!-- stats -->
    <section class="w3_stats pb-5" id="stats">
        <div class="container pb-md-5 pb-4 pt-4">
            <div class="w3-stats">
                <div class="row text-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="6300" data-speed="1500"></div>
                            <p class="count-text">學習中的人數</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="638" data-speed="1500"></div>
                            <p class="count-text">課程總數</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="7600" data-speed="1500"></div>
                            <p class="count-text">傑出的學生</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                        <div class="counter border-right-0">
                            <div class="timer count-title count-number" data-to="36" data-speed="1500"></div>
                            <p class="count-text">語言</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->

    <!-- about-bootom grids -->
    <section class="w3l-bottom-about py-5">
        <div class="container py-md-5 py-4">
            <div class="grids-area-hny main-cont-wthree-fea row">
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box">
                        <span class="fa fa-smile-o" aria-hidden="true"></span>
                        <h4><br><b>小組研討會</b></h4><br>
                        <p class="mb-3">在這你將與線上的朋友們一學習。
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                    <div class="area-box">
                        <span class="fa fa-graduation-cap icon-style-2" aria-hidden="true"></span>
                        <h4><br><b>熱門課程</b></h4><br>
                        <p class="mb-3">我們擁有多項課程讓你進行多元的學習。
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                    <div class="area-box">
                        <span class="fa fa-users icon-style-3" aria-hidden="true"></span>
                        <h4><br><b>專業教師</b></h4><br>
                        <p class="mb-3">一流的師資，讓你更快掌握學習技巧。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //bottom-grids-->

    <!-- team section -->
    <section class="w3l-team py-sm-5 pb-sm-0 pb-5">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
                <h3 class="title-main">是誰讓奇蹟發生? <span>了解他們</span></h3>
            </div>
            <div class="row text-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-block-single">
                        <div class="team-grids">
                            <a href="#team-single">
                                <img src="photos/team1.jpg" class="img-fluid" alt="">
                                <div class="team-info">
                                    <div class="social-icons-section">
                                        <a class="fac" href="#facebook">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a class="twitter mx-2" href="#twitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a class="google" href="#google-plus">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="team-bottom-block p-4">
                            <h5 class="member mb-1"><b>詹啟祥</b></a></h5>
                            <small>多媒體教授</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5">
                    <div class="team-block-single">
                        <div class="team-grids">
                            <a href="#team-single">
                                <img src="photos/team2.jpeg" class="img-fluid" alt="">
                                <div class="team-info">
                                    <div class="social-icons-section">
                                        <a class="fac" href="#facebook">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a class="twitter mx-2" href="#twitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a class="google" href="#google-plus">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="team-bottom-block p-4">
                            <h5 class="member mb-1 active"><b>潘信宏</b></h5>
                            <small>網頁程式設計、網際網路系統</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5">
                    <div class="team-block-single">
                        <div class="team-grids">
                            <a href="#team-single">
                                <img src="photos/team3.jpg" class="img-fluid" alt="">
                                <div class="team-info">
                                    <div class="social-icons-section">
                                        <a class="fac" href="#facebook">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a class="twitter mx-2" href="#twitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a class="google" href="#google-plus">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="team-bottom-block p-4">
                            <h5 class="member mb-1"><b>蔡淵裕</b></h5>
                            <small>計算機圖學、多媒體安全</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5">
                    <div class="team-block-single">
                        <div class="team-grids">
                            <a href="#team-single">
                                <img src="photos/team4.png" class="img-fluid" alt="">
                                <div class="team-info">
                                    <div class="social-icons-section">
                                        <a class="fac" href="#facebook">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a class="twitter mx-2" href="#twitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a class="google" href="#google-plus">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="team-bottom-block p-4">
                            <h5 class="member mb-1"><b>劉兆樑</b></h5>
                            <small>密碼學、演算法、橢圓曲線密碼學</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-5">
                    <div class="team-block-single">
                        <div class="team-grids">
                            <a href="#team-single">
                                <img src="photos/team5.jpeg" class="img-fluid" alt="">
                                <div class="team-info">
                                    <div class="social-icons-section">
                                        <a class="fac" href="#facebook">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a class="twitter mx-2" href="#twitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a class="google" href="#google-plus">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="team-bottom-block p-4">
                            <h5 class="member mb-1"><b>詹益智</b></h5>
                            <small>視光教授</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-5">
                    <div class="team-block-single">
                        <div class="team-grids">
                            <a href="#team-single">
                                <img src="photos/team6.jpg" class="img-fluid" alt="">
                                <div class="team-info">
                                    <div class="social-icons-section">
                                        <a class="fac" href="#facebook">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a class="twitter mx-2" href="#twitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a class="google" href="#google-plus">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="team-bottom-block p-4">
                            <h5 class="member mb-1 active"><b>林靜君</b></h5>
                            <small>物理治療教授</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-5">
                    <div class="team-block-single">
                        <div class="team-grids">
                            <a href="#team-single">
                                <img src="photos/team7.jpg" class="img-fluid" alt="">
                                <div class="team-info">
                                    <div class="social-icons-section">
                                        <a class="fac" href="#facebook">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a class="twitter mx-2" href="#twitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a class="google" href="#google-plus">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="team-bottom-block p-4">
                            <h5 class="member mb-1"><b>詹鎔瑄</b></h5>
                            <small>室內設計教授</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-5">
                    <div class="team-block-single">
                        <div class="team-grids">
                            <a href="#team-single">
                                <img src="photos/team8.jpg" class="img-fluid" alt="">
                                <div class="team-info">
                                    <div class="social-icons-section">
                                        <a class="fac" href="#facebook">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a class="twitter mx-2" href="#twitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a class="google" href="#google-plus">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="team-bottom-block p-4">
                            <h5 class="member mb-1"><b>簡智崇</b></h5>
                            <small>金融管理教授</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //team setion -->

    <!-- about section -->
    <section class="w3l-about-3 pb-5 pt-2">
        <div class="container py-md-5 py-4 mb-5">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 pr-lg-5">
                    <h3 class="title-big">加入我們一起完成民主教育化的使命</h3>
                    <p class="mt-3">有你的加入將讓我們的團體更加的豐富。
                    </p>
                    <ul class="list-about-2 mt-sm-4 mt-3">
                        <li class="py-1"><i class="fa fa-check-square-o mr-2" aria-hidden="true"></i>應召優良的程式教授
                            </li>
                        <li class="py-2"><i class="fa fa-check-square-o mr-2" aria-hidden="true"></i>應召優良的心理學教授
                            </li>
                        <li class="py-1"><i class="fa fa-check-square-o mr-2" aria-hidden="true"></i>應召優良的電機課程教授
                            </li>
                    </ul>
                </div>
                <div class="col-lg-6 about-2-secs-right mt-lg-0 mt-5">
                    <img src="assets/images/about1.jpg" alt="" class="img-fluid img-responsive" />
                </div>
            </div>
        </div>
    </section>
    <!-- //about section -->

    <!-- footer -->
	<?php include("footer.php"); ?>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->

    <!-- counter for stats -->
    <script src="assets/js/counter.js"></script>
    <!-- //counter for stats -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>