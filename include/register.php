<?php
ini_set("magic_quotes_runtime",0);
require_once("common/init.php");
//require_once("smtp.class.php");//邮件发送类
require_once('class.phpmailer.php'); //载入PHPMailer类 
	$data="";
	$msg="";
	//print_r($_POST);
	$data=json_decode($_POST['data']);
	file_put_contents('test.log', $_POST['data'], true);
	$username = $data->username; 
	$query = $db->query("select id from user where username='$username'"); 
	$row = $query->fetch_array(); 
if($row){ 
    echo '用户名已存在，请换个其他的用户名'; 
    exit; 
} 

$password = md5($data->password); //加密密码 
$email = $data->email; //邮箱 
$regtime = time(); 
   
$token = md5($username.$password.$regtime); //创建用于激活识别码 
$token_exptime = time()+60*60*24;//过期时间为24小时后 
   
$sql = "insert into `user` (`username`,`password`,`email`,`token`,`token_exptime`,`regtime`)  
values ('$username','$password','$email','$token','$token_exptime','$regtime')"; 
 if ($db->query($sql) === TRUE) {
    //echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

//// if($db->insert_id){
////$MailServer = "smtp.qq.com"; //SMTP服务器
////  $MailPort = 465; //SMTP服务器端口
////  $smtpMail = "448159037@qq.com"; //SMTP服务器的用户邮箱
////  $smtpuser = "448159037@qq.com"; //SMTP服务器的用户帐号
////  $smtppass = "masaisai"; //SMTP服务器的用户密码
////  
////  //创建$smtp对象 这里面的一个true是表示使用身份验证,否则不使用身份验证.
////  $smtp = new Smtp($MailServer, $MailPort, $smtpuser, $smtppass, true); 
////  $smtp->debug = false; 
////  $mailType = "HTML"; //信件类型，文本:text；网页：HTML
////  $email = $email;  //收件人邮箱
////  $emailTitle = "百度经验用户帐号激活"; //邮件主题
////  $emailBody = "亲爱的".$username."：<br/>感谢您在我站注册了新帐号。<br/>请点击链接激活您的帐号。<br/><a href='http://hacker.com/active.php?verify=".$token."' target='_blank'>http://hacker.com/active.php?verify=".$token."</a><br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。<br/>如果此次激活请求非你本人所发，请忽略本邮件。<br/><p style='text-align:right'>-------- 百度经验 敬上</p>";
////  
////  // sendmail方法
////  // 参数1是收件人邮箱
////  // 参数2是发件人邮箱
////  // 参数3是主题（标题）
////  // 参数4是邮件主题（标题）
////  // 参数4是邮件内容  参数是内容类型文本:text 网页:HTML
////  $rs = $smtp->sendmail($email, $smtpMail, $emailTitle, $emailBody, $mailType);
////  if($rs==true){
////echo '<script>alert("恭喜您，注册成功！请登录到您的邮箱及时激活您的帐号！");window.history.go(-1);</script>';
////}else{
////echo "注册失败".$smtp->smtp_error();
////}
////}
   if($db->insert_id){
try {
	$mail = new PHPMailer(true); 
	$mail->IsSMTP();
	$mail->CharSet='UTF-8'; //设置邮件的字符编码，这很重要，不然中文乱码
	$mail->SMTPAuth   = true;                  //开启认证
	$mail->Port       = 465;                    
	$mail->Host       = "smtp.qq.com"; 
	$mail->Username   = "448159037@qq.com";    
	$mail->Password   = "kfyvbqhtzzvibjaj"; 
	$mail->SMTPSecure="ssl";           
	//$mail->IsSendmail(); //如果没有sendmail组件就注释掉，否则出现“Could  not execute: /var/qmail/bin/sendmail ”的错误提示
	$mail->AddReplyTo("448159037@qq.com","马赛赛");//回复地址
	$mail->From       = "448159037@qq.com";
	$mail->FromName   = "马赛赛";
	$to = $email;
	$mail->AddAddress($to);
	$mail->Subject  = "用户帐号激活";
	$mail->Body = "亲爱的".$username."：<br/>感谢您在我站注册了新帐号。<br/>请点击链接激活您的帐号。<br/><a href='localhost/dbx/include/active.php?verify=".$token."' target='_blank'>localhost/dbx/include/active.php?verify=".$token."</a><br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。<br/>如果此次激活请求非你本人所发，请忽略本邮件。<br/><p style='text-align:right'>-------- 百度经验 敬上</p>";
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; //当邮件不支持html时备用显示，可以省略
	$mail->WordWrap   = 80; // 设置每行字符串的长度
	//$mail->AddAttachment("f:/test.png");  //可以添加附件
	$mail->IsHTML(true); 
	$mail->Send();
	echo '恭喜您，注册成功！请登录到您的邮箱及时激活您的帐号!';
} catch (phpmailerException $e) {
	echo "邮件发送失败：".$e->errorMessage();
}
}
?>