$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../query_index_all_problem_dengguang.php",
        async:true,
        success:function(result){
            var dengguang="";
            result=JSON.parse(result); 
            dengguang=result[0].mount;
            $("#dengguang_index").append(dengguang);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});