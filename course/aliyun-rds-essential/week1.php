<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;}
	  a {color:#FFFFFF;text-decoration:none;}
	  .team a {color:#FF9900;text-decoration:none;margin:10px;}
	  table {font-size:13px;}
	  ul {margin:0 0 0 -20px;list-style: url;}
	  .project_item {background-color:#F2F2F2;padding:0 10px 10px 10px;;line-height:20px;font-size:13px;}
	  .project_item:hover{background-color:#EEEEEE;}
	  .intro_title {color:#666666;font-weight:bold;margin:5px 0 0 0;}
	  .intro_content {color:#999999;}
	  .current {color:#FF9900;}
	  .item {padding:10px 20px;border-left:2px solid #00AAFF;margin:28px 0px;background-color:#FFFFFF;box-shadow:0 0px 5px #999999;}
	  .item_title {font-weight:bold;font-size:18px;line-height:28px;margin:0 0 5px 0;border-bottom:2px solid #CCCCCC;padding-bottom:5px;}
	</style>
	<script type="text/javascript" src="../../src/js/jquery.min.js"></script>
  <head>
  <body style="padding:0px 10px 10px 10px;font-family:'Microsoft YaHei',宋体,Arial;line-height:24px;color:#333333;font-size:14px;background-color:#FFFFFF;">
	<div style="" class="item">
	  <div style="" class="item_title">
	    课程目标
	  </div>
	  本文档是介绍阿里云RDS关系数据库服务并使用管理控制台进行相关操作的文档。本实验主要介绍RDS的操作，包括：
	  <ul>
	    <li>创建账号并登录阿里云</li>
		<li>介绍</li>
	    <li>新建实例</li>
		<li>创建数据库和数据库账号</li>
		<li>登录RDS管理界面</li>
		<li>使用RDS</li>
		<li>总结</li>
	  </ul>
	</div>
	<div style="border-left:2px solid #FF9900;" class="item">
	  <div style="" class="item_title">
		介绍
	  </div>
	  <div style="">
		<p>云数据库是构建在SSD盘上，完全兼容MySQL，SQLServer，PostgreSQL，PPAS(PostgreSQL高级版，完美兼容Oracle)协议的关系型数据库服务（Relational Database Service，简称RDS）。采取主从双机热备架构，具有多重安全防护措施和完善的性能监控体系，并提供专业的数据库备份、恢复及优化方案，使您能专注于应用开发和业务发展。</p>
	  </div>
	</div>
	<div style="border-left:2px solid #FF0099;" class="item">
	  <div style="" class="item_title">
	    注册账号、登录阿里云
	  </div>
	  <div style="">
		<ul style="font-size:14px;">
		  <li>访问www.aliyun.com，在页面左上角点击“注册”。</li>
		  <li>在新打开的页面输入电子邮箱地址，输入验证码，同意《阿里云网站服务协议》，点击下一步。</li>
		  <li>去邮箱中接收阿里云发送的账号注册邮件，在邮件中点击“完成注册”按钮。如无法点击或看不到按钮，复制邮件中的链接，粘贴到浏览器中进行访问。</li>
		  <li>页面跳转后输入“登录密码”，选择“所在国家/地区”，输入手机号，点击确定。</li>
		  <li>访问www.aliyun.com，在页面左上角点击“登录”，输入注册的“登录名”和“登录密码”，点击登录。</li>
		</ul>
	  </div>
	</div>
	<div style="border-left:2px solid #FF0099;" class="item">
	  <div style="" class="item_title">
	    新建实例
	  </div>
	  <div style="">
	    <div style="color:#999999;text-indent:18px;padding:2px;">不同地域内RDS内网不互通，同一地域内RDS和ECS、SLB等产品内网流量免费。建议RDS和其他产品在相同地域内。</div>
		<ul style="font-size:14px;">
		  <li>登录阿里云管理控制台，选择“云数据库RDS”菜单。</li>
		  <li>点击“新建实例”，跳转到新打开的页面。
			<div id="rds-1">
		      <img id="image-rds-1" src="../../src/images/aliyun/rds-1.jpg" style="width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>
		  </li>
		  <li>选择“按量付费”。<br />“包年包月”按照每月或每年根据选择的配置收取固定费用。“按量付费”根据选择的配置及使用“公网流量”进行收费。</li>
		  <li>选择“地域”，如“杭州”。</li>
		  <li>使用默认可用区。</li>
		  <li>选择“数据库类型”，如“MySQL”。</li>
		  <li>选择默认版本。</li>
		  <li>配置RDS存储。选择“存储空间”，如“5G”。选择“内存”，如“240M”。</li>
		  <li>选择“数量”，查看“所选配置及费用”，点击“立即购买”。</li>
		  <li>点击“去开通”，即可完成“新建RDS实例”。</li>
		</ul>
	  </div>
	</div>
	<div style="border-left:2px solid #9900FF;" class="item">
	  <div style="" class="item_title">
		创建数据库和数据库账号
	  </div>
	  <ul style="font-size:14px;">
		  <li>在阿里云管理控制台，选择“云数据库RDS”菜单。</li>
		  <li>查看RDS概览，包括RDS实例数量、风险监测状况、监控图。</li>
		  <li>点击“实例列表”，查看全部地域或某单个地域内RDS实例。</li>
		  <li>在列表中选择需要查看的实例，点击“管理”进入该实例管理页面。
		    <div id="rds-account">
		      <img id="image-rds-account" src="../../src/images/aliyun/rds-account.jpg" style="width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>
		  </li>
		  <li>点击“账号管理”，点击“创建账号”。<br />此账号是用于数据库连接的账号，不同于“阿里云”账号或“阿里云RDS”账号。</li>
		  <li>在新打开的页面中输入“数据库账号”，例如“dreamlab”。</li>
		  <li>“授权数据库”暂不选择。</li>
		  <li>输入“密码”和“确认密码”。点击“确定”来完成创建账号。</li>
		  <li>点击“数据库管理”，点击“创建数据库”，跳转到新页面。
		    <div id="rds-db-manage">
		      <img id="image-rds-db-manage" src="../../src/images/aliyun/rds-db-manage.jpg" style="width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>
		  <br />每个阿里云RDS实例中可以创建多个数据库，每个数据库不单独收费，只收取新建阿里云RDS实例时提示的费用。</li>
		  <li>输入“数据库（DB）名称”，如“website_db”。</li>
		  <li>选择“支持字符集”为“utf8”。</li>
		  <li>选择“授权账号”，即刚创建的数据库账号“dreamlab”。并选择“账号类型”，选择“只读”类型则选择的数据库账号不能对该数据库进行写操作；选择“读写”类型则可以进行读和写操作。</li>
		  <li>点击“确定”完成创建数据库操作。</li>
		</ul>
	</div>
	<div style="border-left:2px solid #99FF00;" class="item">
	  <div style="" class="item_title">
		登录RDS管理界面
	  </div>
	  <ul style="font-size:14px;">
		  <li>在“云数据库RDS”页面点击“登录数据库”，将会新打开一个页面。
		    <div id="rds-idb">
		      <img id="image-rds-idb" src="../../src/images/aliyun/rds-idb.jpg" style="width:50%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>
		  </li>
		  <li>输入“网络地址:端口”，数据库连接地址可以从需要使用的数据库“基本信息”的“连接信息”中查看得到。</li>
		  <li>输入“用户名”，即数据库账号，例如“dreamlab”。</li>
		  <li>输入数据库账号的密码。</li>
		  <li>点击“登录”。</li>
		  <li>在新打开的“DMS”页面左上角选择数据库。
		    <div id="rds-idb-2">
		      <img id="image-rds-idb-2" src="../../src/images/aliyun/rds-idb-2.jpg" style="max-width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>
		  </li>
		  <li>在页面右侧可以查看该数据库的“实例状态”、“实例基本信息”等。</li>
		</ul>
	</div>
	<div style="border-left:2px solid #99FF00;" class="item">
	  <div style="" class="item_title">
		使用RDS
	  </div>
	  <ul style="font-size:14px;">
		  
		</ul>
	</div>
	<div style="border-left:2px solid #99FF00;" class="item">
	  <div style="" class="item_title">
		其他资源
	  </div>
	  <ul style="font-size:14px;">
		  <li>查看阿里云RDS产品介绍</li>
		  <li>查看阿里云RDS产品文档</li>
		</ul>
	</div>
  </body>
</html>
<script type="text/javascript">
  $("#image-rds-1").on("click",function(){
	//alert($("#image-rds-1").attr("width"));
	if($("#image-rds-1").attr("width")!="200px")
	  $(window.frames["course-content"].document).find("#image-rds-1").attr("width","200px");
    else
	  $(window.frames["course-content"].document).find("#image-rds-1").attr("width","100%");
  });
</script>