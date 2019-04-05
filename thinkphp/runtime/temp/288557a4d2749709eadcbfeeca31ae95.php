<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"/Applications/MAMP/htdocs/thinkphp/public/../application/index/view/index/edit.html";i:1533393222;s:73:"/Applications/MAMP/htdocs/thinkphp/application/index/view/public/top.html";i:1530423506;}*/ ?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="__STATIC__/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="__STATIC__/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>声像档案管理系统</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="__STATIC__/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="__STATIC__/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="__STATIC__/assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="__STATIC__/assets/css/themify-icons.css" rel="stylesheet">

    <!--bootstrap table 插件-->
    <link href="__STATIC__/bootstrap-table.css" rel="stylesheet"/>
</head>

<body>
<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="info">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    声像档案管理系统
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="#collapseOne" class="dropdown-toggle" data-toggle="collapse" data-parent="#nav">
                        <i class="ti-panel"></i>
                        <p style="display: inline;">活动记录</p> 
                        <b class="caret"></b>
                    </a>
                    <div id="collapseOne" class="panel-collapse collapse ">                        
                        <ul>
                            <li><a href="<?php echo url('index/index'); ?>">所有活动记录</a></li>
                            <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li><a href="__ROOT__/index.php/index/index/catesIndex/cate/<?php echo $vo['cate_name']; ?>"><?php echo $vo['cate_name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#collapseThree" class="dropdown-toggle" data-toggle="collapse" data-parent="#nav">
                        <i class="ti-view-list-alt"></i>
                        <p style="display: inline;">按部门查看</p>
                        <b class="caret"></b>
                    </a>
                    <div id="collapseThree" class="panel-collapse collapse ">                        
                        <ul>
                            <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li><a href="__ROOT__/index.php/index/index/sectionIndex/section/<?php echo $vo['cate']; ?>"><?php echo $vo['cate']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#collapseTwo" class="dropdown-toggle" data-toggle="collapse" data-parent="#nav">
                        <i class="ti-tag"></i>
                        <p style="display: inline;">按类型查看</p>
                        <b class="caret"></b>
                    </a>
                    <div id="collapseTwo" class="panel-collapse collapse ">                        
                        <ul>
                            <li><a href="<?php echo url('files/allPicFiles'); ?>">图片</a></li>
                            <li><a href="<?php echo url('files/allAudioFiles'); ?>">音频</a></li>
                            <li><a href="<?php echo url('files/allVideoFiles'); ?>">视频</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?php echo url('upload/show'); ?>">
                        <i class="ti-arrow-circle-up"></i>
                        <p>上传文件</p>
                    </a>
                </li>

                <li class="active">
                    <a href="<?php echo url('index/edit'); ?>">
                        <i class="ti-settings"></i>
                        <p>修改密码</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('index/logout'); ?>">
                        <i class="ti-back-right"></i>
                        <p>退出登录</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="#">文件浏览</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown" style="margin-top: 25px;">
                    <p><?php echo \think\Request::instance()->cookie('name'); ?></p>
                </li>
            
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="ti-settings"></i>
                        <p>设置</p>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo url('index/logout'); ?>">退出登录</a></li>
                        <li><a href="<?php echo url('index/edit'); ?>">修改密码</a></li>
                        <li><a href="<?php echo url('admin/login/index'); ?>">后台入口</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-body" style="margin-top: 90px">
                            <div id="horizontal-form">
                                <form class="form-horizontal" role="form" action="" method="post">
                                    <input type="hidden" name="id" value="<?php echo $admin['id']; ?>">
                                    <div class="form-group" style="margin-top: 30px;">
                                        <label for="name" class="col-sm-2 control-label no-padding-right">原密码</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="name" type="password" placeholder="" name="name" value="" required="" type="text" autocomplete="off">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>

                                    <div class="form-group" style="margin-top: 30px;">
                                        <label for="password" class="col-sm-2 control-label no-padding-right">新密码</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="password" type="password"  placeholder="" name="password" required="" type="text" autocomplete="off">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                    <div class="form-group" style="margin-top: 30px;">
                                        <label for="password" class="col-sm-2 control-label no-padding-right">确认密码</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="password1" placeholder="" name="password" required="" type="text" autocomplete="off">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                    <div class="form-group" style="margin-top: 30px;">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default">保存信息</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="#">GS.web</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>

<!--   Core JS Files   -->
<script src="__STATIC__/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="__STATIC__/assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="__STATIC__/assets/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="__STATIC__/assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="__STATIC__/assets/js/bootstrap-notify.js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="__STATIC__/assets/js/paper-dashboard.js"></script>

<!--bootstrap table 插件-->
<script src="__STATIC__/bootstrap-table.js"></script>
<script src="__STATIC__/bootstrap-table-zh-CN.js"></script>

</html>
