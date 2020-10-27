$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../near_all_index_problem_diannao.php",
        async:true,
        success:function(result){
            var near_diannao="";
            result=JSON.parse(result); 
            near_diannao=result[0].mount;
            $("#near_diannao").append(near_diannao);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});