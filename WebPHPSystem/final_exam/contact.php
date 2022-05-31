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
        <li class="nav-item">
            <a class="nav-link" href="about.php">關於我們</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="courses.php">課程</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="contact.php">聯繫我們</a>
        </li>
	<?php include("header2.php"); ?>	
    <!--//header-->

    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">聯繫我們</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">首頁</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> 聯繫我們</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->

    <!-- contact page -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-md-5 py-4 mb-5">
            <div class="mx-auto" style="max-width:1000px">
                <div class="row contact-block">
                    <div class="col-md-5 contact-left">
                        <h3 class="font-weight-bold mb-md-5 mb-4">請與我們聯繫</h3>
                        <div class="cont-details">
                            <div class="d-flex contact-grid">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>公司地址</h6>
                                    <p>413 台中市霧峰區柳豐路500號</p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>聯絡我們</h6>
                                    <p><a href="#1">(04)2332-3456轉6122</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-envelope-open"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Email聯繫</h6>
                                    <p><a href="#2" class="mail">onclass@mail.com</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-headphones"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>客戶支持</h6>
                                    <p><a href="#3" class="mail">info@support.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 mt-md-0 mt-4">
                        <div class="map-iframe">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7286.94977615473!2d120.6821420747389!3d24.04957583529354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693b17a99d736b%3A0x1c471d70cdc89dc9!2z5Lqe5rSy5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1624268336481!5m2!1szh-TW!2stw"
                                width="100%" height="400" frameborder="0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <!-- contact form -->
                <div class="contact-form-sec pt-5 mt-md-5">
                    <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
                        <h3 class="title-main">我們將回答您的 <span>問題</span></h3>
                    </div>
                    <div class="row contact-block align-items-center">
                        <div class="col-md-5 contact-left">
                            <img src="photos/contact.jpg" alt="" class="img-fluid img-responsive">
                        </div>
                        <div class="col-md-7 contact-right mt-md-0 mt-4 pl-lg-4">
                            <form name="form2"action="mailus.php" method="post" class="signin-form">
                                <div class="input-grids">
                                    <input type="text" name="name" id="name" placeholder="姓名"
                                        class="contact-input" required="" />
                                    <input type="email" name="email" id="email" placeholder="E-mail"
                                        class="contact-input" required="" />
                                    <input type="text" name="subject" id="subject" placeholder="主旨"
                                        class="contact-input" required="" />
                                </div>
                                <div class="form-input">
                                    <textarea name="message" id="message" placeholder="留下你的訊息..."
                                        required=""></textarea>
                                </div>
                                <button class="btn btn-style btn-style-secondary mt-sm-3">發訊息 </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- //contact form -->
            </div>
        </div>
    </section>
    <!-- //contact page -->

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