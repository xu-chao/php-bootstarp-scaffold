$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../query_index_park.php",
        async:true,
        success:function(result){
            var park="";
            result=JSON.parse(result); 
            park=result[0].mount;
            $("#park_index").append(park);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});