﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;font-size:13px;color:#000000;margin:5px 0;border-top:1px solid #F0F099;}
	  a {color:#FFFFFF;text-decoration:none;}
	  .project_item {width:428px;min-height:160px;margin:10px 10px 10px 10px;float:left;padding:10px;border:1px solid #CCCCCC;color:#000000;background-color:#F6F6F6;box-shadow:0 1px 5px #999999;border-radius:0.3em;}
	  .project_item:hover {border:1px solid #CCCCCC;background-color:#F3F3F3;}
	  .project_item_title {margin:20px 0 0 0px;font-size:16px;color:#FF6600;line-height:28px;}
	  .project_item hr {height:1px;display:none;}
	  .label_part {color:#0099FF;padding:1px 1px;margin:0 2px;line-height:26px;font-weight:normal;font-size:12px;}
	</style>
	<script src="../src/js/account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include '../src/header.php'?>
	<div style="margin:0px 0 0 0;">
	  <div class="main_index" style="width:960px;margin:0 auto;font-size:14px;">
			<div style="width:100%;margin:60px 0 0 0;min-height:480px;">
			  <div style="margin:0 0 0 0px;height:48px;border-bottom:2px solid #F3F3F3;">
			    <div style="float:left;text-align:middle;padding:10px 20px;color:#333333;">
			      <span style="font-size:20px;font-weight:bold;margin:0 5px;">兴趣项目</span>
				  <span>这里是大家最喜欢的兴趣项目，由各自团队开发。如果你只有想法和小伙伴，可以免费得到我们的技术帮助和资金扶持。</span>
				</div>
			  </div>
			  <?php for($i=0;$i<0;$i++){?>
			  <a href="#">
			    <div class="project_item">
			      <div style="height:80px;">
				    <div style="width:100px;float:left;">
				      <img src="bg<?php echo $i%6?>.jpg" style="width:96px;"/>
				    </div>
				    <div style="width:320px;float:left;margin:0px 10px;">
					  <div style="width:100%;">
				        <span class="project_item_title" style="">校园论坛</span>
					    <span style="color:#0099FF;float:right;">DS-000<?php echo $i?></span>&nbsp;
					  </div>
				      <div style="margin-top:5px;color:#999999;font-size:12px;">
					    <span>开发者：</span>
					    <span style="font-weight:bold;font-size:14px;">梦想科技</span><br />
				        
						<span style="color:#0099FF;">进行中</span>&nbsp;
						<span title="喜欢：8" style="color:#FF0000;">8</span>
						<span>赞</span>
				      </div>
				    </div>
				  </div>
			      <div style="clear:float;clear:both;"></div>
				  <div style="">
				    <span><span class="label_part">HTML</span> 
				    <span class="label_part">PHP</span> 
				    <span class="label_part">MySQL</span> 
				    <span class="label_part">JQuery</span> 
				    <span class="label_part">GitHub</span>
				  </div>
				  <span style="color:#999999;">建立一个属于自己学校校园的论坛。整合社团、班级、宿舍、课外活动等多方资源的综合性交流平台。</span>
			    </div>
			  </a>
			  <?php }?>
			  <?php
				include '../lib/db.php';
				$result = mysql_query("select * from sgfw_project order by id desc");
				$data = array();
				while($item_tmp = mysql_fetch_array($result)){
					$data[] = $item_tmp;
				}
				shuffle($data);
				foreach($data as $item){
			  ?>
			  <div class="project_item">
			    <span class="project_item_title" style=""><?php echo base64_decode($item["name"])?></span>
				<div style="margin-top:5px;">开发者：<span style="font-weight:bold;"><?php echo $item["team"]?></span>&nbsp;&nbsp;
				<!--<br /><span style="font-size:12px;">DS-0001</span>&nbsp;<span style="color:#0099FF;">第一周</span>&nbsp;&nbsp;<span title="喜欢：6" style="margin-left:10px;font-size:20px;color:#FF0000;">6</span>-->
				</div>
				<span style="font-size:12px;"><?php echo $item["label"]?></span>
				<div style="font-size:12px;color:#333333;">创建时间：<?php echo date("Y-m-d H:i:s",$item["create_time"])?></div>
				<p><?php echo $item["introduction"]?></p>
			  </div>
			  <?php }?>
			  <div class="project_item">
			    <span class="project_item_title" style="">校园周边服务网</span>
				<div style="margin-top:5px;">开发者：<span style="font-weight:bold;">梦想学院</span>&nbsp;&nbsp;
				<!--<br /><span style="font-size:12px;">DS-0001</span>&nbsp;<span style="color:#0099FF;">第一周</span>&nbsp;&nbsp;<span title="喜欢：28" style="margin-left:10px;font-size:20px;color:#FF0000;">28</span>-->
				</div>
				<span style="font-size:12px;">HTML、PHP、MySQL、JQuery、GitHub</span>
				<p>学校周边肯定有不少商店、餐馆、书店，把这些资源整合到网上，会很方便的，否则你都不知道在哪里配钥匙。</p>
			  </div>
			  <a href="#">
			  <div class="project_item">
			    <span class="project_item_title" style="">音乐播放器</span>
				<div style="margin-top:5px;">开发者：<span style="font-weight:bold;">梦想学院</span>&nbsp;&nbsp;
				<!--<br /><span style="font-size:12px;">DS-0001</span>&nbsp;<span style="color:#0099FF;">第一周</span>&nbsp;&nbsp;<span title="喜欢：12" style="margin-left:10px;font-size:20px;color:#FF0000;">12</span>-->
				</div>
				<span style="font-size:12px;">HTML、PHP、MySQL、JQuery、GitHub</span>
				<p>打造班级/宿舍专属音乐播放器，支持音乐推荐、评论、点赞、在线下载等。</p>
			  </div>
			  </a>
			  <div class="project_item">
			    <span class="project_item_title" style="">情侣空间</span>
				<div style="margin-top:5px;">开发者：<span style="font-weight:bold;">梦想学院</span>&nbsp;&nbsp;
				<!--<br /><span style="font-size:12px;">DS-0001</span>&nbsp;<span style="color:#0099FF;">第一周</span>&nbsp;&nbsp;<span title="喜欢：14" style="margin-left:10px;font-size:20px;color:#FF0000;">14</span>-->
				</div>
				<span style="font-size:12px;">HTML、PHP、MySQL、JQuery、GitHub</span>
				<p>现在已经有一些情侣空间的网站，但做好一个和学校紧密结合的情侣空间，还没有哦。</p>
			  </div>
			  <div class="project_item">
			    <span class="project_item_title" style="">社团官方网站</span>
				<div style="margin-top:5px;">开发者：<span style="font-weight:bold;">梦想学院</span>&nbsp;&nbsp;
				<!--<br /><span style="font-size:12px;">DS-0001</span>&nbsp;<span style="color:#0099FF;">第一周</span>&nbsp;&nbsp;<span title="喜欢：8" style="margin-left:10px;font-size:20px;color:#FF0000;">8</span>-->
				</div>
				<span style="font-size:12px;">HTML、CSS</span>
				<p>学校有那么多社团，为社团做个网站是个不错的主意。</p>
			  </div>
			  <div class="project_item">
			    <span class="project_item_title" style="">校园云网盘</span>
				<div style="margin-top:5px;">开发者：<span style="font-weight:bold;">梦想学院</span>&nbsp;&nbsp;
				<!--<br /><span style="font-size:12px;">DS-0001</span>&nbsp;<span style="color:#0099FF;">第一周</span>&nbsp;&nbsp;<span title="喜欢：6" style="margin-left:10px;font-size:20px;color:#FF0000;">6</span>-->
				</div>
				<span style="font-size:12px;">HTML、PHP、MySQL、JQuery、GitHub</span>
				<p>打造属于自己学校的网盘及云存储。</p>
			  </div>
			  <div class="project_item">
			    <span class="project_item_title" style="">学校课程在线</span>
				<div style="margin-top:5px;">开发者：<span style="font-weight:bold;">梦想学院</span>&nbsp;&nbsp;
				<!--<br /><span style="font-size:12px;">DS-0001</span>&nbsp;<span style="color:#0099FF;">第一周</span>&nbsp;&nbsp;<span title="喜欢：6" style="margin-left:10px;font-size:20px;color:#FF0000;">6</span>-->
				</div>
				<span style="font-size:12px;">HTML、PHP、MySQL、JQuery、GitHub</span>
				<p>利用学校的一些资源，制作一些学习视频，放在网上，供有需要的同学使用。</p>
			  </div>
			  <div class="project_item">
			    <span class="project_item_title" style="">等你来发掘</span><hr />
				<p>如果你有好的想法请联系我们，如果你需要资助及扶持来确保你的项目顺利完成，请联系我们。</p>
			  </div>
			  <div style="clear:float;clear:both;"></div>
			</div>
			<br />
		  </div>
		</div>
	</div>
	<div style="clear:float;clear:both;"></div>
	<?php include '../src/footer.php';?>
  </body>
</html>