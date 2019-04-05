<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\File;
use think\Request;
use app\index\model\Activity;
use app\index\controller\Common;


class Upload extends Common
{   
    public function show()   
    {
        //获取标题，备注，日期
        $date=Request::instance()->post('date');
        $title=$date . Request::instance()->post('title');
        $md5Title=md5($title);
        $remark=Request::instance()->post('remark');
        $category=Request::instance()->post('category');
        $uploader_id=cookie('id');
        $vtype=Request::instance()->post('vtype');
        $vection=Request::instance()->post('section');
        $activityId="";
        if($date && $title)
        {
            $image = request()->file('image_uploads');
            $audio = request()->file('audio_uploads');
            $video = request()->file('video_uploads');

            if(empty($image) && empty($audio) && empty($video))
                $this->error("上传的文件不能为空！");
            else 
            {
                $activity = new Activity;     
                $activity->data([
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

                $files1=uploadFiles('image_uploads',$md5Title,$activityId);
                $files2=uploadFiles('audio_uploads',$md5Title,$activityId);
                $files3=uploadFiles('video_uploads',$md5Title,$activityId);

                if($files1 || $files2 || $files3)
                    $this->success("上传成功！");             
            }

        }
  
        return $this->fetch();
    }

    

}
