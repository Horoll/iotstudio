<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"G:\wamp\wamp64\www\iotstudio/application/index\view\index\index.html";i:1500133625;s:69:"G:\wamp\wamp64\www\iotstudio/application/index\view\index\header.html";i:1499919683;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>物联网工作室主页</title>
		<link rel="stylesheet" href="__CSS__/bootstrap.min.css" />
		<link href="__CSS__/web.css" rel="stylesheet" />

	</head>

	<body class="home-template">
		<div id="bg"></div>
		<div id="loginModal">
			<div class="modal-dialog" id="login">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close">x</button>
						<h1 class="text-center text-primary">管理员登录</h1>
					</div>
					<div class="modal-body">
						<form action="<?php echo url('Index/login'); ?>" method="post" class="form col-md-12 center-block">
							<div class="form-group">
								<input type="text" class="form-control input-lg" name="account" placeholder="管理员账号">
							</div>
							<div class="form-group">
								<input type="password" class="form-control input-lg" name="password" placeholder="登录密码">
							</div>
							<div class="form-group">
								<button class="btn btn-primary btn-lg btn-block">登录</button>
								
							</div>
						</form>
					</div>
					<div class="modal-footer">

					</div>
				</div>
			</div>
		</div>
		<header class="main-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-txt">
							<span>物联网工作室</span>
							<p>Internet of Things Studio</p>
						</div>
						<img src="__IMG__/1.png" />
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
                            <a href="<?php echo url('Index/publication'); ?>">Publications</a>
                        </li>
                        <li role="presentation">
                            <a href="<?php echo url('Index/course'); ?>">Courses</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

</nav>
		<section class="main">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="Adv">
							<!--图片列表-->
							<div class="ImgList" style="background:url('__IMG__/adv1.jpg') center"></div>
							<div class="ImgList" style="background:url('__IMG__/adv2.jpg') center"></div>
							<div class="ImgList" style="background:url('__IMG__/adv3.jpg') center"></div>
							<div class="ImgList" style="background:url('__IMG__/adv4.jpg') center"></div>
							<!--轮播的按扭-->
							<ul class="button">
								<li class="hover"></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>
						<article class="introduce">
							<div class="introduce-head">
								<h2>物联网工作室</h2>
							</div>
							<div class="introduce-content">
								<p>这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍</p>
								<p>这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍这是对工作室的介绍</p>
							</div>
						</article>
					</div>
				</div>
			</div>
		</section>
		<section class="content-wrap">
			<div class="container">
				<div class="row">
					<main class="col-md-8">
						<article class="trends">
							<h4>最新动态</h4>
							<?php foreach($trends as $trend): ?>
							<div class="new-trends">
								<div class="new-txt">
									<a href="<?php echo url('Read/index').'?type=trend&id='.$trend['id']; ?>"><?php echo $trend['name']; ?></a>
								</div>
								<div class="new-dates"><?php echo $trend['publish_date']; ?></div>
							</div>
							<?php endforeach; ?>
							<div class="btn">
								<a href="<?php echo url('Index/trends_1'); ?>">更多动态</a>
							</div>
						</article>
						<article class="trends">
							<h4>最新文章</h4>
							<?php foreach($essays as $essay): ?>
							<div class="new-trends">
								<div class="new-txt">
									<a href="<?php echo url('Read/index').'?type=essay&id='.$essay['id']; ?>"><?php echo $essay['name']; ?></a>
								</div>
								<div class="new-dates"><?php echo $essay['publish_date']; ?></div>
							</div>
							<?php endforeach; ?>
							<div class="btn">
								<a href="<?php echo url('Index/trends_2'); ?>">更多文章</a>
							</div>
						</article>
					</main>
					<aside class="sidebar col-md-4 ">
						<div class="notice">
							<h4>公告栏</h4>
							<h3 style="text-align: center;"><?php echo $notice['name']; ?><h3>
							<div class="notice-txt" id="show">
								<p><?php echo $notice['text']; ?><p>
							</div>
						</div>
						<div class="connect">
							<h4>联系我们</h4>
							<div class="connect-txt">
								<p>TEL：18181818112
									<p>
										<p>QQ:123124112</p>
										<p>指导老师：张德军</p>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</section>
		<footer class="foot">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<span> &copy;2017-物联网工作室&nbsp;<a class="glyphicon glyphicon-cog but" href="javascript:"></a></span>
					</div>
				</div>
			</div>
		</footer>
		<script src="__JS__/jquery.min.js"></script>
		<script type="text/javascript" src="__JS__/bootstrap.min.js"></script>
		<script type="text/javascript" src="__JS__/index.js"></script>
		<script type="text/javascript" src="__JS__/xss.js"></script>
		<script type="text/javascript" src="__JS__/show.js"></script>
	</body>

</html>