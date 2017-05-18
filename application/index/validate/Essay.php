<?php

/**
 * Created by PhpStorm.
 * User: Horol
 * Date: 2017/5/5
 * Time: 9:30
 */
namespace app\index\validate;

use think\Validate;
class Essay extends Validate
{
    protected $rule = [
        'name'  =>  'require|max:50',
        'text' =>  'require',
    ];
    protected $message  =   [
        'name.require' => '题目不能为空',
        'name.max'     => '题目不能超过50个字',
        'text.require' => '内容不能为空'
    ];
}