﻿<html>
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
	  .course_intro {display: none;}
	</style>
	<script src="account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;font-size:14px;background-color:#F7F6F2;">
	<div style="padding:0px 0 10px 0;">
	  <div style="background-color:#FFFFFF;padding:10px;border-top:2px solid #0099FF;">
		  <div style="font-size:18px;margin:0px 0px;color:#333333;font-weight:bold;">
		    网站设计
		  </div>
		  <div class="intro_title">
		    指导老师：
		  </div>
		  <div class="intro_content">
		    吕昭波&nbsp;&nbsp;lvzhaobopku@163.com
		  </div>
	  </div>
		  <div class="course_intro" style="background-color:#FFFFFF;border-top:2px solid #FFAA00;">
		  <div class="intro_title">
		    学习目标：
		  </div>
		  <div class="intro_content">
		    完成自己的静态网站设计和开发，在第六周进行DEMO。
		  </div>
		  <div class="intro_title">
		    学习知识：
		  </div>
		  <div class="intro_content">
		    HTML、CSS、原型设计
		  </div>
		  <div class="intro_title">
		    后续课程：
		  </div>
		  <div class="intro_content">
		    ①PHP、JSP、C++等语言；②MySQL、SQL Server等数据库；③JavaScript
		  </div>
		  <div class="intro_title">
		    兴趣建议：
		  </div>
		  <div class="intro_content">
		    ①开发个人博客网站；②为学校社团开发网站；③为学校周边商店、书店等开发网站
		  </div>
		  </div>
		  </div>
		  <div>
		  <div style="background-color:#FFFFFF;border-top:2px solid #FFAA00;padding:10px;line-height:22px;margin:10px 0;">
		  <div style="font-size:18px;margin:0px 0px;color:#333333;font-weight:bold;line-height:28px;">
		    学习周期<span style="color:#999999;">（共6周）</span>
		  </div>
		  <?php 
			$host = $_SERVER["HTTP_HOST"];
			$uri = $_SERVER["REQUEST_URI"];
			$uri = preg_replace("/\?.*/","",$uri);
			$uri = "/";
			//$uri = preg_replace("/\/sgfw\//","",$uri);
			//$uri = trim($uri,"\/");
		  ?>
		  <div onclick='top.location="<?php echo "http://".$host.$uri."modules/myspace/myCourse.php?course=website"."&process=week1"?>"'>
		    <div class="intro_title<?php echo (!preg_match("/week1/",$_SERVER["REQUEST_URI"]) && !empty($_GET["process"]))?"":" current"?>">
		      第一周：基础准备、简历制作
		    </div>
		  </div>
		  <div class="intro_content">
		    建立项目，了解HTML基本语法和标签、CSS样式，完成个人简历网页。
		  </div>
		  <div onclick='top.location="<?php echo "http://".$host.$uri."modules/myspace/myCourse.php?course=website"."&process=week2"?>"'>
		    <div class="intro_title<?php echo preg_match("/week2/",$_SERVER["REQUEST_URI"])?" current":""?>">
		      第二周：网站原型分析设计
		    </div>
		  </div>
		  <div class="intro_content">
		    学习设计文档，分析网站基本结构，完成个人网站（自己感兴趣的网站）原型初步设计。
		  </div>
		  <div onclick='top.location="<?php echo "http://".$host.$uri."modules/myspace/myCourse.php?course=website"."&process=week3"?>"'>
		    <div class="intro_title<?php echo preg_match("/week3/",$_SERVER["REQUEST_URI"])?" current":""?>">
		      第三周：编写代码，实现网站框架
		    </div>
		  </div>
		  <div class="intro_content">
		    实现网站基本框架，掌握解决未知问题的能力，了解软件开发模式及网站部署等。
		  </div>
		  </div>
		  </div>
  </body>
</html>