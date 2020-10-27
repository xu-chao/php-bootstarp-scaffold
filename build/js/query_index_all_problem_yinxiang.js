$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../query_index_all_problem_yinxiang.php",
        async:true,
        success:function(result){
            var yinxiang="";
            result=JSON.parse(result); 
            yinxiang=result[0].mount;
            $("#yinxiang_index").append(yinxiang);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});