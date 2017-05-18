<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        $trend = db('trend');
        $trends = $trend->where(1)->order('id desc')->limit(5)->select();
        $essay = db('essay');
        $essays = $essay->where(1)->order('id desc')->limit(5)->select();
        $notice = db('notice');
        $notice = $notice->where(1)->order('id desc')->limit(1)->find();
        $this->assign([
            'trends'=>$trends,
            'essays'=>$essays,
            'notice'=>$notice
        ]);
        return $this->fetch();
    }
    public function trends_1(){
        $trend = db('trend');
        $trends = $trend->where(1)->order('id desc')->paginate(15);
        $this->assign('trends',$trends);
        return $this->fetch();
    }

    public function trends_2(){
        $essay = db('essay');
        $essays = $essay->where(1)->order('id desc')->paginate(15);
        $this->assign('essays',$essays);
        return $this->fetch();
    }

    public function trends_3(){
        return $this->fetch();
    }

    public function trends_4(){
        $notice = db('notice');
        $notices = $notice->where(1)->order('id desc')->paginate(15);
        $this->assign('notices',$notices);
        return $this->fetch();
    }

    public function member(){
        $member = db('member');
        $members = $member->where(1)->order('id desc')->select();
        $this->assign('members',$members);
        return $this->fetch();
    }

    //管理员登录
    public function login(){
        if(input('?account')&&input('?password')){
            $result = db('admin')->where('account',input('account'))->find();
            if(!$result){
                $this->error('帐号不存在');
            }
            if($result['password']!=md5(input('password'))){
                $this->error('密码错误');
            }
            cookie('admin',input('account'));
            $this->success('登录成功','Cms/index');
        }else{
            $this->error('非法访问');
        }
    }

    //注销登录
    public function logout(){
        cookie('admin',null);
        $this->success('注销成功','Index/index');
    }
}
