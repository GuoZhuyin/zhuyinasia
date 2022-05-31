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
	    <li class="nav-item active">
            <a class="nav-link" href="index.php">首頁 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
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

    <!-- banner section -->
    <section class="w3l-main-slider" id="home">
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                <div class="item">
                    <li>
                        <div class="slider-info banner-view">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5>歡迎使用<br>上課吧</h5>
                                        <a class="btn btn-style mt-sm-5 mt-4" href="about.php">
                                            了解更多<i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
				<div class="item">
                    <li>
                        <div class="slider-info  banner-view banner-top1">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5>全台最大平台上線囉</h5>
                                        <a class="btn btn-style mt-sm-5 mt-4" href="about.php">
                                            了解更多<i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info  banner-view banner-top2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5>這裡擁有許多資源</h5>
                                        <a class="btn btn-style mt-sm-5 mt-4" href="about.php">
                                            了解更多<i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- banner bottom section -->
    <section class="w3l-bottom-grids-6 pb-lg-5 text-center" id="services">
        <div class="container">
            <div class="grids-area-hny main-cont-wthree-fea row">
                <div class="col-lg-3 col-md-6 px-lg-2">
                    <div class="area-box color-1">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        <h4><a href="courses.php?aca=1" class="title-head">醫學暨健康學院</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-2 mt-md-0 mt-3">
                    <div class="area-box color-2">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <h4><a href="courses.php?aca=2" class="title-head">資訊電機學院</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-2 mt-lg-0 mt-3">
                    <div class="area-box color-3">
                        <i class="fa fa-coffee" aria-hidden="true"></i>
                        <h4><a href="courses.php?aca=3" class="title-head">管理&人文社會學院</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-2 mt-lg-0 mt-3">
                    <div class="area-box color-4">
                        <i class="fa fa-hourglass-half" aria-hidden="true"></i>
                        <h4><a href="courses.php?aca=4" class="title-head">創意設計學院</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner bottom section -->

    <!-- welcome section -->
    <section class="w3l-feature-8">
        <div class="features-main py-5">
            <div class="container py-md-5 py-4">
                <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
                    <h3 class="title-main">歡迎使用<span>上課吧</span></h3>
                </div>
                <div class="row features text-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-body">
                            <div class="feature-images">
                                <span class="fa fa-graduation-cap" aria-hidden="true"></span>
                            </div>
                            <div class="feature-info mt-4">                              
                                    <h3 class="feature-titel">
                                        熱門課程
                                    </h3>
                                <p class="feature-text">除了微積分和機率與統計之外 還有程式設計、人工智慧等...有趣的課程</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt-sm-0 mt-5">
                        <div class="feature-body">
                            <div class="feature-images">
                                <span class="fa fa-users" aria-hidden="true"></span>
                            </div>
                            <div class="feature-info mt-4">
                                    <h3 class="feature-titel">認證教師</h3>
                                <p class="feature-text">數位國際性的老師親自教導 學術界的專家們將告訴你如何成功</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt-lg-0 mt-5">
                        <div class="feature-body">
                            <div class="feature-images">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
                            <div class="feature-info mt-4">
                                    <h3 class="feature-titel">課本&教材</h3>
                                <p class="feature-text">搭配國外學術篇章、外文書、電子書、閱讀軟體和英文雜誌供學生閱讀</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //welcome section -->

    <!-- courses section -->
    <div class="w3l-grids-block-5 py-5">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
                <h3 class="title-main">任選一堂課開始</h3>
            </div>	
            <div class="row">
				<?php 
					$k = 0;
					$rs = $conn->query("SELECT * FROM courses WHERE 1=1 ORDER BY no DESC LIMIT 6");
					while($data = $rs->fetch_assoc()){
						$k++;
				?>
                <div class="col-lg-4 col-md-6">
				<br>
                    <div class="blog-card-single">
                        <div class="grids5-info position-relative">
                            <img src="photos/<?=$data["photo"]?>" alt="" class="img-fluid" />
                            <div class="meta-list">
							<?php
								$rs1 = $conn->query("SELECT * FROM academy,courses 
								WHERE academy.no=courses.academy AND courses.academy='".$data["academy"]."'");
								$data1 = $rs1->fetch_assoc();
								
								$rs2 = $conn->query("SELECT * FROM academy,courses 
								WHERE academy.no=courses.department AND courses.department='".$data["department"]."'");
								$data2 = $rs2->fetch_assoc();							
							?>
								<a href="courses.php?aca=<?=$data["academy"]?>"><?=$data1["title"]?></a>
								<a href="<?=$data2["href"]?>"><?=$data2["title"]?></a>
                            </div>
                            <div class="course-price-item">
                                <h6><?=$data["grade"]?>年級</h6>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fa fa-signal" aria-hidden="true"></i> 授課教師:<?=$data["teacher"]?></li>
                                    <li> <i class="fa fa-clock-o" aria-hidden="true"></i> <?=$data["time"]?>hr</li>
                                </ul>
                            </div>
                            <h4><a href="class.php?no=<?=$data["no"]?>"><?=$data["name"]?></a></h4>
                            <p></p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-5 pt-4">
                                <ul class="rating-list">
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                </ul>
                                <a class="btn btn-style btn-style-primary" href="class.php?no=<?=$data["no"]?>">詳細資訊<i
                                        class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
				<?php } ?>
            </div>
            <div class="text-center mt-5">
                <a class="btn btn-style btn-style-secondary mt-sm-3" href="courses.php">
                    瀏覽更多課程<i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- //courses section -->

    <!-- grids section -->
    <section class="w3l-homeblock1">
        <div class="w3-services-ab py-5">
            <div class="container py-md-5 py-4">
                <div class="w3-services-grids pb-sm-5 mb-sm-4">
                    <div class="row w3-services-right-grid">
                        <div class="col-xl-4">

                        </div>
                        <div class="col-xl-8">
                            <div class="fea-gd-vv row">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center feature-gd ">
                                        <div class="icon">
                                            <i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-info">
                                            <h5>彈性的課程</h5>
                                            <p> 選擇自己喜歡的課程學習.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-md-0 mt-4">
                                    <div class="d-flex align-items-center feature-gd">
                                        <div class="icon">
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-info">
                                            <h5>離線模式</h5>
                                            <p> 提供不需要網路也能學習.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4 pt-md-2">
                                    <div class="d-flex align-items-center feature-gd ">
                                        <div class="icon">
                                            <i class="fa fa-headphones" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-info">
                                            <h5>師資支援</h5>
                                            <p>請帥氣歐巴或知名女團來一日講課.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4 pt-md-2">
                                    <div class="d-flex align-items-center feature-gd">
                                        <div class="icon">
                                            <i class="fa fa-play-circle" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-info">
                                            <h5>線上課程</h5>
                                            <p> 線上及時互動，即使被隔離也能學習.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //grids section -->

    <!-- stats -->
    <section class="w3_stats py-sm-5 pt-sm-0 pt-5" id="stats">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
                <h3 class="title-main">使用的用戶</h3>
                <p class="mt-4 pt-md-2">全亞洲最大教育網站，快來加入我們.</p>
            </div>
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

    <!-- testimonial section -->
    <div class="w3l-cutomer-main-cont">
        <div class="testimonials py-5">
            <div class="container py-md-5 py-4">
                <div class="title-heading-w3 text-center mx-auto mb-5 pb-lg-5">
                    <h3 class="title-main">畢業生給的 <span>回饋 </span></h3>
                </div>	
                <div class="row content-sec mt-md-5">
                    <div class="col-lg-4 col-md-6 testi-sections">
                        <div class="testimonials_grid">
                            <p class="sub-test"><q>
                                   這裡的老師不會說不要講話，也不會說不要出來，我覺得真的十分親切.</q>
                            </p>
                            <div class="d-grid sub-author-con">
                                <div class="testi-img-res">
                                    <img src="photos/testi1.jpg" alt="" class="img-fluid" />
                                </div>
                                <div class="testi_grid text-left">
                                    <h5>邱大葉</h5>
                                    <p>現在從事Apex競技社隊員</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4 testi-sections">
                        <div class="testimonials_grid">
                            <p class="sub-test"><q>
                                    非常慷慨的課程設計，不需要太多出席，也可以學到許多姿勢。</q>
                            </p>
                            <div class="d-grid sub-author-con">
                                <div class="testi-img-res">
                                    <img src="photos/testi2.jpg" alt="" class="img-fluid" />
                                </div>
                                <div class="testi_grid text-left">
                                    <h5>黃政偉</h5>
                                    <p>擔任性別感情研究所的所長</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 testi-sections">
                        <div class="testimonials_grid">
                            <p class="sub-test"><q>
                                    自從使用了上課吧學習，我的能力受到了肯定，也讓我的人生從黑轉白.</q>
                            </p>
                            <div class="d-grid sub-author-con">
                                <div class="testi-img-res">
                                    <img src="photos/testi3.jpg" alt="" class="img-fluid" />
                                </div>
                                <div class="testi_grid text-left">
                                    <h5>蘇鮭玲</h5>
                                    <p>知名壽司店的老闆</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonial section -->

    <!-- team section -->
    <section class="w3l-team py-sm-5 pb-sm-0 pb-5">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
                <h3 class="title-main">傑出師資</h3>
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
                            <small>影像處理、資訊安全</small>
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
                            <h5 class="member mb-1 active"><b>潘信宏</b></a></h5>
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
                            <h5 class="member mb-1"><b>蔡淵裕</b></a></h5>
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
                            <h5 class="member mb-1"><b>劉兆樑</b></a></h5>
                            <small>密碼學、演算法、橢圓曲線密碼學</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //team setion -->

    <!-- about-2 section -->
    <section class="w3l-about-2 pb-5">
        <div class="container pb-md-5 pb-4 mb-5">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 about-2-secs-right mb-lg-0 mb-4 text-center">
                    <img src="assets/images/image.png" alt="" class="img-fluid img-responsive m-auto" />
                </div>
                <div class="col-lg-7 about-2-secs-left pr-lg-5">
                    <h3 class="title-style mb-sm-3 mb-2">
                        不知道從哪裡開始?<br>立即聯繫，我們將為您提供協助</h3>
                    <p>上帝關了一扇門 必定會再為你打開另一扇窗.</p>
                    <div class="mt-4">
                        <a class="btn btn-style btn-style-secondary mt-3" href="contact.php">聯繫我們</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about-2 section -->

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

    <!-- banner slider -->
    <script src="assets/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //banner slider -->

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