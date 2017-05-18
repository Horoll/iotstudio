/**
 * Created by Horol on 2017/5/5.
 */
$(document).ready(function(){
    var content = $("#show").text();
    $("#show").html(filterXSS(content)).show();
});