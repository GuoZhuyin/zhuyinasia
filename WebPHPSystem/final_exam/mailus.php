<?php
	include("db.php");
	if(count($_POST)>0){
		
		$sql = "INSERT INTO mailus (name,email,subject,message,updatetime)
				VALUES(
					'".@$_POST["name"]."',
					'".$_POST["email"]."',
					'".@$_POST["subject"]."',
					'".@$_POST["message"]."',
					NOW()
				)";
				
		if($conn->query($sql)){
			exit('<script>alert("資料已收到!");history.go(-1);</script>');
		}else{
			exit('<script>alert("抱歉，請重新發送一次!");history.go(-1);</script>');
		}
		
		exit;

	}
?>