<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"D:\wamp64\www\project\iotstudio/application/index\view\cms\changeTrend.html";i:1493963488;s:70:"D:\wamp64\www\project\iotstudio/application/index\view\cms\header.html";i:1495203267;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>动态</title>

    <link href="__CSS__/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="__CSS__/cms.css" />
    <link rel="stylesheet" type="text/css" href="__CSS__/simditor.css" />

    <script type="text/javascript" src="__JS__/jquery.min.js"></script>
    <script type="text/javascript" src="__JS__/module.min.js"></script>
    <script type="text/javascript" src="__JS__/hotkeys.min.js"></script>
    <script type="text/javascript" src="__JS__/uploader.min.js"></script>
    <script type="text/javascript" src="__JS__/simditor.js"></script>
    <script src="__JS__/bootstrap.min.js"></script>
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
            <a href="#" class="list-group-item active">动态管理</a>
            <a href="<?php echo url('Cms/index'); ?>" class="list-group-item">所有动态</a>
            <a href="<?php echo url('Cms/add').'?type=trend'; ?>" class="list-group-item">添加动态</a>
            <a href="#" class="list-group-item  disabled">修改动态</a>
        </div>
        <div class="col-sm-10">
            <ol class="breadcrumb">
                <li class="active">动态管理
                </li>
                <li class="active">修改动态
                </li>
            </ol>

            <div class="panel panel-default">
                <div class="panel-heading">
                    添加
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo url('Cms/change'); ?>" method="post">
                        <input type="hidden" name="type" value="trend">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        <div class="form-group">
                            <label for="name">动态名称：</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $data['name']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">动态内容:</label>
                            <textarea class="form-control" id="editor" name="text" autofocus><?php echo $data['text']; ?></textarea>
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
                <span> &copy;2017-物联网工作室&nbsp;</span>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="__JS__/InitializeSimditor.js"></script>
</html>