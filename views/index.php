<?
	include "../include/common/init.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="../src/css/base.css"  />
		<link rel="stylesheet" href="../src/css/home.css" />
		<script src="../svg/required/raphael.min.js"></script>
		<script src="../svg/hybicon.min.js"></script>
		<title></title>
	</head>
	<body>
		<div class="wraper">
			<?php
				include "head.php";
				?>
			<div class="container clearfix">
				<div class="middle">
					<div class="main">
						<div class="banner">
							<div class="hd">
								<ul>
									<li class="active"></li>
									<li></li>
									<li></li>
								</ul>
							</div>
							<div class="bd">
								<ul>
									<li>
										<div class="note">
											<h3><span class="color1">今日新闻</span><a href="#">标题标题标题标题</a></h3>
											<p>内容内容内容内容内容内容内容内容内容内容内容内容</p>
										</div>
										<div class="img"><a href="#"><img src="../img/banner.jpg"/></a></div>
									</li>
									<li>
										<div class="note">
											<h3><span class="color2">今日新闻</span><a href="#">标题标题标题标题</a></h3>
											<p>内容内容内容</p>
										</div>
										<div class="img"><a href="#"><img src="../img/banner.jpg"/></a></div>
									</li>
									<li>
										<div class="note">
											<h3><span class="color3">今日新闻</span><a href="#">标题标题标题标题</a></h3>
											<p>内容内容内容</p>
										</div>
										<div class="img"><a href="#"><img src="../img/banner.jpg"/></a></div>
									</li>
									
								</ul>
							</div>
							<a class="prev">&lt;</a>
							<a class="next">&gt;</a>
						</div>
						<div class="mainNews clearfix">
							<div class="commonTit">
								<h3>最新热点</h3>
								<a class="more" href="#">more>></a>
							</div>
							<div class="picNews">
								<ul>
									<li>
										<div class="img"><a href="#">
											<img src="../img/banner.jpg" />
											<p>标题标题</p>
										</a></div>
										<div class="con">
											<ol>
												<li class="li1"><span data-hybicon = "safari" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>12-05</p></li>
												<li class="li2"><span data-hybicon = "user" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><a href="#">某某某</a></li>
												<li class="li3"><span data-hybicon = "view" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>9441</p></li>
												<li class="li4"><span data-hybicon = "bubble" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>16</p></li>
											</ol>
										</div>
									</li>
									<li>
										<div class="img"><a href="#">
											<img src="../img/banner.jpg" />
											<p>标题标题</p>
										</a></div>
										<div class="con">
											<ol>
												<li class="li1"><span data-hybicon = "safari" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>12-05</p></li>
												<li class="li2"><span data-hybicon = "user" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><a href="#">某某某</a></li>
												<li class="li3"><span data-hybicon = "view" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>9441</p></li>
												<li class="li4"><span data-hybicon = "bubble" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>16</p></li>
											</ol>
										</div>
									</li>
								</ul>
							</div>
							<div class="lastNews">
								<div class="bd">
									<ul style="display: block;">
										<li>
											<dl>
												<dt><a href="#">标题标题标题标题标题标题标题标题标题标题题</a></dt>
												<dd>
													<ol>
												<li class="li1"><span data-hybicon = "safari" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>12-05</p></li>
												<li class="li2"><span data-hybicon = "user" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><a href="#">某某某</a></li>
												<li class="li3"><span data-hybicon = "view" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>9441</p></li>
												<li class="li4"><span data-hybicon = "bubble" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>16</p></li>
											</ol>
												</dd>
											</dl>
										</li>
										<li>
											<dl>
												<dt><a href="#">标题标题标题</a></dt>
												<dd>
													<ol>
												<li class="li1"><span data-hybicon = "safari" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>12-05</p></li>
												<li class="li2"><span data-hybicon = "user" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><a href="#">某某某</a></li>
												<li class="li3"><span data-hybicon = "view" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>9441</p></li>
												<li class="li4"><span data-hybicon = "bubble" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>16</p></li>
											</ol>
												</dd>
											</dl>
										</li>
										<li>
											<dl>
												<dt><a href="#">标题标题标题</a></dt>
												<dd>
													<ol>
												<li class="li1"><span data-hybicon = "safari" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>12-05</p></li>
												<li class="li2"><span data-hybicon = "user" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><a href="#">某某某</a></li>
												<li class="li3"><span data-hybicon = "view" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>9441</p></li>
												<li class="li4"><span data-hybicon = "bubble" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>16</p></li>
											</ol>
												</dd>
											</dl>
										</li>
										<li>
											<dl>
												<dt><a href="#">标题标题标题</a></dt>
												<dd>
													<ol>
												<li class="li1"><span data-hybicon = "safari" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>12-05</p></li>
												<li class="li2"><span data-hybicon = "user" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><a href="#">某某某</a></li>
												<li class="li3"><span data-hybicon = "view" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>9441</p></li>
												<li class="li4"><span data-hybicon = "bubble" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>16</p></li>
											</ol>
												</dd>
											</dl>
										</li>
										<li>
											<dl>
												<dt><a href="#">标题标题标题</a></dt>
												<dd>
													<ol>
												<li class="li1"><span data-hybicon = "safari" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>12-05</p></li>
												<li class="li2"><span data-hybicon = "user" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><a href="#">某某某</a></li>
												<li class="li3"><span data-hybicon = "view" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>9441</p></li>
												<li class="li4"><span data-hybicon = "bubble" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>16</p></li>
											</ol>
												</dd>
											</dl>
										</li>
										<li>
											<dl>
												<dt><a href="#">标题标题标题</a></dt>
												<dd>
													<ol>
												<li class="li1"><span data-hybicon = "safari" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>12-05</p></li>
												<li class="li2"><span data-hybicon = "user" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><a href="#">某某某</a></li>
												<li class="li3"><span data-hybicon = "view" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>9441</p></li>
												<li class="li4"><span data-hybicon = "bubble" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>16</p></li>
											</ol>
												</dd>
											</dl>
										</li>
										<li>
											<dl>
												<dt><a href="#">标题标题标题</a></dt>
												<dd>
													<ol>
												<li class="li1"><span data-hybicon = "safari" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>12-05</p></li>
												<li class="li2"><span data-hybicon = "user" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><a href="#">某某某</a></li>
												<li class="li3"><span data-hybicon = "view" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>9441</p></li>
												<li class="li4"><span data-hybicon = "bubble" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>16</p></li>
											</ol>
												</dd>
											</dl>
										</li>
										<li>
											<dl>
												<dt><a href="#">标题标题标题</a></dt>
												<dd>
													<ol>
												<li class="li1"><span data-hybicon = "safari" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>12-05</p></li>
												<li class="li2"><span data-hybicon = "user" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><a href="#">某某某</a></li>
												<li class="li3"><span data-hybicon = "view" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>9441</p></li>
												<li class="li4"><span data-hybicon = "bubble" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>16</p></li>
											</ol>
												</dd>
											</dl>
										</li>
									</ul>
									<ul>2</ul>
									<ul>3</ul>
								</div>
								<div class="hd">
									<ul>
										<li class="active">1</li>
										<li>2</li>
										<li>3</li>
									</ul>
									<a class="more" href="#">more</a>
								</div>
							</div>
						</div>
						<div class="comAction clearfix" style="margin-right: 20px;">
							<div class="commonTit">
							<h3>国内动态</h3>
							<a href="#" class="more">more>></a>
						</div>
						<div class="con">
							<div class="hotAction">
								<div class="img"><a href="#"><img src="../img/banner.jpg"/></a></div>
								<dl>
									<dt><a href="#">标题标题</a></dt>
									<dd class="c">内容内容内容内容内容内容内容内容内容内容内容</dd>
									<dd class="t">2016-11-11</dd>
								</dl>
							</div>
							<ul>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
							</ul>
						</div>
						</div>
						<div class="comAction clearfix">
							<div class="commonTit">
							<h3>国际军事</h3>
							<a href="#" class="more">more>></a>
						</div>
						<div class="con">
							<div class="hotAction">
								<div class="img"><a href="#"><img src="../img/banner.jpg"/></a></div>
								<dl>
									<dt><a href="#">标题标题</a></dt>
									<dd class="c">内容内容内容内容内容内容内容内容内容内容内容</dd>
									<dd class="t">2016-11-11</dd>
								</dl>
							</div>
							<ul>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
							</ul>
						</div>
						</div>
						<div class="comAction clearfix" style="margin-right: 20px;">
							<div class="commonTit">
							<h3>历史</h3>
							<a href="#" class="more">more>></a>
						</div>
						<div class="con">
							<div class="hotAction">
								<div class="img"><a href="#"><img src="../img/banner.jpg"/></a></div>
								<dl>
									<dt><a href="#">标题标题</a></dt>
									<dd class="c">内容内容内容内容内容内容内容内容内容内容内容</dd>
									<dd class="t">2016-11-11</dd>
								</dl>
							</div>
							<ul>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
							</ul>
						</div>
						</div>
						<div class="comAction clearfix">
							<div class="commonTit">
							<h3>娱乐</h3>
							<a href="#" class="more">more>></a>
						</div>
						<div class="con">
							<div class="hotAction">
								<div class="img"><a href="#"><img src="../img/banner.jpg"/></a></div>
								<dl>
									<dt><a href="#">标题标题</a></dt>
									<dd class="c">内容内容内容内容内容内容内容内容内容内容内容</dd>
									<dd class="t">2016-11-11</dd>
								</dl>
							</div>
							<ul>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
								<li><a href="#">标题标题标题标题标题</a><span>2016-12-12</span></li>
							</ul>
						</div>
						</div>
						<div class="videoShare">
							<div class="commonTit">
							<h3>视频分享</h3>
							<a href="#" class="more">more>></a>
						</div>
						<div class="con">
							<ul>
								<li>
									<img src="../img/banner.jpg" alt="" />
									<span>标题</span>
									<a href="#"></a>
								</li>
								<li>
									<img src="../img/banner.jpg" alt="" />
									<span>标题</span>
									<a href="#"></a>
								</li>
								<li>
									<img src="../img/banner.jpg" alt="" />
									<span>标题</span>
									<a href="#"></a>
								</li>
							</ul>
						</div>
						</div>
					</div>
				<div class="side">
					<div class="translation clearfix">
						<div class="commonTit">
							<h3>网帖翻译</h3>
							<a href="#" class="more">more>></a>
						</div>
						<div class="con">
							<ul>
								<li>
									<dl>
										<dt><span><img src="../img/banner.jpg"/></span><a href="#">标题</a></dt>
										<dd>
											<ol>
												<li class="li1"><span data-hybicon = "safari" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>12-05</p></li>
												<li class="li2"><span data-hybicon = "user" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><a href="#">某某某</a></li>
												<li class="li3"><span data-hybicon = "view" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>9441</p></li>
												<li class="li4"><span data-hybicon = "bubble" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>16</p></li>
											</ol>
										</dd>
									</dl>
								</li>
								<li>
									<dl>
										<dt><span><img src="../img/banner.jpg"/></span><a href="#">标题</a></dt>
										<dd>
											<ol>
												<li class="li1"><span data-hybicon = "safari" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>12-05</p></li>
												<li class="li2"><span data-hybicon = "user" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><a href="#">某某某</a></li>
												<li class="li3"><span data-hybicon = "view" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>9441</p></li>
												<li class="li4"><span data-hybicon = "bubble" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>16</p></li>
											</ol>
										</dd>
									</dl>
								</li>
								<li>
									<dl>
										<dt><span><img src="../img/banner.jpg"/></span><a href="#">标题</a></dt>
										<dd>
											<ol>
												<li class="li1"><span data-hybicon = "safari" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>12-05</p></li>
												<li class="li2"><span data-hybicon = "user" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><a href="#">某某某</a></li>
												<li class="li3"><span data-hybicon = "view" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>9441</p></li>
												<li class="li4"><span data-hybicon = "bubble" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>16</p></li>
											</ol>
										</dd>
									</dl>
								</li>
							</ul>
						</div>
					</div>
					<div class="photoWorld">
						<div class="commonTit">
							<h3>图说世界</h3>
							<a href="#" class="more">more>></a>
						</div>
						<div class="con">
							<ul>
								<li>
									<div class="img"><a href="#"><img src="../img/banner.jpg"/></a></div>
									<dl>
										<dt><a href="#">标题</a></dt>
										<dd>
											<ol>
												<li class="li1"><span data-hybicon = "safari" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>12-05</p></li>
												<li class="li3"><span data-hybicon = "view" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>9441</p></li>
											</ol>
										</dd>
									</dl>
								</li>
								<li>
									<div class="img"><a href="#"><img src="../img/banner.jpg"/></a></div>
									<dl>
										<dt><a href="#">标题</a></dt>
										<dd>
											<ol>
												<li class="li1"><span data-hybicon = "safari" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>12-05</p></li>
												<li class="li3"><span data-hybicon = "view" data-hybicon-color="#7c7a7a" data-hybicon-size = "12px"></span><p>9441</p></li>
											</ol>
										</dd>
									</dl>
								</li>
							</ul>
						</div>
					</div>
				</div>
				</div>
				
			</div>
			<div class="footer">
				<div class="middle">
					<div class="footerNav"><span>网站导航:</span><a href="#">首页</a><a href="#">国内动态</a><a href="#">国际军事</a><a href="#">历史</a><a href="#">娱乐</a><a href="#">视频分享</a><a href="#">图说世界</a><a href="#">网帖翻译</a></div>
				</div>
				<div class="bottom">
				<div class="middle">
					<p class="copyright">CopyRight © *** All rights reserved. *** 版权所有</p>
					<p class="footerNote">电话：15755163319  邮箱：448159037@qq.com</p>
				</div>
				</div>
			</div>
		</div>
		<div class="shade"></div>
		<div class="register logres">
			<a href="javascript:;" class="close-reg">X</a>
			<h3>立即注册，加入我们！</h3>
				<div class="hd">
					<ul>
						<li class="active">邮箱注册</li>
						<li>手机注册</li>
					</ul>
				</div>
				<div class="bd">
					<div class="email-reg reg-action">
					<form id="email-reg">
						<label>账号：</label>
					<input type="email" class="text" name="email" id="email" placeholder="请输入您的注册邮箱"/>
					<label>用户名：</label>
					<input type="text" class="text" name="user" id="username" placeholder="2-10个字符,为中文、字母或数字，且只能以汉字或字母开头!"/>
					<label>密码：</label>
					<input type="password"  class="text" name="password" id="password" placeholder="以字母开头，6-18个字符，只能包含字符、数字和下划线!"/>
					<label>确认密码：</label>
					<input type="password"  class="text" name="password1" id="password1" placeholder="请再次输入您的注册密码,确保前后输入一致"/>
					<div class="box">
						<input type="checkbox" checked="checked" id="ckeckebox" name="checked"/>
						<span>同意<a href="#">《多边形论坛服务条款》</a></span>
					</div>
					
					<input type="button" value="注册" class="submit" id="submit-email"/>
					<p class="reg-note">已有账号，现在<a href="#" class="reglogBtn">登陆</a></p>
				</form>
				</div>
				
				<div class="phone-reg reg-action">
					<h3 style="color: red;">待开发...</h3>
					<form>
					<label>账号：</label>
					<input type="tel" class="text" id="email" placeholder="请输入您的注册手机号"/>
					<label>验证码：</label>
					<input type="text" class="text"  placeholder="请输入您的注册用户名"/>
					<label>密码：</label>
					<input type="password"  class="text" id="password" placeholder="请输入您的注册密码"/>
					<label>确认密码：</label>
					<input type="password"  class="text" placeholder="请再次输入您的注册密码,确保前后输入一致"/>
					<div class="box">
						<input type="checkbox" />
						<span>同意<a href="#">《多边形论坛服务条款》</a></span>
					</div>
					
					<input type="submit" value="注册" class="submit" id="submit-phone" />
					<p class="reg-note">已有账号，现在<a href="javascript:;" class="reglogBtn">登陆</a></p>
				</form>
				</div>
				</div>
			</div>
			<div class="login logres">
				<a href="javascript:;" class="close-log">X</a>
				<h3>登陆</h3>
				<form>
					<label>账号</label>
					<input type="text" class="text" id="account" placeholder="请输入用户名、邮箱或者手机号"/>
					<label>密码</label>
					<input type="password" class="text" id="pass"  placeholder="请输入您的注册密码"/>
					<label>验证码</label>
					<input type="text" class="text" id="yzm" style="width: 120px; float: left;"/>
					<div class="code_img"><img src="../include/common/code.php" onclick="this.src='../include/common/code.php?tm='+Math.random()"/></div>
					<div class="box" style="clear: both;">
						<input type="checkbox" /><span>记住账号</span>
					</div>
					<input type="button" class="submit" id="login"  value="登陆" />
					
				</form>
			</div>
			<script src="../dist/js/app.js"></script>
			
	</body>
	
</html>
