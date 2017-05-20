<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"D:\wamp64\www\project\iotstudio/application/index\view\cms\changePublication.html";i:1495203581;s:70:"D:\wamp64\www\project\iotstudio/application/index\view\cms\header.html";i:1495203267;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>后台管理</title>

		<link href="__CSS__/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="__CSS__/fileinput.min.css" />
		<link rel="stylesheet" href="__CSS__/cms-member.css" />
		<script src="__JS__/jquery.min.js"></script>
		<script src="__JS__/bootstrap.min.js"></script>
		<script type="text/javascript" src="__JS__/fileinput.min.js" ></script>
		<script type="text/javascript" src="__JS__/zh.js" ></script>
	</head>
	<body>
	<!--包含cms头部-->
	<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a class="icon-bar" href="<?php echo url('Cms/index'); ?>">动态管理</a>
                </li>
                <li><a href="<?php echo url('Cms/essay'); ?>">文章管理</a>
                </li>
                <li><a href="<?php echo url('Cms/course'); ?>">课程管理</a>
                </li>
                <li><a href="<?php echo url('Cms/publication'); ?>">发表管理</a>
                </li>
                <li><a href="<?php echo url('Cms/notice'); ?>">公告设置</a>
                </li>
                <li><a href="<?php echo url('Cms/member'); ?>">成员管理</a>
                </li>
                <li><a href="<?php echo url('Cms/member'); ?>">网站设置</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a>欢迎您,<?php echo $admin; ?></a>
                </li>
                <li><a href="<?php echo url('Index/logout'); ?>">安全退出</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-2">
					<a href="#" class="list-group-item active">发表管理</a>
					<a href="<?php echo url('Cms/publication'); ?>" class="list-group-item ">所有发表</a>
					<a href="<?php echo url('Cms/addpublication'); ?>" class="list-group-item">添加新发表</a>
					<a href="#" class="list-group-item disable">修改发表</a>
				</div>
				<div class="col-sm-10">
					<ol class="breadcrumb">
						<li class="active">发表管理
						</li>
						<li class="active">添加新发表
						</li>
					</ol>

					<div class="panel panel-default">
						<div class="panel-heading">
							添加
						</div>
						<div class="panel-body">
							<form role="form" action="<?php echo url('Cms/updateResource'); ?>" method="post" enctype="multipart/form-data">
								<input type="hidden" name="type" value="publication">
								<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
								<div class="form-group">
									<label for="name">发表名称：</label>
									<input type="text" class="form-control" name="name" id="name" value="<?php echo $data['name']; ?>" placeholder="请输入名称">
								</div>
								<div class="form-group">
									<label for="name">发表介绍:</label>
									<textarea class="form-control" name="text" id="txt" placeholder="请输入内容"><?php echo $data['text']; ?></textarea>
								</div>
								<div class="form-group kv-avatar center-block">
									<label for="name">发表资料：</label>
									<input id="input-6" name="file[]" type="file" class="file-loading">
								</div>
								<p class="submit-p">
									<button type="submit" class="btn btn-danger" id="btnSubmit">提交</button>
								</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="foot">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<span> &copy;2017-物联网工作室&nbsp;<a class="glyphicon glyphicon-wrench" href="CMS.html"></a></span>
					</div>
				</div>
			</div>
		</footer>
		<?php 
				$file_dir=$data['file_dir'];
				$file_dir=str_replace('\\','/',$file_dir);
		 ?>
	<script>
        $("#input-6").fileinput({
            overwriteInitial: true,
            maxFileSize: 5000,
            showClose: false,
            showCaption: false,
            browseLabel: '',
            removeLabel: '',
            browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
            removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
            removeTitle: '撤销该照片',
            elErrorContainer: '#kv-avatar-errors-1',
            msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: "<span><?php echo $data['file_name']?></span>",
            layoutTemplates: {main2: '{preview} {remove} {browse}'}
        });
	</script>
	</body>
</html>