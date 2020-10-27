$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../near_all_index_problem_xiaoguo.php",
        async:true,
        success:function(result){
            var near_xiaoguo="";
            result=JSON.parse(result); 
            near_xiaoguo=result[0].mount;
            $("#near_xiaoguo").append(near_xiaoguo);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});