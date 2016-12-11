'use strict';

var _jquery = require('jquery');

var _jquery2 = _interopRequireDefault(_jquery);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

(0, _jquery2.default)(function () {
	(0, _jquery2.default)("#login").click(function () {
		formlogin();
	});
	function formlogin() {
		var data = {};
		data.account = (0, _jquery2.default)("#account").val();
		data.password = (0, _jquery2.default)("#pass").val();
		data.yzm = (0, _jquery2.default)("#yzm").val();
		//data=[data];
		data = "data=" + JSON.stringify(data);
		//alert(data)
		_jquery2.default.ajax({
			type: "post",
			url: "../include/login.php",
			async: true,
			datatype: 'json',
			data: data,
			success: function success(data, status) {
				if (status == "success") {
					if (data == "用户不存在或密码错误！" || data == "验证码有误！") {
						alert(data);
					} else {
						alert("登陆成功！");
						//document.write(data);
						var data1 = JSON.parse(data);
						var user = data1.username;
						var status = data1.status;
						if (status == 0) {
							(0, _jquery2.default)("#headuser").html('<a href="#">' + user + '</a><i style="color:red;">\u672A\u6FC0\u6D3B</i><a href="#">\u9000\u51FA</a>');
						} else {
							(0, _jquery2.default)('#headuser').html('<a href="#" style="position:relative">' + user + '</a><div class="usermessage"><a href="#">\u4E2A\u4EBA\u4FE1\u606F</a><a href="#">\u8BBE\u7F6E</a><a href="#">\u9000\u51FA</a></div>');
						}
						(0, _jquery2.default)(".close-log").click();
					}

					//document.write(status)
					//$(".reglogBtn").click();
				}
			},
			error: function error(jqXHR, textStatus, errorThrown) {
				//alert(jqXHR)
				document.write(jqXHR.status);
				document.write(jqXHR.readyState);
				//alert(textStatus);
				//alert(errorThrown)
			}
		});
	}
});