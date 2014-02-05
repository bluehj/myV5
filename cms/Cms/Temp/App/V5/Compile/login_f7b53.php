<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><html>
<head>
	<title>后台管理员登录</title>
	<script type='text/javascript' src='http://localhost/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://localhost/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://localhost/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://localhost/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://localhost/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/myV5/cms';
		WEB = 'http://localhost/myV5/cms/index.php';
		URL = 'http://localhost/myV5/cms/index.php/V5/Login/login';
		HDPHP = 'http://localhost/hdphp/hdphp';
		HDPHPDATA = 'http://localhost/hdphp/hdphp/Data';
		HDPHPTPL = 'http://localhost/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/hdphp/hdphp/Extend';
		APP = 'http://localhost/myV5/cms/index.php/V5';
		CONTROL = 'http://localhost/myV5/cms/index.php/V5/Login';
		METH = 'http://localhost/myV5/cms/index.php/V5/Login/login';
		GROUP = 'http://localhost/myV5/cms/Cms';
		TPL = 'http://localhost/myV5/cms/Cms/App/V5/Tpl';
		CONTROLTPL = 'http://localhost/myV5/cms/Cms/App/V5/Tpl/Login';
		STATIC = 'http://localhost/myV5/cms/Static';
		PUBLIC = 'http://localhost/myV5/cms/Cms/App/V5/Tpl/Public';
</script>
	<link href="http://localhost/hdphp/hdphp/Extend/Org/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"><script src="http://localhost/hdphp/hdphp/Extend/Org/bootstrap/js/bootstrap.min.js"></script>
  <!--[if lte IE 6]>
  <link rel="stylesheet" type="text/css" href="http://localhost/hdphp/hdphp/Extend/Org/bootstrap/ie6/css/bootstrap-ie6.css">
  <![endif]-->
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="http://localhost/hdphp/hdphp/Extend/Org/bootstrap/ie6/css/ie.css">
  <![endif]-->
	<script type="text/javascript" src="http://localhost/myV5/cms/Cms/App/V5/Tpl/Login/js/js.js"></script>
</head>
<body>
	<h3>管理员登录</h3>
	<form action='http://localhost/myV5/cms/index.php/V5/Login/login' method='post' class='hd-form'>
		<table class='table1'>
	        <tr>
	        	<td class='w50'>用户名</td>
	        	<td><input type='text' name='username' /></td>
	        </tr>
	        <tr>
	  			<td>密码</td>
	  			<td><input type='password' name='password' /></td>
	        </tr>
	        <tr>
	  			<td>验证码</td>
	  			<td>
	  				<input type='text' name='code' />
	  				<img src='http://localhost/myV5/cms/index.php/V5/Login/code' />
	  				<span id='hd_code'></span>
	  			</td>
	        </tr>
	        <tr>
	        	<td colspan='2'><input type='submit' value='登录'class='hd-success'></td>
	        </tr>
		</table>
	</form>
</body>
</html>