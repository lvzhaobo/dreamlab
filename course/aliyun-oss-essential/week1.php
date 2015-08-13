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
	  .item_title {font-weight:bold;font-size:18px;line-height:28px;margin:0 0 5px 0;}
	</style>
	<script src="account.js" type="text/javascript"></script>
  <head>
  <body style="padding:6px 10px 10px 10px;font-family:'Microsoft YaHei',宋体,Arial;line-height:24px;color:#333333;font-size:14px;background-color:#FFFFFF;">
	<div style="" class="item">
	  <div style="" class="item_title">
	    课程目标
	  </div>
	  本文档是介绍阿里云OSS开放存储服务并使用管理控制台进行相关操作的文档。本实验主要介绍OSS的操作，包括：
	  <ul>
	    <li>创建账号并登录阿里云</li>
		<li>介绍</li>
	    <li>在OSS中创建存储桶</li>
		<li>向OSS中添加对象</li>
		<li>查看存储桶中的对象</li>
		<li>操作对象</li>
		<li>删除对象和存储桶</li>
	  </ul>
	</div>
	<div style="border-left:2px solid #FF9900;" class="item">
	  <div style="" class="item_title">
		介绍
	  </div>
	  <div style="">
		<p>阿里云存储服务（Open Storage Service，简称OSS），是阿里云对外提供的海量，安全，低成本，高可靠的云存储服务。用户可以通过调用API，在任何应用、任何时间、任何地点上 传和下载数据，也可以通过用户Web控制台对数据进行简单的管理。OSS适合存放任意文件类型，适合各种网站、开发企业及开发者使用。</p>
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
	    在OSS中创建存储桶
	  </div>
	  <div style="">
	    OSS也是和地区相关的，OSS和同一区域的ECS等产品内网互通、流量免费，不同地区的OSS内网不互通。
		<ul style="font-size:14px;">
		  <li>在控制台菜单中选择开放存储服务OSS，点击“新建Bucket”。<br />创建Bucket不收费，您只需为您创建的对象付费。</li>
		  <li>在新打开的对话框中，在“BucketName”框中输入名称，例如“MyBucket”。<br />BucketName在同一地区内必须唯一，且不能修改。名称将会组成DNS来访问，因此名称需符合DNS规范。</li>
		  <li>选择默认区域。</li>
		  <li>选择“读写权限”。Bucket支持三种权限“私有”、“公共读”、“公共读写”，权限可在创建完成后修改。</li>
		  <li>点击“提交”按钮完成“新建Bucket”</li>
		</ul>
	  </div>
	</div>
	<div style="border-left:2px solid #9900FF;" class="item">
	  <div style="" class="item_title">
		向OSS中添加对象
	  </div>
	  可以向刚创建好的Bucket“my-bucket”中上传文件，比如普通文件、图片、视频等。在此Bucket中还可以嵌套创建文件夹和添加文件。
	  <ul style="font-size:14px;">
		  <li>在控制台中OSS页面，点击需要上传对象的Bucket中的“浏览”。</li>
		  <li>点击“上传文件”，在新打开的对话框中选择文件，进行上传。</li>
		  <li>在“任务管理”中可以查看上传进度。</li>
		</ul>
	</div>
	<div style="border-left:2px solid #99FF00;" class="item">
	  <div style="" class="item_title">
		查看OSS中的对象
	  </div>
	  <ul style="font-size:14px;">
		  <li>在控制台中OSS页面，点击需要上传对象的Bucket中的“浏览”，“Object管理”页面中，点击刷新查看最新Object。</li>
		  <li>选择需要查看的Object，点击“获取地址”。</li>
		  <li>如果Bucket为“公共读写”或“公共读”，在新打开的对话框中查看“地址”。</li>
		  <li>如果Bucket为“私有”，在新打开的对话框中输入“链接有效时间”，点击“获取URL”，查看“地址”。</li>
		  <li>复制“地址”到浏览器中进行访问，查看文件内容。Object会继承Bucekt的权限，但不能单独设置访问权限。</li>
		</ul>
	</div>
	<div style="border-left:2px solid #99FF00;" class="item">
	  <div style="" class="item_title">
		删除OSS中的对象和存储桶
	  </div>
	  <ul style="font-size:14px;">
		  <li>在控制台OSS页面，选择需要删除的Bucket，点击“批量删除”；或在需要删除的Bucket列表右侧点击“删除”进行存储桶的删除。</li>
		  <li>选择需要删除的对象所在存储桶的“浏览”，进入“Object管理”页面。选择需要删除的对象，点击“批量删除”；或在需要删除的对象列表右侧点击“删除”进行对象的删除。</li>
		</ul>
	</div>
	<div style="border-left:2px solid #99FF00;" class="item">
	  <div style="" class="item_title">
		其他资源
	  </div>
	  <ul style="font-size:14px;">
		  <li>查看阿里云OSS产品介绍</li>
		  <li>查看阿里云OSS产品文档</li>
		</ul>
	</div>
  </body>
</html>