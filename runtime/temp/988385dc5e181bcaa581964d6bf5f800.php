<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"D:\wamp64\www\project\iotstudio/application/index\view\index\member.html";i:1494332557;s:72:"D:\wamp64\www\project\iotstudio/application/index\view\index\header.html";i:1493965941;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>工作室成员</title>
		<link rel="stylesheet" href="__CSS__/bootstrap.min.css" />
		<link rel="stylesheet" href="__CSS__/people.css">

	</head>

	<body>
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
		<div class="box">
			<ul class="people">
				<?php foreach($members as $member): 
				$pic_dir=$member['pic_dir'];
				$pic_dir=str_replace('\\','/',$pic_dir);
				 ?>
				<li>
					<a id="<?php echo $member['id']; ?>" class='normal' href='#' style="background:url(__MEMBER__/<?php echo $pic_dir; ?>); background-size: 100% 100%;"></a>
					<div class="info">
						<h3><?php echo $member['name']; ?></h3>
						<p><?php echo $member['text']; ?></p>
					</div>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<footer class="foot">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<span> &copy;2017-物联网工作室&nbsp;</span>
					</div>
				</div>
			</div>
		</footer>
		<script src="__JS__/jquery.min.js"></script>
		<script type="text/javascript" src="__JS__/bootstrap.min.js"></script>
		<script src="__JS__/people.js"></script>
	</body>

</html>