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
	<script src="../../src/js/account.js" type="text/javascript"></script>
	<script type="text/javascript" src="../../src/js/jquery.min.js"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;background-image:url('../../src/images/custom-bg-4.jpg');background-size:100% 100%;">
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
			}
		  ?>
	<div>
	  <div class="main index" style="padding-top:40px;min-width:960px;margin:0 auto;font-size:14px;position:fixed;">
	    
		
	    <?php include '../../src/myspace_index.php'?>
		<div class="content" style="width:1166px;float:left;margin:0 0 0px 200px;min-height:320px;">
		  <iframe id="course-content" src="../../course/<?php echo empty($_GET["course"])?"website":$_GET["course"]?>/<?php echo empty($_GET["process"])?"week1":$_GET["process"]?>.php" style="border:0px;width:100%;height:565px;"></iframe>
		</div>
		<div class="project_item" style="width:318px;float:right;margin:-20px 20px 0 0;padding:20px 20px 0px 10px;border-left:2px solid #EEEEEE;box-shadow:-4px 0 5px #999999;background-color:#F7F6F2;position:absolute;right:0px;display:none;">
		  <iframe src="../../course/<?php echo empty($_GET["course"])?"website":$_GET["course"]?>/intro.php?course=<?php echo $_GET["course"]."&process=".@$_GET["process"]?>" style="border:0px;width:100%;height:546px;"></iframe>
		</div>
		
		<div style="position:fixed;right:20px;height:100px;">
		  <div id="tool" style="width:100px;height:40px;border:1px solid #FF9900;background-color:#FF99FF;line-height:40px;text-align:center;font-weight:bold;">
		    工具
		  </div>
		</div>
	</div>
	<div style="clear:float;clear:both;"></div>
  </body>
</html>
<script>
//alert("测试阶段，以网站设计或PHP为例");
<?php if(!empty($_GET["info"])){?>
alert("<?php echo $_GET["info"]?>");
window.location.href="myStudy.php";
<?php }?>
</script>
<script type="text/javascript">
  $(window.frames["course-content"].document).find("#image-rds-1").on("click",function(){
	alert($("#image-rds-1").attr("width"));
	if($("#image-rds-1").attr("width")!="200px")
	  $("#image-rds-1").attr("width","200px");
    else
	  $("#image-rds-1").attr("width","100%");
  });
  
  $("#tool").on("click",function(){
	  var display = $(".project_item").css("display");
	  if(display == "none")
		  $(".project_item").css("display","block"); 
	  else
		  $(".project_item").css("display","none"); 
  });
</script>