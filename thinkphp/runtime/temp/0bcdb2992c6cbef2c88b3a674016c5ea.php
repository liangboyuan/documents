<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:92:"/Applications/MAMP/htdocs/thinkphp/public/../application/admin/view/title_list/filelist.html";i:1533388570;s:75:"/Applications/MAMP/htdocs/thinkphp/application/admin/view/public/title.html";i:1526318902;s:73:"/Applications/MAMP/htdocs/thinkphp/application/admin/view/public/top.html";i:1526559034;s:74:"/Applications/MAMP/htdocs/thinkphp/application/admin/view/public/left.html";i:1530436862;}*/ ?>
<!DOCTYPE html>
<html><head>
	<meta charset="utf-8">
    <title>声响档案管理系统</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__ADMIN__/style/bootstrap.css" rel="stylesheet">
    <link href="__ADMIN__/style/font-awesome.css" rel="stylesheet">
    <link href="__ADMIN__/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__ADMIN__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__ADMIN__/style/demo.css" rel="stylesheet">
    <link href="__ADMIN__/style/typicons.css" rel="stylesheet">
    <link href="__ADMIN__/style/animate.css" rel="stylesheet">

    <link href="__STATIC__/assets/css/lightbox.min.css" rel="stylesheet"/>
</head>
<body>
	<!-- 头部 -->
	<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left"style="margin-top: 8px">
                <a href="#" class="navbar-brand">
                    <small>
                        声响档案管理系统
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('name'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/logout'); ?>">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit',array('id'=>\think\Request::instance()->session('id'))); ?>">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">管理员</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('adminIndex/lst'); ?>">
                                    <span class="menu-text">
                                        前台管理列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('admin/lst'); ?>">
                                    <span class="menu-text">
                                        后台管理列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('auth_group/lst'); ?>">
                                    <span class="menu-text">
                                        用户组列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('auth_rule/lst'); ?>">
                                    <span class="menu-text">
                                        权限列表                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">文档阅览</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('titleList/lst'); ?>">
                                    <span class="menu-text">
                                        文档列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-leaf"></i>
                            <span class="menu-text">部门管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('cate/lst'); ?>">
                                    <span class="menu-text">
                                        部门列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>

                        </ul>
                    </li>


                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-upload"></i>
                            <span class="menu-text">文档上传</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('upload/show'); ?>">
                                    <span class="menu-text">
                                        上传栏目                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-wrench"></i>
                            <span class="menu-text">操作</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('operation/conf'); ?>">
                                    <span class="menu-text">
                                         下载审批                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!--<li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-folder"></i>
                            <span class="menu-text">栏目管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('cate/lst'); ?>">
                                    <span class="menu-text">
                                        栏目列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">文章管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('article/lst'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-chain"></i>
                            <span class="menu-text">友情连接</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('link/lst'); ?>">
                                    <span class="menu-text">
                                        链接列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">系统</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Conf/conf'); ?>">
                                    <span class="menu-text">
                                        配置项                               </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Conf/lst'); ?>">
                                    <span class="menu-text">
                                        配置列表                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>     -->

                </ul>
                <!-- /Sidebar Menu -->
            </div>
        </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="#">系统</a></li>
                        <li class="active">用户管理</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
                <button type="button" tooltip="添加文档" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('add'); ?>'"> <i class="fa fa-plus"></i> Add
                </button>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-body">
                                <h4>图片</h4>
                                <?php if(is_array($pictureList) || $pictureList instanceof \think\Collection || $pictureList instanceof \think\Paginator): $i = 0; $__LIST__ = $pictureList;if( count($__LIST__)==0 ) : echo "暂无数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <a  style="display: inline;"  href="__STATIC__/<?php echo $activityMd5Name; ?>/<?php echo $vo['md5_name']; ?>.<?php echo $vo['type']; ?>" data-lightbox="example-set" data-title="点击图片左侧或右侧可查看下一张">
                                    <img style="display: inline; border:2px solid white; object-fit: cover" width="240" height="180" border="4" src="__STATIC__/<?php echo $activityMd5Name; ?>/<?php echo $vo['md5_name']; ?>.<?php echo $vo['type']; ?>" alt=""/></a>
                                <?php endforeach; endif; else: echo "暂无数据" ;endif; ?>

                                <br/>
                                <h4>音频</h4>
                                <div class="flip-scroll">
                                    <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="text-center">文件名</th>
                                        <th class="text-center">文件类型</th>
                                        <th class="text-center">文件大小</th>
                                        <th class="text-center">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($audioList) || $audioList instanceof \think\Collection || $audioList instanceof \think\Paginator): $i = 0; $__LIST__ = $audioList;if( count($__LIST__)==0 ) : echo "暂无数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td class="text-center"><?php echo $vo['name']; ?></td>
                                        <td class="text-center"><?php echo $vo['type']; ?></td>
                                        <td class="text-center"><?php echo $vo['size']; ?></td>
                                        <td class="text-center">
                                            <a class="text-primary" href="#" onclick="openModal('<?php echo $vo['md5_name']; ?>','<?php echo $vo['type']; ?>')">浏览</a>
                                            <a class="text-primary" href="__STATIC__/<?php echo $activityMd5Name; ?>/<?php echo $vo['md5_name']; ?>.<?php echo $vo['type']; ?>" download="<?php echo $vo['md5_name']; ?>.<?php echo $vo['type']; ?>">下载</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "暂无数据" ;endif; ?>
                                    </tbody>
                                    </table>
                                </div>

                                <h4>视频</h4>
                                <div class="flip-scroll">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th class="text-center">文件名</th>
                                            <th class="text-center">文件类型</th>
                                            <th class="text-center">文件大小</th>
                                            <th class="text-center">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(is_array($videoList) || $videoList instanceof \think\Collection || $videoList instanceof \think\Paginator): $i = 0; $__LIST__ = $videoList;if( count($__LIST__)==0 ) : echo "暂无数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <tr>
                                            <td class="text-center"><?php echo $vo['name']; ?></td>
                                            <td class="text-center"><?php echo $vo['type']; ?></td>
                                            <td class="text-center"><?php echo $vo['size']; ?></td>
                                            <td class="text-center">
                                                <a class="text-primary" href="#" onclick="openModal('<?php echo $vo['md5_name']; ?>','<?php echo $vo['type']; ?>')">浏览</a>
                                                <a class="text-primary" href="__STATIC__/<?php echo $activityMd5Name; ?>/<?php echo $vo['md5_name']; ?>.<?php echo $vo['type']; ?>" download="<?php echo $vo['md5_name']; ?>.<?php echo $vo['type']; ?>">下载</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; endif; else: echo "暂无数据" ;endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <h4>备注</h4>
                                <p style="font-size: 17px"><?php echo $remark; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

    <!-- 模态框（Modal） -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">        
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel1">预览窗口<span style="font-size:70%"></span></h4>
                </div>
                <div class="modal-body">
                    <img id="img_preview" hidden="hidden" src="" width='480 '></img>
                    <video id="video_preview" hidden="hidden" src="" width="480" height="270" controls="controls" autoplay="autoplay"></video>
                    <audio id="audio_preview" hidden="hidden" src="" autoplay="autoplay" controls="controls"></audio>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>

    <script type="text/javascript">
    //根据文件类型的不同，模态框所显示的内容也随之不同
        function openModal(name,type) {
            switch(type){
                case "mp3":
                    $('#audio_preview').removeAttr("hidden");
                    $('#audio_preview').attr("src","__STATIC__/"+"<?php echo $activityMd5Name; ?>"+"/"+name+"."+type);
                    var myDoc=document.getElementById("audio_preview");
                    break;
                case "mp4":
                    $('#video_preview').removeAttr("hidden");
                    $('#video_preview').attr("src","__STATIC__/"+"<?php echo $activityMd5Name; ?>"+"/"+name+"."+type);
                    var myDoc=document.getElementById("video_preview");
                    break;
                case "jpg":
                case "png":
                    $('#img_preview').removeAttr("hidden");
                    $('#img_preview').attr("src","__STATIC__/"+"<?php echo $activityMd5Name; ?>"+"/"+name+"."+type);
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

    <!--Basic Scripts-->
    <script src="__ADMIN__/style/jquery_002.js"></script>
    <script src="__ADMIN__/style/bootstrap.js"></script>
    <script src="__ADMIN__/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__ADMIN__/style/beyond.js"></script>

    <script src="__STATIC__/assets/js/lightbox.min.js"></script>

</body></html>