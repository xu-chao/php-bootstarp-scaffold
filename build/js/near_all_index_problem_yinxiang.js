$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../near_all_index_problem_yinxiang.php",
        async:true,
        success:function(result){
            var near_yinxiang="";
            result=JSON.parse(result); 
            near_yinxiang=result[0].mount;
            $("#near_yinxiang").append(near_yinxiang);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});