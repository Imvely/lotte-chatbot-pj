<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="keywords" content="롯데, LOHB's, 롭스, LOHB's 공식 사이트 LOHB's, Brand, Health, Beauty" />
    <meta name="description" content="LOHB's 브랜드 사이트" />
    <title>LOHB&#039;s</title>
    <!-- #Start Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<!-- #End Bootstrap -->
  	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/lohbs.css" type="text/css">
    <link href="/img/favicon/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/lohbs.js"></script>
    <script type="text/javascript">
	    $(document).ready(function(){
	    	var filter = "win16|win32|win64|mac|macintel";
	    	var pageReferrer = document.referrer;
	    	if(0 > filter.indexOf(navigator.platform.toLowerCase())){    		
	    		window.location.href = "https://m.lohbs.co.kr";		
			}	    	
	    });		
	</script>
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/ie9.js"></script>
    <![endif]-->
    <!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5TQBJ5N');</script>
	<!-- End Google Tag Manager -->
</head>
<body>
    <div id="lohbsWrap">
        <div id="lohbsIndex">
            <a href="lohbs_mobile.jsp"><span>롭스 모바일 소개 바로가기</span></a>
            <a href="lohbs_store.jsp"><span>롭스 매장 소개 바로가기</span></a>
            <a href="lohbs_customer.jsp"><span>고객문의 바로가기</span></a>
        </div>
        <div id="btn_top"></div>
        <header id="lohbsHead">
        	<h1 class="lohbsLogo">
                <a href="index.jsp"><img src="/img/logo/lohbs_logo_white.png" alt="lohbs logo"></a>
            </h1>
            <div class="store lohbsMimg"></div>
            <div class="customer lohbsMimg"></div>
            <div class="inner">                
            </div>

	        <form action="/imall/search" method="get" style="margin-top: 30px;">
	            <input type="search" class="" name="search" placeholder=" 상품 또는 코드를 검색하세요. (해당몰 검색)" style="width: 320px; height: 28px;">
	          <input type="submit" class="btn btn-default" value="검색">
	          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        </form>
        </header>


    <div class="pop_bg"></div>
        <footer id="lohbsFooter">
        	<div class="innerWrap">
        		<div class="lohbsTerms">
        			<ul>
        				<li class="provision01"><a href="javascript:;">개인정보취급(처리)방침</a></li>
        				<li class="provision02"><a href="javascript:;">영상정보관리방침</a></li>
        				<li class="provision03"><a href="javascript:;">이용약관</a></li>
        			</ul>
        		</div>

            	<address>롯데쇼핑(주) H&amp;B 사업본부 (롭스)&nbsp;&nbsp;&nbsp;&nbsp;대표 : 강성현&nbsp;&nbsp;&nbsp;&nbsp;138-727 서울 송파구 올림픽로 269 롯데캐슬골드 3층 LOHB's</address>
            	<p>롭스사업자등록번호 : 104-85-27026&nbsp;&nbsp;&nbsp;&nbsp;개인정보관리책임자 : 이기욱 상무&nbsp;&nbsp;&nbsp;&nbsp;고객센터 : 080-030-7777<br>상품 입점 문의 : <a href="mailto:LOHBSMD@lotte.net" title="새창 열림">LOHBSMD@LOTTE.NET</a>&nbsp;&nbsp;&nbsp;&nbsp;점포 개발 문의 : 02-6070-6564</p>
            	<p class="copy">COPYRIGHT © 2015 LOTTESHOPPING Co., LTD. ALL RIGHTS RESERVED.</p>
            </div>
        </footer>
    </div>

<!--  <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-79492934-2', 'auto');
	  ga('send', 'pageview');
	
	</script> -->
</body>
</html>