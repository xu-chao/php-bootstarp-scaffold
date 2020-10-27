$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../near_all_index_problem_dengguang.php",
        async:true,
        success:function(result){
            var near_dengguang="";
            result=JSON.parse(result); 
            near_dengguang=result[0].mount;
            $("#near_dengguang").append(near_dengguang);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});