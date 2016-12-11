import $ from 'jquery';
import jQuery from 'jquery';
$(function(){
	$("#login").click(function(){
					formlogin();
				})
				function formlogin(){
		var data={};
		data.account=$("#account").val();
		data.password=$("#pass").val();
		data.yzm=$("#yzm").val();
		//data=[data];
		data="data="+JSON.stringify(data);
		//alert(data)
		$.ajax({
			type:"post",
			url:"../include/login.php",
			async:true,
			datatype:'json',
			data:data,
			success:function(data,status){
				if(status=="success"){
					if(data=="用户不存在或密码错误！"||data=="验证码有误！"){
						alert(data);
					}else{
						alert("登陆成功！");
						//document.write(data);
						var data1=JSON.parse(data);
						var user=data1.username;
						var status=data1.status;
						if(status==0){
							$("#headuser").html(`<a href="#">${user}</a><i style="color:red;">未激活</i><a href="#">退出</a>`)
						}else{
							$('#headuser').html(`<a href="#" style="position:relative">${user}</a><div class="usermessage"><a href="#">个人信息</a><a href="#">设置</a><a href="#">退出</a></div>`)
						}
						$(".close-log").click();
					}
					
					//document.write(status)
					//$(".reglogBtn").click();
				}
			},
			error:function(jqXHR, textStatus, errorThrown){
				//alert(jqXHR)
				document.write(jqXHR.status)
				document.write(jqXHR.readyState)
				//alert(textStatus);
				//alert(errorThrown)
			}
		});
	}
}
)
