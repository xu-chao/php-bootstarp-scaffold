$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../query_index_all_problem_jixie.php",
        async:true,
        success:function(result){
            var jixie="";
            result=JSON.parse(result); 
            jixie=result[0].mount;
            $("#jixie_index").append(jixie);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});