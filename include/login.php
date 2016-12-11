<?php
ini_set("magic_quotes_runtime",0);
require_once("common/init.php");
session_start();
$data="";
	$msg="";
	//print_r($_POST);
	$data=json_decode($_POST['data']);
	$account = $data->account; //邮箱 
	$password=md5($data->password);
	$yzm=$data->yzm;
	if($yzm!=$_SESSION["img_code"]){
		echo "验证码有误！";
		exit;
	}
	$query = $db->query("select id,username,status from user where email='$account' or phone='$account' or username='$account' and password='$password'"); 
	$row = $query->fetch_array(); 
if($row){
	setcookie("username", $row["username"], time()+3600*24,"/");  
setcookie("status", $row["status"], time()+3600*24,"/"); 
	$data1=array("username"=>$row["username"],"status"=>$row["status"]); 
    echo json_encode($data1); 
    
} else{
	echo "用户不存在或密码错误！";
}
?>