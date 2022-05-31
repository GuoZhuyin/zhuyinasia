<?php 
include("../../db.php");

if(isset($_GET["act"]) && $_GET["act"] == "delete"){
	$no = $_POST["no"];
		
	$sql = "DELETE FROM academy WHERE no='".$no."'";
	$conn->query($sql);
	
	exit('<script>alert("資料已刪除!");location.href="list.php";</script>');
}

//頁數
if(isset($_GET["page"])){
	$page = (int)$_GET["page"];	
}else{
	$page = 1;
} 

//關鍵字
if(isset($_GET["keyword"])){
	$keyword = $_GET["keyword"];	
}else{
	$keyword = "";
}

?>
<html>
<head>
<meta charset="utf-8">
<title>科系分類管理</title>
</head>

<body>
<h1>科系分類管理</h1>
<hr>
<form name="form1" action="" method="get" enctype="multipart/form-data">
<input type="hidden" name="no" value="">

<input type="button" value="新增資料" onclick="location.href='main.php?no=0';">
關鍵字：<input type="text" name="keyword" placeholder="可查詢科系名稱" value="<?= $keyword ?>">
<input type="submit" value="查詢">


<table border="1" cellpadding="5">

<tr>
	<th>No</th>
	<th width="200">科系名稱</th>
	<th>網址</th>
	<th>更新時間</th>
	<th>功能</th>
</tr>
<?php 

	$pagerows = 99; //每頁99筆
	$totalcounts = 0; //資料筆數
	$pagecounts = 0; //總頁數

	$where = "1=1";
	
	if($keyword != ""){
		$where .= " AND (title LIKE '%".$keyword."%')";
	}

	//第一層類別
	$rs = $conn->query("SELECT * FROM academy WHERE ". $where ." ORDER BY pno,no");
	$totalcounts = $rs->num_rows;
	 
	//計算總頁數
	$pagecounts = ceil($totalcounts / $pagerows);
	
	$rs = $conn->query("SELECT * FROM academy WHERE pno=0 AND ". $where ." ORDER BY pno,no LIMIT ".(($page-1)*$pagerows).",".$pagerows); //跳過幾筆然後的下一筆
	
	while($data = $rs->fetch_assoc()){					
	
?>
<tr>
	<td><?=$data["no"]?></td>
	<td><?=$data["title"]?></td>
	<td><?=$data["href"]?></td>
	<td><?=$data["updatetime"]?></td>
	<td>
		<input type="button" value="修改" onclick="location.href='main.php?no=<?=$data["no"]?>';"> |
		<input type="button" value="刪除" onclick="del('<?=$data["no"]?>')">
	</td>
</tr>
	<?php //第二層類別 要包在第一層裡面
		$rs2 = $conn->query("SELECT * FROM academy WHERE pno='".$data["no"]."' AND ". $where ." ORDER BY pno,no"); //跳過幾筆然後的下一筆
		while($data2 = $rs2->fetch_assoc()){						
	?>
	<tr>
		<td><?=$data2["no"]?></td>
		<td align="center"><?=$data2["title"]?></td>
		<td><?=$data2["href"]?></td>
		<td><?=$data2["updatetime"]?></td>
		<td>
			<input type="button" value="修改" onclick="location.href='main.php?no=<?=$data2["no"]?>';"> |
			<input type="button" value="刪除" onclick="del('<?=$data2["no"]?>')">
		</td>
	</tr>
	<?php } ?>
<?php } ?>


</table>

<!--分頁-->
<?php if($page > 1){ ?>
<input type="button" value="第一頁" onclick="toPage(1)">
<input type="button" value="上一頁" onclick="toPage(<?= $page - 1 ?>)">
<?php }?>

<?php
	for($i=1;$i<=$pagecounts;$i++){
		echo '<a href="?page='.$i.'">'.$i.'</a>&nbsp;';
	}
?>

<?php if($page < $pagecounts){ ?>
<input type="button" value="下一頁" onclick="toPage(<?= $page + 1 ?>)">
<input type="button" value="最末頁" onclick="toPage(<?= $pagecounts ?>)">
<?php }?>

| <?= $page ?> / <?= $pagecounts ?> 頁，每頁 <?= $pagerows ?> 筆，共 <?= $totalcounts ?> 筆
<!--分頁-->

</form>
</body>

<script>
	function del(no){
		var frm = document.form1;
		
		if(confirm('確認刪除該資料?')){
			frm["no"].value = no;
			frm.method = 'POST';
			frm.action = '?act=delete';
			frm.submit();
		}
	}
	
	function toPage(p){
		location.href = "?page=" + p;
	}
</script>

</html>