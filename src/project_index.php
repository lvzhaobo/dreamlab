<?php
$nav_basic = array(
			array('href'=>'aliyun-ecs-essential.php','label'=>'阿里云ECS','links'=>array('aliyun-ecs-essential.php')),
			array('href'=>'aliyun-oss-essential.php','label'=>'阿里云OSS','links'=>array('aliyun-oss-essential.php')),
			array('href'=>'aliyun-rds-essential.php','label'=>'阿里云RDS','links'=>array('aliyun-rds-essential.php')),
			array('href'=>'aliyun-slb-essential.php','label'=>'阿里云SLB','links'=>array('aliyun-slb-essential.php')),
			array('href'=>'aliyun-domain.php','label'=>'域名和备案','links'=>array('aliyun-domain.php'))
		);
$nav_project = array(
			array('href'=>'wordpress.php','label'=>'Wordpress网站架构','links'=>array('wordpress.php'))
		);

$current_page = $_SERVER["REQUEST_URI"];
$current_page = preg_replace("/\?.*/","",$current_page);
$current_page = preg_replace("/.*\//","",$current_page);
$current_page = trim($current_page,"\/");
$nav_str = "<style type='text/css'>
	  p {text-indent:2em;line-height:1.6em;}
	  a {text-decoration:none;color:#5D5D5D;font-weight:normal;}
	  .course_nav_item {margin:0 14px;color:#000000;}
	  .couse_selected,.course_nav_item:hover{color:#FF9900;font-weight:bold;}
	</style>";
$nav_str .= '
	<div style="margin:-20px 0 10px 14px;padding:5px 0px;font-weight:normal;line-height:28px;font-size:14px;color:#CCCCCC;width:140px;height:28px;border-left:0px solid #00A2C9;">入门级</div>
';
foreach($nav_basic as $key=>$nav_item){
	$links = $nav_basic[$key]["links"];
	$nav_str .='
	  <a href="'.$nav_item["href"].'">
		<div style="width:100%;height:40px;" class="course_nav_item'.(in_array($current_page,$links)?" couse_selected":"").'">
		  '.$nav_item["label"].'
		</div>
	  </a>
	';
}
$nav_str .= '
	<div style="margin:-20px 0 10px 14px;padding:5px 0px;font-weight:normal;line-height:28px;font-size:14px;color:#CCCCCC;width:140px;height:28px;border-left:0px solid #00A2C9;">专业级</div>
';
foreach($nav_project as $key=>$nav_item){
	$links = $nav_project[$key]["links"];
	$nav_str .='
	  <a href="'.$nav_item["href"].'">
		<div style="width:100%;height:40px;" class="course_nav_item'.(in_array($current_page,$links)?" couse_selected":"").'">
		  '.$nav_item["label"].'
		</div>
	  </a>
	';
}
echo $nav_str;