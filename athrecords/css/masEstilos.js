function estiloVisualLogin(){	
		$("#LoginForm_username").focus();
		 $("body").css("border-top", "5px solid #C9E0ED");
		 $("#header").css("visibility", "hidden");
		 $("#mainmenu").css("visibility", "hidden");
		 $("#footer").css("visibility", "hidden");
		 $("#page").css("margin", "0px");
		 $("#page").css("padding", "0px");
		 $("#page").css("width", "100%");
		 $("#page").css("border", "none");
		 $("#page").css("background", "transparent");
		 $("#content").css("background", "white");
		 $("#content").css("width", "280px");
		 $("#content").css("padding", "29px");		 
		 $("#content").css("border", "solid 1px #CCC");
		 $("#content").css("-webkit-border-radius", "6px");
		 $("#content").css("-moz-border-radius", "6px");
		 $("#content").css("-khtml-border-radius", "6px");
		 $("#content").css("border-radius", "6px");		 
		 $("#content").css("-webkit-box-shadow", "0 3px 6px rgba(0, 0, 0, 0.15)");		 
		 $("#content").css("-moz-box-shadow", "0 3px 6px rgba(0, 0, 0, 0.15)");
		 $("#content").css("margin", "0 auto");
		 $("#cabecera").css("height", "auto");
		 $("#cabecera").css("margin", "0 0 27px");
		 $("#cabecera img").css("display", "block");
		 $("#cabecera img").css("margin", "0 auto");
		 $("#cabecera h1").css("text-align", "center");
		 $("#cabecera h1").css("margin", "0px");
		 $("div.form").css("width","280px");
		 $("#LoginForm_username").css("width", "100%");
		 $("#LoginForm_username").css("font-size", "16px");
		 $("#LoginForm_username").css("padding", "9px 0px 7px 0px");
		 $("#LoginForm_username").css("display", "block"); 		 
		 $("#LoginForm_username").css("-moz-border-radius", "3px");		
		 $("#LoginForm_username").css("-webkit-border-radius", "3px");
		 $("#LoginForm_username").css("-khtml-border-radius", "3px");
		 $("#LoginForm_username").css("border-radius", "3px");	
		 $("#LoginForm_username").css("transition", "border linear .2s,box-shadow linear .2s");
		 $("#LoginForm_username").css("-moz-transition", "border linear .2s,-moz-box-shadow linear .2s");
		 $("#LoginForm_username").css("-webkit-transition", "border linear .2s,-webkit-box-shadow linear .2s");
		 $("#LoginForm_username").css("text-shadow", "0 0 1px white");		 
		 $("#LoginForm_password").css("width", "100%");
		 $("#LoginForm_password").css("font-size", "16px");
		 $("#LoginForm_password").css("padding", "9px 0px 7px 0px");
		 $("#LoginForm_password").css("display", "block");
		 $("#LoginForm_password").css("-moz-border-radius", "3px");		 
		 $("#LoginForm_password").css("-webkit-border-radius", "3px");
		 $("#LoginForm_password").css("-khtml-border-radius", "3px");
		 $("#LoginForm_password").css("border-radius", "3px");
		 $("#LoginForm_password").css("transition", "border linear .2s,box-shadow linear .2s");
		 $("#LoginForm_password").css("-moz-transition", "border linear .2s,-moz-box-shadow linear .2s");
		 $("#LoginForm_password").css("-webkit-transition", "border linear .2s,-webkit-box-shadow linear .2s");
		 $("#LoginForm_password").css("text-shadow", "0 0 1px white");			 
		 $("div.row.buttons").css("text-align", "right");		
		 $("div.row.buttons input").css("font-size", "16px");
		 $("div.row.buttons input").css("height", "36px");
		 $("div.row.buttons input").css("padding", "0px 25px");
		 $("div.row.buttons input").css("-moz-border-radius", "4px");
		 $("div.row.buttons input").css("-khtml-border-radius", "4px");
		 $("div.row.buttons input").css("-webkit-border-radius", "4px");
		 $("div.row.buttons input").css("border-radius", "4px");
		 $("div.row.buttons input").css("cursor", "pointer");		 
		 $("div.row.buttons input").css("text-shadow", "0 1px #F0F0F0");
		 $("div.row.buttons input").css("color", "#333!important");
		 $("div.row.buttons input").css("-moz-box-shadow", "0px 1px 0px #F8F8F8");
		 $("div.row.buttons input").css("-webkit-box-shadow", "0px 1px 0px #F8F8F8");
		 $("div.row.buttons input").css("box-shadow", "0px 1px 0px #F8F8F8");	
		
		$("#LoginForm_username").hover(
			function () {
				$(this).css("border-color","#999");
			}, 
			function () {
				$(this).css("border-color","#CCC");
			}
		);
		
		$("#LoginForm_password").hover(
			function () {
				$(this).css("border-color","#999");
			}, 
			function () {
				$(this).css("border-color","#CCC");
			}
		);
		
		$("div.row.buttons input").hover(
			function () {				
				$(this).css("background-position","0 -6px");
				$(this).css("border-color","#999 #999 #666");
				$(this).css("color","#000");
				$(this).css("text-decoration","none");					
			}, 
			function () {
				$(this).css("background","#DDD url(<?php echo Yii::app()->request->baseUrl; ?>/css/bg-btn.gif) repeat-x 0 0");
				$(this).css("border-color","#BBB #BBB #999");
				$(this).css("color","#333!important");
				$(this).css("text-shadow", "0 1px #F0F0F0");	
			}
		);		
}

function estiloVisualFormulario(){


}