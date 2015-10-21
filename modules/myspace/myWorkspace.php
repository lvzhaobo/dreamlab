<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;}
	  a {text-decoration:none;}
	  .team a {color:#FF9900;text-decoration:none;margin:10px;}
	  table {font-size:13px;}
	  ul {margin:0 0 0 -20px;}
	  .project_item {background-color:#F2F2F2;padding:0 10px 10px 10px;;line-height:20px;font-size:13px;}
	  .project_item:hover{background-color:#EEEEEE;}
	  .intro_title {color:#666666;font-weight:bold;margin:5px 0 0 0;}
	  .intro_content {color:#999999;}
	  .current {color:#FF9900;}
	</style>
	<script type="text/javascript" src="../../src/js/jquery.min.js"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include '../../src/header.php'?>
	<?php
			include '../../lib/db.php';
			$data = array();
			if(isset($_SESSION["user"])){
				$result = mysql_query("select * from sgfw_user where username='".base64_encode($_SESSION["user"])."'");
				//var_dump(mysql_error());
				$data = mysql_fetch_array($result);
			}
			if(!isset($data["id"]) or empty($data["id"])){
				echo "<script>alert('请先登录');window.location.href='../login.php'</script>";
				return ;
			}
		  ?>
	<div>
	  <div class="main index" style="padding-top:32px;min-width:960px;margin:0 auto;font-size:14px;min-height:400px;">
	    
	    <?php include '../../src/myspace_index.php';?>
		<div class="content" style="width:800px;float:left;margin:0 0 40px 200px;min-height:320px;">
		<div>
		  <?php
			include '../../lib/db.php';
			$data = array();
			if(isset($_SESSION["user"])){
				$result = mysql_query("select * from sgfw_user where username='".base64_encode($_SESSION["user"])."'");
				$data = mysql_fetch_array($result); 
				$result_team = mysql_query("select * from sgfw_team where member LIKE '%".$_SESSION["user"]."%'");
				$team = mysql_fetch_array($result);
			}
			
			if(!isset($data["id"]) or empty($data["id"])){
				echo "<script>alert('请先登录');window.location.href='../../login.php'</script>";
				return ;
			}
			$edit = isset($_GET["edit"]);
		  ?>
		
		<div class="content" style="width:1128px;margin:0 0 40px 0px;padding:20px 10px;min-height:140px;">
		  <div style="width:1000px;float:left;">
		    <textarea style="boder:1px solid FF9900;width:100%;height:280px;" id="workspace_content"></textarea>
		  </div>
		  <div style="width:1000px;float:left;overflow:scroll;">
		    <div style="width:100%;height:200px;border-left:1px solid #CCCCCC;margin:0 0 0 10px;" id="code_content"></div>
		    <!--<iframe id="preview_page" src="../../lib/dreamcollege.html"></iframe>-->
		  </div>
	    </div>
		<div style="clear:float;clear:both;"></div>
	<div style="clear:float;clear:both;"></div>
  </body>
</html>
<script>
<?php if(!empty($_GET["info"])){?>
alert("<?php echo $_GET["info"]?>");
window.location.href="myHomework.php";
<?php }?>

function saveCode(){
	if($("#workspace_content").val()==""){
		$.ajax({
		url: "../../lib/request.php?action=printCode",
		success: function(data){
			$("#workspace_content").html(data);
		}
	});
	}
	$.ajax({
		url: "../../lib/request.php?action=saveCode",
		data: {"data":$("#workspace_content").val()},
		type:'post',
		cache:false,
		dataType:'json',  
	});
}
setInterval(
saveCode,1000);

function printCode(){
	$.ajax({
		url: "../../lib/request.php?action=printCode",
		success: function(data){
			$("#code_content").html(data);
		}
	});
}
setInterval(
printCode,1000);

//setInterval($("#preview_page").location.reload(),1000);
</script>