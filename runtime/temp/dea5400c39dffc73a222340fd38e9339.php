<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\wamp64\www\project\iotstudio/application/index\view\Index\read.html";i:1494333370;s:72:"D:\wamp64\www\project\iotstudio/application/index\view\index\header.html";i:1493965941;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>详细页面</title>
		<link rel="stylesheet" href="__CSS__/bootstrap.min.css" />
		<link href="__CSS__/read.css" rel="stylesheet" />
	</head>

	<body>
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
		<section class="content-wrap">
			<div class="container">
				<div class="row">
					<main class="col-md-10">
						<?php 
						$data['publish_date']=isset($data['publish_date'])?$data['publish_date']:null;
						$pic_dir=isset($data['pic_dir'])?$data['pic_dir']:null;
						$pic_dir = str_replace('\\','/',$pic_dir);
						 ?>
						<article class="trends">
							<h2>
								<?php echo $data['name']; ?>
								<small>
									<div class="author-box">
										<time><?php echo $data['publish_date']; ?></time>
									</div>
								</small>
							</h2>
							<div class="new-trends">
								<?php 
									if($pic_dir!=null){
										echo '<img src="__MEMBER__/'.$pic_dir.'" style="width:160px">';
									}
								 ?>
								<div class="new-txt" id="show">
									<?php echo $data['text']; ?>
								</div>
							</div>
						</article>
					</main>
					<aside class="sidebar col-md-2">
						<div class="back">
							<h4>操作</h4>
							<a href="javascript:history.go(-1);" class="list-group-item">返回</a>
							<a href="<?php echo url('Index/trends_1'); ?>" class="list-group-item">动态</a>
							<a href="<?php echo url('Index/trends_2'); ?>" class="list-group-item">文章</a>
							<a href="#" class="list-group-item">项目</a>
							<a href="<?php echo url('Index/trends_4'); ?>" class="list-group-item">公告</a>
						</div>
					</aside>
				</div>
			</div>
		</section>
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
		<script type="text/javascript" src="__JS__/xss.js"></script>
		<script type="text/javascript" src="__JS__/show.js"></script>
	</body>

</html>