'use strict';

var _jquery = require('jquery');

var _jquery2 = _interopRequireDefault(_jquery);

var _domove = require('../common/domove');

var _domove2 = _interopRequireDefault(_domove);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

(0, _domove2.default)();

(0, _jquery2.default)(function () {
	var w = (0, _jquery2.default)(window).width();
	var left = parseInt((w - 320) / 2);
	(0, _jquery2.default)(".logres").css({ "left": left + "px" });
	(0, _jquery2.default)(".register .hd ul li").click(function () {
		(0, _jquery2.default)(this).addClass("active").siblings().removeClass("active");
		(0, _jquery2.default)(".register .bd .reg-action").eq((0, _jquery2.default)(this).index()).css({ "display": "block" }).siblings().css({ "display": "none" });
	});
	var regBtn = true;
	var logBtn = true;
	(0, _jquery2.default)(".registerBtn").click(function () {

		if (regBtn) {
			(0, _jquery2.default)(".shade").css("display", "block");
			(0, _jquery2.default)("body").css("overflow", "hidden");
			(0, _jquery2.default)(".register").css({ "display": "block" }).doMove({ opacity: 100, top: 90 }, 1, function () {
				regBtn = false;
			});
		}
	});

	(0, _jquery2.default)(".close-reg").click(function () {
		if (!regBtn) {
			(0, _jquery2.default)(".shade").css("display", "none");
			(0, _jquery2.default)("body").css("overflow", "auto");
			(0, _jquery2.default)(".register").doMove({ opacity: 0, top: 120 }, 1, function () {
				(0, _jquery2.default)(this).css({ "display": "none" });
				regBtn = true;
			});
		}
	});

	(0, _jquery2.default)(".loginBtn").click(function () {
		if (logBtn) {
			(0, _jquery2.default)(".shade").css("display", "block");
			(0, _jquery2.default)("body").css("overflow", "hidden");
			(0, _jquery2.default)(".login").css({ "display": "block" }).doMove({ opacity: 100, top: 90 }, 1, function () {
				logBtn = false;
			});
		}
	});

	(0, _jquery2.default)(".close-log").click(function () {
		if (!logBtn) {
			(0, _jquery2.default)(".shade").css("display", "none");
			(0, _jquery2.default)("body").css("overflow", "auto");
			(0, _jquery2.default)(".login").doMove({ opacity: 0, top: 120 }, 1, function () {
				(0, _jquery2.default)(this).css({ "display": "none" });
				logBtn = true;
			});
		}
	});
	(0, _jquery2.default)(".reglogBtn").click(function () {
		if (regBtn == false) {
			(0, _jquery2.default)(".register").doMove({ opacity: 0, top: 120 }, 1, function () {
				(0, _jquery2.default)(this).css({ "display": "none" });
				regBtn = true;
				(0, _jquery2.default)(".login").css({ "display": "block" }).doMove({ opacity: 100, top: 90 }, 1, function () {
					logBtn = false;
				});
			});
		}
	});

	/* banner */
	var a = 0;
	var b = 0;
	var timer = null;
	var aBtn = true;
	var len = (0, _jquery2.default)(".banner .bd ul li").length;
	(0, _jquery2.default)(".banner .bd ul li").eq(a).css("left", "0");
	timer = setInterval(autoPlay, 5000);
	(0, _jquery2.default)(".banner .hd ul li").hover(function () {

		if (aBtn) {
			b = (0, _jquery2.default)(this).index();
			aBtn = false;
			if (a > b) {
				play("-660px", "660px");
			} else if (a < b) {
				play("660px", "-660px");
			} else {
				aBtn = true;
				return false;
			}
		}
	}, function () {});
	(0, _jquery2.default)(".banner .prev").click(function () {
		if (aBtn) {
			aBtn = false;
			b = a - 1;
			if (b >= len) {
				b = 0;
			} else if (b < 0) {
				b = len - 1;
			}
			play("-660px", "660px");
		}
	});
	(0, _jquery2.default)(".banner .next").click(function () {
		autoPlay();
	});
	function autoPlay() {
		if (aBtn) {
			aBtn = false;
			b = a + 1;
			if (b >= len) {
				b = 0;
			} else if (b < 0) {
				b = len - 1;
			}
			play("660px", "-660px");
		}
	}
	(0, _jquery2.default)(".banner .bd").hover(function () {
		clearInterval(timer);
	}, function () {
		timer = setInterval(autoPlay, 5000);
	});
	function play(x1, x2) {

		(0, _jquery2.default)(".banner .bd ul li").css("left", "-660px");
		(0, _jquery2.default)(".banner .bd ul li").eq(a).css("left", "0px");
		(0, _jquery2.default)(".banner .bd ul li").eq(b).css("left", x1);
		(0, _jquery2.default)(".banner .hd ul li").eq(b).addClass("active").siblings().removeClass("active");
		(0, _jquery2.default)(".banner .bd ul li").eq(a).animate({ "left": x2 }, 200);
		(0, _jquery2.default)(".banner .bd ul li").eq(b).animate({ "left": "0px" }, 200, function () {
			a = b;
			aBtn = true;
		});
	}
	/* 选项卡 */
	(0, _jquery2.default)(".lastNews .hd ul li").click(function () {
		(0, _jquery2.default)(this).addClass("active").siblings().removeClass("active");
		(0, _jquery2.default)(".lastNews").find(".bd ul").eq((0, _jquery2.default)(this).index()).fadeIn().siblings().fadeOut();
	});
});