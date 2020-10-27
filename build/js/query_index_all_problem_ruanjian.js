$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../query_index_all_problem_ruanjian.php",
        async:true,
        success:function(result){
            var ruanjian="";
            result=JSON.parse(result); 
            ruanjian=result[0].mount;
            $("#ruanjian_index").append(ruanjian);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});