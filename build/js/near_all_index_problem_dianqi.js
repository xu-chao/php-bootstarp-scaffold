$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../near_all_index_problem_dianqi.php",
        async:true,
        success:function(result){
            var near_dianqi="";
            result=JSON.parse(result); 
            near_dianqi=result[0].mount;
            $("#near_dianqi").append(near_dianqi);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});