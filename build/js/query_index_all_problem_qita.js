$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../query_index_all_problem_qita.php",
        async:true,
        success:function(result){
            var qita="";
            result=JSON.parse(result); 
            qita=result[0].mount;
            $("#qita_index").append(qita);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});