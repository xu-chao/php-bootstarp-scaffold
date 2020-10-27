$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../near_all_index_problem_touyin.php",
        async:true,
        success:function(result){
            var near_touyin="";
            result=JSON.parse(result); 
            near_touyin=result[0].mount;
            $("#near_touyin").append(near_touyin);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});