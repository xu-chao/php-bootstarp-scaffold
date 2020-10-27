$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../query_index_project.php",
        async:true,
        success:function(result){
            var project="";
            result=JSON.parse(result); 
            project=result[0].mount;
            $("#project_index").append(project);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});