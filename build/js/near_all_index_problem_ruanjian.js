$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../near_all_index_problem_ruanjian.php",
        async:true,
        success:function(result){
            var near_ruanjian="";
            result=JSON.parse(result); 
            near_ruanjian=result[0].mount;
            $("#near_ruanjian").append(near_ruanjian);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});