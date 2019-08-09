<!doctype html>
<html lang="en">
<head>
	<title>WELLFORT</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Website Description">
	<meta name="keywords" content="Website, Keywords">
	<meta name="author" content="Webmaster">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/slick-theme.css">
	<link rel="stylesheet" href="css/common.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/common.js"></script>
</head>
<body>
	
	<?
		include_once("header.php");
	?>
	<article>
		<div class="mmain">
			<p class="mmaincont">웰포트의 가치관에 대한 두 줄 정도<br>웰포트의 가치관에 대한 두 줄 정도</p>
			<a href="javascript:;" class="mmainbtn">웰포트 소개</a>
		</div>
		<div class="slider">
			<div class="slicks">
				<a href="javascript:;" class="slickitem">
					<img src="img/slide1.jpg">
				</a>
				<a href="javascript:;" class="slickitem">
					<img src="img/slide2.jpg">
				</a>
				<a href="javascript:;" class="slickitem">
					<img src="img/slide3.jpg">
				</a>
			</div>
		</div>
		<div class="business">
			<div class="wrap">
				<h1>PRODUCTS</h1>
				<h2>간단히 제품군에 대한 소개 문구 두세 줄<br>간단히 제품군에 대한 소개 문구 두세 줄 간단히 제품군에 대한 소개 문구 두세 줄</h2>
				<div class="prodwrap">
					<div class="busiitem">
						<span class="busishade"></span>
						<img src="img/thread1.png">
						<span class="busitext">
							<span class="busititle">쓰레드</span>
							<span class="busicontent">아이템 설명<br>아이템 설명 아이템 설명</span>
							<a href="javascript:;" class="busibtn">자세히 보기</a>
						</span>					
					</div>
					<div class="busiitem">
						<span class="busishade"></span>
						<img src="img/cream1.png">
						<span class="busitext">
							<span class="busititle">재생크림</span>
							<span class="busicontent">아이템 설명<br>아이템 설명 아이템 설명</span>
							<a href="javascript:;" class="busibtn">자세히 보기</a>
						</span>					
					</div>
					<div class="busiitem">
						<span class="busishade"></span>
						<img src="img/filler1.png">
						<span class="busitext">
							<span class="busititle">필러</span>
							<span class="busicontent">아이템 설명<br>아이템 설명 아이템 설명</span>
							<a href="javascript:;" class="busibtn">자세히 보기</a>
						</span>					
					</div>
					<div class="busiitem">
						<span class="busishade"></span>
						<img src="img/filler_plus.png">
						<span class="busitext">
							<span class="busititle">필러 플러스</span>
							<span class="busicontent">아이템 설명<br>아이템 설명 아이템 설명</span>
							<a href="javascript:;" class="busibtn">자세히 보기</a>
						</span>					
					</div>
				</div>				
			</div>
		</div>
		<div class="partners">
			<div class="wrap">
				<h1>PARTNERS</h1>
				<h2>간단히 파트너쉽에 대한 문구 두세 줄<br>간단히 파트너쉽에 대한 문구 두세 줄 간단히 제품군에 대한 소개 문구 두세 줄</h2>
				<div class="partnerlist">
					<img src="img/worldmap.png">
				</div>			
			</div>
		</div>
		<? include_once('contact.php') ?>
	</article>
		
	
	<? include_once('footer.php') ?>
	
	<script>
	$('.slicks').slick({
		  dots: true,
		  arrows: false,
		  infinite: true,
		  speed: 1000,
		  autoplay: true,
		  autoplaySpeed: 3000
	});
	</script>
</body>
</html>