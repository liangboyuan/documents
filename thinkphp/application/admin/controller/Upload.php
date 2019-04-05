<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\File;
use think\Request;
use app\admin\model\Activity;

class Upload extends Controller
{   
    public function show()   
    {
        $cates = Db::table('category')->select();
        $this->assign('cates', $cates);
        $cate = Db::table('cates')->select();
        $this->assign('cate',$cate);
        
        //获取标题，备注，日期
        $date=Request::instance()->post('date');
        $title=$date . Request::instance()->post('title');
        $md5Title=md5($title);
        $section=Request::instance()->post('section');
        $remark=Request::instance()->post('remark');
        $category=Request::instance()->post('category');
        $uploader_id=session('id');
        $vtype=Request::instance()->post('vtype');
        $vection=Request::instance()->post('section');
        $activityId="";
        if($title)
        {
            $activity = new Activity;     
            $activity->data([
                'section'=>$section,
                'title'=>$title,
                'md5_title'=>$md5Title,
                'remark'=>$remark,
                'category'=>$category,
                'date'=>$date,
                'uploader_id'=>$uploader_id,
                'vtype'=>$vtype,
                'section'=>$vection]);
            $activity->save();
            $activityId = Db::table('activity')->getLastInsID();
        }

        $files1=uploadFiles('image_uploads',$md5Title,$activityId);
        $files2=uploadFiles('audio_uploads',$md5Title,$activityId);
        $files3=uploadFiles('video_uploads',$md5Title,$activityId);

        
        if($files1 || $files2 || $files3)
            $this->success("上传成功！");

        return $this->fetch();
    }


}
