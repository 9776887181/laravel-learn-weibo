<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册确认链接</title>
</head>
<body>

	<h1>感谢你在 weibo app 注册</h1>

	<p>
		点击下面链接完成注册：
		<a href="{{ route('confirm_email', $user->activation_token) }}">
			{{ route('confirm_email', $user->activation_token) }}
		</a>
	</p>

	<p>
		如果不是你本人操作，请忽略此邮件。	
	</p>	
</body>
</html>