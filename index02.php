<?php
session_start();
include("funcs.php");
sschk();
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="author" content="Benaissa Ghrib" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>BM studio</title>

<!--Stylesheet-->

<!--[if IE 7]>
<link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->

<link href="css/font.css" rel="stylesheet" type="text/css">
<link href="css/fontello.css" rel="stylesheet" type="text/css">
<link href="css/base.css" rel="stylesheet" type="text/css">
<link href="css/skeleton.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/magnific-popup.css" rel="stylesheet"  />
<link href="css/flexslider.css" rel="stylesheet" />

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if lt IE 8]>
<style>
/* For IE < 8 (trigger hasLayout) */
.clearfix {
    zoom:1;
}
</style>
<![endif]-->

</head>

<body>

<!-- Preloader -->
<div id="loader">
	<div id="loaderInner"></div>
</div>

<!--Wrapper-->
<div id="wrapper">
	<!--Header-->
	<header id="header">		
		<!--Main header-->
		<div class="mainHeader">								
			<!--Container-->
			<div class="container clearfix">
				<div class="one-third column">
					<!--Logo-->
					<div class="logo">
					<a href="#wrapper"><h1>BMstudio</h1></a>
					</div>
					<!--End logo-->
				</div>						
				<div class="two-thirds column">
					<!--Navigation-->
					<nav id="mainNav" >
						<a href="#" class="mobileBtn" ><i class="icon-menu"></i></a>
						<ul>
							<li><a href="#about">About us</a></li>
							<li><a href="#services">Services</a></li>
							<li><a href="#portfolio">Portfolio</a></li>
							<li><a href="#contact">Contact</a></li>
                            <li><a href="list.php">Work list</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</nav>
					<!--End navigation-->		
				</div>
				<!--End container-->								
			</div>
			<!--End main header-->		
		</div>
	</header>
	<!--End header-->	
		
	<!--Slider-->
	<div class="slider">		
		<!--Main slider-->
		<div class=" mainSlider flexslider">												
			<ul class="slides">
				<li><img src="images/sliderImages/slide1.jpg" alt=""/>
				<div class="caption">
					<h1><font color="#ffffff"><span class="new">BMstudio</span> is all about design passion </font></h1>	
				</div>
				</li>
				<li><img src="images/sliderImages/slide2.jpg" alt="" />
					<div class="caption">
						<h1><font color="#ffffff">Crafted and designed with <span class="new">BMstudio</span></font></h1>	
					</div>	
				</li>				
				<li><img src="images/sliderImages/slide3.jpg" alt="" />
					<div class="caption">
						<h1><font color="#ffffff"><span class="new">BMstudio</span> is all about design passion2 </font></h1>	
					</div>	
				</li>
				<li><img src="images/sliderImages/slide4.jpg" alt="" />
					<div class="caption">
						<h1><font color="#ffffff">Crafted and designed with <span class="new">BMstudio</span></font></h1>	
					</div>	
				</li>
			</ul>									
		</div>
		<!--End main slider-->
	</div>
	<!--End  slider-->	
	
	<!--About section-->
	<section id="about" class="offset section">						
			<!--Inner content-->
			<div class="innerContent bottom2">					
				<!--Container-->
				<div class="container clearfix">					
					<div class="sixteen columns">
						<h1 class="titleBig">About Us</h1>
						<p class="intro"><span class="black">"依頼内容に潜む問題を解決する"</span> </p>
						<p class="intro">私たちは単に「かっこいい」「おしゃれ」な動画を追求するのではなく、「依頼内容に潜む問題を解決する」をテーマに映像制作をしています。</p>
						<p class="intro">なぜ映像が必要なのか、映像を制作した後でどういう結果を導ければよいのか。</p>
						<p class="intro">こういった本質に丁寧に向き合っていく映像制作チームです。</p>												
						<div class="ctl">
							<a class="regButton" href="#portfolio"><i class="icon-picture"></i>our portfolio</a>
						</div>	
					</div>
				</div>
				<!--End container-->				
			</div>
			<!--End inner content-->									
	</section>
	<!--End about section-->
					
	<!--Services section-->
	<section id="services" class="offset section">
		<!--Inner content-->
		<div class="innerContent ">
			<!--Container-->
			<div class="container clearfix">												
				<div class="sixteen columns">
					<h1 class="titleBig">our services</h1>
				</div>																		
				<!--Service-->	
				<div class="one-third column service bottom3">
					<h3>映像制作</h3>
						<p>単に「かっこいい」や「トレンド」だけを追求するのではなく、しっかりとご依頼の問題解決という部分にフォーカスして映像制作に取り組みます。</p>
				</div>
				<!--End service-->							
				<!--Service-->	
				<div class="one-third column service bottom3">
					<h3>人物撮影</h3>
						<p>宣材写真は仕事への本気度を見る指標と言われます。お顔や雰囲気だけではなく、写真に手間をかけられる人
							という安心感を作ります。</p>
				</div>
				<!--End service-->							
				<!--Service-->	
					<div class="one-third column service bottom3">
						<h3>商品撮影</h3>
							<p>プロ仕様の機材の中から、商品に合わせたレンズを使って魅力を最大限に引き出す写真をお撮りいたします。ECサイトはもちろん、ポスターなどに拡大してご利用いただけます。</p>
					</div>
				<!--End service-->		
			</div>
			<!--End container-->
		</div>
		<!--End inner content-->	
	</section>
	<!--End facts section-->
																														
	<!--Portfolio section-->
	<section id="portfolio" class="offset section">
		<!--Inner content-->
		<div class="innerContent bottom4">
		<!--Container-->
		<div class="container clearfix">																																
			<div class="sixteen columns">
				<h1 class="titleBig">portfolio</h1>
			</div>																						
			<!--Container-->
			<div class="container clearfix">
				<div class="two-thirds column bottom4 item">
					<a href="https://www.google.com/">
						<div class="desc">
							<h3 class="projDesc">GWおでかけCM風 <span>&#8213; animation movie &#8213;</span></h3>														
						</div>
						<img src="images/portfolioImages/athletic.png" alt="">
					</a>													
				</div>																																			
				<div class="one-third column  item bottom4">
					<a href="images/portfolioImages/wb3.jpg" class="folio">
						<div class="desc">
							<h3 class="projDesc">CandleStudio Lepta <span>&#8213; image movie &#8213;</span></h3>
						</div>
						<img src="images/portfolioImages/candle.png" alt="">
					</a>												
				</div>											
			</div>
			<!--End container-->
			
			<!--Container-->
			<div class="container clearfix">
													
				<div class="one-third column  item bottom4">
					<video width="300" height="220" controls>
						<source src="images/portfolioImages/gw.mp4" type="video/mp4">
						お使いのブラウザはvideoタグをサポートしていません。
					</video>
				</div>
														
				<div class="one-third column  item bottom4">
					<video width="300" height="220" controls>
						<source src="images/portfolioImages/mystage.mp4" type="video/mp4">
							お使いのブラウザはvideoタグをサポートしていません。
					</video>
				</div>
																
				<div class="one-third column  item bottom4">
					<video width="300" height="220" controls>
						<source src="images/portfolioImages/lepta.mp4" type="video/mp4">
						お使いのブラウザはvideoタグをサポートしていません。
					</video>
				</div>
			</div>
			<!--End container-->
												
			</div>
			<!--End container-->																
		</div>
		<!--End inner content-->		
	</section>
	<!--End portfolio section-->

	<div class="margin"></div>	
																								
	<!--Contact section-->
	<section id="contact" class="offset section">
		<!--Inner content-->
		<div class="innerContent">
			<!--Container-->
			<div class="container clearfix">
				<div class="sixteen columns">
					<h1 class="titleBig">contact us</h1>
				</div>											
				<div class="one-third column info">
					<h2>Office Work Hours</h2>
					<ul class="workHours">
						<li>平日 : <span>09am - 18pm</span></li>
						<li>土日祝 : <span>closed</span></li>
					</ul>
				</div>											
				<div class="two-thirds column contactForm">
					<h2>Get In Touch With Us</h2>
					<p>映像制作のご依頼・ご相談など、なんでもお気軽にお問い合わせください。</p>
					<p>下記フォームよりわかる範囲でご記入ください。</p>
					<p>また一緒に活動したいという映像クリエイター、美術スタッフも随時募集しております。</p>
					<p>お気軽にお声がけください。</p>														
					<div class="cForm">
						<form method="post" action="send.php">
							<p>
								<label for="name">Name <span class="required">*</span></label>
								<input type="text" name="name" id="name">
							</p>
							<p>
								<label for="email">Email <span class="required">*</span></label>
								<input type="text" name="email" id="email">
							</p>
							<p>
								<label for="subject">Subject</label>
								<input type="text" name="subject" id="subject">
							</p>
							<p>
								<label for="subject">Message <span class="required">*</span></label>
								<textarea name="message" id="message" cols="45" rows="10"></textarea>
							</p>
							<div id="submit" class="regButton"><i class="icon-mail"></i>Send message</div>
						</form>
						<div id="success"><h2>Your message has been sent. Thank you!</h2></div>
						<div id="error"><h2>Sorry your message can not be sent.</h2></div>
					</div>																												
				</div>																																	
			</div>
			<!--End container-->
		</div>
		<!--End inner content-->
	</section>												
	<!--End contact section-->
																				
	<!--Footer-->				
	<footer class="footer  offset">										
		<!--Top footer-->
		<div class="topFooter">
			<!--Container-->
			<div class="container clearfix">
				<div class="four columns widget">
					<h2>Adresse</h2>
					<p>BM studio<br>
					東京都新宿区四谷4-18-66<br>
					アトリエ三つ葉2F</p>
				</div>																								
				<div class="four columns widget">
					<h2>Social by BMstudio</h2>
					<ul>
						<li><a href="https://www.youtube.com/@bmstudio1003">YouTube</a></li>
						<li><a href="https://www.instagram.com/bms_chieco/">Instagram</a></li>
						<li><a href="https://vimeo.com/user189815510">Vimeo</a></li>
						<li><a href="https://twitter.com/bmstudio_cs">X</a></li>
					</ul>
				</div>																										
				<div class="four columns widget">
					<h2>Social by Mystage</h2>																																													
					<ul>
						<li><a href="https://www.youtube.com/@mystage_bms">YouTube</a></li>
						<li><a href="https://www.instagram.com/mystage_bms/">Instagram</a></li>
					</ul>
				</div>																												
				<div class="four columns widget">
					<h2>Our Email</h2>																														
					<ul>
						<li><a href="#">compagny@gmail.com</a></li>
						<li><a href="#">support@domainename.com</a></li>
					</ul>
				</div>										
			</div>
			<!--End container-->
		</div>
		<!--End top footer-->
										
		<!--Bottom footer-->
		<div class="bottomFooter">
			<!--Container-->
			<div class="container clearfix">
				<div class="eight columns">
					<p>© 2023 <span class="bLogo">BMstudio</span> All Rights Reserved.</p>
				</div>													
			</div>
			<!--End container-->
		</div>
		<!--End bottom footer-->																				
	</footer>					
	<!--End footer-->
								
</div>
<!--ENd wrapper-->

<!--Javascript-->
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="js/jquery-migrate-1.2.1.js"></script>
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-min.js" type="text/javascript"></script>
<script src="js/waypoints.js" type="text/javascript"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.ui.totop.min.js" type="text/javascript"></script>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="js/jquery.appear.min.js"></script>
<script src="js/jquery.timer.js"></script>
<script src="js/script.js" type="text/javascript"></script>

<!-- Google analytics -->

<!-- End google analytics -->

</body>
</html>