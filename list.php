<?php
session_start();
//【重要】
//insert.phpを修正（関数化）してからselect.phpを開く！！
include("funcs.php");
sschk();
$pdo = db_conn();

//２．データ登録SQL作成
$sql = "SELECT * FROM gs_kadai09";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//３．データ表示
$values = "";
if($status==false) {
  sql_error($stmt);
}

//全データ取得
$values =  $stmt->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード]
$json = json_encode($values,JSON_UNESCAPED_UNICODE);

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
							<li><a href="work">Work list</a></li>
							<?php if($_SESSION["kanri_flg"]=="1"){ ?><li><a href="#registration">Work registration</a></li><?php } ?>
							<li><a href="#signup">Sign up</a></li>
							<li><a href="index02.php">Top page</a></li>
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

    <div class="margin"></div>

	<!--work section-->
    <section id="work" class="offset section">
	<!--Inner content-->
	<div class="innerContent bottom2">
		<!--Container-->
		<div class="container clearfix">
            <div class="sixteen columns">
				<h1 class="titleBig">Work List</h1>
			</div>
            <div class="card-container">
                <?php foreach($values as $value){ ?>
                    <div class="card">
                        <p><strong><?=$value["day"]?> / <?=$value["address01"]?></strong></p>
                        <p><strong><?=$value["title"]?></strong></p>
                        <p><?=$value["naiyou"]?></p>
                        <p><?=$value["address01"]?><?=$value["address02"]?></p>
                        <p><?=$value["indate"]?></p>
                        <td><a href="list.php?id=<?=h($value["id"])?>" class="linkds">詳細</a></td>
                        <?php if($_SESSION["kanri_flg"]=="1"){ ?>
                        <td><a href="detail.php?id=<?=h($value["id"])?>" class="linkds">更新</a></td>
                        <td><a href="delete02.php?id=<?=h($value["id"])?>" class="linkds">削除</a></td>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    </section>
	<!--End about section-->

	<?php if($_SESSION["kanri_flg"]=="1"){ ?>
	<!--registration section-->
	<section id="registration" class="offset section">
		<!--Inner content-->
		<div class="innerContent">
			<!--Container-->
			<div class="container clearfix">
				<div class="sixteen columns">
					<h1 class="titleBig">Work registration</h1>
				</div>											
				<div class="one-third column info">
					<h2></h2>
					<ul class="workHours">
						<li>管理者メニュー</li>
						<li><span>　求人登録と更新ができます</span></li>
						<li><span>　管理用IDでログイン時のみ表示</span></li>
					</ul>
				</div>											
				<div class="two-thirds column contactForm">													
					<div class="cForm">
					<form method="POST" action="insert.php" enctype="multipart/form-data"  id="workForm">
							<p>
								<label for="name">日程 </label>
								<input type="date" name="day">
							</p>
							<p>
								<label for="name">場所（市区町村まで） </label>
								<input type="text" name="address01">
							</p>
							<p>
								<label for="name">場所（市区町村以下） </label>
								<input type="text" name="address02">
							</p>
							<p>
								<label for="name">職種/人数 </label>
								<input type="text" name="title">
							</p>
							<p>
								<label for="name">詳細 </label>
								<textarea name="naiyou" cols="45" rows="10"></textarea>
							</p>
							<p>
								<label for="name">登録者名 </label>
								<input type="text" name="name">
							</p>
							<div id="submit" class="regButton"  onclick="submitWorkForm()">Submit</div>
						</form>
					</div>																												
				</div>																																	
			</div>
			<!--End container-->
		</div>
		<!--End inner content-->
	</section>												
	<!--End contact section-->
	<?php } ?>







	<!--signup section-->
	<section id="signup" class="offset section">
		<!--Inner content-->
		<div class="innerContent">
			<!--Container-->
			<div class="container clearfix">
				<div class="sixteen columns">
					<h1 class="titleBig">Sign up</h1>
				</div>											
				<div class="one-third column info">
					<h2></h2>
					<ul class="workHours">
						<li>ID登録</li>
						<li><span>　管理用IDでログイン時のみ</span></li>
						<li><span>　管理フラグチェックができます</span></li>
					</ul>
				</div>											
				<div class="two-thirds column contactForm">													
					<div class="cForm">
					<form method="post" action="user_insert.php" id="signupForm">
							<p>
								<label for="name">名前 </label>
								<input type="text" name="name">
							</p>
							<p>
								<label for="name">ID </label>
								<input type="text" name="lid">
							</p>
							<p>
								<label for="name">PASSWORD </label>
								<input type="text" name="lpw">
							</p>
							<p>
                            <?php if($_SESSION["kanri_flg"]=="1"){ ?>
                            <label>管理FLG：
                                一般<input type="radio" name="kanri_flg" value="0">　
                                管理者<input type="radio" name="kanri_flg" value="1">
                            </label>
                            <?php } ?>
							</p>
							<div id="submit" class="regButton"  onclick="submitSignupForm()">Submit</div>
						</form>
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
<script>
	const a = '<?php echo $json; ?>';
	console.log(JSON.parse(a));
</script>
<script>
	function submitWorkForm() {
		document.getElementById('workForm').submit();
	}
</script>
<script>
	function submitSignupForm() {
		document.getElementById('signupForm').submit();
	}
</script>
</body>
</html>