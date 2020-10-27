$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../near_all_index_problem_jixie.php",
        async:true,
        success:function(result){
            var near_jixie="";
            result=JSON.parse(result); 
            near_jixie=result[0].mount;
            $("#near_jixie").append(near_jixie);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});