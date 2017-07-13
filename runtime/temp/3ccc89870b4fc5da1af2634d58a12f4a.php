<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"D:\wamp64\www\project\iotstudio/application/index\view\index\publication.html";i:1499943543;s:72:"D:\wamp64\www\project\iotstudio/application/index\view\index\header.html";i:1499919683;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>物联网工作室主页</title>
		<link rel="stylesheet" href="__CSS__/bootstrap.min.css" />
		<link href="__CSS__/publication.css" rel="stylesheet" />

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
		<div class="header-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<span class="pub-main-title">PUBLICATIONS</span>
					</div>
				</div>
			</div>
		</div>
		<main>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php foreach($publications as $publication): ?>
						<article class="main-article">
							<?php if($publication['pic_dir'] != null): ?>
							<img class="pub-img" src="__PUBLICATION__/<?php echo $publication['pic_dir']; ?>" style="width:350px;"/>
							<?php else: ?>
							<img class="pub-img" src="__IMG__/publication.jpg" style="width:350px;"/>
							<?php endif; ?>
							<div class="pub-text">
								<div class="pub-title">
									<h2><?php echo $publication['name']; ?></h2>
									<br>
								</div>
								<div class="pub-main">
									<p><?php echo $publication['text']; ?></p>
									<br>
									<a href="<?php echo url('Index/download'); ?>?file_name=<?php echo $publication['file_name']; ?>&file_dir=publication/<?php echo $publication['file_dir']; ?>"><?php echo $publication['file_name']; ?></a>
								</div>
							</div>
						</article>
						<?php endforeach; ?>
					</div>
				</div>
				<?php echo $publications->render(); ?>
			</div>

		</main>
		<footer class="foot">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<span> &copy;2017-物联网工作室&nbsp;<a class="glyphicon glyphicon-wrench but" href="javascript:"></a></span>
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="__JS__/jquery.js"></script>
		<script src="__JS__/jquery.min.js"></script>
		<script type="text/javascript" src="__JS__/bootstrap.min.js"></script>
	</body>

</html>