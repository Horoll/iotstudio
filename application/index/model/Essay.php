<?php
/**
 * Created by PhpStorm.
 * User: Horol
 * Date: 2017/5/5
 * Time: 13:08
 */

namespace app\index\model;
use think\Model;

class Essay extends Model
{
    protected $insert = ['publish_date'];
    protected $update = ['publish_date'];
    //在发布、修改动态时自动添加、更新日期
    public function setPublishDateAttr()
    {
        date_default_timezone_set("Asia/Chongqing");
        return date('Y-m-d H:i:s');
    }
}