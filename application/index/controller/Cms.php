<?php
namespace app\index\controller;
use think\Controller;

class Cms extends Controller
{
    //初始化方法，检测cookie是否存在
    public function _initialize(){
        if(!cookie('admin')){
            $this->error('请先登录','Index/index');
        }
        $this->assign('admin',cookie('admin'));
    }
    //默认为动态页面
    public function index(){
        $trends = db('trend')->where(1)->order('id desc')->paginate(10);
        $this->assign('trends',$trends);
        return $this->fetch();
    }

    //动态页面
    public function trend(){
        $this->redirect('Cms/index');
    }

    //文章页面
    public function essay(){
        $essays = db('essay')->where(1)->order('id desc')->paginate(10);
        $this->assign('essays',$essays);
        return $this->fetch();
    }

    //课程页面
    public function course(){
        $courses = db('course')->where(1)->order('id desc')->paginate(10);
        $this->assign('courses',$courses);
        return $this->fetch();
    }

    //发表页面
    public function publication(){
        $publications = db('publication')->where(1)->order('id desc')->paginate(10);
        $this->assign('publications',$publications);
        return $this->fetch();
    }

    //公告页面
    public function notice(){
        $notices = db('notice')->where(1)->order('id desc')->paginate(10);
        $this->assign('notices',$notices);
        return $this->fetch();
    }

    //成员管理页面
    public function member(){
        $members = db('member')->where(1)->order('id desc')->paginate(10);
        $this->assign('members',$members);
        return $this->fetch();
    }

    //添加成员
    public function addMember(){
        return $this->fetch();
    }

    //添加动态/文章
    public function add(){
        //判断类型
        if(input('?type')){
            $type = type(input('type'));
            if(!$type){
                $this->error('类型错误');
            }
            if(input('?name') && input('?text')){
                $table = model($type);
                $table->name=input('name');
                $table->text=input('text','',false);
                //验证器验证
                $data = [
                    'name'=>input('name'),
                    'text'=>input('text')
                ];
                $validate = validate('Essay');
                if(!$validate->check($data)){
                    $this->error($validate->getError());
                }
                if($table->allowField(true)->save()){
                    $this->success('发布成功!','Cms/'.strtolower($type));
                }else{
                    $this->error('发布失败');
                }
            }
            return $this->fetch('add'.$type);
        }else{
            $this->error('非法访问');
        }
    }

    //修改动态/文章
    public function change(){
        //判断类型
        if(input('?type')&&input('?id')){
            $type = type(input('type'));
            if(!$type){
                $this->error('类型错误');
            }
            $table = model($type);
            if(input('?name') && input('?text')){
                $data['name']=input('name');
                $data['text']=input('text','',false);
                //验证器验证
                $validate = validate('Essay');
                if(!$validate->check($data)){
                    $this->error($validate->getError());
                }
                if($table->save($data,['id' => input('id')])){
                    $this->success('修改成功!','Cms/'.strtolower($type));
                }else{
                    $this->error('没有任何修改');
                }
            }
            $result = $table->where('id',input('id'))->find();
            if($result==null){
                $this->error('id不存在');
            }
            $this->assign('data',$result);
            return $this->fetch('change'.$type);
        }else{
            $this->error('非法访问');
        }
    }

    //删除动态/文章
    public function delete(){
        if(input('?type')&&input('?id')) {
           $type = type(input('type'));
           if(!$type){
               $this->error('类型错误');
           }
           $table = model($type);
           $result = $table->where('id',input('id'))->delete();
           if($result){
               return '删除成功';
           }else{
               return '删除失败';
           }
        }else{
            $this->error('非法访问');
        }
    }

    //增加、修改成员/资源/课程
    public function updateResource(){
        $data = array();
        // 获取表单上传文件
        $files = request()->file('file');
        $type = input('type');
        $i = 1;
        foreach ($files as $file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'static/'.$type);
            if($info){
                if($i==1){
                    $data['pic_dir']=$info->getSaveName();
                    $data['pic_name']=$_FILES['file']['name'][0];
                }else if($i==2){
                    $data['file_dir']=$info->getSaveName();
                    $data['file_name']=$_FILES['file']['name'][1];
                }
            }else{
                // 上传失败获取错误信息
                $this->errot($file->getError());
            }
            $i++;
        }
        $data['id']=input('?id')?input('id'):null;
        $data['name']=input('name');
        $data['text']=input('text');
        //验证器验证
        $validate = validate('Essay');
        if(!$validate->check($data)){
            $this->error($validate->getError());
        }
        $member=model($type);
        if(input('?id')){
            if($member->allowField(true)->save($data,['id'=>input('id')])){
                $this->success('修改成功','Cms/'.$type);
            }else{
                $this->error('修改失败');
            }
        }else{
            //新增
            $member->data($data);
            if($member->save()){
                $this->success('添加成功','Cms/'.$type);
            }else{
                $this->error('添加失败');
            }
        }
    }
}
