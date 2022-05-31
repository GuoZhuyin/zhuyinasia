<?php 
include("../../db.php");


if(isset($_GET["no"])){
	$no=$_GET["no"];
}else{
	$no=0;
}



if(count($_POST) > 0){
	//file upload
	$photo = $_POST["old_photo"];
	
	if(isset($_FILES["photo"]) && $_FILES["photo"]["tmp_name"] != ""){
		$target_dir = "../../photos/";
		$target_file = basename($_FILES["photo"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$target_file = date("YmdHis") . rand(1000,9999) . "." . $imageFileType;
    
		// Check if image file is a actual image or fake image
		if( $imageFileType == "jpg" || 
			$imageFileType == "png" ||
			$imageFileType == "jpeg" || 
			$imageFileType == "gif" ) {
			
			move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir . $target_file);
			$photo = $target_file;
		}
	}
	
	if($no == 0){
		//新增
		$sql = "INSERT INTO courses (
				academy,
				department,
				grade,
				name,
				teacher,
				content,
				time,
				photo,
				updatetime
			) VALUES (
				'". $_POST["academy"] ."',
				'". $_POST["department"] ."',
				'". $_POST["grade"] ."',
				'". $_POST["name"] ."',
				'". $_POST["teacher"] ."',
				'". $_POST["content"] ."',
				'". $_POST["time"] ."',
				'". $photo ."',
				NOW()
			)";
		
	}else{
		//修改
		$sql = "
		UPDATE courses SET
			academy='". $_POST["academy"] ."',
			department='". $_POST["department"] ."',
			grade='". $_POST["grade"] ."',
			name='". $_POST["name"] ."',
			teacher='". $_POST["teacher"] ."',
			content='". $_POST["content"] ."',
			time='". $_POST["time"] ."',
			photo='". $photo ."',
			updatetime=NOW()
		WHERE no='". $no ."'
	";
		
		
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
<title>課程管理</title>
</head>

<body>
<h1>課程管理 - <?=($no==0 ? "新增":"修改")?></h1>
<hr>
<?php

	if($no == 0){
		//新增
		$courses = [
			"grade" => "",
			"name" => "",
			"teacher" => "",
			"content" => "",
			"time" => "",
			"photo" => "",
		];
		
		
	}else{
		//修改
		$rs = $conn->query("SELECT * FROM courses WHERE no='" . $no . "' ");
		$courses = $rs->fetch_assoc();		
	}

?>
<form action="?no=<?=$no?>" method="post" enctype="multipart/form-data">
<input type="hidden" name="old_photo" value="<?=$courses["photo"]?>">

學院:<select id="academy" name="academy" required>
<?php
	$rs1 = $conn->query("SELECT * FROM academy WHERE pno=0 ORDER BY no");
	while($rst1=$rs1->fetch_assoc()){
		echo'<option value="'.$rst1["no"].'"'.($rst1["no"]==$courses["academy"]?"selected":"").'>'.$rst1["title"].'</option>';
	}
?>
</select><br>

科系:<select id="department" name="department" required>
<?php
	$rs1 = $conn->query("SELECT * FROM academy WHERE pno=0 ORDER BY no");
	while($rst1=$rs1->fetch_assoc()){
		echo'<optgroup label="'.$rst1["title"].'">';
			
			$rs2 = $conn->query("SELECT * FROM academy WHERE pno='".$rst1["no"]."' ORDER BY no");
			while($rst2=$rs2->fetch_assoc()){
				echo'<option value="'.$rst2["no"].'"'.($rst2["no"]==$courses["department"]?"selected":"").'>'.$rst2["title"].'</option>';
			}
			
		echo'</optgroup>';
	}
?>
</select><br>
年級:<input type="text" id="grade" name="grade" value="<?=$courses["grade"];?>" ><br>
課程名稱:<input type="text" id="name" name="name" value="<?=$courses["name"];?>" ><br>
授課教師:<input type="text" id="teacher" name="teacher" value="<?=$courses["teacher"];?>" ><br>
課程內容:<textarea id="content" name="content" cols="40" rows="5"><?=$courses["content"];?></textarea><br>
上課時間:<input type="text" id="time" name="time" value="<?=$courses["time"];?>"><br>
照片:<input type="file" id="photo" name="photo"><br>
<?php
	if(isset($courses["photo"]) && $courses["photo"]!=""){
		echo '<img width="200" src="../../photos/'. $courses["photo"] .'"><br>';
	}
?>
<input type="submit" value="送出">
</form>
</body>
</html>