<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\wamp64\www\thinkphp\public/../application/index\view\upload\show.html";i:1533393410;}*/ ?>
<?php session_start(); ?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="__STATIC__/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="__STATIC__/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>南京审计大学声像档案管理系统</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="__STATIC__/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="__STATIC__/assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="__STATIC__/assets/css/themify-icons.css" rel="stylesheet">

    <link href="__STATIC__/assets/css/load.css" rel="stylesheet">

</head>

<body>
<div class="wrapper">
    
<div class="sidebar" data-background-color="white" data-active-color="info" id="nav">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                声像档案管理系统
            </a>
        </div>

            <ul class="nav">
                <li>
                    <a href="#collapseOne" class="dropdown-toggle" data-toggle="collapse" >
                        <i class="ti-panel"></i>
                        <p style="display: inline;">活动记录</p> 
                        <b class="caret"></b>
                    </a>
                    <div id="collapseOne" class="collapse">                        
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
                <li class="active">
                    <a href="<?php echo url('upload/show'); ?>">
                        <i class="ti-angle-double-up"></i>
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
            <a class="navbar-brand" href="#">上传文件</a>
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
                <div class="card">
                    <div class="header">
                        <h4 class="title">上传文件</h4>
                    </div>

                    <div class="content"> 
                        <form method="post" id="upload-form" enctype="multipart/form-data">
                        <input type="hidden" name="<?php echo ini_get('session.upload_progress.name');?>" value="test"/>                        
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                活动日期：<input type="date" name="date"/>
                                标题：<input type="text" name="title"/>
                                活动类型：<select name="category">
                                        <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option><?php echo $vo['cate_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                视频类型：<select name="vtype">
                                        <option value="高清">高清</option>
                                        <option value="标清">标清</option>
                                        </select>
                                    所属部门：<select name="section">
                                    <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $vo['cate']; ?>"><?php echo $vo['cate']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                                </div>
                            </div>
                        </div>   

                        <div class="row">
                            <div class="col-md-8">
                                <div  class="form-group">
                                     
                                    <label for="image_uploads" class="btn btn-primary">选择你要上传的图片 (PNG, JPG)</label>
                                    <input type="file" id="image_uploads" name="image_uploads[]" accept="image/jpg, image/jpeg, image/png" multiple>（同时选择多张图片可实现多张图片上传）
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
                                <div id="upload-form"  class="form-group">
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
</body>

<!--   Core JS Files   -->
<script src="__STATIC__/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="__STATIC__/assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="__STATIC__/assets/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="__STATIC__/assets/js/chartist.min.js"></script>

<script type="text/javascript"> 
    $('#upload-form').submit(function () {
        $('#load').show();
    });
</script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="__STATIC__/assets/js/paper-dashboard.js"></script>

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
                image.setAttribute("width", "240");
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

</html>
