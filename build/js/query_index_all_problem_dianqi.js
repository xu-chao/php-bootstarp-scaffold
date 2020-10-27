$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../query_index_all_problem_dianqi.php",
        async:true,
        success:function(result){
            var dianqi="";
            result=JSON.parse(result); 
            dianqi=result[0].mount;
            $("#dianqi_index").append(dianqi);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});