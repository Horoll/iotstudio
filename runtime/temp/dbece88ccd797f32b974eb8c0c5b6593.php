<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"D:\wamp64\www\project\iotstudio/application/index\view\index\trends_3.html";i:1493965531;s:72:"D:\wamp64\www\project\iotstudio/application/index\view\index\header.html";i:1495190566;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>动态</title>
		<link rel="stylesheet" href="__CSS__/bootstrap.min.css" />
		<link rel="stylesheet" href="__CSS__/trends.css" />

	</head>

	<body class="home-template">
		<header class="main-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<img src="__IMG__/1.jpg" />
					</div>

				</div>
			</div>
		</header>
		<!--包含inedx头部-->
		<script>
    var authInfo = '作者：\nHorol & Shy\n联系方式：qq 640246255';
    console.info(authInfo);
</script>
<nav class="main-navigation navbar-default">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="menu">
                        <li role="presentation">
                            <a href="<?php echo url('Index/index'); ?>">Home</a>
                        </li>
                        <li role="presentation">
                            <a href="<?php echo url('Index/trends_1'); ?>">Trend</a>
                        </li>
                        <li role="presentation">
                            <a href="<?php echo url('Index/member'); ?>">Member</a>
                        </li>
                        <li role="presentation">
                            <a href="#">Publications</a>
                        </li>
                        <li role="presentation">
                            <a href="#">Courses</a>
                        </li>
                        <li role="presentation">
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

</nav>
		<section class="main-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
							<ul id="myTab" class="nav nav-pills  nav-justified">
								<li>
									<a href="<?php echo url('Index/trends_1'); ?>">动态</a>
								</li>
								<li>
									<a href="<?php echo url('Index/trends_2'); ?>">文章</a>
								</li>
								<li class="active">
									<a href="<?php echo url('Index/trends_3'); ?>">项目</a>
								</li>
								<li>
									<a href="<?php echo url('Index/trends_4'); ?>">公告</a>
								</li>
							</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="xiangmu">
								<ul class="information">
									<li>
										<a href="#">我是一个项目我是一个项目我是一个项目</a><span>2017年3月24日</span>
									</li>
									<li>
										<a href="#">我是一个项目我是一个项目</a><span>2017年3月24日</span>
									</li>
									<li>
										<a href="#">我是一个项目</a><span>2017年3月24日</span>
									</li>
									<li>
										<a href="#">我是一个项目我是一个项目</a><span>2017年3月24日</span>
									</li>
									<li>
										<a href="#">我是一个项目</a><span>2017年3月24日</span>
									</li>
									<li>
										<a href="#">我是一个项目</a><span>2017年3月24日</span>
									</li>
									<li>
										<a href="#">我是一个项目我是一个项目我是一个项目</a><span>2017年3月24日</span>
									</li>
									<li>
										<a href="#">我是一个项目我是一个项目</a><span>2017年3月24日</span>
									</li>
									<li>
										<a href="#">我是一个项目</a><span>2017年3月24日</span>
									</li>
									<li>
										<a href="#">我是一个项目我是一个项目</a><span>2017年3月24日</span>
									</li>
									<li>
										<a href="#">我是一个项目</a><span>2017年3月24日</span>
									</li>
									<li>
										<a href="#">我是一个项目</a><span>2017年3月24日</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
		<footer class="foot">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<span>&copy;2017-物联网工作室&nbsp;</span>
					</div>
				</div>
			</div>
		</footer>
		
		<script type="text/javascript" src="__JS__/jquery.min.js" ></script>
		<script type="text/javascript" src="__JS__/bootstrap.min.js" ></script>
		<script type="text/javascript" src="__JS__/jquery.js"></script>
	</body>
</html>