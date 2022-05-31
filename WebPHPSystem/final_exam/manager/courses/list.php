<?php 
include("../../db.php");

if(isset($_GET["act"])&& $_GET["act"] == "delete"){
	$no = $_POST["no"];
	
	$rs = $conn->query("SELECT * FROM courses WHERE no='".$no."'");
	$rst = $rs->fetch_assoc();
	if($rst["photo"] != ""){
		@unlink("../../photos/".$rst["photo"]);
	}
	$sql = "DELETE FROM courses WHERE no='". $no ."'";
	$conn->query($sql);
	exit('<script>alert("資料已刪除!"); location.href="list.php";</script>');
}
//頁數page
if(isset($_GET["page"])){
	$page =(int) $_GET["page"];
}else{
	$page = 1;
}
//類別category
if(isset($_GET["department"])){
	$department = $_GET["department"];
}else{
	$department = "";
}
//關鍵字keyword
if(isset($_GET["keyword"])){
	$keyword = $_GET["keyword"];
}else{
	$keyword = "";
}
?>
<html>
<head>
<meta charset="utf-8">
<title>課程列表管理</title>
</head>

<body>
<h1>課程列表管理</h1>
<hr>

<form name="form1" action="" method="get" enctype="multipart/form-data">
<input type="hidden" name="no" value="">
<input type="button" value="新增資料" onclick="location.href='main.php?no=0';"><br>
學院: <select id="department" name="department">
	<option value="">--所有類別--</option>
<?php
	//第一層
	$rs2=$conn->query("SELECT*FROM academy WHERE pno=0 ORDER BY no");
	while($rst2=$rs2->fetch_assoc()){
		echo '<optgroup label="'.$rst2["title"].'">'; //optgroup HTML標籤
		//第二層
		$rs3=$conn->query("SELECT * FROM academy WHERE pno='".$rst2["no"]."' ORDER BY no");
		while($rst3=$rs3->fetch_assoc()){
			echo'<option value="'.$rst3["no"].'"'.($rst3["no"]==$department ? "selected":"").'>'.$rst3["title"].'</option>';
		}
		
		echo '</optgroup>';
	}
?>
</select> |
關鍵字：<input type="text" name="keyword" placeholder="可查詢課程,教師" value="<?=$keyword?>">
<input type="submit" value="查詢">
<table border="1" cellpadding="5" >
	<tr>
		<th>No</th>
		<th>學院</th>
		<th>課程名稱</th>
		<th>授課教師</th>
		<th>課程內容</th>
		<th>照片</th>
		<th>更新時間</th>
		<th>功能</th>
	</tr>
<?php
	$pagerows=20; //每頁20筆
	$totalcounts=0; //資料筆數
	$pagecounts=0; //總頁數
	
	$where = "1=1";
	
	//類別category
	if($department != ""){
		$where .= " AND department='".$department."'";
	}
	
	if($keyword != ""){
		$where .= " AND (name LIKE '%".$keyword."%' OR teacher LIKE '%".$keyword."%')";
	}
	
	$rs = $conn->query("SELECT * FROM courses WHERE ". $where ." ORDER BY no");
	$totalcounts = $rs->num_rows;
	//計算總頁數
	$pagecounts = ceil($totalcounts/$pagerows);
	
	$rs = $conn->query("SELECT * FROM courses WHERE ".$where." ORDER BY no LIMIT ".(($page-1) * $pagerows).",".$pagerows);
	
	while($data = $rs->fetch_assoc()){
?>
	<tr>
		<td><?=$data["no"]?></td>
		<td>
		<?=$data["academy"]?>
		<hr>
		<?php 
		//C1=父類別 C2=子類別
 		$rs1 = $conn->query("SELECT C1.title as C1title,C2.title as C2title
							 FROM academy as C2 
							 LEFT JOIN academy C1 on C1.no =C2.pno
							 WHERE C2.no='". $data["department"] ."'");
		$academy = $rs1->fetch_assoc();
		echo '<b>'. $academy["C1title"]. '</b>'."<br>".$academy["C2title"];
		?>
		
		</td>
		<td><?=$data["name"]?></td>
		<td><?=$data["teacher"]?></td>
		<td><?=$data["content"]?></td>
		<td>
			<?php
				if(isset($data["photo"]) && $data["photo"]!=""){
					echo '<img width="150" src="../../photos/'. $data["photo"] .'">';
				}
			?>
		</td>
		<td><?=$data["updatetime"]?></td>
		<td>
			<input type="button" value="修改" onclick="location.href='main.php?no=<?=$data["no"]?>';"> |
			<input type="button" value="刪除" onclick="del('<?=$data["no"]?>');">
		</td>
	</tr>
<?php } ?>
</table>

<!-- 分頁 -->
<?php if ($page >1){?>
<input type="button" value="第一頁<<" onclick="toPage(1)">
<input type="button" value="上一頁<" onclick="toPage(<?=$page-1?>)">
<?php }?>
<?php
	for($i=1; $i<=$pagecounts; $i++){
		echo '<a href="?page='.$i.'">'.$i.'</a>&nbsp;';
	}
?>
<?php if ($page < $pagecounts){?>
<input type="button" value="下一頁>" onclick="toPage(<?=$page+1?>)">
<input type="button" value="最末頁>>" onclick="toPage(<?=$pagecounts?>)">
<?php }?>
 | <?=$page?>/<?=$pagecounts?>頁，每頁<?=$pagerows?>筆，共<?=$totalcounts?>筆
<!-- 分頁 -->

</form>
</body>

<script>
//Java Script function 在哪都會被執行
	function del(no){
		var frm=document.form1; //var 定義變數
		
		if(confirm('確定刪除資料')){ //使用者確認
			
			frm["no"].value=no; //取得表單
			frm.method = 'POST'; //收到值後隱藏值
			frm.action = '?act=delete'; //定義行為
			frm.submit(); //送出
		}
	}
	function toPage(p){
		location.href = "?page=" + p;
	}
</script>
</html>