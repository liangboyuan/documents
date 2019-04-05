<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"/Applications/MAMP/htdocs/thinkphp/public/../application/index/view/index/statusinfo.html";i:1526202951;}*/ ?>
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

    <!--  Paper Dashboard core CSS    -->
    <link href="__STATIC__/assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="__STATIC__/assets/css/themify-icons.css" rel="stylesheet">

    <!--bootstrap table 插件-->
    <link href="__STATIC__/bootstrap-table.css" rel="stylesheet"/>

    <style>
        .row-click-able{
            cursor: pointer;
        }
    </style>
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
                    <a href="<?php echo url('index/index'); ?>">
                        <i class="ti-panel"></i>
                        <p>活动记录</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('index/allFiles'); ?>">
                        <i class="ti-view-list-alt"></i>
                        <p>文件浏览</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('upload/show'); ?>">
                        <i class="ti-arrow-circle-up"></i>
                        <p>上传文件</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo url('index/statusInfo'); ?>">
                        <i class="ti-info-alt"></i>
                        <p>用户上传状态</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('index/edit'); ?>">
                        <i class="ti-settings"></i>
                        <p>修改密码</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('admin/adminIndex/logout'); ?>">
                        <i class="ti-back-right"></i>
                        <p>退出登录</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('admin/login/index'); ?>">
                        <i class="ti-back-right"></i>
                        <p>后台入口</p>
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
                    <a class="navbar-brand" href="#">用户上传状态</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown" style="margin-top: 25px;">

                            <p><?php echo \think\Request::instance()->session('name'); ?></p>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-settings"></i>
                                <p>设置</p>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo url('admin/adminIndex/logout'); ?>">退出登录</a></li>
                                <li><a href="#">修改密码</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                        <div class="card">
                            <div class="content table-responsive">
                                <table data-toggle="table" data-search="true" data-search-align="left" data-striped="true">
                                    <thead>
                                    <tr>                    
                                        <th>标题</th>
                                        <th>活动类型</th>
                                        <th>时间</th>
                                        <th>状态</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <tr class="row-click-able" data-href="__ROOT__/index.php/index/index/fileList/activityId/<?php echo $vo['id']; ?>">
                                        <td><a href="__ROOT__/index.php/index/index/fileList/activityId/<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></a></td>
                                        <td><?php echo $vo['category']; ?></td>
                                        <td><?php echo $vo['date']; ?></td>
                                        <td><?php echo $vo['status']; ?></td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
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

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="__STATIC__/assets/js/paper-dashboard.js"></script>

<!--bootstrap table 插件-->
<script src="__STATIC__/bootstrap-table.js"></script>
<script src="__STATIC__/bootstrap-table-zh-CN.js"></script>

<script type="text/javascript">
    //实现表格的整行的点击跳转
    $(document).ready(function($){
        $(".row-click-able").click(function(){
            window.document.location = $(this).data("href");
        })
    })
</script>

</html>
