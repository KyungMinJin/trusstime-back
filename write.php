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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

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
        <!-- <div id="header-wrapper">
		<div id="menu" class="container">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="miguhyun.php">공지사항</a></li>
				<li class="current_page_item"><a href="timetable.php">합주시간표</a></li>
				<li><a href="phones_auth.php">연락처</a></li>
			</ul>
		</div>
		end #menu
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#" class="icon icon-music"> TRUSS</a></h1>
				<p>True Romance under the six strings</p>
			</div>
			<div id="banner"> <a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a> </div>
		</div>
	</div> -->
                <div id="header-wrapper">
            <div id="menu" class="container" sty;e="margin: 0">
                <div id="header-inner"
                    style="display:flex; max-width: 1080px; justify-content: space-between; align-items:center; margin: 0 auto; height: 100%;">
                    <div style="font-size: 3em; font-weight:600; color:white;">
                        <div OnClick="location.href='index.php'">TRUSS</div>
                    </div>
                    <div style="display:flex; align-items: center;">
                        <!-- <li><a href="miguhyun.php">공지사항</a></li> -->
                        <!-- <li class="current_page_item"> -->
                        <a href="timetable.php" class="current_page_item" style="height: 100px; line-height: 100px;">
                            <h2>합주시간표</h2>
                        </a>
                        <!-- </li> -->
                        <!-- <li> -->
                        <a href="phones_auth.php" style="height: 100px; line-height: 100px;">
                            <h2>연락처</h2>
                        </a>
                    </div>
                    <!-- </li> -->
                </div>
                <!-- end #menu -->
                <!-- <div id="header" class="container">
					<div id="logo">
						<h1><a href="#"> TRUSS</a></h1>
						<p>True Romance under the six strings</p>
					</div>
				</div> -->
            </div>
        </div>
        <div>
            <br>
            <h1 class="icon icon-pencil" style="text-align:center"> 합주팀 등록<br><br></h1>
            <form action="insert.php" method="post" enctype="multipart/form-data" />
            <table class="table table-bordered" style="width:75%; margin:0 auto;">
                <tr>
                    <td class="danger" align="right">팀 이름(필수)</td>
                    <td align="left"><input type="text" name="teamname" size="30" onkeydown="return chkinput(event);">
                        임시팀 여부 <input type="checkbox" name="isTemp" onclick="vis(this)">
                        <select name="timelimit" style="display:none">
                            <option value="50">팀 유효기간</option>
                            <?php
		date_default_timezone_set("Asia/Seoul");
		for ($count = 0; $count < 20; $count++) {
			echo "<option value=\"".$count."\">";
			$lim = date("Y년 m월 d일", strtotime("+".$count." days"));
			echo $lim."</option>";
		}
		?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="danger" align="right">팀 비밀번호(필수)<br>합주팀 관리/삭제용</td>
                    <td align="left"><input type="password" name="teampw" size="30" style="ime-mode:disabled;"> 비밀번호 확인:
                        <input type="password" name="teampw2" size="30" style="ime-mode:disabled;"></td>
                </tr>
                <tr>
                    <td class="danger" align="right">보컬</td>
                    <td align="left"><input type="text" name="vocal" size="30"></td>
                    <!--<td align="left"><textarea name="memo" cols="60" rows="10"></textarea></td>-->
                </tr>
                <tr>
                    <td class="danger" align="right">퍼스트기타</td>
                    <td align="left"><input type="text" name="first" size="30"></td>
                    <!--<td align="right">첨부파일</td><td align="left"><input type="file" name="upfile"></td>-->
                </tr>
                <tr>
                    <td class="danger" align="right">세컨드기타</td>
                    <td align="left"><input type="text" name="second" size="30"></td>
                </tr>
                <tr>
                    <td class="danger" align="right">베이스기타</td>
                    <td align="left"><input type="text" name="bass" size="30"></td>
                </tr>
                <tr>
                    <td class="danger" align="right">드럼</td>
                    <td align="left"><input type="text" name="drum" size="30"></td>
                </tr>
                <tr>
                    <td class="danger" align="right">키보드</td>
                    <td align="left"><input type="text" name="keyboard" size="30"></td>
                </tr>
                <tr>
                    <td class="danger" align="right"><br><br>선곡 리스트<br>또는 하고 싶은 말</td>
                    <td align="left"><textarea name="memo" cols="60" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td class="danger" align="right">합주시간 : </td>
                    <td>
                        <!-- time selection form -->
                        <?php include 'timeselect.php'; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">TRUSS 인증 비밀번호: <input type="password" name="truss_ck" size="30"
                            style="ime-mode:disabled;"><input type="submit" name="b_insert" value="등록"
                            style="width:50px">
                        <button type="button" onclick="location.href='timetable.php'" style="width:50px">취소</button>
                    </td>
                </tr>
            </table>
            </form>
                        <div id="copyright" class="container" style="padding: 2em 0em;">
                <p>&copy; Untitled. All rights reserved. | Photos by TRUSS | Design by <a href="http://templated.co"
                        rel="nofollow">TEMPLATED</a> | Edited by 28기 진경민</p>
                <ul class="contact">
                    <!--<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>-->
                    <li><a href="https://www.facebook.com/profile.php?id=100009047977821"
                            class="icon icon-facebook"><span></span></a></li>
                    <!--<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
			<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
			<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
			-->
                </ul>
            </div>
            <script>
            function vis(ck) {
                if (ck.checked) {
                    document.getElementsByName("timelimit")[0].style.display = "";
                    document.getElementsByName("isTemp")[0].value = true;
                } else {
                    document.getElementsByName("timelimit")[0].style.display = "none";
                    document.getElementsByName("isTemp")[0].value = false;
                }
            }

            function chkinput(event) {
                event = event || window.event;
                var keyID = (event.which) ? event.which : event.keyCode;
                if (keyID == 187 || keyID == 222)
                    return false;
                else
                    return;
            }
            </script>
</body>

</html>