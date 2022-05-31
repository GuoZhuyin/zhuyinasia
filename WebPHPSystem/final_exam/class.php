<?php
	include("db.php");
	$no=$_GET["no"];
	
	//query product data
	$rs=$conn->query("SELECT * FROM courses WHERE no='".$no."'");
	if($rs->num_rows==0){
		exit('<script>alert("查無資料"); location.href="index.php";</script>');
	}
	$courses = $rs->fetch_assoc();
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
        <li class="nav-item active">
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
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">課程介紹</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">首頁</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> 課程</li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> 課程詳情</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->

    <!-- contact page -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-md-5 py-4 mb-5">
			<div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
				<h3 class="title-main">課程詳情</h3>
            </div>
            <div class="mx-auto" style="max-width:1000px">
                <div class="row contact-block">
					<div class="col-lg-6 left-wthree-img-video text-righ pr-lg-5 mt-lg-0 mt-5">
                        <div class="">
                            <?php
								/*$where = "1=1";
								$rs = $conn->query("SELECT * FROM courses WHERE ". $where ." ORDER BY no");
								$data = $rs->fetch_assoc();
								
								if(isset($data["photo"]) && $data["photo"]!=""){
									echo '<img width="300" src="photos/'. $data["photo"] .'" >';
								}*/
							?>
							<img src="photos/<?=$courses["photo"]?>" >
                        </div>
                    </div>
                    <div class="col-md-5 contact-left">
                        <div class="cont-details">
                            <div class="d-flex contact-grid">
                                <div class="cont-left text-center mr-3	">
                                    <img width="15" src="photos/class.png">
                                </div>
                                <div class="cont-right">
                                    <h6>學院</h6>
                                    <p><?php
										$rs1 = $conn->query("SELECT * FROM academy,courses 
										WHERE academy.no=courses.academy AND courses.academy='".$courses["academy"]."'");
										$data1 = $rs1->fetch_assoc();
										
										$rs2 = $conn->query("SELECT * FROM academy,courses 
										WHERE academy.no=courses.department AND courses.department='".$courses["department"]."'");
										$data2 = $rs2->fetch_assoc();							
										?>
										<?=$data1["title"]?>
									</p>
                                </div>
                            </div>
							<p>
							<div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3	">
                                    <img width="15" src="photos/class.png">
                                </div>
                                <div class="cont-right">
                                    <h6>科系</h6>
                                    <p>
										<?=$data2["title"]?>
									</p>
                                </div>
                            </div>
							</p>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <img width="15" src="photos/class.png">
                                </div>
                                <div class="cont-right">
                                    <h6>課程名稱</h6>
                                    <p><?=$courses["name"]?></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
								<img width="15" src="photos/class.png">
                                </div>
                                <div class="cont-right">
                                    <h6>總上課時長</h6>
                                    <p><?=$courses["time"]?>小時</p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
								<img width="15" src="photos/class.png">
                                </div>
                                <div class="cont-right">
                                    <h6>課程內容</h6>
                                    <p><?=$courses["content"]?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- contact form -->
                <div class="contact-form-sec pt-5 mt-md-5">
                    <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
                        <h3 class="title-main">想了解<span>更多</span></h3>
                    </div>
                    <div class="row contact-block align-items-center">
                        <div class="col-md-5 contact-left">
                            <img src="photos/contact.jpg" alt="" class="img-fluid img-responsive">
                        </div>
                        <div class="col-md-7 contact-right mt-md-0 mt-4 pl-lg-4">
                            <form name="form2" action="mailus.php" method="post" class="signin-form">
                                <div class="input-grids">
                                    <input type="text" name="name" id="name" placeholder="姓名"
                                        class="contact-input" required="" />
                                    <input type="email" name="email" id="email" placeholder="E-mail"
                                        class="contact-input" required="" />
                                    <input type="text" name="subject" id="subject" value=<?=$courses["name"];?>
                                        class="contact-input" readonly required />
                                </div>
								<p>詢問有關 <?=$courses["name"]?> 課程的相關問題<br></p>
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