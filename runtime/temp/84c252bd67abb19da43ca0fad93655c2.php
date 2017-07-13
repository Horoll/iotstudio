<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"D:\wamp64\www\project\iotstudio/application/index\view\index\trends_4.html";i:1495198289;s:72:"D:\wamp64\www\project\iotstudio/application/index\view\index\header.html";i:1499919683;}*/ ?>
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
		<section class="main-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
							<ul id="myTab" class="nav nav-pills  nav-justified">
								<li>
									<a href="<?php echo url('Index/trends_1'); ?>">Trend</a>
								</li>
								<li>
									<a href="<?php echo url('Index/trends_2'); ?>">Essay</a>
								</li>
								<li class="active">
									<a href="<?php echo url('Index/trends_4'); ?>">Notic</a>
								</li>
							</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="gaoshi">
								<ul class="information">
									<?php foreach($notices as $notice): ?>
									<li>
										<a href="<?php echo url('Read/index').'?type=notice&id='.$notice['id']; ?>"><?php echo $notice['name']; ?></a>
										<span><?php echo $notice['publish_date']; ?></span>
									</li>
									<?php endforeach; ?>
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