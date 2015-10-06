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
	    <li>购买、操作SLB</li>
		<li>配置SLB</li>
		<li>使用SLB</li>
	  </ul>
	</div>
	<div style="border-left:2px solid #FF9900;" class="item">
	  <div style="" class="item_title">
		介绍
	  </div>
	  <div style="">
		<p></p>
		<p></p>
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
	    购买SLB
	  </div>
	  <div style="">
		<ul style="font-size:14px;">
		  <li>访问www.aliyun.com，在产品页面点击“负载均衡SLB”。点击“立即购买”。</li>
		  <li><br />
		    <div id="rds-1">
		      <img id="image-rds-1" src="../../src/images/aliyun/slb-1.jpg" style="width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>选择地域（例如：杭州，不同地域之间产品内网不互通）。</li>
		  <li>
			选择网络类型为“经典网络”、实例类型为“公网”、公网带宽为“按固定带宽计费”、带宽值为“1M”。</li>
		  <li>选择“数量”为“1台”。点击“立即购买”，在订单处点击“去支付”。付款成功后，阿里云将会启动SLB实例。</li>
		</ul>
	  </div>
	</div>
	<div style="border-left:2px solid #FF0099;" class="item">
	  <div style="" class="item_title">
	    配置SLB
	  </div>
	  <div style="">
		<ul style="font-size:14px;">
		  <li><br />
		    <div id="slb-2">
		      <img id="image-slb-2" src="../../src/images/aliyun/slb-2.jpg" style="width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>
			在阿里云首页点击“管理控制台”或“账号名”，进入管理控制台。选择“负载均衡SLB”菜单，在“实例管理”页面查看已创建的SLB实例。</li>
		  <li>
		    在“后端服务器”中点击“配置”，配置SLB的后端服务器。
			<br />
		    <div id="slb-3">
		      <img id="image-slb-3" src="../../src/images/aliyun/slb-3.jpg" style="width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>
			<br />
			在“未添加的服务器”页面，选择需要的服务器进行“添加”或“批量添加”。
		  </li>
		  <li>
		    在添加确认页面，使用默认的云服务器权重。
			<div id="slb-4">
		      <img id="image-slb-4" src="../../src/images/aliyun/slb-4.jpg" style="width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>
		  </li>
		  <li>
		    在“监听配置”页面，点击“添加监听”。<br />
			配置以下选项：“SLB协议”为“TCP”，“端口”位“80”，“后端协议”为“TCP”，“后端端口”为“80”，“带宽峰值”为“1M”。其他使用默认值即可。点击“下一步”进行“健康检查配置”，点击“确认”进行添加。
			<div id="slb-5">
		      <img id="image-slb-5" src="../../src/images/aliyun/slb-5.jpg" style="width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>
			<div id="slb-6">
		      <img id="image-slb-6" src="../../src/images/aliyun/slb-6.jpg" style="width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>
		  </li>
		  <li>
		    返回“实例管理”页面，查看已配置的SLB。<br />
			<div id="slb-8">
		      <img id="image-slb-8" src="../../src/images/aliyun/slb-8.jpg" style="width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>
			点击“详情”查看“监听详细信息”，包括负载均衡SLB的基本信息、监听协议和端口、后端服务器信息、健康检查信息、监控信息等。
			<div id="slb-9">
		      <img id="image-slb-9" src="../../src/images/aliyun/slb-9.jpg" style="width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		    </div>
		  </li>
		</ul>
	  </div>
	</div>
	<div style="border-left:2px solid #9900FF;" class="item">
	  <div style="" class="item_title">
		使用SLB
	  </div>
	  <div style="">
		<ul style="font-size:14px;">
		<li>在SLB的后端服务器ECS中安装Apache服务器，在Apache根目录添加index2.html页面。</li>
		<li>在浏览器中访问SLB的公网IP地址下的index2.html，如http://120.55.139.80/index2.html。
		  <br />
		  刷新此页面，负载均衡SLB会转发客户端请求到不同的后端服务器中，页面显示内容会在两台ECS服务器提供的页面中切换。
		  <div id="slb-12">
		    <img id="image-slb-12" src="../../src/images/aliyun/slb-12.jpg" style="width:100%;box-shadow:0 0 5px #CCCCCC;padding:10px 0;margin:10px 0;" />
		  </div>
		</li>
		<li>
		  恭喜，您已完成了阿里云负载均衡SLB实验内容。
		</li>
		</ul>
	  </div>
	</div>
	<div style="border-left:2px solid #99FF00;" class="item">
	  <div style="" class="item_title">
		总结
	  </div>
	  <div style="">
	    <div>在本实验中，学习并实践了开通阿里云负载均衡SLB、配置SLB监听协议和端口、配置SLB后端服务器、访问SLB提供的服务。</div>
		<div>接下来可以选择以下实验：</div>
		<ul style="font-size:14px;">
		  <li>HTML静态网站开发</li>
		  <li>PHP动态网站开发</li>
		  <li>阿里云ELB实验</li>
		  <li>网站域名及备案</li>
		</ul>
	  </div>
	</div>
  </body>
</html>