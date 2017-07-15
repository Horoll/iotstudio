<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"G:\wamp\wamp64\www\iotstudio/application/index\view\index\course.html";i:1500118041;s:69:"G:\wamp\wamp64\www\iotstudio/application/index\view\index\header.html";i:1499919683;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>物联网工作室主页</title>
		<link rel="stylesheet" href="__CSS__/bootstrap.min.css" />
		<link href="__CSS__/course.css" rel="stylesheet" />

	</head>

	<body>
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
		 <section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php foreach($courses as $course): ?>
						<div class="course">
							<div class="course-title">
								<h2><?php echo $course['name']; ?></h2>
							</div>
							<div class="course-text">
								<p><?php echo $course['text']; ?></p>
								<br>
								<p>资源下载：</p>
								<a href="<?php echo url('Index/download'); ?>?file_name=<?php echo $course['file_name']; ?>&file_dir=course/<?php echo $course['file_dir']; ?>"><?php echo $course['file_name']; ?></a>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				<?php echo $courses->render(); ?>
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
		<script type="text/javascript" src="__JS__/jquery.js"></script>
		<script src="__JS__/jquery.min.js"></script>
		<script type="text/javascript" src="__JS__/bootstrap.min.js"></script>
	</body>
</html>