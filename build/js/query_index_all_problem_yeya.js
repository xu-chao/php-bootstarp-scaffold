$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../query_index_all_problem_yeya.php",
        async:true,
        success:function(result){
            var yeya="";
            result=JSON.parse(result); 
            yeya=result[0].mount;
            $("#yeya_index").append(yeya);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});