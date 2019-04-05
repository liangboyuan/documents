<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:72:"D:\wamp64\www\thinkphp\public/../application/admin\view\upload\show.html";i:1533393818;s:63:"D:\wamp64\www\thinkphp\application\admin\view\public\title.html";i:1526318902;s:61:"D:\wamp64\www\thinkphp\application\admin\view\public\top.html";i:1526559034;s:62:"D:\wamp64\www\thinkphp\application\admin\view\public\left.html";i:1530436862;}*/ ?>
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

    <link href="__STATIC__/assets/css/load.css" rel="stylesheet">
    
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
                        <li class="active">文档上传</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
                <!--<button type="button" tooltip="添加文档" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('add'); ?>'"> <i class="fa fa-plus"></i> Add
                </button>-->
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="flip-scroll">
                                <div class="content"> 
                        <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                活动日期：<input type="date" name="date"/>
                                标题：<input type="text" name="title" autocomplete="off"/>
                                活动类型：<select name="category">
                                        <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option><?php echo $vo['cate_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                视频类型：<select name="vtype">
                                        <option value="高清">高清</option>
                                        <option value="标清">标清</option>
                                        </select>
                                所属部门：<select name="section">
                                        <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option><?php echo $vo['cate']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                                </div>
                            </div>
                        </div>   

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="image_uploads" class="btn btn-primary">选择你要上传的图片 (PNG, JPG)</label>
                                    <input type="file" id="image_uploads" name="image_uploads[]" accept=".jpg, .jpeg, .png" multiple>
                                    <div id="preview1">
                                        <p>未选择文件</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="audio_uploads" class="btn btn-primary">选择你要上传的音频 (MP3)</label>
                                    <input type="file" id="audio_uploads" name="audio_uploads[]" accept=".mp3" multiple>
                                    <div id="preview2">
                                        <p>未选择文件</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="video_uploads" class="btn btn-primary">选择你要上传的视频 (MP4, MKV)</label>
                                    <input type="file" id="video_uploads" name="video_uploads[]" accept=".mp4, .mkv" multiple>
                                    <div id="preview3">
                                        <p>未选择文件</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <h5>备注:</h5>
                                <textarea class="form-control" style="border: 1px solid grey;" rows="5" name="remark"></textarea>
                                </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-1">
                                <input type="submit" value="上传" class="btn btn-lg">
                            </div>
                            <div class="col-md-2">
                                <div id="load" class="load-5" style="display: none">
                                    <div class="ring-2">
                                        <div class="ball-holder">
                                            <div class="ball"></div>
                                        </div>
                                    </div>      
                                    <div align="center"><strong>正在上传</strong></div>
                                </div>
                            </div>
                        </div>
                        
                        </form>
             
                                </div>
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

        <!--Basic Scripts-->
    <script src="__ADMIN__/style/jquery_002.js"></script>
    <script src="__ADMIN__/style/bootstrap.js"></script>
    <script src="__ADMIN__/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__ADMIN__/style/beyond.js"></script>
    <script type="text/javascript">
    // 获取 input 元素
    var input = document.getElementsByTagName("input");
    // 获取 preview 元素
    var preview1 = document.getElementById('preview1');
    var preview2 = document.getElementById('preview2');
    var preview3 = document.getElementById('preview3');

    for(var i = 3; i <= 5; i++){
        input[i].style.display = "none";
    }

    input[3].addEventListener("change", updateImageDisplay);
    input[4].addEventListener("change", updateAudioDisplay);
    input[5].addEventListener("change", updateVideoDisplay);

    function updateImageDisplay() {
    while(preview1.firstChild) {
        preview1.removeChild(preview1.firstChild);
    }

    var curFiles = input[3].files;
    if(curFiles.length === 0) {
        var para = document.createElement('p');
        para.textContent = 'No files currently selected for upload';
        preview1.appendChild(para);
    } else {
        var list = document.createElement('ol');
        preview1.appendChild(list);
        for(var i = 0; i < curFiles.length; i++) {
            var listItem = document.createElement('li');
            var para = document.createElement('p');
            if(validFileType(curFiles[i])) {
                para.textContent = '文件名：' + curFiles[i].name + ', 文件大小：' + returnFileSize(curFiles[i].size) + '.';
                var image = document.createElement('img');
                image.src = window.URL.createObjectURL(curFiles[i]);
                image.setAttribute("width", "480");
                listItem.appendChild(image);
                listItem.appendChild(para);
            } else {
                para.textContent = '文件名： ' + curFiles[i].name + ': Not a valid file type. Update your selection.';
                listItem.appendChild(para);
            }

            list.appendChild(listItem);
            }
        }
    }

    var fileTypes1 = [
    'image/jpeg',
    'image/pjpeg',
    'image/png'
    ]

    function validFileType(file) {
    for(var i = 0; i < fileTypes1.length; i++) {
        if(file.type === fileTypes1[i]) {
        return true;
        }
    }
    return false;
    }   

    function updateAudioDisplay() {
    while(preview2.firstChild) {
        preview2.removeChild(preview2.firstChild);
    }

    var curFiles = input[4].files;
    if(curFiles.length === 0) {
        var para = document.createElement('p');
        para.textContent = 'No files currently selected for upload';
        preview2.appendChild(para);
    } else {
        var list = document.createElement('ol');
        preview2.appendChild(list);
        for(var i = 0; i < curFiles.length; i++) {
            var listItem = document.createElement('li');
            var para = document.createElement('p');
            para.textContent = '文件名：' + curFiles[i].name + ', 文件大小：' + returnFileSize(curFiles[i].size) + '.';
            listItem.appendChild(para);

            list.appendChild(listItem);
            }
        }
    }

    function updateVideoDisplay() {
    while(preview3.firstChild) {
        preview3.removeChild(preview3.firstChild);
    }

    var curFiles = input[5].files;
    if(curFiles.length === 0) {
        var para = document.createElement('p');
        para.textContent = 'No files currently selected for upload';
        preview3.appendChild(para);
    } else {
        var list = document.createElement('ol');
        preview3.appendChild(list);
        for(var i = 0; i < curFiles.length; i++) {
            var listItem = document.createElement('li');
            var para = document.createElement('p');
            para.textContent = '文件名：' + curFiles[i].name + ', 文件大小：' + returnFileSize(curFiles[i].size) + '.';
            listItem.appendChild(para);

            list.appendChild(listItem);
            }
        }
    }

    function returnFileSize(number) {
        if(number < 1024) {
            return number + 'bytes';
        } else if(number > 1024 && number < 1048576) {
            return (number/1024).toFixed(1) + 'KB';
        } else if(number > 1048576) {
            return (number/1048576).toFixed(1) + 'MB';
        }
    }
</script>

<script type="text/javascript"> 
    $('#upload-form').submit(function () {
        $('#load').show();
    });
</script>


</body></html>