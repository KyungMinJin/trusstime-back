<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : TwoColours 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130811

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>고려대학교 TRUSS</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="menu" class="container">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="miguhyun.php">공지사항</a></li>
				<li><a href="timetable.php">합주시간표</a></li>
				<li class="current_page_item"><a href="phones_auth.php">연락처</a></li>
			</ul>
		</div>
		<!-- end #menu -->
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#" class="icon icon-music"> TRUSS</a></h1>
				<p>True Romance under the six strings</p>
			</div>
			<div id="banner"> <a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a> </div>
		</div>
	</div>
	<div>
	<br>
	<h1 class="icon icon-pencil" style="text-align:center"> 연락처 목록<br><br></h1>
	<form action="phones.php" method="post" enctype="multipart/form-data" />
	<table class="table table-bordered" style="width:30%; margin:0 auto;">
	<tr><td class="danger" style="text-align: center;">TRUSS 인증</td></tr>
	<tr><td style="text-align: center;">TRUSS 인증번호: <input type="password" name="truss_ck" size="30" style="ime-mode:disabled;"></td></tr>
	<tr><td style="text-align: center;"><input type="submit" name="b_insert" value="인증" style="width:50px">
        <button type="button" onclick="window.history.go(-1); return false;" style="width:50px">취소</button></td></tr>
	</table>
	</form>

	</div>
	</div>
	</body>
	</html>