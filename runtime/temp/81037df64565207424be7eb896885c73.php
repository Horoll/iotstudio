<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"D:\wamp64\www\project\iotstudio/application/index\view\index\trends_1.html";i:1494030339;s:72:"D:\wamp64\www\project\iotstudio/application/index\view\index\header.html";i:1493965941;}*/ ?>
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
                            <a href="<?php echo url('Index/index'); ?>">首页</a>
                        </li>
                        <li role="presentation">
                            <a href="<?php echo url('Index/trends_1'); ?>">动态</a>
                        </li>
                        <li role="presentation">
                            <a href="<?php echo url('Index/member'); ?>">成员</a>
                        </li>
                        <li role="presentation">
                            <a href="#">项目</a>
                        </li>
                        <li role="presentation">
                            <a href="#">关于我们</a>
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
								<li class="active">
									<a href="<?php echo url('Index/trends_1'); ?>">动态</a>
								</li>
								<li>
									<a href="<?php echo url('Index/trends_2'); ?>">文章</a>
								</li>
								<li>
									<a href="<?php echo url('Index/trends_3'); ?>">项目</a>
								</li>
								<li>
									<a href="<?php echo url('Index/trends_4'); ?>">公告</a>
								</li>
							</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="dongtai">
								<ul class="information">
									<?php foreach($trends as $trend): ?>
									<li>
										<a href="<?php echo url('Read/index').'?type=trend&id='.$trend['id']; ?>"><?php echo $trend['name']; ?></a>
										<span><?php echo $trend['publish_date']; ?></span>
									</li>
									<?php endforeach; ?>
								</ul>
							</div>
							<?php echo $trends->render(); ?>
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