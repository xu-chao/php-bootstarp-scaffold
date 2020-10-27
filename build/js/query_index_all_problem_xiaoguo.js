$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../query_index_all_problem_xiaoguo.php",
        async:true,
        success:function(result){
            var xiaoguo="";
            result=JSON.parse(result); 
            xiaoguo=result[0].mount;
            $("#xiaoguo_index").append(xiaoguo);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});