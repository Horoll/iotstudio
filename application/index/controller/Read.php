<?php
/**
 * Created by PhpStorm.
 * User: Horol
 * Date: 2017/4/21
 * Time: 18:23
 */

namespace app\index\controller;
use think\Controller;

class Read extends Controller
{
    public function index(){
        if(input('?type')&&input('?id')){
            $type = type(input('type'));
            if(!$type){
                $this->error('类型错误');
            }
            $table = model($type);
            $result = $table->where('id',input('id'))->find();
            if($result==null){
                $this->error('id不存在');
            }
            $this->assign('data',$result);
            return $this->fetch('Index/read');
        }else{
            $this->error('非法访问');
        }
    }
}