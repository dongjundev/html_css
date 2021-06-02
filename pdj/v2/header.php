<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">

  <!-- 반응형 (기기 해상도별) -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0, maximum-scale=1.0, user-scalable=yes">
  
  <title>첼시FC</title>

<script src="./js/jquery-1.12.4.min.js"></script>
<script src="./js/jquery-ui.min.js"></script>

<script src="./js/swiper.min.js"></script>
<link rel="stylesheet" href="./js/swiper.min.css">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- 스크롤시 fixed -->
<script src="./js/autofix.js"></script>

<!-- fullpage -->
<script src="./js/fullpage.min.js"></script>
<link rel="stylesheet" href="./js/fullpage.min.css">


<link rel="stylesheet" href="./css/style.css">
<!-- 모바일 -->
<link rel="stylesheet" media="screen and (max-width: 480px)" href="./css/480.css">
<!-- 태블릿 세로 -->
<link rel="stylesheet" media="screen and (max-width: 481px) and (max-width: 720px)" href="./css/720.css">
<!-- 태블릿 가로 -->
<link rel="stylesheet" media="screen and (max-width: 721px) and (max-width: 1024px)" href="./css/1024.css">
<!-- pc -->
<link rel="stylesheet" media="screen and (max-width: 1025px)" href="./css/pc.css">

</head>

<body>

<!-- 모바일 메뉴 -->
<div class="m-menu">
	<div>
		<a href="#none">
			<span></span>
			<span></span>
			<span></span>
		</a>
	</div>
</div>

<script>
	$('.m-menu a').click( 
	function(){
		$(this).toggleClass('active');
		$('html').toggleClass('active');
		}
	)
</script>



<!-- 콘텐츠 시작 -->


<!-- autofix 스크롤시 fixed 클래스 추가 -->
<script>
$(document).ready( function() {
	$(".header").autofix_anything();
	});
</script>

<!-- <div class="header">
로고, 메뉴
	<div class="header-box">
		<h1><a href="./index.html"><img src="./img/logo.png"></a></h1>

		<div class="tnb">
			<ul>
				<li><a href="#none">로그인</a></li>
				<li><a href="#none">회원가입</a></li>
				<li><a href="#none">로그아웃</a></li>
				<li><a href="#none">정보수정</a></li>
			</ul>
		</div>

		<div class="gnb">
			<ul>
				<li><a href="#none">회사소개</a></li>
				<li><a href="./bbs/notice_list.html">고객센터</a>
					<ul class="submenu">
						<li><a href="./bbs/notice_list.html">공지사항</a></li>
						<li><a href="./bbs/free_list.html">자유게시판</a></li>
						<li><a href="./bbs/gallery_list.html">갤러리</a></li>
					</ul>
				</li>
				<li><a href="#none">예약하기</a></li>
				<li><a href="#none">예약확인</a></li>
			</ul>
		</div>
	</div>



</div> -->

<!-- 상단 헤더 -->
<div class="header">
	<div>
		<div class="logo">
			<h1><a href="./index.html"><img src="./img/logo.png"></a></h1>
		</div>

		<div class="top-btn">
			<ul>
				<!-- 로그인 후 
				<li><a href="./member/login.html">로그아웃</a></li>
				<li><a href="./member/join.html">회원정보수정</a></li>
				-->
				<!-- 로그인 전-->
				<li><a href="./member/login.html">로그인</a></li>
				<li><a href="./member/join.html">회원가입</a></li>
				<!-- 관리자 로그인시 -->
				<li><a href="./adm/set.html">관리자</a></li>
			</ul>
		</div>
	</div>
</div>

<!-- 메뉴 -->
<div class="menu">
	<div>
		<ul>
			<li>
				<a href="#none">회사소개</a>
				<ul class="submenu">
					<li><a href="./about/intro.html">회사소개</a></li>
					<!-- <li><a href="./page/intro.html">회사소개</a></li> -->
					<li><a href="./about/location.html">오시는길</a></li>
				</ul>
			</li>
			<li>
				<a href="#none">게시판</a>
				<ul class="submenu">
					<li><a href="./bbs/notice_list.html">공지사항</a></li>
					<li><a href="./bbs/free_list.html">자유게시판</a></li>
					<li><a href="./bbs/gallery_list.html">갤러리</a></li>
				</ul>
			</li>
			<li><a href="./booking/list.html">예약하기</a></li>
			<li><a href="./member/mypage.html">마이페이지</a></li>
		</ul>
	</div>
</div>




