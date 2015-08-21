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
	  <ul>
	    <li>创建账号并登录阿里云</li>
		<li>介绍</li>
	    <li>购买、操作</li>
		<li>磁盘、快照、镜像</li>
		<li>连接ECS</li>
		<li>使用ECS</li>
	  </ul>
	</div>
	<div style="border-left:2px solid #FF9900;" class="item">
	  <div style="" class="item_title">
		介绍
	  </div>
	  <div style="">
		<p>云服务器（Elastic Compute Service简称ECS）是一种简单高效，处理能力可弹性伸缩的计算服务助您快速构建更稳定、安全的应用。提升运维效率，降低IT成本，使您更专注于核心业务创新。</p>
		<p>服务器实例(简称ECS实例)是一个虚拟的计算环境，包含CPU、内存等最基础的计算组件，是云服务器对于每个用户的应用的具体体现和实际操作实体。ECS实例的规格定义了实例的CPU、内存的配置。ECS实例是云服务器最为核心的概念，磁盘、IP等只有与ECS实例结合后才有使用意义的。</p>
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
	    购买ECS
	  </div>
	  <div style="">
		<ul style="font-size:14px;">
		  <li>访问www.aliyun.com，在产品页面点击“云服务器ECS”。点击“立即购买”。</li>
		  <li><br />
		    <div id="rds-1">
		      <img id="image-rds-1" src="../../src/images/aliyun/ecs-2.jpg" style="width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>			选择“包年包月”方式（可以选择“按量付费”）。选择地域（例如：上海，不同地域之间产品内网不互通）、可用区、CPU、内存。ECS会默认开启“云盾”，用以保护ECS安全，此功能现在不收费。</li>
		  <li><br />
		    <div id="rds-1">
		      <img id="image-rds-1" src="../../src/images/aliyun/ecs-3.jpg" style="width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>
			公网带宽选择“按固定带宽”并选择1M带宽值（可选择“按使用流量”，流量费用会单独收取）。选择公共镜像，如“Aliyun Linux”，选择版本号为“15.1 32位”。（可以从“镜像市场”中选择由第三方制作并托管在阿里云“云市场”的镜像，大部分镜像免费试用。）</li>
		  <li><br />
		    <div id="rds-1">
		      <img id="image-rds-1" src="../../src/images/aliyun/ecs-4.jpg" style="width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>
			选择系统盘为“云硬盘”。增加一块“数据盘”，大小为“5G”。设置“密码”（也可以选择“创建后设置”）和实例名称，如“MyECS”。</li>
		  <li>选择“购买时长”为“1个月”，“数量”为“1台”。点击“立即购买”，在订单处点击“去支付”。付款成功后，阿里云将会启动ECS实例。</li>
		</ul>
	  </div>
	</div>
	<div style="border-left:2px solid #FF0099;" class="item">
	  <div style="" class="item_title">
	    操作ECS
	  </div>
	  <div style="">
		<ul style="font-size:14px;">
		  <li><br />
		    <div id="rds-1">
		      <img id="image-rds-1" src="../../src/images/aliyun/ecs-5.jpg" style="width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>在阿里云首页点击“管理控制台”或“账号名”，进入管理控制台。选择“云服务器ECS”菜单，即可查看“概览”页面。“概览”页面包括了“安全概览”和“我的资源”（显示阿里云多个地域中ECS实例数量）。</li>
		  <li><br />
		    <div id="rds-1">
		      <img id="image-rds-1" src="../../src/images/aliyun/ecs-7.jpg" style="width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>
			在“实例”页面查看创建好的ECS实例。在列表中点击“监控”列的图标将显示该ECS的CPU、网络数据。</li>
		  <li>
		    <span style="font-weight:bold;">（此操作仅限于“包年包月”类型的ECS实例，“按需付费”不支持此操作。）</span><br />
		  <p>在列表最右侧“更多”中选择“修改信息”，可以编辑“实例名称”和“实例说明”。</p>
		  <p>在列表最右侧“更多”中选择“停止”，可以停止实例，对于“包年包月”付费ECS实例，停止实例不会延长实例到期时间。选择“重启”可以重启实例，ECS系统盘数据不会丢失，但临时文件会被删掉，数据盘数据不受影响。<br /></p>
		  <p>在列表最右侧“更多”中选择“重置密码”，此时需要先“停止”实例才能进行“重置密码”的操作，重置密码后ECS实例会自动启动。<br /></p>
		  <p>“升级”操作可以变更ECS实例的配置，“续费”操作将会延长ECS实例到期时间。</p></li>
		  <li><br />
		    <div id="rds-1">
		      <img id="image-rds-1" src="../../src/images/aliyun/ecs-9.jpg" style="width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>
			在列表右侧选择“管理”，查看ECS实例详细信息。
		  </li>
		</ul>
	  </div>
	</div>
	<div style="border-left:2px solid #9900FF;" class="item">
	  <div style="" class="item_title">
		连接ECS
	  </div>
	</div>
	<div style="border-left:2px solid #99FF00;" class="item">
	  <div style="" class="item_title">
		搭建网站
	  </div>
	</div>
	<div style="border-left:2px solid #99FF00;" class="item">
	  <div style="" class="item_title">
		总结
	  </div>
	</div>
  </body>
</html>