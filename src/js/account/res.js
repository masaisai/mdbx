import $ from 'jquery';
import jQuery from 'jquery';
// export for others scripts to use

$(function(){
				$("#submit-email").click(function(){
					formsubmit();
				})
				function formsubmit(){
		var data={};
		data.email=$("#email").val();
		data.username=$("#username").val();
		data.password=$("#password").val();
		//data=[data];
		data="data="+JSON.stringify(data);
		alert(data)
		$.ajax({
			type:"post",
			url:"../include/register.php",
			async:true,
			datatype:'json',
			data:data,
			success:function(data,status){
				if(status=="success"){
					alert("注册成功！");
					//document.write(data)
				}
			},
			error:function(jqXHR, textStatus, errorThrown){
				//alert(jqXHR)
				//alert(jqXHR.status)
				//alert(jqXHR.readyState)
				//alert(textStatus);
				//alert(errorThrown)
			}
		});
	}
			})
