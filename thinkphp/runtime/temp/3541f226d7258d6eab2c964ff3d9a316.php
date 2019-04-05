<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\wamp64\www\thinkphp\public/../application/index\view\index\allfiles.html";i:1527054152;}*/ ?>
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
            <li class="active">
                <a href="<?php echo url('index/index'); ?>">
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

            <li>
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

                            <p><?php echo \think\Request::instance()->session('name'); ?></p>
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
                    <div class="card">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse"  href="#picture">
                                        图片
                                    </a>
                                </h4>
                            </div>

                            <div id="picture" class="panel-collapse collapse in">
                                <div class="content table-responsive">
                                    <table data-toggle="table"  data-search="true" data-search-align="left" data-striped="true">
                                    <thead>
                                    <tr>
                                        <th>文件名</th>
                                        <th>文件类型</th>
                                        <th>文件大小</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($pictureList) || $pictureList instanceof \think\Collection || $pictureList instanceof \think\Paginator): $k = 0; $__LIST__ = $pictureList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                    <tr>
                                        <td><?php echo $vo['name']; ?></td>
                                        <td><?php echo $vo['type']; ?></td>
                                        <td><?php echo $vo['size']; ?></td>
                                        <td>
                                            <a class="text-primary" href="#" onclick="openModal('<?php echo $vo['md5_name']; ?>','<?php echo $vo['type']; ?>','<?php echo $activity1[$k-1]; ?>')">预览</a>
                                            <?php switch($vo['status']): case "0": ?>
                                            <input class="btn btn-danger" style="border-radius: 0px" type="submit" value="申请下载">
                                            <?php break; case "1": ?>
                                            <a class="text-primary" href="__STATIC__/<?php echo $activityName; ?>/<?php echo $vo['name']; ?>.<?php echo $vo['type']; ?>" download="<?php echo $vo['name']; ?>.<?php echo $vo['type']; ?>">下载</a>
                                            <?php break; case "2": ?>
                                            <input class="btn btn-success" style="border-radius: 0px" type="submit" value="审核中">
                                            <?php break; default: endswitch; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse"  href="#audio">
                                        音频
                                    </a>
                                </h4>
                            </div>

                            <div id="audio" class="panel-collapse collapse in">
                                <div class="content table-responsive">
                                    <table data-toggle="table"  data-search="true" data-search-align="left" data-striped="true">
                                    <thead>
                                    <tr>
                                        <th>文件名</th>
                                        <th>文件类型</th>
                                        <th>文件大小</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($audioList) || $audioList instanceof \think\Collection || $audioList instanceof \think\Paginator): $k = 0; $__LIST__ = $audioList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                    <tr>
                                        <td><?php echo $vo['name']; ?></td>
                                        <td><?php echo $vo['type']; ?></td>
                                        <td><?php echo $vo['size']; ?></td>
                                        <td>
                                            <a class="text-primary" href="#" onclick="openModal('<?php echo $vo['md5_name']; ?>','<?php echo $vo['type']; ?>','<?php echo $activity1[$k-1]; ?>')">预览</a>
                                            <?php switch($vo['status']): case "0": ?>
                                            <input class="btn btn-danger" style="border-radius: 0px" type="submit" value="申请下载">
                                            <?php break; case "1": ?>
                                            <a class="text-primary" href="__STATIC__/<?php echo $activityName; ?>/<?php echo $vo['name']; ?>.<?php echo $vo['type']; ?>" download="<?php echo $vo['name']; ?>.<?php echo $vo['type']; ?>">下载</a>
                                            <?php break; case "2": ?>
                                            <input class="btn btn-success" style="border-radius: 0px" type="submit" value="审核中">
                                            <?php break; default: endswitch; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse"  href="#video">
                                        视频
                                    </a>
                                </h4>
                            </div>

                            <div id="video" class="panel-collapse collapse in">
                                <div class="content table-responsive">
                                    <table data-toggle="table" data-search="true" data-search-align="left" data-striped="true">
                                        <thead>
                                        <tr>
                                            <th>标题</th>
                                            <th>活动类型</th>
                                            <th>时间</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(is_array($videoList) || $videoList instanceof \think\Collection || $videoList instanceof \think\Paginator): $k = 0; $__LIST__ = $videoList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                        <tr>
                                        <td><?php echo $vo['name']; ?></td>
                                        <td><?php echo $vo['type']; ?></td>
                                        <td><?php echo $vo['size']; ?></td>
                                        <td>
                                                <a class="text-primary" href="#" onclick="openModal('<?php echo $vo['md5_name']; ?>','<?php echo $vo['type']; ?>','<?php echo $activity1[$k-1]; ?>')">预览</a>
                                                <?php switch($vo['status']): case "0": ?>
                                                <input class="btn btn-danger" style="border-radius: 0px" type="submit" value="申请下载">
                                                <?php break; case "1": ?>
                                                <a class="text-primary" href="__STATIC__/<?php echo $activityName; ?>/<?php echo $vo['name']; ?>.<?php echo $vo['type']; ?>" download="<?php echo $vo['name']; ?>.<?php echo $vo['type']; ?>">下载</a>
                                                <?php break; case "2": ?>
                                                <input class="btn btn-success" style="border-radius: 0px" type="submit" value="审核中">
                                                <?php break; default: endswitch; ?>
                                            </td>
                                    </tr>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </tbody>
                                    </table>
                                </div>
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

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">        
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel1">预览窗口<span style="font-size:70%">(视频与音频文件只限预览15秒) </span></h4>
            </div>
            <div class="modal-body">
                <img id="img_preview" hidden="hidden" src="" width='480 '></img>
                <video id="video_preview" hidden="hidden" src="" width="480" height="270" controls="controls"></video>
                <audio id="audio_preview" hidden="hidden" src="" controls="controls"></audio>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
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

<script type="text/javascript">
    //根据文件类型的不同，模态框所显示的内容也随之不同
    function openModal(name,type,key) {
        switch(type){
            case "mp3":
                $('#audio_preview').removeAttr("hidden");
                $('#audio_preview').attr("src","__STATIC__/"+key+"/"+name+"."+type+"#t=0,15");
                var myDoc=document.getElementById("audio_preview");
                break;
            case "mp4":
                $('#video_preview').removeAttr("hidden");
                $('#video_preview').attr("src","__STATIC__/"+key+"/"+name+"."+type+"#t=0,15");
                var myDoc=document.getElementById("video_preview");
                break;
            case "jpg":
            case "png":
                $('#img_preview').removeAttr("hidden");
                $('#img_preview').attr("src","__STATIC__/"+key+"/"+name+"."+type);
                break;
        }
        //模态框的设置
        $('#myModal').modal({
            backdrop: true,
            keyboard: false,
            show: true,
        });
        //关闭模态框后音频和视频会自动停止播放
        $('#myModal').on('hidden.bs.modal', function () {
            $('#audio_preview').attr("hidden","hidden");
            $('#video_preview').attr("hidden","hidden");
            $('#img_preview').attr("hidden","hidden");
            myDoc.pause();
        })
    }
</script>

<!--bootstrap table 插件-->
<script src="__STATIC__/bootstrap-table.js"></script>
<script src="__STATIC__/bootstrap-table-zh-CN.js"></script>

</body>
</html>
