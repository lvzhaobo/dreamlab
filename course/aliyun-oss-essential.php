<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	</style>
	<script src="account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php 
		include '../lib/db.php';
		include '../src/header.php';
	?>
	<div>
	  <div class="main_index" style="padding-top:60px;width:960px;margin:0 auto;font-size:14px;">
	    <div style="width:192px;float:left;">
		  <?php include '../src/project_index.php'?>
		</div>
		<div class="content" style="width:760px;float:left;">
			<div id="week1" name="week1" class="index_feature_box al_left" style="margin:28px 10px;min-height:200px;line-height:28px;">
			  <div>
				  <?php 
					$username = isset($_SESSION["user"])?$_SESSION["user"]:"";
					if(!empty($username)){
						$sql = "select * from sgfw_user where username='".base64_encode($username)."'";
						$result = mysql_query($sql,$conn);
						$row = mysql_fetch_array($result);
					}
				  ?>
				  <div style="float:right;width:140px;">
				  <a href="<?php echo $workspace."lib/selectCourse.php?course=aliyun-oss-essential"?>">
				    <div style="margin:5px 0 5px 10px;background-color:#FFFFFF;font-size:20px;font-weight:bold;text-align:center;padding:14px 0;color:#0099FF;border:2px solid #FF9900;">
				      <span>
					  <?php if(empty($username) || !isset($row["project"]) || $row["project"]!="aliyun-oss-essential"){?>
					  学习此课程
					  <?php }
					  else{?>
					  已选择
					  <?php }?>
					  </span>
				    </div>
			      </a>
				  </div>
				  <div style="clear:float;clear:both;"></div>
				  <div style="color:#333333;">
				    <div style="margin:20px 0px;padding:0 20px;font-weight:normal;font-size:16px;color:#333333;width:100%;height:40px;line-height:40px;background-color:#F5F5F5;border-left:4px solid #00A2C9;">课程介绍</div>
					<div>
					    <img src="../src/images/aliyun/aliyun-traning.jpg" style="width:100%;"/>
					  </div>
				    <div style="padding:16px 20px;margin:28px 0;background-color:#F9F9F9;box-shadow:0 5px 5px #CCCCCC;">
					  <div style="font-weight:bold;margin:10px 0;padding:2px 20px;border-bottom:2px solid #CCCCCC;">
					    <span style="font-size:14px;color:#0099FF;margin:0 22px 0 0;">实验目标</span>
					  </div>
					  <ul style="padding:0px;">
					  </ul>
					</div>
					<div style="padding:16px 40px;margin:28px 0;background-color:#F9F9F9;box-shadow:0 5px 5px #CCCCCC;">
					  <div style="font-weight:bold;margin:10px 0;">
					    <span style="font-size:14px;color:#FF9900;margin:0 22px 0 0;">适合学员</span>
					  </div>
					  <ul style="margin:0px;padding:0px;">
					  </ul>
					</div>
					<div style="padding:16px 40px;margin:28px 0;background-color:#F9F9F9;box-shadow:0 5px 5px #CCCCCC;">
					  <div style="font-weight:bold;margin:10px 0;font-size:14px;color:#FF0099;">内容安排</div>
					  <ul style="margin:0px;padding:0px;">
					  </ul>
					</div>
					<div style="padding:16px 40px;margin:28px 0;background-color:#F9F9F9;box-shadow:0 5px 5px #CCCCCC;">
					  <div style="font-weight:bold;margin:10px 0;font-size:14px;color:#FF0099;">其他</div>
					  <ul style="margin:0px;padding:0px;">
					    <li>实验内容约20分钟</li>
					  </ul>
					</div>
				  </div>
				  <div style="color:#333333;">
				    <div style="margin:20px 0px;padding:0 20px;font-weight:normal;font-size:16px;color:#333333;width:100%;height:40px;line-height:40px;background-color:#F5F5F5;border-left:4px solid #00A2C9;">课程介绍</div>
				    <div style="padding:16px 40px;margin:28px 0;background-color:#F9F9F9;box-shadow:0 5px 5px #CCCCCC;">
					  <div style="font-weight:bold;margin:10px 0;">
					    <span style="font-size:14px;color:#0099FF;margin:0 22px 0 0;">暂无</span>
					  </div>
					  <ul style="padding:0px;">
					  </ul>
					</div>
				  </div>
			  </div>
			</div>
		  </div>
		</div>
	</div>
	<div style="clear:float;clear:both;"></div>
	<?php include '../src/footer.php'?>
  </body>
</html>