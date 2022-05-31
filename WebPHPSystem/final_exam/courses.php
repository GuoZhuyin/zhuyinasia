<?php 
	include("db.php");
	//頁數page	
	if(isset($_GET["aca"])){
		$aca=$_GET["aca"];
	}else{
		$aca=0;
	}if(isset($_GET["page"])){
		$page =(int) $_GET["page"];
	}else{
		$page = 1;
}
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
        <div class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">課程</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">首頁</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>課程
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //inner banner -->

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

    <!-- courses section -->
    <div class="w3l-grids-block-5 w3l-grids-block-6 py-5">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
				<h3 class="title-main">我們的<span>課程</span></h3>
            </div>
			<!-- 判斷aca是否0 -->
			<?php
				if($aca==0){
			?>
            <div class="row">
				<?php
					$pagerows=6; //每頁6筆
					$totalcounts=0; //資料筆數
					$pagecounts=0; //總頁數
					$where = "1=1";
					$rs2 = $conn->query("SELECT * FROM courses WHERE ". $where ." ORDER BY no");
					
					$totalcounts = $rs2->num_rows;
					//計算總頁數
					$pagecounts = ceil($totalcounts/$pagerows);
					
					$k = 0;
					$rs = $conn->query("SELECT * FROM courses WHERE no>0 ORDER BY no ASC LIMIT ".(($page-1) * $pagerows).",".$pagerows); //可放LIMIT 6
					
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
			<!-- 判斷aca是否0 -->
			<!-- 判斷aca是否不等於0 -->
			<?php }else if($aca>0){ ?>
			<div class="row">
				<?php  
					$pagerows=6; //每頁6筆
					$totalcounts=0; //資料筆數
					$pagecounts=0; //總頁數
					$rs2 = $conn->query("SELECT * FROM courses WHERE academy=". $aca ." ORDER BY no");
					
					$totalcounts = $rs2->num_rows;
					//計算總頁數
					$pagecounts = ceil($totalcounts/$pagerows);
					$k = 0;
					$rs = $conn->query("SELECT * FROM courses WHERE academy='".$aca."' ORDER BY no DESC LIMIT ".(($page-1) * $pagerows).",".$pagerows); //可放LIMIT 6
					
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
                                    <li> <i class="fa fa-clock-o" aria-hidden="true"></i> <?=$data["time"]?>小時</li>
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
			<?php } ?>
			<!-- 判斷aca是否不等於0 -->
			
            <!-- pagination -->
			
			<div class="pagination-style text-center">
			<?php
				if($aca==0){
			?>
                <ul>
					<?php if ($page == 1){?>
                    <li> <a class="not-allowed" disabled="" onclick="toPage(1)">
                            <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                        </a>
                    </li>
					<?php }?>
					<?php if ($page >1){?>
                    <li> <a class="allowed" disabled="" onclick="toPage(1)">
                            <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                        </a>
                    </li>
					<?php }?>
					<?php
						for($i=1; $i<=$pagecounts; $i++){
							if($i==$page){
								echo '<li><a class="active" href="?page='.$page.'">'.$page.'</a></li>';
							}else{
								echo '<li><a class="" href="?page='.$i.'">'.$i.'</a></li>';
							}
						}
						
					?>
					<?php if ($page == $pagecounts){?>
                    <li> <a class="not-allowed" disabled="" onclick="toPage($pagecounts)">
                            <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        </a>
                    </li>
					<?php }?>
					<?php if ($page < $pagecounts){?>
                    <li> <a class="allowed" disabled="" onclick="toPage(<?=$pagecounts?>)">
                            <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        </a>
                    </li>
					<?php }?>
                </ul>
			<?php } ?>
			<?php
				if($aca > 0 && $pagecounts >= 1){
			?>
                <ul>
					<?php if ($page == 1){?>
                    <li> <a class="not-allowed" disabled="" onclick="?aca=<?=$aca?>&toPage(1)">
                            <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                        </a>
                    </li>
					<?php }?>
					<?php if ($page >1){?>
                    <li> <a class="allowed" disabled="" onclick="?aca=<?=$aca?>&toPage(1)">
                            <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                        </a>
                    </li>
					<?php }?>
					<?php
						for($i=1; $i<=$pagecounts; $i++){
							if($i==$page){
								echo '<li><a class="active" href="?aca='.$aca.'&page='.$page.'">'.$page.'</a></li>';
							}else{
								echo '<li><a class="" href="?aca='.$aca.'&page='.$i.'">'.$i.'</a></li>';
							}
						}
					?>
					<?php if ($page == $pagecounts){?>
                    <li> <a class="not-allowed" disabled="" onclick="?aca=<?=$aca?>&toPage(<?=$pagecounts?>)">
                            <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        </a>
                    </li>
					<?php }?>
					<?php if ($page < $pagecounts){?>
                    <li> <a class="allowed" disabled="" onclick="?aca=<?=$aca?>&toPage(<?=$pagecounts?>)">
                            <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        </a>
                    </li>
					<?php } ?>
                </ul>
			<?php } ?>
			</div>
			
            <!-- //pagination -->
        </div>
    </div>
    <!-- //courses section -->

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
	<!--//PAGE-->
	<script>
	function toPage(p){
		location.href = "?page=" + p;
	}
	</script>
	<!--//PAGE-->
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