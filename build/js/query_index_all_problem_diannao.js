$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../query_index_all_problem_diannao.php",
        async:true,
        success:function(result){
            var diannao="";
            result=JSON.parse(result); 
            diannao=result[0].mount;
            $("#diannao_index").append(diannao);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});