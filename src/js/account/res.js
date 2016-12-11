import $ from 'jquery';
import jQuery from 'jquery';
// export for others scripts to use

$(function(){
				$("#submit-email").click(function(){
						formsubmit();
				})
				function formsubmit(){
		var data={};
		var reg1 = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; //匹配Email
		var reg2=/^[\u4E00-\u9FA5A-Za-z][\u4E00-\u9FA5A-Za-z0-9]{1,10}$/;
		var reg3=/^[a-zA-Z]\w{5,17}$/;
		data.email=$("#email").val();
		data.username=$("#username").val();
		data.password=$("#password").val();
		if(!data.email){
			alert("Email不能为空！");
		return false;
		}else if(!reg1.test(data.email)){
			alert("Email格式错误！");
		return false;
		}else if(!data.username){
			alert("用户名不能为空！");
		return false;
		}else if(!reg2.test(data.username)){
			alert("用户名格式不正确，2-10个字符,为中文、字母或数字，且只能以汉字或字母开头！");
		return false;
		}else if(!data.password){
			alert("密码不能为空！");
		return false;
		}else if(!reg3.test(data.password)){
			alert("密码格式错误，以字母开头，长度在6-18之间，只能包含字符、数字和下划线！");
		return false;
		}else if(!$("#password1").val()){
			alert("请输入确认密码！");
		return false;
		}else if(data.password!=$("#password1").val()){
			alert("前后输入的密码不一致！");
		return false;
		}else if($("#checkbox").attr("checked")==false){
			alert("必须同意《多边形论坛服务条款》才能注册！")
		}
		else{
			data="data="+JSON.stringify(data);
			$.ajax({
			type:"post",
			url:"../include/register.php",
			async:true,
			datatype:'json',
			data:data,
			success:function(data,status){
				if(status=="success"){
					
					if(data=='邮箱已被使用，请使用其他邮箱'){
						alert(data);
						$("#email").val("");
						$("#email").focus();
					}
					else if(data=='用户名已存在，请换个其他的用户名'){
						alert(data);
						$("#username").val("");
						$("#username").focus();
					}
					else if(data=='恭喜您，注册成功！请登录到您的邮箱及时激活您的帐号!'){
						alert(data);
						$("#email").val("");
					$("#username").val("");
					$("#password").val("");
					$("#password1").val("");
					//document.write(data)
					$(".reglogBtn").click();
					}
			}
			},
			error:function(jqXHR, textStatus, errorThrown){
				//alert(jqXHR)
				//document.write(jqXHR.status)
				//document.write(jqXHR.readyState)
				//alert(textStatus);
				//alert(errorThrown)
			}
		});
		}
		
		
		
	}
			})
