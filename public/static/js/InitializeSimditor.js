/**
 * Created by Horol on 2017/5/2.
 */
var editor = new Simditor({
    textarea: $('#editor'),
    defaultImage: '../../public/static/img/image.png',
    // upload: {
    //     url: '/PublicInfoManage/Notice/SavePic', //文件上传的接口地址
    //     params: null, //键值对,指定文件上传接口的额外参数,上传的时候随文件一起提交
    //     fileKey: 'fileDataFileName', //服务器端获取文件数据的参数名
    //     connectionCount: 3,
    //     leaveConfirm: '正在上传文件'
    // }
    upload:true,
    pasteImge:true
});