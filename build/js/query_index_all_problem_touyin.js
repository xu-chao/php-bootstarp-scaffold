$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../query_index_all_problem_touyin.php",
        async:true,
        success:function(result){
            var touyin="";
            result=JSON.parse(result); 
            touyin=result[0].mount;
            $("#touyin_index").append(touyin);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});