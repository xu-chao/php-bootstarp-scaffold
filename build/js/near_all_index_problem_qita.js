$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../near_all_index_problem_qita.php",
        async:true,
        success:function(result){
            var near_qita="";
            result=JSON.parse(result); 
            near_qita=result[0].mount;
            $("#near_qita").append(near_qita);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});