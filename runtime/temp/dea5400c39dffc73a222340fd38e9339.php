<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\wamp64\www\project\iotstudio/application/index\view\Index\read.html";i:1500523974;s:72:"D:\wamp64\www\project\iotstudio/application/index\view\index\header.html";i:1499919683;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>物联网工作室详细页面</title>
		<link rel="stylesheet" href="__CSS__/bootstrap.min.css" />
		<link href="__CSS__/read.css" rel="stylesheet" />
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
		<section class="content-wrap">
			<div class="container">
				<div class="row">
					<main class="col-md-10">
						<?php 
						$data['publish_date']=isset($data['publish_date'])?$data['publish_date']:null;
						$file_dir=isset($data['file_dir'])?$data['file_dir']:null;
						$file_dir = str_replace('\\','/',$file_dir);
						$pic_dir = isset($data['pic_dir'])?$data['pic_dir']:null;
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
									if($file_dir!=null){
										if($_GET['type']=='member'){
											echo '<img class="pic" src="__MEMBER__/'.$file_dir.'">';
										}else{
											echo '<p>资源下载：</p>';
											echo '<a href="'.url('Index/download').'?file_name='.$data['file_name'].'&file_dir='.$_GET['type'].'/'.$data['file_dir'].'">'.$data['file_name'].'</a>';
										}
									}
								 ?>
								<br/><br/>
								<?php 
									if($_GET['type']=='publication'){
										if($pic_dir!=null){
											echo '<img class="pic" src="__PUBLICATION__/'.$pic_dir.'">';
										}else{
											echo '<img class="pic" src="__IMG__/publication.jpg">';
										}
									echo '<br/><br/>';
									}
								 ?>
								<div class="new-txt" id="show">
									<?php echo $data['text']; ?>
								</div>
							</div>
							<!--<div class="new-tag">-->
									<!--<span>标签：</span>-->
									<!--<a>demo</a><span>,</span>-->
									<!--<a>设计</a><span>,</span>-->
									<!--<a>汇编</a>-->
							<!--</div>-->
							<div class="new-post">
									<button type="button" class="but1">上一篇：<?php echo $pervious['name']; ?></button>
									<button type="button" class="but2">下一篇：<?php echo $next['name']; ?></button>
							</div>
						</article>
					</main>
					<aside class="sidebar col-md-2">
						<div class="back">
							<h4>操作</h4>
							<a href="javascript:history.go(-1);" class="list-group-item">返回</a>
							<a href="<?php echo url('Index/trends_1'); ?>" class="list-group-item">Trend</a>
							<a href="<?php echo url('Index/trends_2'); ?>" class="list-group-item">Essay</a>
							<a href="<?php echo url('Index/trends_4'); ?>" class="list-group-item">Notice</a>
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