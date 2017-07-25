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
            <div class="intro lohbsMimg">
            	<p class="lohbsMtitle"><span>LOHB's</span></p>
            	<p class="lohbsStitle">롭스는 Health와 Beauty가 만나 창조하는 다이내믹한 새로움과 유니크한 변화를 제안합니다.<br />신개념 H&B 문화와 건강한 라이프스타일을 만나보세요.</p>
            </div>
            <div class="mobile lohbsMimg">
            	<div class="innerWrap">
	            	<div class="mobileMimg"></div>
	            	<p class="lohbsMtitle"><span>LOHB's Mobile</span></p>
	            	<p class="lohbsStitle">새로운 H&B LIFE STYLE을 만드는 롭스 쇼핑앱<br />이제 롭스 모바일앱 & 웹에서 쇼핑과 다양한 혜택을 즐기세요!<span class="line"></span>지금 모바일앱 설치하고, 바로 쇼핑 하세요!</p>
	            	<ul>
	            		<li class="appStore"><a href="https://appsto.re/kr/fWchdb.i" target="_blank"><img alt="앱스토어 바로가기" src="/img/btn/app.png"></a></li>
	            		<li class="googleStore"><a href="https://play.google.com/store/apps/details?id=kr.co.lohbs.app.android" target="_blank"><img alt="구글마켓 바로가기" src="/img/btn/android.png"></a></li>
	            		<li class="qrcode"><img alt="QR 바로가기" src="/img/btn/qr.png"></li>
	            	</ul>
            	</div>
            </div>
            <div class="store lohbsMimg"></div>
            <div class="customer lohbsMimg"></div>
            <div class="inner">                
                <div class="lohbsGnb">
                    <ul>
                        <li class="test"><a href="index.jsp">롭스 소개</a></li>
                        <li><a href="lohbs_mobile.jsp">롭스 모바일</a></li>
                        <li><a href="lohbs_store.jsp">롭스 매장</a></li>
                        <li><a href="lohbs_customer.jsp">고객문의</a></li>
                    </ul>
                </div>
            </div>
        </header>
	<script>
		$(document).ready(function(){
			$(".lohbsGnb ul li").eq(0).addClass("on");
			$("#lohbsHead .lohbsMimg").eq(0).css("display","block");
		});
	</script>
    <div id="lohbsContents">
        <article class="lohbsIntro">
            <section class="lohbsSns">
	            <div class="innerWrap">
	            	<div class="snsList">
	            		<ul>
	            			<li class="double"><img alt="sns채널소개" src="/img/sns/s0.png"></li>
	            			<li><img alt="뷰티제품 이미지" src="/img/sns/s1.jpg"></li>
	            			<li class="facebook"><a href="https://www.facebook.com/Lovelohbs/?ref=br_rs" target="_blank"><img alt="페이스북" src="/img/sns/s2.png"></a></li>
	            			<li class="kakao"><img alt="카카오톡" src="/img/sns/s3.png"></li>
	            			<li><img alt="뷰티제품 이미지" src="/img/sns/s4.jpg"></li>
	            			<li class="insta"><a href="https://www.instagram.com/lovelohbs/" target="_blank"><img alt="인스타그램" src="/img/sns/s5.png"></a></li>
	            			<li class="youtube"><a href="https://www.youtube.com/lovelohbs/" target="_blank"><img alt="유투브" src="/img/sns/s9.png"></a></li>
	            			<li class="empty"></li>
	            			<li class="blog"><a href="http://blog.naver.com/lohbs" target="_blank"><img alt="네이버블로그" src="/img/sns/s6.png"></a></li>
	            			<li><img alt="뷰티제품 이미지" src="/img/sns/s7.jpg"></li>
	            			<li class="tvcast"><a href="http://tvcast.naver.com/lohbstv" target="_blank"><img alt="TV캐스트" src="/img/sns/s8_2.png"></a></li>
	            		</ul>
	            	</div>
            	</div>
            </section>
            <section class="lohbsStory">
           		<div class="storyHeader">
            		<div class="innerWrap">
            			<h3>Brand Story</h3>
            			<p>롭스는 헬스와 뷰티의 조화를 통해 다이나믹하고<br />유니크한 라이프 스타일을 만들어가는 H&B 전문 유통브랜드입니다.</p>
            		</div>
           		</div>
           		<div class="storyContents">
           			<div class="storyValue">
           				<ul>
           					<li class="v_slogan">
           						<span></span>
           						<h4>Slogan</h4>
           						<p>LOVE HEALTH & BEAUTY, LOHB's<br />진정한 아름다움은 진정한 건강함에서 비롯됩니다.</p>
           					</li>
           					<li class="v_mission">
           						<span></span>
           						<h4>Mission</h4>
           						<p>고객의 건강과 본연의 아름다움을 실현하는<br />최상의 가치를 제공한다.</p>
           					</li>
           					<li class="v_vision">
           						<span></span>
           						<h4>Vision</h4>
           						<p>2018 대한민국 NO.1<br />HEALTH & BEAUTY 전문기업.</p>
           					</li>
           					<li class="philosophy">
           						<span></span>
           						<h4>Philosophy</h4>
           						<p>언제나, 누구에게나, 한결같은 아름다움의 가치를 선사하는 롭스의 마음입니다.</p>
           					</li>
           				</ul>
           			</div>
           			<div class="storyPurpose">
           				<ul>
           					<li><img alt="Trand" src="/img/main/vs1.jpg"></li>
           					<li class="center"><img alt="Experience" src="/img/main/vs2.jpg"></li>
           					<li><img alt="Friendly" src="/img/main/vs3.jpg"></li>
           				</ul>
           			</div>
           		</div>
            </section>            
            <section class="lohbsValue">
            	<div class="valueHeader">
            		<div class="innerWrap">
            			<h3>Value</h3>
            			<p>롭스는 헬스와 뷰티의 조화를 통해 다이나믹하고<br />유니크한 라이프 스타일을 만들어 가는 H&B 전문 유통브랜드입니다.</p>
            		</div>
            	</div>
            	<div class="valueContents">
            		<div class="innerWrap">
	            		<ul>
	            			<li class="value01">
	            				<span></span>         				
	            				<div class="valueOffer">
	            					<p class="valueNum">01</p>
	            					<img alt="고객중심" src="/img/main/value_01.png">
	            					<p class="offerTitle">CUSTOMER FOCUS<br /><strong>고객중심</strong></p>
	            					<p>고객이 원하는 것을 고객 입장에서 이해하고 차별<br />적인 즐거움을 주는 제품과 서비스를 제공하여<br />고객의 신뢰를 얻는 것</p>
	            				</div>	            				
	            			</li>
	            			<li class="value02">
	            				<span></span>	            				
	            				<div class="valueOffer">
	            					<p class="valueNum">02</p>
	            					<img alt="창의성" src="/img/main/value_02.png">
	            					<p class="offerTitle">ORIGINALTY<br /><strong>창의성</strong></p>
	            					<p>고정관념에 사로잡혀 있지 않은지 스스로 점검하고<br />끊임없는 혁신을 통해 새로운 사업기회를 모색하여<br />다양성이 존중 받는 조직으로 만들어 가는 것</p>
	            				</div>	            				
	            			</li>
	            			<li class="value03">
	            				<span></span>
	            				<div class="valueOffer">
	            					<p class="valueNum">03</p>
	            					<img alt="협력" src="/img/main/value_03.png">
	            					<p class="offerTitle">PARTNERSHIP<br /><strong>협력</strong></p>
	            					<p>장기적으로 이익을 가져올 수 있는 관점에서<br />이해관계자들과 동반자적 관계를 형성하여<br />더 큰 시너지를 창출하는 것</p>
	            				</div>	            				
	            			</li>
	            			<li class="value04">
	            				<span></span>
	            				<div class="valueOffer">
	            					<p class="valueNum">04</p>
	            					<img alt="책임감" src="/img/main/value_04.png">
	            					<p class="offerTitle">RESPONSIBILTY<br /><strong>책임감</strong></p>
	            					<p>스스로의 일에 주인이라는 생각을 갖고 정직한<br />방법으로 주어진 업무를 완수하여 최고의 성과를<br />이루어 내는 것</p>
	            				</div>	            				
	            			</li>
	            			<li class="value05">
	            				<span></span>
	            				<div class="valueOffer">
	            					<p class="valueNum">05</p>
	            					<img alt="열정" src="/img/main/value_05.png">
	            					<p class="offerTitle">PASSION<br /><strong>열정</strong></p>
	            					<p>불가능은 없다는 도전정신으로 더 높은 목표를<br />달성하기 위해 끝까지 추진하여 업계 최고 전문가와<br />글로벌 리더의 위치를 차지하는 것</p>
	            				</div>	            				
	            			</li>
	            		</ul>
            		</div>
            	</div>
            </section>
            <section class="lohbsCi">
            	<div class="ciHeader">
            		<div class="innerWrap">
	           			<h3>CI</h3>
	           			<p>LOVE HEALTH & BEAUTY STORE의 조합어입니다.<br />간결하고 심플한 서체로 신뢰감을 전달하고 차별화된 H&B를 강조<br />에너지 넘치는 레드 컬러와 명랑하고 유쾌한 오렌지 컬러의 만남으로<br />건강한 아름다움을 상징합니다.</p>
	           			<ul>
	            			<li class="downJpgFile"><a href="file/LOHBS_CI.zip" target="_blank" download ><img alt="jpg 다운" src="/img/btn/ci0.png"></a></li>
	            			<li class="downAiFile"><a href="file/LOHBS_CI_AI.zip" target="_blank" download><img alt="ai 다운" src="/img/btn/ci1.png"></a></li>
	            		</ul>
	           		</div>
            	</div>
            	<div class="ciContents">
	            	<div class="innerWrap">
	            		<ul>
	            			<li><img alt="엠블럼" src="/img/logo/C2.png"></li>
	            			<li><img alt="국문,영문 CI" src="/img/logo/C3.png"></li>
	            		</ul>
            		</div>
            	</div>
            </section>
            <section class="lohbsRecruit">
            	<div class="innerWrap">
           			<h3>Recruit</h3>
           			<p>고객의 건강과 아름다움을 실현하는 H&B 전문기업!<br />저희 롭스와 함께하실 열정적이고, 주도적인 인재를 기다립니다!</p>
           			<div class="recruit_img"></div>
           			<p class="recruit_pop">채용정보 자세히 보기<span>바로가기 아이콘</span></p>
           		</div>
            </section>
        </article>
    </div>

	<div id="popContents"></div>
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
        		<div class="lohbsFamily">
        			<img alt="패밀리사이트" src="/img/btn/btn_family.png">
					<ul class="familyList">
						<li><a href="http://www.lotteapt.net" target="_blank" title="새창열림">&nbsp;- 롯데캐슬</a></li>
						<li><a href="http://www.lotte.co.kr" target="_blank" title="새창열림">롯데그룹</a></li>
						<li><a href="http://www.lottecon.co.kr" target="_blank" title="새창열림">롯데건설</a></li>
						<li><a href="http://www.lottemembers.com" target="_blank" title="새창열림">엘포인트</a></li>
						<li><a href="http://www.daehong.com" target="_blank" title="새창열림">대홍기획</a></li>
						<li><a href="http://www.lottelem.co.kr" target="_blank" title="새창열림">롯데기공</a></li>
						<li><a href="http://www.lotte.com" target="_blank" title="새창열림">롯데닷컴</a></li>
						<li><a href="http://www.llc.co.kr" target="_blank" title="새창열림">롯데로지스틱스</a></li>
						<li><a href="http://www.lotteria.co.kr" target="_blank" title="새창열림">롯데리아</a></li>
						<li><a href="http://www.lotteriamall.com" target="_blank" title="새창열림">&nbsp;- 롯데리아몰</a></li>
						<li><a href="http://www.angelinus.co.kr" target="_blank" title="새창열림">엔제리너스</a></li>
						<li><a href="http://shop.angelinus.co.kr" target="_blank" title="새창열림">&nbsp;- 엔제리너스몰</a></li>
						<li><a href="http://www.lottemart.com" target="_blank" title="새창열림">롯데마트</a></li>
						<li><a href="http://company.lottemart.com" target="_blank" title="새창열림">&nbsp;- 롯데마트 홍보</a></li>				
						<li><a href="http://kr.lottedfs.com" target="_blank" title="새창열림">롯데면세점</a></li>				
						<li><a href="http://www.lottedfs.com" target="_blank" title="새창열림">롯데인터넷면세점</a></li>
						<li><a href="http://www.busanlottedfs.com" target="_blank" title="새창열림">부산롯데인터넷면세점</a></li>
						<li><a href="http://www.lottecorp.com" target="_blank" title="새창열림">롯데물산</a></li>
						<li><a href="http://www.lotteshopping.com" target="_blank" title="새창열림">롯데백화점</a></li>
						<li><a href="http://www.lotteoutlets.com" target="_blank" title="새창열림">&nbsp;- 롯데아울렛</a></li>
						<li><a href="http://www.skyhill.co.kr" target="_blank" title="새창열림">롯데스카이힐 C.C.</a></li>
						<li><a href="http://www.lotteins.co.kr" target="_blank" title="새창열림">롯데손해보험</a></li>
						<li><a href="http://www.3655.co.kr" target="_blank" title="새창열림">&nbsp;- 롯데하우머치</a></li>
						<li><a href="http://www.lottesuper.co.kr" target="_blank" title="새창열림">롯데슈퍼</a></li>				
						<li><a href="http://www.lotteintl.co.kr" target="_blank" title="새창열림">롯데상사</a></li>
						<li><a href="http://www.lottecinema.co.kr" target="_blank" title="새창열림">롯데시네마</a></li>				
						<li><a href="http://www.lottefood.co.kr" target="_blank" title="새창열림">롯데푸드</a></li>
						<li><a href="http://www.lotteasahi.co.kr" target="_blank" title="새창열림">롯데아사히주류</a></li>
						<li><a href="http://www.lotteal.co.kr" target="_blank" title="새창열림">롯데알미늄</a></li>
						<li><a href="http://www.lotteelife.co.kr" target="_blank" title="새창열림">&nbsp;- 롯데이라이프</a></li>				
						<li><a href="http://www.lotteacademy.co.kr" target="_blank" title="새창열림">롯데인재개발원</a></li>	
						<li><a href="http://www.lotteworld.com" target="_blank" title="새창열림">롯데월드</a></li>
						<li><a href="http://www.giantsclub.com" target="_blank" title="새창열림">롯데자이언츠</a></li>
						<li><a href="http://www.lottefoundation.or.kr" target="_blank" title="새창열림">롯데재단</a></li>
						<li><a href="http://www.ldcc.co.kr" target="_blank" title="새창열림">롯데정보통신</a></li>
						<li><a href="http://www.lotteconf.co.kr" target="_blank" title="새창열림">롯데제과</a></li>
						<li><a href="http://www.lotteHealth1.com" target="_blank" title="새창열림">&nbsp;- 헬스원</a></li>
						<li><a href="http://www.natuur.co.kr" target="_blank" title="새창열림">&nbsp;- 나뚜루</a></li>
						<li><a href="http://www.lottejtb.com" target="_blank" title="새창열림">롯데제이티비</a></li>
						<li><a href="http://www.lotteliquor.com" target="_blank" title="새창열림">롯데주류BG</a></li>
						<li><a href="http://www.lotternd.com" target="_blank" title="새창열림">롯데중앙연구소</a></li>
						<li><a href="http://job.lotte.co.kr" target="_blank" title="새창열림">롯데채용센터</a></li>
						<li><a href="http://www.lottechilsung.co.kr" target="_blank" title="새창열림">롯데칠성음료</a></li>
						<li><a href="http://company.lottechilsung.co.kr" target="_blank" title="새창열림">&nbsp;- 롯데칠성음료 기업</a></li>
						<li><a href="http://www.lottecard.co.kr" target="_blank" title="새창열림">롯데카드</a></li>
						<li><a href="http://www.lottechem.com" target="_blank" title="새창열림">롯데케미칼</a></li>
						<li><a href="http://www.lottecap.com" target="_blank" title="새창열림">롯데캐피탈</a></li>				
						<li><a href="http://www.lottehotel.com" target="_blank" title="새창열림">롯데호텔</a></li>
						<li><a href="http://www.lottehotelbusan.com" target="_blank" title="새창열림">부산롯데호텔</a></li>
						<li><a href="http://www.lotteimall.com" target="_blank" title="새창열림">롯데홈쇼핑</a></li>
						<li><a href="http://www.lottefitin.com/handler/Main-Start" target="_blank" title="새창열림">롯데피트인</a></li>
						<li><a href="http://www.e-himart.co.kr/index.jsp" target="_blank" title="새창열림">롯데하이마트</a></li>
						<li><a href="http://www.himart.co.kr/index.jsp" target="_blank" title="새창열림">&nbsp;- 롯데하이마트 홍보</a></li>
						<li><a href="http://www.charlottetheater.co.kr" target="_blank" title="새창열림">샤롯데씨어터</a></li>
						<li><a href="http://www.uniqlo.kr" target="_blank" title="새창열림">유니클로</a></li>
						<li><a href="http://www.canon-bs.co.kr" target="_blank" title="새창열림">캐논코리아<br>비즈니스솔루션</a></li>				
						<li><a href="http://www.7-eleven.co.kr" target="_blank" title="새창열림">코리아세븐</a></li>
						<li><a href="http://www.krispykreme.co.kr" target="_blank" title="새창열림">크리스피크림도넛</a></li>
						<li><a href="http://www.toysrus.co.kr" target="_blank" title="새창열림">토이저러스</a></li>
						<li><a href="http://www.fujifilm.co.kr" target="_blank" title="새창열림">한국후지필름</a></li>
						<li><a href="http://shop.fujifilm.co.kr" target="_blank" title="새창열림">&nbsp;- 후지필름 쇼핑몰</a></li>				
						<li><a href="http://www.tgif.co.kr" target="_blank" title="새창열림">T.G.I.Friday's</a></li>
						<li><a href="http://www.mybi.co.kr" target="_blank" title="새창열림">마이비</a></li>
						<li><a href="http://www.dmma.co.kr" target="_blank" title="새창열림">롯데MRC</a></li>
						<li><a href="https://www.lotterentacar.net" target="_blank" title="새창열림">롯데렌터카</a></li>
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