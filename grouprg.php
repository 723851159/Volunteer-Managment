<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<title>团队注册</title>
</head>

<body background="images/welcome.jpg" style="background-size:100%; background-repeat: no-repeat;">
	<center>
    <h1>团队管理系统</h1>
    <form action = "registcheck.php" method = "post" >
    <table class="login">
    	<tr>
    		<td>团队名称:</td>
        	<td><input type="text" name="username" /></td>
        </tr>
        <tr>
        	<td>密码:</td>
            <td><input type="password" name="password" /></td>
        </tr>
        <tr>
        	<td>确认密码:</td>
            <td><input type="password" name="pwsure" /></td>
        </tr>
        <tr>
        	<td><input type="submit" class="button" name="registing" value="注册" /></td>
        	<td><span class="register"><a href="group.html">返回登录</a></span></td>
        </tr>
    </form>
    </center>
</body>
</html>