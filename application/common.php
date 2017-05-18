<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
use think\Controller;
/**
 * 根据请求中type的值，判断type是否存在
 * @param $type
 * @return string
 */
function type($type){
    switch ($type) {
    case 'trend':
            $type = 'Trend';
            break;
        case 'essay':
            $type = 'Essay';
            break;
        case 'notice':
            $type = 'Notice';
            break;
        case 'member':
            $type = 'Member';
            break;
        default:
            return false;
    }
    return $type;
}
