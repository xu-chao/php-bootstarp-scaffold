$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../near_all_index_problem_yeya.php",
        async:true,
        success:function(result){
            var near_yeya="";
            result=JSON.parse(result); 
            near_yeya=result[0].mount;
            $("#near_yeya").append(near_yeya);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});