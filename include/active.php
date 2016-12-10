<?php
include_once("common/init.php");//连接数据库 

$verify = stripslashes(trim($_GET['verify'])); 
$nowtime = time(); 
 
$query = $db->query("select id,token_exptime from user where status='0' and  
`token`='$verify'"); 

$row = $query->fetch_array(); 
if($row){
	
    if($nowtime>$row['token_exptime']){ //24hour 
        $msg = '您的激活有效期已过，请登录您的帐号重新发送激活邮件.'; 
    }else{
    	 
        $db->query("update user set status=1 where id=".$row['id']); 
        if($db->affected_rows!=1) die(0); 
        $msg = "<script>alert('激活成功！');window.location='../views/index.php';</script>"; 
		echo $msg;
    } 
}else{ 
    $msg = 'error.'; 
	echo $msg;    
} 

?>