'use strict';

var _jquery = require('jquery');

var _jquery2 = _interopRequireDefault(_jquery);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

// export for others scripts to use

(0, _jquery2.default)(function () {
	(0, _jquery2.default)("#submit-email").click(function () {
		formsubmit();
	});
	function formsubmit() {
		var data = {};
		data.email = (0, _jquery2.default)("#email").val();
		data.username = (0, _jquery2.default)("#username").val();
		data.password = (0, _jquery2.default)("#password").val();
		//data=[data];
		data = "data=" + JSON.stringify(data);
		alert(data);
		_jquery2.default.ajax({
			type: "post",
			url: "../include/register.php",
			async: true,
			datatype: 'json',
			data: data,
			success: function success(data, status) {
				if (status == "success") {
					alert("注册成功！");
					//document.write(data)
				}
			},
			error: function error(jqXHR, textStatus, errorThrown) {
				//alert(jqXHR)
				//alert(jqXHR.status)
				//alert(jqXHR.readyState)
				//alert(textStatus);
				//alert(errorThrown)
			}
		});
	}
});