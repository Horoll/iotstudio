/**
 * Created by Horol on 2017/5/5.
 */
/*删除确认*/
var comfirmDelete=$(".delete-btn");
for(var i=0;i<comfirmDelete.length;i++){
    comfirmDelete[i].onclick=function () {
        var id=this.getAttribute('id');
        swal({
            title: "确定要删除吗？",
            type: "warning",
            showCancelButton:true,
            cancelButtonText:'返回',
            confirmButtonText: "确定",
            confirmButtonColor: "#ffffff",
            closeOnConfirm: true,
            closeOnCancel: true
        },function(isConfirm){
            if(isConfirm){
                //发送ajax post请求
                post_data+=id;
                $.post(post_url,post_data).done(function(data){
                    swal({
                        title:data,
                        type:"success",
                        confirmButtonText: "确定",
                        confirmButtonColor: "#ffffff",
                        closeOnConfirm: true
                    },function (isConfirm) {
                        if(isConfirm){
                            //刷新页面
                            location.reload();
                        }
                    });
                });
            }
        });
    }
}