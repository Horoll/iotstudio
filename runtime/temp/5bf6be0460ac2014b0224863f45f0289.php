<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\wamp64\www\project\iotstudio/application/index\view\cms\member.html";i:1500175801;s:70:"D:\wamp64\www\project\iotstudio/application/index\view\cms\header.html";i:1495203267;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>成员</title>

    <link href="__CSS__/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="__CSS__/cms.css" />
    <link rel="stylesheet" type="text/css" href="__CSS__/simditor.css" />
    <link rel="stylesheet" type="text/css" href="__CSS__/sweetalert.css" />
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
            <a href="#" class="list-group-item active">成员管理</a>
            <a href="#" class="list-group-item disabled">所有成员</a>
            <a href="<?php echo url('Cms/add').'?type=member'; ?>" class="list-group-item">添加成员</a>
        </div>
        <div class="col-sm-10">
            <ol class="breadcrumb">
                <li class="active">成员管理
                </li>
                <li class="active">所有成员
                </li>
            </ol>

            <div class="panel panel-default">
                <div class="panel-heading">
                    所有成员
                </div>
                <div class="panel panel-default  table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th id="th1">编号</th>
                            <th id="th2">名称</th>
                            <th id="th3">简介</th>
                            <th id="th4">查看</th>
                            <th id="th5">修改</th>
                            <th id="th6">删除</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach($members as $member): ?>
                            <tr>
                                <?php foreach($member as $name=>$cell): if($name == 'file_dir'){
                                            continue;
                                        }elseif($name == 'file_name'){
                                            continue;
                                        }
                                        if($name == 'text'){?>
                                        <td class="text-cell"><?php echo $cell; ?></td>
                                        <?php }else{?>
                                        <td><?php echo $cell; ?></td>
                                        <?php }
                                 endforeach; ?>
                                <td>
                                    <a href="<?php echo url('Read/index').'?type=member&id='.$member['id']; ?>" class="table-btn"><span class="glyphicon glyphicon-eye-open"></span></a>
                                </td>
                                <td>
                                    <a href="<?php echo url('Cms/change').'?type=member&id='.$member['id']; ?>" class="table-btn"><span class="glyphicon glyphicon-edit"></span></a>
                                </td>
                                <td>
                                    <a href="#" class="table-btn delete-btn" id="<?php echo $member['id']; ?>"><span class="glyphicon glyphicon-trash"></span></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php echo $members->render(); ?>
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

<script type="text/javascript" src="__JS__/jquery.min.js"></script>
<script src="__JS__/bootstrap.min.js"></script>
<script src="__JS__/sweetalert.js"></script>
<script>
    post_data = 't='+Math.random()+'&type=member&id=';
    post_url = "<?php echo url('cms/delete'); ?>"
</script>
<script src="__JS__/delete.js"></script>
</body>
</html>