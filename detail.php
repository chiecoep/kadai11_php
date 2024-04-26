<?php
$id = $_GET["id"];

//１．PHP
include("funcs.php");
$pdo = db_conn();

//２．データ登録SQL作成
$sql = "SELECT * FROM gs_kadai09 WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id , PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$values = "";
if($status==false) {
  sql_error($stmt);
}

//全データ取得
$v    =  $stmt->fetch(); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード]
// $json = json_encode($values,JSON_UNESCAPED_UNICODE);
?>
<!--
２．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
理由：入力項目は「登録/更新」はほぼ同じになるからです。
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->
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
						<li><span>　データの更新ができます</span></li>
					</ul>
				</div>											
				<div class="two-thirds column contactForm">													
					<div class="cForm">
					<form method="POST" action="update.php" enctype="multipart/form-data" id="workForm">
    					<input type="hidden" name="id" value="<?=$v["id"]?>">
					
							<p>
								<label for="name">日程 </label>
								<input type="date" name="day" value="<?=$v["day"]?>">
							</p>
							<p>
								<label for="name">場所（市区町村まで） </label>
								<input type="text" name="address01" value="<?=$v["address01"]?>">
							</p>
							<p>
								<label for="name">場所（市区町村以下） </label>
								<input type="text" name="address02" value="<?=$v["address02"]?>">
							</p>
							<p>
								<label for="name">職種/人数 </label>
								<input type="text" name="title" value="<?=$v["title"]?>">
							</p>
							<p>
								<label for="name">詳細 </label>
								<textarea name="naiyou" cols="45" rows="10"><?=$v["naiyou"]?></textarea>
							</p>
							<p>
								<label for="name">登録者名 </label>
								<input type="text" name="name" value="<?=$v["name"]?>">
							</p>
							<div id="submit" class="regButton"  onclick="submitWorkForm()">更新</div>
							<div id="submit" class="regButton"  onclick="location.href='list.php'">戻る</div>
						</form>
					</div>																												
				</div>																																	
			</div>
			<!--End container-->
		</div>
		<!--End inner content-->
	</section>												
	<!--End contact section-->


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

<script>
	function submitWorkForm() {
		document.getElementById('workForm').submit();
	}
</script>

</body>
</html>



