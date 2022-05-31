<?php 
include("../../db.php");

if(isset($_GET["no"])){
	$no = $_GET["no"];
}else{
	$no = 0;
}

if(count($_POST) > 0){

	if($no == 0){
		//新增
		$sql = "INSERT INTO academy(
				pno,title,href,updatetime
			) VALUES (
				'".$_POST["pno"]."',
				'".addslashes($_POST["title"]) ."',
				'".$_POST["href"]."',
				NOW()
			)";
	}else{
		//修改
		$sql = "
		UPDATE academy SET
			pno='".$_POST["pno"]."',
			title='".addslashes($_POST["title"]) ."',
			href='".$_POST["href"]."',
			updatetime=NOW()
		WHERE no='". $no ."'";
	}

	
	 
	if ($conn->query($sql) === TRUE) {
		echo '<script>alert("資料已更新!");location.href="list.php";</script>';
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	exit;
}
?>
<html>
<head>
<meta charset="utf-8">
<title>科系分類管理</title>
</head>

<body>
<h1>科系分類管理 - <?=($no==0 ? "新增":"修改")?></h1>
<hr>
<?php
	if($no == 0){
		//新增
		$academy = [
			"pno" => 0,
			"title" => "",
			"href" => "",
		];		
	}else{
		//修改
		$rs = $conn->query("SELECT * FROM academy WHERE no='".$no."'");
		$academy = $rs->fetch_assoc();		
	}
?>
<form action="?no=<?=$no?>" method="post" enctype="multipart/form-data">
學院名稱: <select id="pno" name="pno" required>
	<option value="0">-- 這是第一層 --</option>
<?php
	$rs = $conn->query("SELECT * FROM academy WHERE pno=0 ORDER BY no");
	while($rst = $rs->fetch_assoc()){
		echo'<option value="'.$rst["no"].'"'.($rst["no"]==$academy["pno"]?"selected":"").'>'.$rst["title"].'</option>';
	}
?>
</select><br>
科系名稱:<input type="text" id="title" name="title" value="<?=$academy["title"];?>" required><br>
網址:<input type="text" id="href" name="href" value="<?=$academy["href"];?>" required><br>
<br>
<input type="submit" value="送出">
</form>
</body>
</html>