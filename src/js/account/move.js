import $ from 'jquery';
import jQuery from 'jquery';
import move from "../common/domove";
move();

$(function(){
				var w=$(window).width();
				var left=parseInt((w-320)/2);
				$(".logres").css({"left":left+"px"});
				$(".register .hd ul li").click(function(){
					$(this).addClass("active").siblings().removeClass("active");
					$(".register .bd .reg-action").eq($(this).index()).css({"display":"block"}).siblings()
					.css({"display":"none"});
				})
				var regBtn=true;
				var logBtn=true;
					$(".registerBtn").click(function(){
						
						if(regBtn){
							$(".shade").css("display","block");
							$("body").css("overflow","hidden");
							$(".register").css({"display":"block"}).doMove({opacity:100,top:90},1,function(){regBtn=false;});
						}
				})
	
					$(".close-reg").click(function(){
						if(!regBtn){
							$(".shade").css("display","none");
							$("body").css("overflow","auto");
							$(".register").doMove({opacity:0,top:120},1,function(){
							$(this).css({"display":"none"});
							regBtn=true;
						});
						}
					})
					
					$(".loginBtn").click(function(){
						if(logBtn){
							$(".shade").css("display","block");
							$("body").css("overflow","hidden");
							$(".login").css({"display":"block"}).doMove({opacity:100,top:90},1,function(){logBtn=false;});
						}
						
					})
					
					$(".close-log").click(function(){
						if(!logBtn){
							$(".shade").css("display","none");
							$("body").css("overflow","auto");
							$(".login").doMove({opacity:0,top:120},1,function(){
							$(this).css({"display":"none"});
							logBtn=true;
					})
						}
						
			})
			$(".reglogBtn").click(function(){
				if(regBtn==false){
					$(".register").doMove({opacity:0,top:120},1,function(){
							$(this).css({"display":"none"});
							regBtn=true;
							$(".login").css({"display":"block"}).doMove({opacity:100,top:90},1,function(){logBtn=false;});
				})
				}
			})
			
			
	/* banner */
					var a=0;
					var b=0;
					var timer=null;
					var aBtn=true;
					var len=$(".banner .bd ul li").length;
					$(".banner .bd ul li").eq(a).css("left","0");
					timer=setInterval(autoPlay,5000);
					$(".banner .hd ul li").hover(function(){
						
						if(aBtn){
							b=$(this).index();
							aBtn=false;
							if(a>b){
								play("-660px","660px");
							}else if(a<b){
								play("660px","-660px");
							}else{
								aBtn=true;
								return false;
							}
						}
					},function(){})
					$(".banner .prev").click(function(){
						if(aBtn){
							aBtn=false;
							b=a-1;
							if(b>=len){
							b=0;
						}else if(b<0){
							b=len-1;
						}
						play("-660px","660px");
						}
						
					});
					$(".banner .next").click(function(){
						autoPlay();
					})
					function autoPlay(){
						if(aBtn){
							aBtn=false;
							b=a+1;
							if(b>=len){
							b=0;
						}else if(b<0){
							b=len-1;
						}
						play("660px","-660px");
						}
						
					}
					$(".banner .bd").hover(function(){
						clearInterval(timer)
					},function(){
						timer=setInterval(autoPlay,5000);
					})
					function play(x1,x2){
						
						$(".banner .bd ul li").css("left","-660px");
						$(".banner .bd ul li").eq(a).css("left","0px");
						$(".banner .bd ul li").eq(b).css("left",x1);
						$(".banner .hd ul li").eq(b).addClass("active").siblings().removeClass("active");
						$(".banner .bd ul li").eq(a).animate({"left":x2},200);
						$(".banner .bd ul li").eq(b).animate({"left":"0px"},200,function(){
							a=b;
						aBtn=true;
						});
					}
					/* 选项卡 */
					$(".lastNews .hd ul li").click(function(){
						$(this).addClass("active").siblings().removeClass("active");
						$(".lastNews").find(".bd ul").eq($(this).index()).fadeIn().siblings().fadeOut();
					})
				})
		
