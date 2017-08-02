<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ko">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="format-detection" content="telephone=no">
	<meta property="og:title" content="올리브영 공식 온라인몰">
	<meta property="og:url" content="http://www.oliveyoung.co.kr/store/main/main.do">
	<meta property="og:image" content="">
	<meta property="og:description" content="대한민국 NO.1 헬스&뷰티 스토어 OLIVEYOUNG">
	<title>페리페라 고양이밤 여리혈색핑크닝립 | 올리브영</title>
	<meta name="description" content="대한민국 NO.1 헬스&뷰티 스토어 OLIVEYOUNG">
	

	
	
	<link rel="stylesheet" href="http://www.oliveyoung.co.kr/pc-static-root/css/global.css?dumm=2502725"/>
	<link rel="stylesheet" href="http://www.oliveyoung.co.kr/pc-static-root/css/common.css?dumm=2502725"/>
	<link rel="stylesheet" href="http://www.oliveyoung.co.kr/pc-static-root/css/board.css?dumm=2502725"/>
	<link rel="stylesheet" href="http://www.oliveyoung.co.kr/pc-static-root/css/contents.css?dumm=2502725"/>
	
	<script>
		var _baseUrl = 'http://www.oliveyoung.co.kr/store/';
		var _plainUrl = 'http://www.oliveyoung.co.kr/store/';
		var _secureUrl = 'https://www.oliveyoung.co.kr/store/';
		var _jsUrl = 'http://www.oliveyoung.co.kr/pc-static-root/js/';
		var _cssUrl = 'http://www.oliveyoung.co.kr/pc-static-root/css/';
		var _imgUrl = 'http://image.oliveyoung.co.kr/pc-static-root/image/';
		var _imgUrlLocale = 'http://image.oliveyoung.co.kr/pc-static-root/image/ko/';
		var _goodsImgUploadUrl = 'http://image.oliveyoung.co.kr/uploads/images/goods/';
		var _cabUrl = 'http://image.oliveyoung.co.kr/pc-static-root/cab/';
		var _isLogin = false;
		var _mainUrl = 'main/main.do';
		var _goodsImg85 = '85';
		var _gdasImgUploadUrl = 'http://image.oliveyoung.co.kr/uploads/images/gdasEditor/';
		var _memberJoinUrl ='https://www.cjone.com/cjmweb/join.do?coopco_cd=7030&brnd_cd=3000&mcht_no=3000';
		var _cdnImgUrl = '//image.oliveyoung.co.kr/uploads/';
		var _fileUploadUrl = 'http://image.oliveyoung.co.kr/uploads/images/';
	</script>
	<script type="text/javascript" src="http://www.oliveyoung.co.kr/pc-static-root/js/common/publish/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="http://www.oliveyoung.co.kr/pc-static-root/js/common/publish/prefixfree.min.js"></script>
	<script type="text/javascript" src="http://www.oliveyoung.co.kr/pc-static-root/js/common/publish/slick.min.js"></script>
	<script type="text/javascript" src="http://www.oliveyoung.co.kr/pc-static-root/js/common/publish/common.js"></script>
</head>
<body>

<div class="infoUpgr" style="display:none;">
	<p>
		<a class="ie" href="https://www.microsoft.com/ko-kr/download/internet-explorer.aspx" target="_blank">ie 업그레이드</a>
		<a class="cr" href="https://www.google.co.kr/chrome/browser/desktop/" target="_blank">크롬 업그레이드</a>
		<a class="ff" href="https://www.mozilla.org/ko/firefox/new/" target="_blank">파폭 업그레이드</a>
		<a class="op" href="http://www.opera.com/ko/download" target="_blank">오페라 업그레이드</a>
	</p>
</div>


<div id="Wrapper">
	<div id="skip_navi"><a href="#Container">본문바로가기</a></div>
	
	<div id="Header">
		<div class="top_util">
			<ul class="menu_list">


	
				
				<li class="join"><a href="javascript:common.link.moveJoinMember();">회원가입</a></li>
				<li class="login"><a href="javascript:common.link.moveLoginPage();">로그인</a></li>
				<li class="cart"><a href="javascript:common.link.moveCartPage();">장바구니<span id="cartToCnt"></span></a></li>
	
	

				<li class="order"><a href="javascript:common.link.moveOrderList();">주문배송</a></li>
				<li class="customer"><a href="javascript:common.link.moveCounselMain();">고객센터</a></li>
				<li class="store"><a href="javascript:common.link.moveStoreMain();">올리브영 매장안내</a></li>
			</ul>
		</div>
		<div class="header_inner">
			<h1><a href="javascript:common.link.moveMainHome();"><img src="http://image.oliveyoung.co.kr/pc-static-root/image/comm/h1_logo.png" alt="올리브영" /></a></h1>
			
			<div class="search_box" id="w_search_box">
	<input type="hidden" name="chkButton" 	 		id="chkButton" 		value="" />		
				
	
				<input type="text" id="query" name="" value="" class="inp_placeholder"  data-placeholder="불쌍한 남자피부를위한, 남성 선크림" data-ref-linkUrl="http://www.oliveyoung.co.kr/store/planshop/getPlanShopDetail.do?dispCatNo=500000100040066"  onKeypress="javascript:pressCheck_WEB_MainSearch((event),this);"/>
				
				<button id="searchSubmit">검색</button>

				<!-- 검색 레이어 영역 (디자인 수정 예정) -->
				<div class="search_layer">
					<div class="layer_inner">
						<!-- 2017-02-07 수정 : 자동완성기능 영역 -->
						<div class="auto_search_cont">
							
							<div class="brand_area" id="ark_brand"></div>							
							<div class="auto_list" id="ark_w"></div>
							<!-- 브랜드 이미지가 없는 경우 -->
<!-- 							<a href="#" class="brand_box"> -->
<!-- 								<strong>아모레퍼시픽</strong> -->
<!-- 								<span>브랜드관 바로가기</span> -->
<!-- 							</a> -->
							<!--// 브랜드 이미지가 없는 경우 -->
							
							<!-- 브랜드 이미지가 있는 경우(주석 풀어서 쓰세요) -->
							<!-- 
							<a href="#" class="brand_box">
								<img src="../../image/temp/@temp_logo.png" alt="로고 이미지" />
								<strong>아모레퍼시픽</strong>
								<span>브랜드관 바로가기</span>
							</a>
							-->
							<!--// 브랜드 이미지가 없는 경우 -->
							<!--  -->
<!-- 							<ul> -->
<!-- 								<li><a href="#"><span>아모레퍼시픽</span> 스킨케어</a></li> -->
<!-- 								<li><a href="#"><span>아모레퍼시픽</span> 마스크팩</a></li> -->
<!-- 								<li><a href="#"><span>아모레퍼시픽</span> 클렌징/썬</a></li> -->
<!-- 								<li><a href="#"><span>아모레퍼시픽</span> 색조</a></li> -->
<!-- 								<li><a href="#"><span>아모레퍼시픽</span>보습/워시</a></li> -->
<!-- 								<li><a href="#"><span>아모레퍼시픽</span></a></li> -->
<!-- 								<li><a href="#"><span>아모레퍼시픽</span> 쿠션</a></li> -->
<!-- 								<li><a href="#"><span>아모레퍼시픽</span>립스틱</a></li> -->
<!-- 								<li><a href="#"><span>아모레퍼시픽</span>치약</a></li> -->
<!-- 								<li><a href="#"><span>아모레퍼시픽</span>마스카라</a></li>					 -->
<!-- 							</ul>				 -->
							
<!-- 							<div class="search_set_area"> 
								<a href="#" class="sch_close">닫기</a>
							</div> -->
						</div>
						<!--// 2017-02-07 수정 : 자동완성기능 영역 -->
					
						<!-- 최근 검색어 -->						
						<a href="#" class="search_tab tab01 on" id="searchRecent" >최근 검색어</a><!-- 현재 보여지는 탭에 클래스 on 넣어주세요 -->
						<div class="search_tab_cont" id="recent_cont">
							<ul id="mykeyword">							
								
								<!-- 검색 기록이 없을 경우 -->								 
<!-- 							<li class="no_data" id="recent_no_data" style="display:none;">최근 검색한 기록이 없습니다.</li> -->
								
								<!--// 검색 기록이 없을 경우 -->
								<!-- 검색 저장 기능이 꺼져있을 경우 -->
								 
<!-- 							<li class="no_data" id="recent_no_save" style="display:none;">최근 검색어 저장 기능이 꺼져있습니다.</li> -->
								
								<!--// 검색 저장 기능이 꺼져있을 경우 -->								
							</ul>
							<div class="search_set_area">
								<a href="#" class="sch_all_del" onclick="javascript:deleteCookies();">전체 삭제</a>																						
<!-- 										<a href="#" class="sch_save"></a>																		 -->
										<a href="#" class="sch_save"></a>																		
							</div>
						</div>
						<!--// 최근 검색어 -->
						
						<!-- 인기 검색어 -->
						<a  href="#" class="search_tab tab02" id="searchPop" >인기 검색어</a>
						<div class="search_tab_cont" id="w_pop_cont">
							<ul id="mainPopword">

							</ul>
							<div class="search_set_area"> 
								<a href="#" class="sch_pop_close">닫기</a>
							</div>
						</div>
						<!--// 인기 검색어 -->
					</div>
				</div>
				<!--// 검색 레이어 영역 -->
			</div>
			<!--// 검색영역 -->


			
			<ul class="mymenu_area">
				<li class="store ">
					<a href="#" class="mymenu_layer" title="관심 매장소식 자세히보기 열기/닫기">관심 매장소식</a>
					<div class="alim_box">

	
						
						<p class="store_desc"><span>로그인</span>하시면 자주가는 매장을 <br />관심 매장으로 설정 할 수 있습니다.</p>
						<button class="mymenu_btn" onClick="javascript:common.link.moveLoginPage();">로그인</button>
						
	
	

					</div>
				</li>
				<li class="recent">
					<a href="javascript:;" class="mymenu_layer" title="최근 본 상품 자세히보기 열기/닫기">최근 본 상품</a>
					<div class="recent_prd_box" style="min-height:510px;">

						<p class="recent_tit">전체 <span>0</span>개
						
						<div class="no_data" style="display:none;">
							최근 본 상품이 없습니다.
						</div>
					</div>
				</li>
			</ul>
			
		</div>
		
		
		<div class="header_design_area"></div>
		
		
	</div>
	
	
	
	
	<div class="main_moving_banner" style="display:none;">
		<a href="http://www.oliveyoung.co.kr/store/event/getEventDetail.do?evtNo=00000000005307"><img src="http://image.oliveyoung.co.kr/uploads/images/display/90000040003/39/6456648114869840059.png" alt="8월1주차" data-ref-compareKey="90000040003/39/6456648114869840059.png"/></a>
		<button type="button" class="moving_banner_close">배너 하루동안 보지 않기</button><!-- 2017-02-06 코드수정 -->		
	</div>

		
				
	<div id="Gnb" class="main">
		<div id="gnbWrap">
			<a href="#" id="btnGnbOpen">전체 카테고리</a>
			<!-- 전체 카테고리 레이어 -->
			<div class="layer_all_menu" id="gnbAllMenu">
				<ul class="all_menu_wrap">
					<li>
						<h2>뷰티</h2>
						<div class="sub_menu_box">




	
	
		
		
							<p class="sub_depth"><a href="javascript:common.link.moveCategory('10000010001')" data-ref-dispCatNo="10000010001">기초</a></p>
							<ul>
		
		
				
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000100010001')" data-ref-dispCatNo="100000100010001">스킨케어</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000100010002')" data-ref-dispCatNo="100000100010002">마스크팩</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000100010003')" data-ref-dispCatNo="100000100010003">클렌징/썬</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000100010004')" data-ref-dispCatNo="100000100010004">더모 코스메틱</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000100010005')" data-ref-dispCatNo="100000100010005">남성 스킨케어</a></li>
		
	

	
	
		
		
							</ul>
			
		
							<p class="sub_depth"><a href="javascript:common.link.moveCategory('10000010002')" data-ref-dispCatNo="10000010002">메이크업</a></p>
							<ul>
		
		
				
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000100020001')" data-ref-dispCatNo="100000100020001">베이스</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000100020002')" data-ref-dispCatNo="100000100020002">색조</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000100020003')" data-ref-dispCatNo="100000100020003">미용소품</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000100020004')" data-ref-dispCatNo="100000100020004">남성 메이크업</a></li>
		
	

	
	
		
		
							</ul>
			
						</div>
				
				
						<div class="sub_menu_box type2">
				
			
		
							<p class="sub_depth"><a href="javascript:common.link.moveCategory('10000010003')" data-ref-dispCatNo="10000010003">바디</a></p>
							<ul>
		
		
				
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000100030001')" data-ref-dispCatNo="100000100030001">보습/워시</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000100030002')" data-ref-dispCatNo="100000100030002">바디케어</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000100030003')" data-ref-dispCatNo="100000100030003">남성 바디케어</a></li>
		
	

	
	
		
		
							</ul>
			
		
							<p class="sub_depth"><a href="javascript:common.link.moveCategory('10000010004')" data-ref-dispCatNo="10000010004">헤어</a></p>
							<ul>
		
		
				
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000100040001')" data-ref-dispCatNo="100000100040001">헤어케어</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000100040002')" data-ref-dispCatNo="100000100040002">스타일링</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000100040003')" data-ref-dispCatNo="100000100040003">남성 헤어케어</a></li>
		
	

	
	
		
		
							</ul>
			
						</div>
				
						<div class="sub_menu_box">
				
				
			
		
							<p class="sub_depth"><a href="javascript:common.link.moveCategory('10000010005')" data-ref-dispCatNo="10000010005">향수/디퓨저</a></p>
							<ul>
		
		
				
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000100050001')" data-ref-dispCatNo="100000100050001">향수</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000100050002')" data-ref-dispCatNo="100000100050002">캔들/디퓨저</a></li>
		
	


							</ul>

						</div>
					</li>
					<li>
						<h2>푸드</h2>
						<div class="sub_menu_box">




	
		
							<p class="sub_depth"><a href="javascript:common.link.moveCategory('10000020001')" data-ref-dispCatNo="10000020001">건강식품</a></p>
							<ul>
		
		
				
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000200010002')" data-ref-dispCatNo="100000200010002">영양제</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000200010003')" data-ref-dispCatNo="100000200010003">다이어트/헬스</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000200010004')" data-ref-dispCatNo="100000200010004">건강음료/기타</a></li>
		
	

	
		
							</ul>
			
		
							<p class="sub_depth"><a href="javascript:common.link.moveCategory('10000020002')" data-ref-dispCatNo="10000020002">일반식품</a></p>
							<ul>
		
		
				
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000200020001')" data-ref-dispCatNo="100000200020001">과자</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000200020002')" data-ref-dispCatNo="100000200020002">초콜릿/캔디</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000200020007')" data-ref-dispCatNo="100000200020007">생수/탄산수</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000200020010')" data-ref-dispCatNo="100000200020010">음료</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000200020008')" data-ref-dispCatNo="100000200020008">차</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000200020009')" data-ref-dispCatNo="100000200020009">커피</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000200020003')" data-ref-dispCatNo="100000200020003">가공식품</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000200020005')" data-ref-dispCatNo="100000200020005">선물세트</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000200020006')" data-ref-dispCatNo="100000200020006">소스류</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000200020011')" data-ref-dispCatNo="100000200020011">유아식품</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000200020004')" data-ref-dispCatNo="100000200020004">유제품</a></li>
		
	


							</ul>

						</div>
					</li>
					<li>
						<h2>라이프</h2>
						<div class="sub_menu_box">




	
		
							<p class="sub_depth"><a href="javascript:common.link.moveCategory('10000030001')" data-ref-dispCatNo="10000030001">건강/위생용품</a></p>
							<ul>
		
		
				
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000300010002')" data-ref-dispCatNo="100000300010002">구강 관리 용품</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000300010003')" data-ref-dispCatNo="100000300010003">눈 관리 용품</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000300010001')" data-ref-dispCatNo="100000300010001">여성/위생 용품</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000300010006')" data-ref-dispCatNo="100000300010006">생활세제</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000300010004')" data-ref-dispCatNo="100000300010004">마사지/교정/운동용품</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000300010005')" data-ref-dispCatNo="100000300010005">의료/간호용품</a></li>
		
	

	
		
							</ul>
			
		
							<p class="sub_depth"><a href="javascript:common.link.moveCategory('10000030002')" data-ref-dispCatNo="10000030002">잡화</a></p>
							<ul>
		
		
				
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000300020002')" data-ref-dispCatNo="100000300020002">방향/탈취</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000300020005')" data-ref-dispCatNo="100000300020005">패션용품</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000300020001')" data-ref-dispCatNo="100000300020001">문구/사무용품</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000300020007')" data-ref-dispCatNo="100000300020007">출산/육아</a></li>
		
	

				
	
								<li><a href="javascript:common.link.moveCategory('100000300020004')" data-ref-dispCatNo="100000300020004">음향/통신기기</a></li>
		
	


							</ul>

						</div>
					</li>
				</ul>
				<button id="btnGnbClose">전체 카테고리 창 닫기</button>
			</div>	
			<!--// 전체 카테고리 레이어 -->
			
			<ul class="gnb_menu_list">



	
		
			 
			
			

				<li><a href="http://www.oliveyoung.co.kr/store/main/getHotdealList.do" data-ref-linkUrl="main/getHotdealList.do" ><span>오특</span></a></li>
		
			 
			
			

				<li><a href="http://www.oliveyoung.co.kr/store/main/getNewList.do" data-ref-linkUrl="main/getNewList.do" ><span>신상</span></a></li>
		
			 
			
			

				<li><a href="http://www.oliveyoung.co.kr/store/main/getBestList.do" data-ref-linkUrl="main/getBestList.do" ><span>베스트</span></a></li>
		
			 
			
			

				<li><a href="http://www.oliveyoung.co.kr/store/main/getThemeList.do" data-ref-linkUrl="main/getThemeList.do" ><span>트렌드</span></a></li>
		
			 
			
			

				<li><a href="http://www.oliveyoung.co.kr/store/main/getPlanShopList.do" data-ref-linkUrl="main/getPlanShopList.do" ><span>기획전</span></a></li>
		
			 
			
			

				<li><a href="http://www.oliveyoung.co.kr/store/main/getOnlyOneList.do" data-ref-linkUrl="main/getOnlyOneList.do" ><span>온리원#</span></a></li>
		
			 
			
			

				<li><a href="http://www.oliveyoung.co.kr/store/main/getSaleList.do" data-ref-linkUrl="main/getSaleList.do" ><span>세일</span></a></li>
		
			 
			
			

				<li><a href="http://www.oliveyoung.co.kr/store/main/getCouponList.do" data-ref-linkUrl="main/getCouponList.do" ><span>쿠폰/혜택</span></a></li>
		
			 
			
			

				<li><a href="http://www.oliveyoung.co.kr/store/main/getEventList.do" data-ref-linkUrl="main/getEventList.do" ><span>이벤트</span></a></li>
		
			 
			
			

				<li><a href="http://www.oliveyoung.co.kr/store/main/getBrandList.do" data-ref-linkUrl="main/getBrandList.do" ><span>브랜드</span></a></li>
		
	
				
					

			</ul>
					
		</div>

	</div>

<script>
	$(window).ready(function(){
	    //장바구니 갯수 갱신
	    common.cart.updHeaderCartCnt();	    
	});
</script>




           

	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/common/jquery.popupWindow.js?dumm=2502725" charset="utf-8"></script>
	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/common/jquery.ddslick.min.js?dumm=2502725" charset="utf-8"></script>
	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/common/jquery.tmpl.min.js?dumm=2502725" charset="utf-8"></script>
	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/common/jquery.number.js?dumm=2502725" charset="utf-8"></script>
	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/common/jquery.lazyload.js" charset="utf-8"></script>
	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/common/publish/slick.min.js?dumm=2502725" charset="utf-8"></script>
	
	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/common/elrte/elrte.full.js?dumm=2502725" type="text/javascript" charset="utf-8"></script>
	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/common/elrte/i18n/elrte.ko.js?dumm=2502725" type="text/javascript" charset="utf-8"></script>
	
	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/common/common.js?dumm=2502725" charset="utf-8"></script>
	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/common/common.link.js?dumm=2502725" charset="utf-8"></script>
	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/common/text.js?dumm=2502725" charset="utf-8"></script>
	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/common/ajax.js?dumm=2502725" charset="utf-8"></script>
	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/common/utf_8.js?dumm=2502725" charset="utf-8"></script>
	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/common/useragent_util.js?dumm=2502725" charset="utf-8"></script>
	
	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/common/jcarousellite_1.0.1.min.js?dumm=2502725" charset="utf-8"></script>	
	
	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/search/beta.fix.js?dumm=2502725" charset="utf-8"></script>
	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/search/beta2.fix.js?dumm=2502725" charset="utf-8"></script>
	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/search/search.js?dumm=2502725" charset="utf-8"></script>
	<script src="http://www.oliveyoung.co.kr/pc-static-root/js/search/ark.js?dumm=2502725" charset="utf-8"></script>
	




<script type="text/javascript" src="https://nsso.cjone.com/findCookieSecured.jsp?cjssoq=DITfHLVJ4O%2BDG86uctXc58mcqZ92jwdjhdvB4Qig5MylDEBOsjnd%2FeNXuZ27xU7EDDBTWSwCVSJnUspb6MfNN3NDVzczQVNDQTA4WGk5WXV3QlM0Tmd0azVNSXZtaXY0SUZYbVBydUVDUUhVQ0tSMHVGWWRsMEgxOGVESnczY3duN3o3NktHTTc2VT0%3D"></script>

  

<form name="ssologinfrm" action="https://www.oliveyoung.co.kr/store/login/ssoLogin.do" method="post">
<input  type="hidden"  id="cjssoq" name="cjssoq" />
</form>
<script>
	var ssoCheck = "null";
	var cjssoq = "null";
	//alert('ssocheck:'+ssoCheck);
	//세션 정보가 없을경우 
	if( !_isLogin || ssoCheck !='N'){
		//SSO 쿠키가 있고 정상적으로 토큰을 밥급받았을 경우
		if((typeof _cjssoEncData) != "undefined" && _cjssoEncData !=""){
			//ajax를 사용해서 _cjssoEncData 를 처리하여 사용하셔도 무방합니다.
			//alert("111 SSO쿠키를 조사해보니 있어서 확인하러 갑니다11."+_cjssoEncData);
			if(_cjssoEncData != cjssoq){
				document.getElementById("cjssoq").value = _cjssoEncData ; 
				document.ssologinfrm.submit();
			}
		}else{
			//alert("222세션도 없고 쿠키도 없어서 해당 페이지로 갑니다.")
		}
	}
</script>






	
	
	
	









	
	
	
	
	
	
	

























 








































	
		
		
		
		
		
		
		
		
		
		
			
			
			
		
	












































































































	







	
		
	
	







	






<input type="hidden" id="mnrSalePsbYn" name="mnrSalePsbYn" value="Y" />
<script>
 
var _mbrNo = '';

var mnrSalePsbYn = $("#mnrSalePsbYn").val();
</script>


	
	
	
<input type="hidden" id="adulAuthYn" name="adulAuthYn" value="N" />
		
	

	
<div id="Container">
	<div id="Contents">


		
		<div class="page_location">
			<a href="#" class="loc_home">홈</a>
			<ul class="loc_history">
	
	
		
	
				<li>
	
	
	
		
	
		
			
		
	
		
	
		
	
		
	
					
					<a href="#" class="cate_y">메이크업</a>
					<div class="history_cate_box">
					
	
		
			
						<ul>
		
							<li data-ref-dispCatNo="10000010001" ><a href="#"  class="goods_category1">기초</a></li>
	
		
							<li data-ref-dispCatNo="10000010002" ><a href="#"  class="on"  class="goods_category1">메이크업</a></li>
	
		
							<li data-ref-dispCatNo="10000010003" ><a href="#"  class="goods_category1">바디</a></li>
	
		
							<li data-ref-dispCatNo="10000010004" ><a href="#"  class="goods_category1">헤어</a></li>
	
		
							<li data-ref-dispCatNo="10000010005" ><a href="#"  class="goods_category1">향수/디퓨저</a></li>
	
						</ul>

					</div>
						

				</li>

	
	
		
	

				<li>
	
					
	
		
	
		
			
		
	
		
	
		
	
					
					<a href="#" class="cate_y">색조</a>
					<div class="history_cate_box">

	
		
			
						<ul>
		
							<li data-ref-dispCatNo="100000100020001" ><a href="#"  class="goods_category2">베이스</a></li>
	
		
							<li data-ref-dispCatNo="100000100020002" ><a href="#"  class="on"  class="goods_category2">색조</a></li>
	
		
							<li data-ref-dispCatNo="100000100020003" ><a href="#"  class="goods_category2">미용소품</a></li>
	
		
							<li data-ref-dispCatNo="100000100020004" ><a href="#"  class="goods_category2">남성 메이크업</a></li>
	
						</ul>
					</div>
						

				</li>

	
	
		
				<li>
		
		
		
					
		
					
		
					
		
					
		
					
		
					
		
					
		
			
				
					
		
					
		
					
		
					
		
					
		
					
		
					
		
					
		
					
					<a href="#" class="cate_y">립밤</a>
					<div class="history_cate_box">
		
		
			
				
						<ul>
			
							<li data-ref-uprDispCatNo="100000100020002"  data-ref-dispCatNo="1000001000200020001" ><a href="#"  class="goods_category3">아이브로우</a></li>
		
			
							<li data-ref-uprDispCatNo="100000100020002"  data-ref-dispCatNo="1000001000200020002" ><a href="#"  class="goods_category3">아이섀도우</a></li>
		
			
							<li data-ref-uprDispCatNo="100000100020002"  data-ref-dispCatNo="1000001000200020003" ><a href="#"  class="goods_category3">아이라이너</a></li>
		
			
							<li data-ref-uprDispCatNo="100000100020002"  data-ref-dispCatNo="1000001000200020004" ><a href="#"  class="goods_category3">마스카라</a></li>
		
			
							<li data-ref-uprDispCatNo="100000100020002"  data-ref-dispCatNo="1000001000200020005" ><a href="#"  class="goods_category3">립스틱</a></li>
		
			
							<li data-ref-uprDispCatNo="100000100020002"  data-ref-dispCatNo="1000001000200020006" ><a href="#"  class="goods_category3">립틴트</a></li>
		
			
							<li data-ref-uprDispCatNo="100000100020002"  data-ref-dispCatNo="1000001000200020007" ><a href="#"  class="goods_category3">립글로스</a></li>
		
			
							<li data-ref-uprDispCatNo="100000100020002"  data-ref-dispCatNo="1000001000200020008" ><a href="#"  class="on"  class="goods_category3">립밤</a></li>
		
			
							<li data-ref-uprDispCatNo="100000100020002"  data-ref-dispCatNo="1000001000200020009" ><a href="#"  class="goods_category3">립라이너</a></li>
		
			
							<li data-ref-uprDispCatNo="100000100020002"  data-ref-dispCatNo="1000001000200020010" ><a href="#"  class="goods_category3">일반네일</a></li>
		
			
				
							</ul>
				
						<ul>
			
							<li data-ref-uprDispCatNo="100000100020002"  data-ref-dispCatNo="1000001000200020011" ><a href="#"  class="goods_category3">젤네일</a></li>
		
			
							<li data-ref-uprDispCatNo="100000100020002"  data-ref-dispCatNo="1000001000200020012" ><a href="#"  class="goods_category3">네일스티커</a></li>
		
			
							<li data-ref-uprDispCatNo="100000100020002"  data-ref-dispCatNo="1000001000200020013" ><a href="#"  class="goods_category3">네일리무버</a></li>
		
			
							<li data-ref-uprDispCatNo="100000100020002"  data-ref-dispCatNo="1000001000200020014" ><a href="#"  class="goods_category3">네일영양제</a></li>
		
			
							<li data-ref-uprDispCatNo="100000100020002"  data-ref-dispCatNo="1000001000200020015" ><a href="#"  class="goods_category3">색조화장품세트</a></li>
		
						</ul>
					</div>
						

				</li>
		
			</ul>
		</div>
		


		<div class="prd_detail_box">
			<div class="left_area">
				
				<div class="prd_img">




	
		
					<img src="http://image.oliveyoung.co.kr/uploads/images/goods/550/10/0000/0001/A00000001687102ko.jpg?l=ko" alt="상품명 이미지" onerror="common.errorImg(this);" />
	
	


				</div>
				
						
				
				<ul class="prd_thumb_list">

	
		
		
			
			<input type="hidden" id="snsImgUrl" value="http://image.oliveyoung.co.kr/uploads/images/goods/550/10/0000/0001/A00000001687102ko.jpg?l=ko"> 
		
					<li class="sel"><a href="javascript:;" data-img="http://image.oliveyoung.co.kr/uploads/images/goods/550/10/0000/0001/A00000001687102ko.jpg?l=ko"><img src="http://image.oliveyoung.co.kr/uploads/images/goods/85/10/0000/0001/A00000001687102ko.jpg?l=ko" alt="썸네일이미지"  onerror="common.errorImg(this);" ></a></li>
	

				</ul>
				
			</div>
			<div class="right_area">
				<div class="prd_info">
					

				<strong>
	
					08.01  - 08.31 
	
	
					8월 한정 SALE 50%~
	
				</strong>

					
				
					
					<p class="prd_brand">
						페리페라

	
		
						<a href="javascript:;" class="link_brand goods_brand" id="moveBrandShop" >브랜드관</a>
	
	
					
					</p>
					
					<p class="prd_name">페리페라 고양이밤 여리혈색핑크닝립</p>
									
					<p class="prd_flag">				




						<span class="icon_flag sale">세일</span>
	 




					</p>
					
				
											
					<ul class="info_list">
						<li>
							<span class="tx_tit">판매가</span> 
							<span class="tx_cont org_price"><span class="tx_num">8,000</span>원</span>
						</li>


	
		
		
						<li>
							<span class="tx_tit">세일가</span> 
							<span class="tx_cont cur_price"><span class="tx_num">4,000</span>원</span>
						</li>
		
	





			

	


						
						<li>
							<span class="tx_tit">카드할인혜택 <a href="javascript:goods.detail.openCardFullPop();" class="ico_info" data-rel="layer" data-target="cardBenefitInfo">카드혜택안내 레이어열기</a></span>
							<span class="tx_cont bene_price">The CJ카드 추가 10%</span>
						</li>
						
		


											
						<li class="line_top">
	
		
		
							<span class="tx_tit">CJ ONE 포인트 예상적립</span>
		
	
							<span class="tx_cont">
								<span class="tx_num">2%</span>적립
						
							</span>
						</li>
						
							




						<li class="line_top">
							<span class="tx_tit">배송비</span>
							<span class="tx_cont">
	
		
		
							<span class="tx_num">2,500</span>원
			
							(<span class="tx_num">20,000</span>원 이상 무료)
				
		
	
	
		
		
				
		
	
							</span>
						</li>
						
<!-- 						<li> -->
<!-- 							<span class="tx_tit">배송방법</span> -->
<!-- 							<span class="tx_cont">올리브영 배송</span> -->
<!-- 						</li> -->
	
	
						<li>
							<span class="tx_tit">배송기간</span>
	
		
		
							<span class="tx_cont">평균 3일 이내 배송</span>
						
	
						</li>

					</ul>
				</div>

			
			
				




	
		
		
			
		
	
	
	
				
				<div class="option_add_area">
		
			
					<div class="prd_cnt_box">
			
			
		
						<div class="tit_area"><span>구매수량</span></div>
						<div class="cont_area">
		
									
							<span class="option_cnt_box">
								<button class="btnCalc minus" onClick="goods.detail.cart.prevVal('A000000016871001','4000','1');">수량 1감소</button>
								<input type="text" id="cartCnt_A000000016871001" name="cartCnt_A000000016871001" value="1" class="tx_num" title="구매수량" />
								<button class="btnCalc plus" onClick="goods.detail.cart.nextVal('A000000016871001','4000','1');">수량 1증가</button>
							</span>
			
			
		
						</div>
					</div>
	
	
				</div>

						 
	
	
	
	

				
				<div class="prd_total_price">
					<span class="tx_tit">상품금액 합계</span>
					<input type="hidden" id="totalCnt" value="" name="totalCnt" />
					<input type="hidden" id="totalPrc" value="" name="totalPrc" />


					<span class="tx_cont"><span class="tx_num" id="totalPrcTxt">4000</span>원</span>

				</div>
				
					


	
	
	
	
				<div class="prd_btn_area">
					<button class="btnBasket  goods_cart" onClick="javascript:goods.detail.bindBtnBasket();">장바구니</button>
					<button class="btnBuy goods_buy" id="cartBtn" onClick="javascript:goods.detail.bindBtnBuy();">구매하기</button>
					<button class="btnZzim  goods_wish" data-ref-goodsNo="A000000016871">찜하기</button>
				</div>
	



			</div>
		</div>
					
		<div class="prd_social_info">
			
			<p id="repReview">
				<strong>고객만족도</strong>
				<span class="review_point">
					<span class="point" style="width:100%">10점만점에 100점</span>
				</span>
			</p>
			
			
			<p>
				<strong>공유하기</strong>
				<a href="javascript:common.sns.doShare('kakaostory');" class="link_social kakao goods_share_kakao">카카오톡 공유하기</a>
				<a href="javascript:common.sns.doShare('facebook');" class="link_social facebook goods_share_facebook">페이스북 공유하기</a>
				<a href="javascript:common.sns.doShare('url');;" class="link_social url goods_share_url">URL공유하기</a>
			</p>
			
			
			<p>
				<a href="javascript:;" class="btn_off_store goods_offline" data-rel="layer" data-target="offStoreStock" >올리브영 오프라인 매장 재고확인</a>
			</p>
			
		</div>
	


		
					
		 
		<ul class="prd_detail_tab" id="tabList">
			<li class="on" id="productInfo"><a href="javascript:;" class="goods_detailinfo">상세정보</a></li>
			<li id="buyInfo"><a href="javascript:;" class="goods_buyinfo">구매정보</a></li>
			<li id="reviewInfo"><a href="javascript:;" class="goods_reputation">상품평<span>(3)</span></a></li>
			<li id="qnaInfo"><a href="javascript:;" class="goods_qna">Q&amp;A<span>(0)</span></a></li>
		</ul>
		
	
		
		<div class="tabConts prd_detail_cont">
			<div class="detail_area">

	

		


	
				<div class="contEditor">
					<script>
						$(window).load(function(){
							// 2017-02-18 : txs : 상품 상세 레이아웃 크기 재조정
				            goods.detail.tagHandler.inittGoodsDetailObjects();
				            $("#tempHtml").html("");
						});
					</script>	
				</div>
	
	


		
			</div>
		
			
			<p class="tit_cate_best mgT40">메이크업 카테고리 베스트 상품</p>
			<ul class="cate_prd_list" id="recommGoodsList">
				
			</ul>
			
		</div>
		
 

		
		<div class="tabConts prd_detail_cont">
		



	
	
		
	





 
	
	


	


			<h3 class="detail_tit">상품정보 제공고시</h3>
		
			
			<div id="kcInfo">
			</div>
			
		
					
			<div id="artcInfo">
			</div>
					
		
				
			<h3 class="detail_tit mgT40">배송안내</h3>
			<dl class="detail_info_list" id="dlexAjaxInfo">
				<dt>배송비/배송가능일</dt>
				<dd>
					<p><strong>배송지역 : </strong>전국</p>
					<p><strong>배송비 : </strong>

	
	
						<span>2,500</span>원
		
		
						
						(총 구매금액 <span>20,000</span>원 이상 무료)</p>
			
			
		
	
 
					<p>도서,산간,오지 일부지역은 배송비가 추가될 수 있습니다.</p>

	
	
					<p><strong>배송가능일 : </strong><span>3</span>일</p>
					배송가능일이란 본 상품을 주문하신 고객님들께 상품 배송이 가능한 기간을 의미합니다. 단, 연휴 및 공휴일은 기간 계산시 제외하며 현금 주문일 경우 입금일 기준 입니다.<br>
					예약 상품의 경우 예약된 날짜에 출고되며, 상품의 입고가 빠르게 진행된 경우 예약일 보다 일찍 배송될 수 있습니다.
	

				</dd>
			</dl>
			
			
			
			<h3 class="detail_tit mgT40">교환/반품/환불 안내</h3>
			
			<dl class="detail_info_list">
				<dt>교환/반품 신청 기간</dt>
				<dd>
					교환, 반품 신청은 배송이 완료된 후 15일 이내 가능합니다.<br>
					고객님이 배송 받으신 상품의 내용이 표시∙광고의 내용과 다르거나 계약내용과 다르게 이행된 경우에는  배송 받으신 날로부터 3개월 이내, 혹은 그 사실을 알 수 있었던 날로 부터 30일 이내에 가능합니다.
				</dd>
			</dl>
			<dl class="detail_info_list">
				<dt>교환/반품/회수 비용</dt>
				<dd>
					고객님의 사유에 의한 교환 및 반품은 회수 및 배송에 필요한 비용을 부담해주셔야 합니다.<br>
					기본 비용은 교환 5,000원(회수비+배송비), 반품 2,500원(회수비)입니다.<br>
					제주도 및 도서산간 지방에는 추가 운임이 발생합니다.<br>
					당사의 사유(상품의 하자, 배송의 오류 등)로 인한 경우 교환 및 반품에 필요한 비용은 당사에서 부담합니다.
				</dd>
			</dl>
			<dl class="detail_info_list">
				<dt>교환/반품 불가안내</dt>
				<dd>
					고객님의 사유에 의한 교환 및 반품이 불가한 경우<br>
					1. 배송이 완료된 후 7일이 경과한 경우<br>
					2. 포장 훼손 및 사용 또는 일부 소비, 구성품 누락 및 상품의 결함 발생으로 인해 상품의 가치가 훼손된 경우<br><br>
					당사의 사유에 의한 교환 및 반품이 불가한 경우<br>
					1. 배송 받으신 날로부터 3개월, 혹은 그 사실을 알 수 있었던 날로 부터 30일이 경과한 경우<br>
					2. 당사의 귀책(상품의 불량, 생산 및 제조 및 배송 간의 파손 등)으로 인한 현상이 아닌 해당 상품의 고유한 특성, 혹은 상품 수령 후 고객님의 과실로 인한 문제임이 규명된 경우
				</dd>
			</dl>
			
			
		</div>
		<!--// 구매정보 컨텐츠 영역 --> 
	
		
		<div class="tabConts prd_detail_cont" id="gdasContentsArea">


			<ul class="review_tab_list" id="reviewTab">
				<li class="on" id="preTab"><a href="#" class="goods_reputation_premium">프리미엄 상품평 <span>(1)</span></a></li>
				<li><a href="#" id="simTab" class="goods_reputation_oneline">한줄 상품평 <span>(2)</span></a></li>
			</ul>
			<p class="review_btn_area"><button class="btnInquiry gdasWrite">상품평작성</button></p>
			<div class="review_tab_cont" id="preGdasArea">
			
			</div>
			<div class="review_tab_cont" id="simGdasArea">
			
			</div>

		
		</div>
		
	
		
		<div class="tabConts prd_detail_cont" id="qnaContentsArea">
		</div>
		
	
	</div>
</div>

</div>



<div class="popLayerWrap" id="snsPopUp">
	<div class="popLayerArea">
		<div class="dimLayer">
			<ul class="shareSNS">
				<li class="kaka"><a href="javascript:;" class="snsShareDo" snsType="kakaotalk">카카오톡</a></li>
				<li class="kakaoS"><a href="javascript:;" class="snsShareDo" snsType="kakaostory">카카오스토리</a></li>
				<li class="fb"><a href="javascript:;" class="snsShareDo" snsType="facebook">페이스북</a></li>
				<li class="url"><a href="javascript:;" class="snsShareDo" snsType="url">URL</a></li>
			</ul>
			<div id="urlInfo" style="display:none"><br><br><br>
				<p>아래의 URL을 복사해주세요</p>
				<input type="text" id="shareUrlTxt" name="shareUrlTxt" style="width:100%" value="">
			</div>
			<a href="javascript:;" class="btnClose" onclick="goods.detail.sns.popLayerClose('LAYERPOP01');return false;">닫기</a>
		</div>
	</div>
</div>
<div class="dim"></div>




<div id="couponDownload" style="display:none">
	<div class="layer_cont2">
		<h2 class="layer_title2">쿠폰 다운로드</h2>

		<button class="layer_close type2" onClick="fnLayerSet('layer_pop_wrap', 'close');">창 닫기</button>
	</div>	
</div>




<div id="cardBenefitInfo" style="display:none">
	<div class="layer_cont2 w650">
		<h2 class="layer_title2">카드할인혜택</h2>
		
		<dl class="card_info_data">
			<dt>THE CJ카드</dt>
			<dd>결제 시 10% 할인</dd>
		</dl>
		
					
	 

		<button class="layer_close type2" onClick="fnLayerSet('layer_pop_wrap', 'close');">창 닫기</button>
	</div>	
</div>



<div id="giftInfo" style="display:none;">
	<div class="layer_cont2 w650">
		<h2 class="layer_title2">증정품 안내</h2>
		
		<div class="layer_scroll_box2 mgT40">
		

		</div>
		<div class="layer_full_area">
			<ul class="info_dash_list">
				<li>증정품은 최종 결제금액 기준으로 제공됩니다.</li>
				<li>본 행사는 온라인몰 단독 행사로 매장 행사와 상이할 수 있습니다.</li>
				<li>증정품은 판매 상품과 별개로 한정 운영되며 조기 소진될 수 있습니다.</li>
				<li>반품 시 증정품도 함께 반품해주셔야 합니다.</li>
			</ul>
		</div>	
		<button class="layer_close type2" onClick="fnLayerSet('layer_pop_wrap', 'close');">창 닫기</button>
	</div>	
</div>



<div class="layer_pop_wrap w564" id="pluscouponDownload" style="display:none;">
	<div class="layer_cont2">
		<div class="coupon_scroll partner">
			<!-- loop -->

			<!-- //loop -->
			<div class="layer_full_area">
				<ul class="info_dash_list">
					<li>네이버를 통한 방문 시 사용가능</li>
					<li>장바구니 기준 1만원 주문 시 사용가능</li>
					<li>ID당 1매 발급 및 사용 가능</li>
					<li>상품 쿠폰과 중복 사용 가능</li>
					<li>발급 후 [마이 페이지  >  쿠폰]에서 확인 가능</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //오늘하루보지않기 -->
	<div class="coupon_today">
		<ul>
			<li><button class="today" id="goodsDetailEpCoupon" goodsNo="A000000016871_6">오늘하루보지않기</button></li>
			<li><button class="close" onClick="fnLayerSet('layer_pop_wrap', 'close');">창닫기</button></li>
		</ul>
	</div>
	<!-- 오늘하루보지않기 -->
</div>


<form id="goodsForm">
	<input type="hidden" id="goodsNo" name="goodsNo" value="A000000016871" />
	<input type="hidden" id="itemNo" name="itemNo" value="001" />
	<input type="hidden" id="lgcGoodsNo" name="lgcGoodsNo" value="8809526212612" />
	<input type="hidden" id="onlBrndNm" name="onlBrndNm" value="페리페라" />
	<input type="hidden" id="goodsNm" name="goodsNm" value="페리페라 고양이밤 여리혈색핑크닝립" />
	<input type="hidden" id="gdasTpCd" name="gdasTpCd" value="" />
	<input type="hidden" id="onlBrndCd" name="onlBrndCd" value="A000511" />

		<input type="hidden" id="avalInvQty" name="avalInvQty" value="3" />

	
	<input type="hidden" id="qtyAddUnit" name="qtyAddUnit" value="1" />
	<input type="hidden" id="adulAuthYn" name="adulAuthYn" value="N" />
	<input type="hidden" id="artcGoodsNo" name="artcGoodsNo" value="A000000016871" />
	<input type="hidden" id="artcItemNo" name="artcItemNo" value="001" />
	<input type="hidden" id="epCpnYn" name="epCpnYn" value="N" />
	<input type="hidden" id="soldOutYn" name="soldOutYn" value="N" />
</form>

<form id="qnaForm">
	<input type="hidden" name="gdasSeq" id="gdasSeq" value="" />
	<input type="hidden" name="goodsNo" id="qnaGoodsNo" value="A000000016871" />
	<input type="hidden" name="retUrl" id="retUrl" value="" />
	<input type="hidden" name="ordNo" id="ordNo" value="" />
	<input type="hidden" name="evtNo" id="evtNo" value="" />
	<input type="hidden" name="gdasSctCd" id="gdasSctCd" value="" />
</form>

<input type="hidden" name="ordPsbMinQty" id="ordPsbMinQty" value="1" />
<input type="hidden" name="ordPsbMaxQty" id="ordPsbMaxQty" value="999" />
<input type="hidden" name="finalPrc" id="finalPrc" value="4000" />
<input type="hidden" name="dispCatNo" id="dispCatNo" value="1000001000200020008" />
<input type="hidden" name="assocDispCatNo" id="assocDispCatNo" value="10000010002" />
<input type="hidden" name="dupItemYn" id="dupItemYn" value="N" />
<input type="hidden" name="rsvSaleYn" id="rsvSaleYn" value="N" />
<input type="hidden" name="prsntYn" id="prsntYn" value="N" />
<input type="hidden" name="pkgGoodsYn" id="pkgGoodsYn" value="N" />

<input type="hidden" name="premiumGdasCnt" id="premiumGdasCnt" value="1" />
<input type="hidden" name="simpleGdasCnt" id="simpleGdasCnt" value="2" />
<input type="hidden" name="realQnaCnt" id="realQnaCnt" value="0" />
<input type="hidden" name="gdasPrhbCatCnt" id="gdasPrhbCatCnt" value="0" />
<input type="hidden" name="previewInfo" id="previewInfo" value="" />
<input type="hidden" name="chlNo" id="chlNo" value="6" />
<script>
var _ajax = common.Ajax;
var _ajaxUrl = 'http://www.oliveyoung.co.kr/store/';

var qtyAddUnit = '1';

if ( qtyAddUnit == undefined || qtyAddUnit == '' || qtyAddUnit == 'null'){
    qtyAddUnit = '1';
}

var directDscntAmt = '';
var salePrc = '4000';

if ( directDscntAmt > 0 ){
    salePrc = '4000';
}


var _retType = ''; 


var premiumGdasCnt = '1';

var simpleGdasCnt = '2';
</script>
<link href="http://www.oliveyoung.co.kr/pc-static-root/css/goods.css?dumm=2502725" type="text/css" rel="stylesheet">
<script type="text/javascript" src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
<script type="text/javascript" src="http://www.oliveyoung.co.kr/pc-static-root/js/goods/goods.js?dumm=2502725" charset="utf-8"></script>
<script type="text/javascript" src="http://www.oliveyoung.co.kr/pc-static-root/js/mypage/gdas.js?dumm=2502725"></script>
<script>

var mKey = "";
$(document).ready(function(){
    goods.detail.init();
});
</script>


	<!-- 2017-02-23 수정 : TOP 바로가기 버튼 추가 -->
	<div id="directTop">
		<button><span></span>TOP</button>
	</div>
	<!--// 2017-02-23 수정 : TOP 바로가기 버튼 추가 -->
	
	<!-- #Footer -->
	<div id="Footer">
		<div class="oneConts">
			<div class="conts">
				<ul class="list-menu">
					<li><a class="brandstory" href="http://www.oliveyoung.co.kr/store/company/brandStory.do">회사소개</a></li>
					<li><a class="recruit" href="http://www.oliveyoung.co.kr/store/company/recruit.do">채용안내</a></li>
					<li><a class="prvsuser" href="https://www.oliveyoung.co.kr/store/prvsuser/getPrvsuser.do">창업안내</a></li>
					<li><a class="cjoyp" href="http://oypartner.cj.net/CJOYP/prvsuser/index/index.fo" target="_blank">상품입점 및 제휴문의</a></li>
				</ul>
				<div class="sel_family_group">
					<a href="#" class="sel_option">CJ그룹 계열사 바로가기</a>
					<div class="sel_option_list hide">
						<dl>
							<dt>CJ그룹</dt>
							<dd><a href="http://www.cj.net/" target="_blank" title="CJ 주식회사 새창으로 열기">CJ주식회사</a></dd>
						</dl>
						<dl>
							<dt>신유통</dt>
							<dd><a href="http://www.cjoshopping.com/index.asp" target="_blank" title="CJ오쇼핑 새창으로 열기">CJ오쇼핑</a></dd>
							<dd><a href="http://www.cjkoreaexpress.co.kr/web/kr/index.asp" target="_blank" title="CJ대한통운 새창으로 열기">CJ대한통운</a></dd>
							<dd><a href="http://www.cjtelenix.com/" target="_blank" title="CJ텔레닉스 새창으로 열기">CJ텔레닉스</a></dd>
							<dd><a href="http://www.cjolivenetworks.co.kr/" target="_blank" title="CJ올리브네트웍스 새창으로 열기">CJ올리브네트웍스</a></dd>
						</dl>
						<dl>
							<dt>식품&amp;식품서비스</dt>
							<dd><a href="http://www.cj.co.kr/cj-kr/" target="_blank" title="CJ제일제당 새창으로 열기">CJ제일제당</a></dd>
							<dd><a href="http://www.cjfreshway.com/main/main.asp" target="_blank" title="CJ프레시웨이 새창으로 열기">CJ프레시웨이</a></dd>
							<dd><a href="http://www.cjfoodville.co.kr/main.asp" target="_blank" title="CJ푸드빌 새창으로 열기">CJ푸드빌</a></dd>
							<dd><a href="http://md1.co.kr/main.aspx" target="_blank" title="CJ엠디원 새창으로 열기">CJ엠디원</a></dd>
						</dl>
						<dl>
							<dt>생명공학</dt>
							<dd><a href="http://www.cj.co.kr/cj-kr/businesses/4/main" target="_blank" title="CJ제일제당 새창으로 열기">CJ제일제당</a></dd>
							<dd><a href="http://www.cjp.co.kr/" target="_blank" title="CJ헬스케어 새창으로 열기">CJ헬스케어</a></dd>
						</dl>
						<dl>
							<dt>엔터테인먼트&amp;미디어</dt>
							<dd><a href="http://www.cjenm.com/" target="_blank" title="CJ E&M 새창으로 열기">CJ E&M</a></dd>
							<dd><a href="http://www.cgv.co.kr/" target="_blank" title="CJ CGV 새창으로 열기">CJ CGV</a></dd>
							<dd><a href="http://www.cjhellovision.com/" target="_blank" title="CJ헬로비전 새창으로 열기">CJ헬로비전</a></dd>
							<dd><a href="http://www.cjpowercast.com/" target="_blank" title="CJ파워캐스트 새창으로 열기">CJ파워캐스트</a></dd>
							<dd><a href="http://www.mnet.com/" target="_blank" title="CJ디지털뮤직 새창으로 열기">CJ디지털뮤직</a></dd>
						</dl>
						<dl>
							<dt>인프라</dt>
							<dd><a href="http://www.cjenc.co.kr/" target="_blank" title="CJ 건설 새창으로 열기">CJ건설</a></dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
		<div class="twoConts">
			<div class="conts">
				<ul class="list-area">
					<li>
						<p class="logo"><a href="javascript:common.link.moveMainHome();"><img src="http://image.oliveyoung.co.kr/pc-static-root/image/footer/foot_logo.png" alt="OLIVEYOUNG"></a></p>
						<h2>씨제이 올리브네트웍스 주식회사</h2>
						<p>대표이사 : 허민호 | 사업자등록번호 : 104-81-36565</p>
						<p>주소 : (04323) 서울특별시 용산구 한강대로 366, 10층 <br>(동자동, 트윈시티)</p>
						<p>통신판매업신고번호 : 2017-서울용산-0451</p>
						<p>개인정보보호책임자 : 이다운 <a class="link" href="javascript:common.link.openFtcBizInfo();">사업자 정보확인 &gt;</a></p>
					</li>
					<li>
						<ul class="list-link">
							<li><a href="javascript:common.link.moveTermsPage();">이용약관</a><a href="javascript:common.link.moveLegalPage();">법적고지</a></li>
							<li><a href="javascript:common.link.movePrivacyPage();">개인정보처리방침</a></li>
							<li><a href="javascript:common.link.moveYouthProtectionPage();">청소년보호방침</a></li>
							<li><a href="javascript:common.link.moveMultimediaPage();">영상정보처리기기운영/관리방침</a></li>
							<li><a href="javascript:common.link.moveDenyEmailPage();">이메일무단수집거부</a></li>
						</ul>
					</li>
					<li>
						<h2>LG U+ 매매보호(에스크로) 서비스</h2>
						<p>
							고객님은 안전거래를 위해 모든거래 결제시<br>저희 쇼핑몰에서 가입한 LG U+ 전자 결제의<br>매매보호(에스크로) 서비스를 이용하실 수<br>있습니다.<br>
							<a class="link" href="javascript:common.link.openLGUPEscrow();">서비스 가입사실 확인 &gt;</a>
						</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="threeConts">
			<div class="conts">
				<p class="copyright">Copyright ⓒ 2017 CJ OliveNetworks. All Rights Reserved.</p>
				<div class="sns">
					<h2>OLIVE YOUNG SNS</h2>
					<a class="facebook" href="https://www.facebook.com/OLIVEYOUNG" title="페이지 이동" target="_blank"><img src="http://image.oliveyoung.co.kr/pc-static-root/image/footer/@facebook.gif" alt="페이스북"></a>
					<a class="twitter" href="https://twitter.com/oliveyoung" title="페이지 이동" target="_blank"><img src="http://image.oliveyoung.co.kr/pc-static-root/image/footer/@twitter.gif" alt="트위터"></a>
					<a class="kakao" href="javascript:common.link.openKakao();" title="페이지 이동" ><img src="http://image.oliveyoung.co.kr/pc-static-root/image/footer/@kakaotalk.gif" alt="카카오톡"></a>
					<a class="cafe" href="http://cafe.naver.com/oytrendholic/" title="페이지 이동" target="_blank"><img src="http://image.oliveyoung.co.kr/pc-static-root/image/footer/@oliveyo.gif" alt="올리브영"></a>
					<a class="insta" href="https://www.instagram.com/oliveyoung_official/" title="페이지 이동" target="_blank"><img src="http://image.oliveyoung.co.kr/pc-static-root/image/footer/@instagram.gif" alt="인스타그램"></a>
				</div>
			</div>
		</div>
	</div>
	<!-- //#Footer -->
</div>





<script type="text/javascript">
var _isLoginPage =false;
if(_isLoginPage){
	if (history.state == null) {
	    history.replaceState({status:"check"}, null, null);
	    history.pushState({status:"checkPage"}, null, null);
	}
	
	// 백키
	$(window).bind("popstate", function() {
	    if (history.state != null && history.state.status == "check") {
			//로그인페이지 통한 진입 메인페이지 이동       
			location.href = _baseUrl + "main/main.do";
	    }
	});
}
$('.sel_family_group').find('.sel_option').on({
	'click' : function(e){
		e.preventDefault();
		$(this).parent().find('.sel_option_list').toggleClass('hide');

	}
});


var _gaUaKey = "UA-92021806-1";
var _wlDomain = "www.oliveyoung.co.kr";


//복사/선택 방지 소스
$(window).load(function() {

	//기본 상단 GNB & 슬라이드 바 처리
	common.gnb.init();

	//LazyLoad 실행
	common.setLazyLoad();

	//공통 둥둥이 배너 실행
	$('.main_moving_banner').length && common.bann.init();
 
	var parser = new UserAgentUtil(navigator.userAgent);
	// alert(parser.getBrowser().name + " : " + parser.getBrowser().version);
 	if (parser.getBrowser().name.indexOf("msie") >= 0 && (parser.getBrowser().version.startWith("8") || parser.getBrowser().version.startWith("7"))) {
		$(".infoUpgr").show();
	}
 
// $.fn.disableSelection = function() {
//     document.documentElement.style.webkitUserSelect='none';
//
//     return this
//              .attr('unselectable', 'on')
//              .css({'-moz-user-select':'-moz-none',
//                  '-moz-user-select':'none',
//                  '-o-user-select':'none',
//                  '-khtml-user-select':'none',
//                  '-webkit-user-select':'none',
//                  '-ms-user-select':'none',
//                  'user-select':'none',
//                  '-webkit-touch-select':'none'})
//              .bind('selectstart', false)
//              .bind('mousedown', false);
// };
//
// $.fn.enableSelection = function() {
//     document.documentElement.style.webkitUserSelect='none';
//
//     return this
//              .removeAttr('unselectable')
//              .unbind('selectstart', true)
//              .unbind('mousedown');
// };

});

</script>

<script src="http://www.oliveyoung.co.kr/pc-static-root/js/common/common.weblog.js?dumm=2502725" charset="utf-8"></script>



<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 944484389;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<div class="googleFrame"><script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script></div>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/944484389/?guid=ON&amp;script=0"/>
</div>
</noscript>


<script type="text/javascript">
var TRS_AIDX = 10416;
var TRS_PROTOCOL = document.location.protocol;
document.writeln();
var TRS_URL = TRS_PROTOCOL + '//' + ((TRS_PROTOCOL=='https:')?'analysis.adinsight.co.kr':'adlog.adinsight.co.kr') +  '/emnet/trs_esc.js';
document.writeln("<scr"+"ipt language='javascript' src='" + TRS_URL + "'></scr"+"ipt>");
</script>



<div class="layer_pop_wrap" id="layer_pop_wrap" style="z-index:999">
</div>

<div class="popup-contents" id="pop_cont" style="top:50%;width:650px;margin:-258px 0 0 -325px; display:none; z-index:999">
</div>
<div class="layer_pop_wrap w490" id="basketOption" style="z-index:999">
</div>

<div class="layer_pop_wrap w850" id="offlineStock" style="z-index:999">
</div>

<div id="tempHtml" class="contEditor" style="display:none">
	
		<p><img alt="" src="/img/product/KittenbalmPinktintedlip4.jpg" style="border:0px solid #000000; vertical-align:baseline" title="" /></p>

	
</div>
</body>
</html>

