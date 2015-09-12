<?php
	require_once("include.inc.php");
?>

<html>
    <head>
		<meta charset="utf-8">
		<title>CiaoCo</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="css/simple-sidebar.css" rel="stylesheet">
		<link href="css/bootstrap-dialog.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-dialog.min.js"></script>
	</head>
    <body style="text-align:center;">
		<div id="wrapper">
			<div id="sidebar-wrapper">
				<ul class="sidebar-nav">
					<li class="navbar"></li>
					<li><a href="." style="height: 65px; font-size: 18px; line-height: 65px; color: white;">CiaoCo</a></li>
					<?php
						if (IsLoggedIn()) {
							echo <<< END
								<li><a href="#" onclick="ShowNotePage();">記事本</a></li>
								<li><a href="#" onclick="ShowRainlendarPage();">行事曆</a></li>
								<li><a href="#" onclick="ShowModifyPage();">修改密碼</a></li>
								<li><a href="logout.php">登出</a></li>
END;
						} else {
							echo <<< END
								<li><a href="#" onclick="ShowLoginPage();">登入</a></li>
								<li><a href="#" onclick="ShowRegisterPage();">註冊</a></li>
END;
						}
					?>
				</ul>
			</div>
		</div>
		<div id="page-content-wrapper">
			<!-- 導航欄 -->
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<a href="#menu-toggle" class="navbar-brand" id="menu-toggle"><span class="glyphicon glyphicon-list"></span></a>
					</div>
					<div class="collapse navbar-collapse">
						<div class="nav navbar-nav pull-right">
							<span class="navbar-text" id="cur-mode" style="color: yellow;"></span>
							<span class="navbar-text" id="timeout" style="color: yellow;"></span>
						</div>
					</div>
			</nav>
			<!-- 內容 -->
			<div class="container top-buffer" id="content">
			</div>
		</div>
		
		<script src="js/script.js"></script>
		<script>
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
		</script>
    </body>
</html>