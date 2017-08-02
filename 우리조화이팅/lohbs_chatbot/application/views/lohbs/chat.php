<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>

<head>
	<title>Chatbot</title>
	<meta charset="UTF-8">
	<!-- #Start Bootstrap -->
	<script src="https://use.fontawesome.com/f8c85d098f.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<!-- #End Bootstrap -->

  	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
	<script src="https://sdk.amazonaws.com/js/aws-sdk-2.41.0.min.js"></script>
	<style language="text/css">
	 	
	@import url(http://fonts.googleapis.com/earlyaccess/hanna.css);
	font-family: 'Hanna', serif;
	
		html, body {overflow: hidden; }
		input#wisdom {
			border: none;
			height: 100%;
			box-sizing: border-box;
			width: calc(100% - 40px);
			position: absolute;
			outline-width: 0;
			color: gray;
		}
		
		input::placeholder {
			font-size: 16px;
			color: #ccc;
			
		}
		p.userRequest {
			margin: 4px;
			padding: 4px 10px 4px 10px;
			border-radius: 4px;
			min-width: 50%;
			max-width: 70%;
			float: right;
			text-align : right;
			font-size: 18px;
			background-color: Wheat;
			
			color:SaddleBrown;
		}
		p.lexResponse {
			margin: 4px;
			padding: 4px 10px 4px 10px;
			border-radius: 4px;
			text-align: right;
			min-width: 50%;
			max-width: 70%;
			float: left;
			text-align : left;
			font-size: 18px;
			background-color:#CCDBDC;
			color:#003366;
			
		}
		p.lexError {
			margin: 4px;
			padding: 4px 10px 4px 10px;
			border-radius: 4px;
			text-align: right;
			min-width: 50%;
			max-width: 70%;
			float: left;
			text-align : left;
			font-size: 18px;
		
			background-color: #CCDBDC;
			color:#003366;
		}
	
		
		.chat_window {
			position: absolute;
			width: 350px;
			height: 600px;
			
			border-radius: 10px;
			background-color: #fff;
			left: 50%;
			top: 50%;
			transform: translateX(-50%) translateY(-50%);
			box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
			background-color: #f8f8f8;
			overflow: hidden;
		}
		.top_menu {
			background-color: #ff4e00;;
			width: 100%;
			height: 80px;
			padding:4px 0 15px;
			box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
		}
		.top_menu .title {
			text-align: center;
			color: #fff;
			font-size: 25px;
		}
		.message_input_wrapper {
			display: inline-block;
			height: 35px;
			border-radius: 25px;
			border: 1px solid #bcbdc0;
			width: 250px;
			position: relative;
			padding: 0 20px;
}
		.bottom_wrapper {
			position: relative;
			width: 350px;
			background-color: #fff;
			padding: 10px 10px;
			position: absolute;
			bottom: 0;
		}
	.send_message {
			width: 70px;
			height: 35px;
			display: inline-block;
			border-radius: 50px;
			background-color: #636466;	
			color: #fff;
			cursor: pointer;
			transition: all 0.2s linear;
			text-align:center;	
			float: right;
			padding: 18px 10px 10px 10px;
			
		}	
		.send_message:hover {
			color: #fff;
			background-color: #ff4e00;
		}
		.text {
			font-size: 16px;
			font-weight: 300;
			display: inline-block;
			line-height: 0px;
			
			
		}
		.logo{
			width:270px;
			height:85px;
	
		}
		
		/*file upload*/
		.filebox input[type="file"] {
		    position: absolute;
		    width: 1px;
		    height: 1px;
		    padding: 0;
		    margin: -1px;
		    overflow: hidden;
		    clip:rect(0,0,0,0);
		    border: 0;
		}
		.filebox label {
		    display: inline-block;
		    padding: .5em .75em;
		    color: #999;
		    font-size: inherit;
		    line-height: normal;
		    vertical-align: middle;
		    background-color: #fdfdfd;
		    cursor: pointer;
		    border: 1px solid #ebebeb;
		    border-bottom-color: #e2e2e2;
		    border-radius: .25em;
		}
		/* named upload */
		.filebox .upload-name {
		    display: inline-block;
		    padding: .5em .75em;
		    font-size: inherit;
		    font-family: inherit;
		    line-height: normal;
		    vertical-align: middle;
		    background-color: #ffffff;
		  border: 1px solid #bcbdc0;
		  color: gray;
		  border-bottom-color: #e2e2e2;
		  border-radius: .25em;
		  -webkit-appearance: none; /* 네이티브 외형 감추기 */
		  -moz-appearance: none;
		  appearance: none;
		}
		/* imaged preview */
		
		.filebox .upload-display {
		    margin-bottom: 5px;
		    position: absolute;
		    bottom: 10px;
		    left: 80px;
		}
		@media(min-width: 768px) {
		    .filebox .upload-display {
		        display: inline-block;
		        margin-right: 5px;
		        margin-bottom: 0;
		    }
		}
		.upload-thumb{
			height: 100px;
		}
		.filebox .upload-thumb-wrap {
		    display: inline-block;
		    width: 200px;
		    height: 100px;
		    padding: 2px;
		    vertical-align: middle;
		    border: 1px solid #ddd;
		    border-radius: 5px;
		    background-color: #fff;
		}
		.filebox .upload-display img {
		    display: block;
		    max-width: 100%;
		    width: 100% \9;
		    height: auto;
		}
		.filebox.bs3-primary label {
		  color: #fff;
		  background-color: #636466;
		}
		.filebox.bs3-primary label:hover {
			color: #fff;
			background-color: #ff4e00;
		}
		#input_submit {
			border: 0px;
		    text-decoration:none;
		    font-family:helvetica;
		    color:white;
		    background-color: #ff4e00;
		    border-radius: 50px;
		    padding: 5px 10px 5px 10px;
		    font-size: 17px;
		    font-weight: 700;
		    margin-left: 3px;
		}			
				
		/*file upload*/
		/*report*/
		#report{
			color:white;
			z-index: 999;
			position: absolute;
			top: 35px;
			left: 278px;
			color: silver;
			font-weight: bold;
			font-size: 10px;
			text-decoration: none;
			border: 2px solid silver;
			border-radius: 21px;
			padding: 5px 5px 5px 5px;
		}
		/*report*/
	</style>
</head>

<body>
<div class="chat_window" style="height: 700px;">
	<div class="top_menu">
	<img class = logo src="/img/logo/logo.png" style="margin-left: auto; margin-right: auto; display: block;">
	
	<a id="report" href="/main/report" target="_blank">REPORT</a>
		
	</div>
	<div id="conversation" style="height: calc(60%); padding: 20px 10px 0 10px;transition: all 0.5s linear;margin-bottom: 20px;position: relative; border: 1px solid #ccc; background-color: #eee; padding: 4px; overflow: scroll"></div>
	<div class="bottom_wrapper clearfix" style="height: 220px;">
	<form id="chatform" style="" onsubmit="return pushChat();">
		<div class="message_input_wrapper" >
			<input type="text" id="wisdom" 	size="60" value="" placeholder="I need a hotel room">
		</div>
		<div class="send_message">
			<div class="icon"></div>
			<div class="text" style ="height:50px;vertical-align : middle;"><a style="color: white; font-weight:700;" onclick="pushChat()">Send</a></div>
		</div>
	</form>

	<form action="" method="post" enctype="multipart/form-data">

		<div class="filebox bs3-primary preview-image" style="margin-top: 15px;">
	        <input class="upload-name" id="img_upload" value="파일선택" disabled="disabled" style="border-radius: 25px; width: 165px;color: #ccc;">

	        <label style="font-size: 17px;margin-left: 5px; padding: 6px 8px 8px 8px; border-radius: 50px; margin-top: 2px;" for="input_file">search</label> 
	        <input type="file" id="input_file" class="upload-hidden"> 
	      	<input type="button" value="upload" id="input_submit" class="upload-hidden" onclick="pushImg()">
	    </div>
	   <!--  <div class="upload">
	        <input class="btn btn-primary" type="file" name="upload"/>
	    </div> -->
	</form>
</div>

	
	
	<script type="text/javascript">
		// set the focus to the input box
		document.getElementById("wisdom").focus();
		// Initialize the Amazon Cognito credentials provider
		AWS.config.region = 'us-east-1'; // Region
		AWS.config.credentials = new AWS.CognitoIdentityCredentials({
		// Provide your Pool Id here
			IdentityPoolId: 'us-east-1:1fc6a88c-f75e-49fc-90c1-c8bd47b501e3',
		});
		var lexruntime = new AWS.LexRuntime();
		var lexUserId = 'chatbot-demo' + Date.now();
		var sessionAttributes = {};
		function pushChat() {
			// if there is text to be sent...
			var wisdomText = document.getElementById('wisdom');
			if (wisdomText && wisdomText.value && wisdomText.value.trim().length > 0) {
				// disable input to show we're sending it
				var wisdom = wisdomText.value.trim();
				wisdomText.value = '...';
				wisdomText.locked = true;
				//var jsonData = JSON.stringify(wisdom);
				// send it to the Lex runtime
				var params = {
					botAlias: '$LATEST',
					botName: 'BookTrip',
					inputText: wisdom,
					userId: lexUserId,
					sessionAttributes: sessionAttributes
				};
				//alert(wisdom);
				var info = wisdom;
				$.ajax({
				  type: 'post'
				  , url: '/main/data'
				  , dataType : 'json'
				  , data : { 
				    'info' : info
				  }
				  , success : function(data){
				    //alert('success');
				  }
				  , error: function(e){
				    //alert('success');
				  }
				});
				showRequest(wisdom);
				lexruntime.postText(params, function(err, data) {
					if (err) {
						console.log(err, err.stack);
						showError('Error:  ' + err.message + ' (see console for details)')
					}
					if (data) {
						// capture the sessionAttributes for the next cycle
						sessionAttributes = data.sessionAttributes;
						// show response and/or error/dialog status
						if(wisdom != "20000"){
						showResponse(data);
						}else {
							data.message = "test";
							showResponse(data);
						}
					}
					// re-enable input
					wisdomText.value = '';
					wisdomText.locked = false;
				});
			}
			// we always cancel form submission
			return false;
		}



		function pushImg() {
			// if there is text to be sent...
			var wisdomImg = document.getElementById('img_upload');
			var wisdom = wisdomImg.value.trim();
				wisdomImg.value = '...';
				wisdomImg.locked = true;

			if (wisdomImg && wisdomImg.value && wisdomImg.value.trim().length > 0) {
				// disable input to show we're sending it
				imgRequest(wisdom);
				// interval
				imgResponse(wisdom);
				}



			// we always cancel form submission
			return false;
		}

		function imgRequest(daText) {

			var conversationDiv = document.getElementById('conversation');
			var requestPara = document.createElement("P");
			requestPara.className = 'userRequest';
			var imgPara = document.createElement("img");
			imgPara.src = "http://pds.joins.com/news/component/moneytoday/201211/06/2012110613573417444_1.jpg"; //+ daText;
			imgPara.height = 300;
			imgPara.width = 200;
			requestPara.appendChild(imgPara);
			// requestPara.appendChild(document.createTextNode("    "));//+daText));
			conversationDiv.appendChild(requestPara);
			conversationDiv.scrollTop = conversationDiv.scrollHeight;
		}

		function imgResponse(lexResponse) {

			var conversationDiv = document.getElementById('conversation');
			var responsePara = document.createElement("P");
			responsePara.className = 'lexResponse';
			var imgPara = document.createElement("img");
			imgPara.height = 300;
			imgPara.width = 200;

			if(lexResponse == "파일선택"){
			imgPara.src = "http://image.newstomato.com/newsimg/2013/5/27/366864/1.jpg";
			}else{// }else if(lexResponse == "test.jpg"){
			imgPara.src = "http://pds.joins.com/news/component/moneytoday/201211/06/2012110613573417444_1.jpg";
			}
			responsePara.appendChild(imgPara);

			conversationDiv.appendChild(responsePara);
			conversationDiv.scrollTop = conversationDiv.scrollHeight;
		}




		function showRequest(daText) {
			var conversationDiv = document.getElementById('conversation');
			var requestPara = document.createElement("P");
			requestPara.className = 'userRequest';
			requestPara.appendChild(document.createTextNode(daText));
			conversationDiv.appendChild(requestPara);
			conversationDiv.scrollTop = conversationDiv.scrollHeight;
		}
		function showError(daText) {
			var conversationDiv = document.getElementById('conversation');
			var errorPara = document.createElement("P");
			errorPara.className = 'lexError';
			errorPara.appendChild(document.createTextNode(daText));
			conversationDiv.appendChild(errorPara);
			conversationDiv.scrollTop = conversationDiv.scrollHeight;
		}
		function showResponse(lexResponse) {
			console.log(lexResponse.message);
			var conversationDiv = document.getElementById('conversation');
			var responsePara = document.createElement("P");
			responsePara.className = 'lexResponse';
			if(lexResponse.message == "test"){
				//responsePara.appendChild(document.createTextNode(lexResponse.message));
				responsePara.appendChild(document.createElement('br'));

				var responsePara = document.createElement("P");
				responsePara.className = 'lexResponse';
				responsePara.style="font-size:12px;"

				var a_tag = document.createElement("a");
				//responsePara.appendChild(document.createTextNode("Anchor"));
				a_tag.href = "http://localhost/main/bbcream";
				a_tag.alt = "Flash and JS are not enemies!";
				a_tag.target = "_blank";
				a_tag.style = "_blank";
				//a_tag.appendChild(createTextNode("a"));

				responsePara.appendChild(a_tag);
				var img = document.createElement("img");
				img.style="width: 200px;"
				img.src = "https://s3.amazonaws.com/testbot170724/chatbot/img/12.jpg";
				a_tag.appendChild(img);

				var text = "Dr.JART for man (BB Block)";
				var price = "23200 won";
				a_tag.appendChild(document.createTextNode(text));
				a_tag.appendChild(document.createElement('br'));
				a_tag.appendChild(document.createTextNode(price));
				//document.createTextNode(text);

			}else if(lexResponse.message) {
				responsePara.appendChild(document.createTextNode(lexResponse.message));
				responsePara.appendChild(document.createElement('br'));
			}

			if (lexResponse.dialogState === 'ReadyForFulfillment') {
				responsePara.appendChild(document.createTextNode(
					'Ready for fulfillment'));
				// TODO:  show slot values
			} /*else {
				responsePara.appendChild(document.createTextNode(
					'(' + lexResponse.dialogState + ')'));
			}*/
			conversationDiv.appendChild(responsePara);
			conversationDiv.scrollTop = conversationDiv.scrollHeight;
		}
		// file upload
		$(document).ready(function(){
   var fileTarget = $('.filebox .upload-hidden');
    fileTarget.on('change', function(){
        if(window.FileReader){
            // 파일명 추출
            var filename = $(this)[0].files[0].name;
        } 
        else {
            // Old IE 파일명 추출
            var filename = $(this).val().split('/').pop().split('\\').pop();
        };
        $(this).siblings('.upload-name').val(filename);
    });
    //preview image 
    var imgTarget = $('.preview-image .upload-hidden');
    imgTarget.on('change', function(){
        var parent = $(this).parent();
        parent.children('.upload-display').remove();
        if(window.FileReader){
            //image 파일만
            if (!$(this)[0].files[0].type.match(/image\//)) return;
            
            var reader = new FileReader();
            reader.onload = function(e){
                var src = e.target.result;
                parent.prepend('<div class="upload-display"><div class="upload-thumb-wrap"><img src="'+src+'" class="upload-thumb"></div></div>');
            }
            reader.readAsDataURL($(this)[0].files[0]);
        }
        else {
            $(this)[0].select();
            $(this)[0].blur();
            var imgSrc = document.selection.createRange().text;
            parent.prepend('<div class="upload-display"><div class="upload-thumb-wrap"><img class="upload-thumb"></div></div>');
            var img = $(this).siblings('.upload-display').find('img');
            img[0].style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(enable='true',sizingMethod='scale',src=\""+imgSrc+"\")";        
        }
    });
});
		// fileupload
	</script>
</body>

</html>